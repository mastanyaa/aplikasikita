package main

import (
	"context"
	"encoding/base64"
	"encoding/json"
	"fmt"
	"io"
	"net/http"
	"os"
	"os/signal"
	"strings"
	"sync"
	"syscall"

	"github.com/skip2/go-qrcode"
	"go.mau.fi/whatsmeow"
	"go.mau.fi/whatsmeow/proto/waE2E"
	"go.mau.fi/whatsmeow/store/sqlstore"
	"go.mau.fi/whatsmeow/types"
	waLog "go.mau.fi/whatsmeow/util/log"
	"google.golang.org/protobuf/proto"
	_ "modernc.org/sqlite"
)

var (
	client      *whatsmeow.Client
	container   *sqlstore.Container
	currentQR   string
	qrLock      sync.RWMutex
	clientMutex sync.Mutex
)

func setQR(code string) {
	qrLock.Lock()
	defer qrLock.Unlock()
	if code == "" {
		currentQR = ""
		return
	}
	png, err := qrcode.Encode(code, qrcode.Medium, 280)
	if err == nil {
		currentQR = "data:image/png;base64," + base64.StdEncoding.EncodeToString(png)
	}
}

func getQR() string {
	qrLock.RLock()
	defer qrLock.RUnlock()
	return currentQR
}

func startClient() error {
	clientMutex.Lock()
	defer clientMutex.Unlock()

	ctx := context.Background()
	deviceStore, err := container.GetFirstDevice(ctx)
	if err != nil {
		return err
	}

	clientLog := waLog.Stdout("Client", "ERROR", true)
	client = whatsmeow.NewClient(deviceStore, clientLog)

	if client.Store.ID == nil {
		qrChan, _ := client.GetQRChannel(ctx)
		err = client.Connect()
		if err != nil {
			return err
		}

		go func() {
			for evt := range qrChan {
				if evt.Event == "code" {
					setQR(evt.Code)
					fmt.Println("[WA-GATEWAY] QR Code diperbarui, siap di-scan dari web browser.")
				} else if evt.Event == "success" {
					setQR("")
					fmt.Println("[WA-GATEWAY] ✅ WhatsApp Berhasil Terhubung!")
				}
			}
		}()
	} else {
		err = client.Connect()
		if err != nil {
			return err
		}
		setQR("")
		fmt.Println("[WA-GATEWAY] ✅ WhatsApp Terhubung dengan sesi tersimpan!")
	}
	return nil
}

func main() {
	ctx := context.Background()
	dbLog := waLog.Stdout("Database", "ERROR", true)
	var err error
	container, err = sqlstore.New(ctx, "sqlite", "file:whatsapp.db?_pragma=foreign_keys(1)&_pragma=journal_mode(WAL)&_pragma=busy_timeout(5000)", dbLog)
	if err != nil {
		panic(err)
	}

	if err := startClient(); err != nil {
		panic(err)
	}

	// 1. Endpoint Status Koneksi (Digunakan oleh Modal Web Laravel)
	http.HandleFunc("/status", func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/json")
		isConnected := client != nil && client.IsConnected() && client.Store.ID != nil
		phone := ""
		name := ""
		if isConnected && client.Store.ID != nil {
			phone = client.Store.ID.User
			name = client.Store.PushName
		}
		json.NewEncoder(w).Encode(map[string]interface{}{
			"connected": isConnected,
			"phone":     phone,
			"name":      name,
		})
	})

	// 2. Endpoint Ambil Gambar QR Code (Base64) untuk Ditampilkan di Browser
	http.HandleFunc("/qr", func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/json")
		isConnected := client != nil && client.IsConnected() && client.Store.ID != nil
		if isConnected {
			json.NewEncoder(w).Encode(map[string]interface{}{
				"status": "connected",
			})
			return
		}

		qr := getQR()
		if qr == "" {
			json.NewEncoder(w).Encode(map[string]interface{}{
				"status":  "waiting",
				"message": "Menyiapkan QR Code...",
			})
			return
		}

		json.NewEncoder(w).Encode(map[string]interface{}{
			"status":    "scan",
			"qr_base64": qr,
		})
	})

	// 3. Endpoint Logout / Ganti Nomor WA (Dipanggil saat klik tombol merah di Web)
	http.HandleFunc("/logout", func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/json")
		if r.Method != http.MethodPost {
			http.Error(w, `{"error":"Method tidak diizinkan"}`, http.StatusMethodNotAllowed)
			return
		}

		bgCtx := context.Background()
		clientMutex.Lock()
		if client != nil {
			_ = client.Logout(bgCtx)
			client.Disconnect()
		}
		if container != nil {
			deviceStore, _ := container.GetFirstDevice(bgCtx)
			if deviceStore != nil {
				_ = deviceStore.Delete(bgCtx)
			}
		}
		clientMutex.Unlock()

		setQR("")

		go func() {
			_ = startClient()
		}()

		json.NewEncoder(w).Encode(map[string]interface{}{
			"status":  "success",
			"message": "Sesi WhatsApp berhasil diputus. Silakan scan QR baru di layar web.",
		})
	})

	// 4. Endpoint Ambil Daftar Grup WhatsApp (Untuk Pilihan Dropdown di Web)
	http.HandleFunc("/groups", func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/json")
		if client == nil || !client.IsConnected() {
			http.Error(w, `{"error":"WhatsApp belum terhubung"}`, http.StatusServiceUnavailable)
			return
		}

		groups, err := client.GetJoinedGroups(context.Background())
		if err != nil {
			http.Error(w, fmt.Sprintf(`{"error":"%s"}`, err.Error()), http.StatusInternalServerError)
			return
		}

		type GroupItem struct {
			JID  string `json:"jid"`
			Name string `json:"name"`
		}
		var list []GroupItem
		for _, g := range groups {
			list = append(list, GroupItem{JID: g.JID.String(), Name: g.Name})
		}
		json.NewEncoder(w).Encode(list)
	})

	// 5. Endpoint Kirim Laporan Gambar dari Laravel
	http.HandleFunc("/send", func(w http.ResponseWriter, r *http.Request) {
		w.Header().Set("Content-Type", "application/json")
		if r.Method != http.MethodPost {
			http.Error(w, `{"error":"Method tidak diizinkan"}`, http.StatusMethodNotAllowed)
			return
		}

		err := r.ParseMultipartForm(50 << 20)
		if err != nil {
			http.Error(w, `{"error":"Gagal membaca form data"}`, http.StatusBadRequest)
			return
		}

		target := strings.TrimSpace(r.FormValue("target"))
		caption := r.FormValue("caption")
		sendAs := strings.ToLower(strings.TrimSpace(r.FormValue("send_as")))
		if sendAs == "" {
			if r.FormValue("as_document") == "1" {
				sendAs = "document"
			} else {
				sendAs = "both" // DEFAULT: Kirim Foto visual langsung + Dokumen Asli HD bebas kompresi!
			}
		}

		file, header, err := r.FormFile("image")
		if err != nil {
			http.Error(w, `{"error":"File image wajib disertakan"}`, http.StatusBadRequest)
			return
		}
		defer file.Close()

		imgData, err := io.ReadAll(file)
		if err != nil {
			http.Error(w, `{"error":"Gagal membaca file gambar"}`, http.StatusInternalServerError)
			return
		}

		var recipient types.JID
		if strings.Contains(target, "@") {
			recipient, err = types.ParseJID(target)
		} else {
			recipient = types.NewJID(target, types.DefaultUserServer)
		}

		if err != nil {
			http.Error(w, `{"error":"Format target JID / nomor tidak valid"}`, http.StatusBadRequest)
			return
		}

		fileName := r.FormValue("filename")
		if fileName == "" && header != nil {
			fileName = header.Filename
		}
		if fileName == "" {
			fileName = "Laporan_AplikasiKita.png"
		}
		if !strings.HasSuffix(strings.ToLower(fileName), ".png") && !strings.HasSuffix(strings.ToLower(fileName), ".jpg") {
			fileName += ".png"
		}

		var sentErrors []string

		// 1. Kirim Foto Langsung (Untuk preview instan di chat)
		if sendAs == "image" || sendAs == "both" {
			uploadedImg, errImg := client.Upload(context.Background(), imgData, whatsmeow.MediaImage)
			if errImg == nil {
				imgMsg := &waE2E.Message{
					ImageMessage: &waE2E.ImageMessage{
						Caption:       proto.String(caption),
						Mimetype:      proto.String("image/png"),
						URL:           &uploadedImg.URL,
						DirectPath:    &uploadedImg.DirectPath,
						MediaKey:      uploadedImg.MediaKey,
						FileEncSHA256: uploadedImg.FileEncSHA256,
						FileSHA256:    uploadedImg.FileSHA256,
						FileLength:    &uploadedImg.FileLength,
					},
				}
				_, errSend := client.SendMessage(context.Background(), recipient, imgMsg)
				if errSend != nil {
					sentErrors = append(sentErrors, "gagal kirim image: "+errSend.Error())
				}
			} else {
				sentErrors = append(sentErrors, "gagal upload image: "+errImg.Error())
			}
		}

		// 2. Kirim Dokumen Asli HD (100% BEBAS KOMPRESI SERVER WA, UKURAN BESAR & TAJAM)
		if sendAs == "document" || sendAs == "both" {
			uploadedDoc, errDoc := client.Upload(context.Background(), imgData, whatsmeow.MediaDocument)
			if errDoc == nil {
				docCaption := caption + " [File Asli HD]"
				docMsg := &waE2E.Message{
					DocumentMessage: &waE2E.DocumentMessage{
						Title:         proto.String(fileName),
						FileName:      proto.String(fileName),
						Mimetype:      proto.String("image/png"),
						Caption:       proto.String(docCaption),
						URL:           &uploadedDoc.URL,
						DirectPath:    &uploadedDoc.DirectPath,
						MediaKey:      uploadedDoc.MediaKey,
						FileEncSHA256: uploadedDoc.FileEncSHA256,
						FileSHA256:    uploadedDoc.FileSHA256,
						FileLength:    &uploadedDoc.FileLength,
					},
				}
				_, errSendDoc := client.SendMessage(context.Background(), recipient, docMsg)
				if errSendDoc != nil {
					sentErrors = append(sentErrors, "gagal kirim dokumen: "+errSendDoc.Error())
				}
			} else {
				sentErrors = append(sentErrors, "gagal upload dokumen: "+errDoc.Error())
			}
		}

		if len(sentErrors) > 0 && sendAs != "both" {
			http.Error(w, fmt.Sprintf(`{"error":"%s"}`, strings.Join(sentErrors, "; ")), http.StatusInternalServerError)
			return
		}

		w.Write([]byte(`{"status":"success","message":"Laporan gambar dan dokumen asli berhasil terkirim!"}`))
	})

	go func() {
		fmt.Println("🚀 Service WhatsApp Gateway aktif di http://127.0.0.1:3000")
		if err := http.ListenAndServe("127.0.0.1:3000", nil); err != nil {
			panic(err)
		}
	}()

	c := make(chan os.Signal, 1)
	signal.Notify(c, os.Interrupt, syscall.SIGTERM)
	<-c

	if client != nil {
		client.Disconnect()
	}
	fmt.Println("Layanan WhatsApp dihentikan.")
}
