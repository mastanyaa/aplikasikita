# 📘 PANDUAN STANDAR OPERASIONAL PROSEDUR & CARA KERJA SISTEM APLIKASIKITA
**Platform Tata Kelola Operasional, Monitoring Kredit Portofolio & Tata Arsip Digital Khazanah Unit**  
*Versi Dokumen:* `SOP-AK-v3.1.12` | *Edisi:* November 2026 | *Klasifikasi:* Dokumen Operasional Internal Unit Kerja

---

## 📑 DAFTAR ISI
1. [BAB I — PENDAHULUAN & ARSITEKTUR SISTEM](#bab-i--pendahuluan--arsitektur-sistem)
2. [BAB II — MATRIKS HAK AKSES & PERAN PENGGUNA](#bab-ii--matriks-hak-akses--peran-pengguna)
3. [BAB III — SOP PENCARIAN, PEMINJAMAN & PENGEMBALIAN BERKAS (CARIBERKAS)](#bab-iii--sop-pencarian-peminjaman--pengembalian-berkas-cariberkas)
4. [BAB IV — SOP PEMINDAIAN BARCODE & REGISTRASI LEMARI KHAZANAH (SCANNER)](#bab-iv--sop-pemindaian-barcode--registrasi-lemari-khazanah-scanner)
5. [BAB V — SOP TATA KELOLA DOKUMEN LUNAS PUTUS](#bab-v--sop-tata-kelola-dokumen-lunas-putus)
6. [BAB VI — SOP MONITORING PORTOFOLIO KREDIT & PENAGIHAN HARIAN](#bab-vi--sop-monitoring-portofolio-kredit--penagihan-harian)
7. [BAB VII — SOP AUDIT SPASIAL LEMARI & STOCK OPNAME KHAZANAH](#bab-vii--sop-audit-spasial-lemari--stock-opname-khazanah)
8. [BAB VIII — SOP KONTROL SERVER MINI PC, PENCADANGAN CLOUD & KEAMANAN LAN](#bab-viii--sop-kontrol-server-mini-pc-pencadangan-cloud--keamanan-lan)
9. [BAB IX — PANDUAN PENANGANAN KENDALA (TROUBLESHOOTING FAQ)](#bab-ix--panduan-penanganan-kendala-troubleshooting-faq)

---

## BAB I — PENDAHULUAN & ARSITEKTUR SISTEM

### 1.1 Latar Belakang
Platform **AplikasiKita** dibangun untuk menjawab kebutuhan modernisasi tata kelola operasional kantor unit kerja perbankan. Sistem ini menggabungkan manajemen portofolio pinjaman, penataan berkas fisik jaminan di ruang khazanah, digitalisasi arsip pinjaman (Brimen), pencetakan thermal POS58 USB otomatis, dan pemantauan infrastruktur server dalam satu ekosistem terpadu.

### 1.2 Filosofi *Offline-First*
Sistem beroperasi langsung di atas perangkat **Mini PC Linux** lokal di setiap kantor unit kerja. Pendekatan ini menjamin:
- **Nol Latensi Publik:** Akses cepat instan melalui jaringan kabel LAN / Wi-Fi internal unit kerja tanpa terpengaruh gangguan jaringan WAN/Internet.
- **Kemandirian Operasional Penuh:** Kantor unit tetap dapat melayani nasabah, memproses pinjaman, menata arsip, dan mencetak dokumen saat koneksi eksternal terputus.
- **Keamanan Data Maksimal:** Kredensial dan data nasabah tersimpan di server lokal unit dengan proteksi enkripsi AES-256 dan pembatasan subnet IP.

---

## BAB II — MATRIKS HAK AKSES & PERAN PENGGUNA

Sistem menerapkan prinsip *Role-Based Access Control* (RBAC) dengan pemisahan tugas (*Segregation of Duties*):

| Peran Pengguna | Kode Akun | Ruang Lingkup Otoritas | Modul Utama yang Diakses |
| :--- | :---: | :--- | :--- |
| **Kepala Unit** | `kaunit` | Pengawasan manajerial menyeluruh, persetujuan pembukaan blokir, audit portofolio, dan evaluasi KPI kredit. | Dashboard Eksekutif, Modal Detail Debitur, Tagihan Harian, Monitoring Khazanah. |
| **Petugas Arsip Digital** | `brimen` | Pengelolaan dokumen fisik & digital, pemindaian lembar berkas, penataan slot lemari khazanah, mutasi peminjaman berkas. | Cari Berkas, Scanner Registrasi, Monitoring Lemari, Dokumen Lunas Putus. |
| **Mantri / AO** | `mantri` | Pengelolaan nasabah kelolaan, eksekusi penagihan lapangan, permohonan pinjam berkas untuk restrukturisasi/klaim. | Tagihan Harian, Permintaan Pinjam Berkas, Dashboard Kinerja Mandiri. |
| **Customer Service** | `cs` | Verifikasi dokumen nasabah lunas, permohonan pinjam berkas untuk penerbitan surat keterangan lunas/klaim. | Cari Berkas, Peminjaman Berkas, Dokumen Lunas Putus. |
| **Supervisor Operasional** | `sol` | Pengawasan fisik ruang khazanah, verifikasi penyerahan agunan lunas putus ke nasabah, stock opname fisik berkas. | Cari Berkas, Monitoring Lemari, Dokumen Lunas Putus, Laporan Harian. |
| **Administrator Sistem** | `admin` | Pengelolaan infrastruktur Mini PC, pemeliharaan basis data, manajemen jaringan firewall, dan pencadangan Google Drive. | Pengaturan Server, Keamanan Jaringan, Impor Data Harian, Pembaruan Sistem Git. |

---

## BAB III — SOP PENCARIAN, PEMINJAMAN & PENGEMBALIAN BERKAS (CARIBERKAS)

Modul **Cari Berkas (`/cariberkas`)** adalah instrumen utama untuk melacak keberadaan fisik dokumen kredit dan sertifikat jaminan di ruang khazanah unit kerja.

```
[Ketik Nomor Rekening / Nama Debitur]
                  │
                  ▼
         [Tabel Hasil Pencarian]
                  │
                  ▼
         [Panel Inspektur 360°]
                  │
       ┌──────────┴──────────┐
       ▼                     ▼
[Posisi: LEMARI]      [Posisi: DIPINJAM]
       │                     │
  (Double Click)        (Double Click)
       │                     │
       ▼                     ▼
[Modal Otorisasi      [Modal Status Pinjam
  Pengambilan]          & SLA Durasi]
       │                     │
       ▼                     ▼
[Pilih Peminjam       [Klik 'KEMBALIKAN
 & Alasan Pinjam]        KE LEMARI']
       │                     │
       ▼                     ▼
[Cetak Bukti Struk    [Dokumen Kembali
  Thermal POS58]       ke Slot Asal Lemari]
```

### 3.1 Prosedur Pencarian Berkas
1. Masuk ke menu **Cari Berkas** pada navigasi utama.
2. Ketik minimal **5 digit Nomor Rekening** atau **3 huruf Nama Debitur** pada bilah pencarian.
3. Klik baris debitur yang sesuai pada tabel hasil pencarian.
4. Perhatikan **Panel Inspektur di sisi kanan**:
   - **Label Berkas:** Menampilkan koordinat lemari berkas (contoh: `I-A-1-2`) beserta status fisiknya (`LEMARI`, `MANTRI`, `CS`, `HILANG`, atau `LUNAS PUTUS`).
   - **Label Agunan:** Menampilkan koordinat boks agunan (contoh: `II-C-2-154`) beserta status fisiknya.
   - **Rincian Pinjaman:** Plafond, Tanggal Realisasi, Jatuh Tempo, Mantri Pengelola, dan Segmen Kredit.
   - **Detail Agunan:** Jenis jaminan (SHM/BPKB), nomor sertifikat, atas nama pemilik, dan luas/nopol.

### 3.2 Prosedur Peminjaman Dokumen Fisik (Keluar dari Lemari)
1. Lakukan *double click* pada baris debitur yang berstatus **`LEMARI`**.
2. Sistem akan membuka **Modal Otorisasi Pengambilan Dokumen**.
3. Pilih identitas peminjam pada menu *Role Peminjam* (Mantri, CS, SOL, Kaunit, Auditor).
4. Pilih alasan peminjaman dokumen (Penagihan, Restrukturisasi, Klaim Asuransi, Pengecekan Fisik, atau Keperluan Audit).
5. Tentukan jenis dokumen yang diambil:
   - **`AMBIL BERKAS SAJA`**: Mengeluarkan map berkas administrasi kredit, agunan tetap di lemari.
   - **`AMBIL AGUNAN SAJA`**: Mengeluarkan sertifikat jaminan fisik, berkas administrasi tetap di lemari.
   - **`AMBIL KEDUANYA`**: Mengeluarkan seluruh bundel berkas dan agunan sekaligus.
6. Sistem secara otomatis mencetak **Lembar Tanda Terima Peminjaman** pada printer thermal USB POS58 sebagai bukti mutasi fisik resmi.

### 3.3 Prosedur Pengembalian Dokumen Fisik (Kembali ke Lemari)
1. Lakukan pencarian rekening debitur yang sedang dipinjam.
2. Lakukan *double click* pada baris debitur yang berstatus dipinjam.
3. Sistem akan membuka **Modal Status Peminjaman Dokumen** yang menampilkan:
   - Nama petugas peminjam.
   - Waktu peminjaman dan hitungan durasi hari kerja (*SLA counter*).
4. Klik tombol **`KEMBALIKAN KE LEMARI`**.
5. Sistem mengonfirmasi bahwa dokumen telah kembali secara fisik ke koordinat rak/boks lemari semula dan memperbarui status menjadi **`LEMARI`**.

---

## BAB IV — SOP PEMINDAIAN BARCODE & REGISTRASI LEMARI KHAZANAH (SCANNER)

Modul **Scanner (`/scanner`)** dirancang untuk alur kerja cepat penataan dokumen baru menggunakan pemindai barcode USB.

```
       [Pindai Barcode Rekening (15 Digit)]
                         │
                         ▼
             [Pengecekan Status Scan]
                         │
           ┌─────────────┴─────────────┐
           ▼                           ▼
[Belum Pernah di-Scan]       [Sudah Selesai di-Scan]
           │                           │
           ▼                           ▼
[Buka Modal Scanner Live]    [Buka Modal Registrasi Lemari]
           │                           │
           ▼                           ▼
[Pindai Lembar Dokumen       [Pilih Opsi Slot Penempatan:
 (SPH, SP, KTP, Agunan)]      - Opsi A: Slot Eksisting
           │                  - Opsi B: Rekomendasi Sistem
           ▼                  - Opsi C: Pilih Manual Slot]
[Sheet Counter Selesai                 │
 & Dokumen Terdaftar]                  ▼
                             [Verifikasi Detail Agunan
                              (SHM/BPKB, HT, Nilai)]
                                       │
                                       ▼
                             [Klik 'SIMPAN & CETAK LABEL']
                                       │
                                       ▼
                             [Cetak Label Barcode Thermal]
```

### 4.1 Pemindaian Dokumen Baru (*Unscanned Record*)
1. Posisikan kursor pada kolom pemindaian barcode `/scanner`.
2. Arahkan barcode scanner pada stiker nomor rekening debitur atau ketik 15 digit nomor rekening.
3. Jika debitur belum pernah dipindai, sistem otomatis membuka **Modal Scanner Pemindaian Live**:
   - Memeriksa konektivitas modul pemindai lokal.
   - Menghitung mundur sensor pengumpan lembar (*feeder auto-sensor*).
   - Menampilkan manifes kelengkapan lembar: SPH, Surat Pengakuan Hutang, KTP Pemohon & Pasangan, Kartu Keluarga, dan Dokumen Agunan.
4. Setelah seluruh lembar fisik masuk ke mesin scanner dan tercatat di folder unit, klik tombol selesai untuk menyimpan data pindaian.

### 4.2 Registrasi Koordinat Lemari & Boks Khazanah (*Scanned Record*)
1. Masukkan nomor rekening debitur yang status pindainya telah berhasil.
2. Sistem secara otomatis membuka **Modal Registrasi & Penataan Lemari**:
   - **Opsi A (Slot Eksisting):** Dipilih jika debitur suplesi/perpanjangan dan berkas lamanya sudah memiliki slot permanen.
   - **Opsi B (Rekomendasi Sistem):** Sistem secara cerdas mencarikan boks kosong terdekat dengan tingkat keterisian optimal.
   - **Opsi C (Pilihan Manual):** Petugas menentukan sendiri Ruangan Khazanah, Lemari, Nomor Rak, dan Nomor Urut Boks.
3. **Perekaman Spesifikasi Agunan:**
   - Verifikasi daftar agunan yang tertera pada tabel.
   - Jika ada agunan tambahan, klik **`+ Tambah Agunan`** untuk membuka sub-modal input jaminan:
     - Pilih *chip* tipe jaminan: `SHM`, `SHGB`, `BPKB`, `AJB`, dll.
     - Isi nomor sertifikat/BPKB, nama pemilik pada sertifikat, luas tanah/nomor polisi, dan lokasi agunan.
     - Cantumkan nomor akta Hak Tanggungan (HT) dan nominal Nilai Tanggungan jika dibebani HT.
4. Klik tombol **`SIMPAN & CETAK LABEL THERMAL`**:
   - Data koordinat fisik lemari tersimpan di database unit.
   - Printer thermal POS58 USB otomatis mencetak stiker barcode label berkas untuk ditempelkan pada map fisik arsip.

---

## BAB V — SOP TATA KELOLA DOKUMEN LUNAS PUTUS

Modul **Dokumen Lunas Putus (`/dokumen/lunas-putus`)** mengatur keamanan pengembalian agunan asli kepada debitur yang pinjamannya telah selesai.

### 5.1 Prinsip Verifikasi Lunas Putus vs Real Kembali
* **LUNAS PUTUS:** Debitur yang telah menyelesaikan pinjamannya dan **tidak memiliki rekening pinjaman aktif lain** pada CIF yang bersangkutan di data nominatif harian (`data_lw321harian`). Dokumen agunan fisik berhak diambil oleh debitur.
* **REAL KEMBALI:** Debitur yang fasilitas pinjaman lamanya telah lunas namun CIF-nya **terdaftar kembali memiliki pinjaman aktif baru** (suplesi / realisasi baru). Dokumen agunan fisik **wajib dipertahankan di lemari aktif** sebagai jaminan fasilitas berjalan.

### 5.2 Prosedur Penyerahan Agunan Fisik ke Nasabah
1. Masuk ke menu **Dokumen Lunas Putus**.
2. Cari nama nasabah pada daftar antrean berkas lunas.
3. Ambil map berkas fisik dari lemari khazanah.
4. Buka modal serah terima dokumen:
   - Verifikasi keaslian dokumen agunan fisik bersama nasabah (cek nomor SHM/BPKB dan nama pemilik).
   - Masukkan identitas pengambil (Debitur Asli / Kuasa Ahli Waris berdokumen lengkap).
   - Ambil tanda tangan digital / bukti fisik penyerahan.
5. Klik **`VALIDASI PENYERAHAN AGUNAN`**:
   - Status berkas berpindah ke rak arsip lunas putus.
   - Riwayat audit pencatatan tanggal, jam penyerahan, dan identitas petugas tersimpan permanen.

---

## BAB VI — SOP MONITORING PORTOFOLIO KREDIT & PENAGIHAN HARIAN

### 6.1 Monitoring Portofolio & Kuadran Risiko (`/dashboard`)
1. Buka halaman **Dashboard Monitoring Portofolio**.
2. Pantau **8 Kartu KPI Utama**:
   - *Total OS:* Total baki debet berjalan kantor unit.
   - *DPK:* Total simpanan tabungan dan giro.
   - *NPL:* Persentase kredit bermasalah (Kolektibilitas 3, 4, 5).
   - *LAR:* Kredit dalam perhatian khusus + NPL + Restrukturisasi.
   - *Realisasi & Run-Off:* Perbandingan ekspansi baki debet terhadap penurunan pinjaman jatuh tempo.
3. Analisis **Matriks Kuadran Transisi Portofolio**:
   - *Kuadran Extreme Low / Low:* Debitur berkinerja lancar dengan kepatuhan tinggi.
   - *Kuadran Mid / High:* Debitur berpotensi pemburukan atau memerlukan restrukturisasi proaktif.
4. Klik sel mana pun pada tabel atau kartu KPI untuk membuka **Modal Universal Detail Debitur**:
   - Manfaatkan bilah **Filter Cepat** (KUR/Kupedes, Bulanan/Musiman, Belum Bayar, Kolek 1-5).
   - Beralih ke tab **Proyeksi Esok Hari (H+1)** untuk memetakan jadwal tagihan dan potensi penurunan baki debet esok hari.
   - Ekspor data hasil filter ke format Excel melalui tombol **`Unduh Excel`**.

### 6.2 Eksekusi Tagihan Harian Mantri (`/tagihan`)
1. Setiap pagi pasca-sinkronisasi data harian, Mantri membuka menu **Tagihan Harian**.
2. Pilih nama Mantri pengelola dan desa binaan pada dropdown filter.
3. Periksa daftar debitur yang memiliki kewajiban tagihan hari ini:
   - Identifikasi debitur belum bayar, nominal tunggakan pokok, dan tunggakan bunga.
4. Klik ikon **`Cetak Struk Tagihan`** untuk mencetak struk tagihan kasir thermal POS58 USB sebelum berangkat kunjungan lapangan.
5. Pantau realisasi pembayaran harian secara *real-time* saat debitur melakukan setoran melalui teller atau agen bank.

---

## BAB VII — SOP AUDIT SPASIAL LEMARI & STOCK OPNAME KHAZANAH

Modul **Monitoring Lemari (`/monitoring-lemari`)** berfungsi sebagai sarana audit fisik ruang khazanah unit.

### 7.1 Pemantauan Tingkat Keterisian (*Fill Rate*)
- Buka menu **Monitoring Lemari**.
- Tinjau visualisasi grid lemari khazanah:
  - **Indikator Hijau:** Boks memiliki kapasitas longgar (tersedia untuk penempatan berkas baru).
  - **Indikator Kuning:** Boks terisi lebih dari 80% (mendekati batas muat).
  - **Indikator Merah:** Boks terisi 100% penuh (tidak boleh ditambah berkas lagi).

### 7.2 Pelaksanaan Stock Opname Fisik
1. Supervisor Layanan (SOL) atau Petugas Brimen melakukan stock opname periodik (minimal 1 bulan sekali).
2. Cocokkan jumlah map fisik di dalam boks dengan daftar rekening yang tertera di sistem.
3. Jika ditemukan berkas yang tidak berada di tempatnya, periksa statusnya di menu **Cari Berkas**:
   - Pastikan apakah sedang berstatus dipinjam (cek nama peminjam dan SLA pinjam).
   - Jika tidak tercatat di daftar pinjam, segera lakukan penelusuran fisik dan update status opname.

---

## BAB VIII — SOP KONTROL SERVER MINI PC, PENCADANGAN CLOUD & KEAMANAN LAN

Modul **Pengaturan Server (`/pengaturan/server`)** didedikasikan bagi Administrator dan Kepala Unit untuk menjaga reliabilitas hardware Mini PC.

### 8.1 Telemetri Kesehatan Hardware Mini PC
- **Suhu CPU:** Suhu operasional normal berada di kisaran 40°C – 65°C. Jika suhu melebihi 75°C, pastikan sirkulasi udara di ruang server kantor unit lancar dan bersihkan ventilasi Mini PC.
- **Konsumsi RAM:** Kapasitas RAM 2 GB – 4 GB harus dijaga dengan tingkat utilisasi di bawah 85%. Sistem dilengkapi optimasi engine otomatis yang membersihkan cache memori setiap siklus rilis.
- **Penyimpanan Storage:** Pastikan sisa ruang disk internal eMMC/SSD di atas 1 GB. Log transaksi lama dan berkas laporan sementara otomatis dibersihkan secara berkala.

### 8.2 Otomatisasi Pencadangan Cloud Google Drive
1. Sistem menjalankan modul pencadangan basis data dan dokumen digital terenkripsi ke Google Drive unit kerja setiap hari.
2. Status kuota Google Drive (terpakai vs total kapasitas) terpantau langsung pada panel server.
3. Jika diperlukan pencadangan manual sebelum pemeliharaan, klik tombol **`Cadangkan Sekarang`**.

### 8.3 Keamanan Perimeter Jaringan LAN & Whitelist Wi-Fi
- **Antarmuka Ganda Terisolasi:**
  - Port Ethernet LAN kabel dialokasikan untuk operasional reguler (Teller, CS, PC Kerja).
  - Jaringan nirkabel (Wi-Fi) diisolasi dengan proteksi **Whitelist Maksimal 3 Alamat IP Terdaftar**. Hanya perangkat terpercaya Kepala Unit dan Administrator yang dapat mengakses sistem via Wi-Fi.
- **Mitigasi Serangan:** Sistem otomatis memblokir upaya akses (*brute-force lockout*) di luar subnet resmi unit kerja.

---

## BAB IX — PANDUAN PENANGANAN KENDALA (TROUBLESHOOTING FAQ)

| Gejala Kendala | Kemungkinan Penyebab | Langkah Penanganan Terstandarisasi |
| :--- | :--- | :--- |
| **Printer Thermal POS58 tidak merespons cetak.** | Kabel USB printer longgar atau port `/dev/usb/lp0` belum terdeteksi sistem. | 1. Periksa kabel USB dan lampu indikator printer.<br>2. Masuk ke `/pengaturan/server?tab=server`, periksa status **CUPS Daemon**.<br>3. Cabut dan colokkan kembali kabel USB printer, lalu lakukan tes cetak ulang. |
| **Data baki debet hari ini belum terbarui.** | Berkas nominatif harian belum diunggah ke sistem. | 1. Masuk ke menu `/import`.<br>2. Unggah berkas nominatif harian terbaru (`data_lw321harian`).<br>3. Tunggu hingga proses validasi integritas database selesai dan tampil notifikasi sukses. |
| **Pesan *"Akses Dibatasi oleh Keamanan Jaringan"* saat login.** | Perangkat mengakses melalui alamat IP di luar subnet resmi atau IP nirkabel belum didaftarkan di whitelist. | 1. Gunakan komputer unit yang terhubung kabel LAN resmi.<br>2. Jika menggunakan laptop Kaunit melalui Wi-Fi, minta Administrator mendaftarkan IP laptop pada menu `/pengaturan/server?tab=security`. |
| **Tampilan data modal debitur terasa lambat.** | Cache sementara browser atau framework Laravel menumpuk. | 1. Tekan tombol `Ctrl + Shift + R` pada browser untuk membersihkan cache lokal.<br>2. Pada server, jalankan perintah rilis standar yang otomatis mengeksekusi `php artisan optimize:clear`. |

---

*Disahkan untuk Implementasi Operasional Seluruh Kantor Unit Kerja.*  
**Tim Pengembang & Tata Kelola Operasional — AplikasiKita 2026**
