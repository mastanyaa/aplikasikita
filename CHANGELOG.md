# 📜 Catatan Riwayat Rilis & Pembaruan (Changelog)

Dokumen ini mencatat seluruh riwayat pembaruan resmi **AplikasiKita** yang dipublikasikan pada kanal distribusi GitHub dan armada Mini PC.

Format penomoran versi mengikuti standar [Semantic Versioning](https://semver.org/lang/id/) (`MAJOR.MINOR.PATCH`).

---

## v3.1.8 — Implementasi Penuh Standar CKPN PSAK 71 (Three-Stage Model & SICR)
**Tanggal:** 3 November 2026

### Pembaruan Inti & Regulasi PSAK 71 / IFRS 9
- **Three-Stage Impairment Model PSAK 71:** Mengimplementasikan model penurunan nilai risiko kredit ekspektasi (Expected Credit Loss - ECL) tiga tahap:
  - **Stage 1 (Performing - Low Credit Risk):** Bucket 1 (DPD 0 / Lancar) & Bucket 2 (DPD 1-30 Non-Restrukturisasi) menggunakan model **12-Month ECL** (Tarif standar: Lancar 1.84%, SML-1 3.50%).
  - **Stage 2 (Underperforming - SICR):** Bucket 3 & 4 (DPD 31-90 Hari / SML 2-3) atau debitur DPD <= 30 hari dengan kriteria kenaikan risiko signifikan (*Significant Increase in Credit Risk / SICR*, status restrukturisasi atau terdampak bencana) menggunakan model **Lifetime ECL** (Tarif standar: Restrukturisasi 7.50%, SML-2 15.00%, SML-3 30.00%).
  - **Stage 3 (Non-Performing - Default):** Bucket 5 (DPD > 90 Hari / NPL Kol 3 Kurang Lancar, Kol 4 Diragukan, Kol 5 Macet) dengan **PD 100% / Lifetime ECL** (Tarif standar: KL 50.00%, D 75.00%, M 100.00%).
- **Eliminasi Anomali Formula Roll-Rate Usang:** Memperbaiki logika lama di mana kredit macet hanya dicadangkan 5.15% dan kredit diragukan 0.07%, kini selaras 100% dengan kaidah akuntansi perbankan PSAK 71 / IFRS 9.
- **Unifikasi Kalkulasi Terpusat (`Psak71CkpnService`):** Mengintegrasikan seluruh kalkulasi beban dan tarif cadangan risiko di dashboard, drilldown modal pemburukan, monitoring NPDD, jatuh tempo, matriks kolektibilitas, hingga profil debitur menjadi satu sumber kebenaran data tunggal (*single source of truth*).
- **Modernisasi Pengaturan Master Data Dashboard:** Memperbarui 8 parameter tarif loss rate PSAK 71 pada database dan formulir antarmuka pengaturan dengan kemampuan auto-save dan sinkronisasi real-time.
- **Pengayaan Informasi Kartu Profil Debitur:** Menambahkan indikator visual lencana staging, jenis model cadangan risiko (*12-Month vs Lifetime ECL*), dan persentase tarif CKPN aktif pada kartu risiko debitur.

---

## v3.1.7 — Penataan Responsif Multi-Screen, Restorasi Kuadran & Run-Off, Eliminasi Garis Col-Gap
**Tanggal:** 3 November 2026

### Fitur & Antarmuka
- **Responsif Proporsional Multi-Screen (1366px – 1920px):** Penataan kolom serempak 36 kolom pada tabel Baseline, Realtime, dan Delta dengan rasio persentase dinamis. Seluruh teks (Nama Mantri, Nominal OS jutaan, dan Badge Kuadran) tampil utuh tanpa terpotong dan garis pemisah kolom sejajar tegak lurus sempurna.
- **Restorasi Kolom Kuadran & Pewarnaan Asli:** Memulihkan badge Kuadran (*Extreme Low, Low, Mid, High*) beserta kode warna aslinya pada tabel Realtime.
- **Pemulihan Data Run-Off Mutasi Delta:** Menjamin data debitur dan baki debet Run-Off terisi akurat sesuai kalkulasi historis mutasi harian.
- **Pembersihan Celah Kolom (`col-gap`):** Menghilangkan garis border mengganggu pada pemisah antara Total dan SML serta antar-seksi tabel.
- **Harmonisasi Kontras PTP pada Seleksi Baris:** Warna teks nominal OS otomatis menyesuaikan kontras putih saat baris terseleksi aktif.

- **Pewarnaan Kategori Header Tabel (Lancar s/d Musiman):** Menerapkan palet warna pastel kontras dan terstandarisasi pada header kategori (Lancar, SML 1-3, KL, D, Macet, Total, SML, NPL, Bulanan, Musiman) guna meningkatkan kecepatan pembacaan data monitoring.

### Perbaikan & Keandalan
- **Interaktivitas Modal Debitur:** Memperbaiki fungsi klik pada kolom Potensi Real & Recovery menuju modal detail debitur dan modal profil debitur lengkap.

---

## v3.1.6 — Pembersihan Berkas Duplikat, Audit Dead Code & Penguatan Enkripsi Rilis
**Tanggal:** 3 November 2026

### Pembersihan Berkas & Optimasi
- **Audit & Pembersihan Berkas Duplikat:** Memindahkan berkas duplikat lama `resources/views/dashboard.blade.php`, berkas backup sementara (`.bak`, `.tmp`), serta controller/middleware yang tidak lagi aktif ke direktori arsip.
- **Audit Dead Code & Dependensi:** Memastikan 100% dari 18 controller aktif dan seluruh 36 view Blade terintegrasi secara fungsional dalam alur kerja sistem.

### Peningkatan & Dokumentasi
- **Dokumentasi Komprehensif Kode Master:** Melengkapi seluruh controller dan berkas registri rute dengan penjelasan fungsi teknis, parameter, dan alur bisnis secara rinci pada `project_aplikasikita`.
- **Penguatan Enkripsi Rilis Mandiri:** Menstandarkan seluruh berkas PHP, Blade, dan skrip pada rilis GitHub dan server Mini PC dalam enkripsi AES-256 tersamar tanpa metadata atau komentar apapun.
- **Proteksi Deteksi Perangkat Keras Flashdisk:** Pipeline build dan pencatatan riwayat wajib memverifikasi kehadiran fisik media flashdisk master (`E:\dev`) sebelum operasi diizinkan berjalan.

---

## v3.1.5 — Input Master Target Recovery DH & Harmonisasi Modal
**Tanggal:** 31 Oktober 2026

### Fitur Baru
- Form input terdedikasi "Target Recovery DH (Juta Rp)" dan "Posisi Riil Recovery DH (Juta Rp)" pada Modal Pengaturan Master Data Dashboard.
- Sinkronisasi otomatis ke tabel `setting_dashboard` dengan validasi auto-save dan konfirmasi visual.

### Peningkatan
- Perapian colspan dan tata letak kolom pada modal Nett Disbursement agar proporsional di seluruh resolusi layar.
- Standarisasi label "Tanggal Jatuh Tempo" pada ekspor Excel tagihan harian agar konsisten dengan tampilan tabel.
- Pencegahan kehilangan data run-off pelunasan tutup rekening: perhitungan penurunan OS kini memperhitungkan selisih baki debet hari sebelumnya.
- Audit menyeluruh keamanan dan konsistensi seluruh modul sebelum rilis distribusi.

### Perbaikan
- Koreksi modal pengaturan dashboard yang tidak menyimpan perubahan target RKA saat koneksi lambat.
- Perbaikan ekspor Excel yang memotong nama debitur panjang melebihi 50 karakter.
- Resolusi kesalahan format tanggal jatuh tempo pada zona waktu WIB yang bergeser 1 hari.

---

## v3.1.0 — Harmonisasi Presisi Penurunan OS & Penyelarasan PTP
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Harmonisasi presisi penurunan OS: seluruh modul (dashboard, tagihan, laporan WhatsApp) kini menggunakan formula kalkulasi tunggal yang terstandarisasi.
- Penyelarasan universal PTP: data janji bayar terintegrasi di seluruh tampilan (tabel tagihan, modal profil debitur, dan laporan harian).

### Peningkatan
- Standarisasi format mata uang pada seluruh halaman: konsisten menggunakan format "Rp X.XXX.XXX" tanpa desimal.
- Penambahan tooltip informatif pada sel tabel yang menampilkan rincian perhitungan saat kursor diarahkan.
- Peningkatan kecepatan ekspor Excel pada tabel tagihan besar (5000+ baris) hingga 60% lebih cepat.

### Perbaikan
- Koreksi selisih angka penurunan OS antara dashboard dan halaman tagihan yang disebabkan perbedaan zona waktu query.
- Perbaikan modal profil debitur yang gagal memuat data PTP saat diakses dari halaman pencarian berkas.

---

## v3.0.9 — Dedikasi Runtime & Pembersihan Menyeluruh
**Tanggal:** 30 Oktober 2026

### Peningkatan
- Multi-layer caching pada modul tagihan: pengambilan data berulang disajikan dari cache lokal tanpa query ulang ke database.
- Throttling eksekusi kalkulasi real-time untuk mencegah pemrosesan redundan pada interval pembaruan singkat.
- Dedikasi tunggal runtime PHP 8.4 untuk konsistensi eksekusi dan penghematan sumber daya.

### Perbaikan
- Pembersihan menyeluruh istilah internal dan label debug yang sebelumnya tampil pada antarmuka produksi.
- Koreksi penamaan variabel yang tidak konsisten pada controller tagihan dan dashboard.
- Resolusi peringatan *undefined variable* pada halaman pengaturan yang muncul sporadis.

---

## v3.0.8 — Optimasi Performa & Efek Visual Sel Tabel
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Efek visual *glow* 10 detik pada sel tabel yang baru diperbarui untuk menyoroti perubahan data terkini.
- Indikator perubahan real-time pada kartu KPI dashboard dengan animasi transisi halus.

### Peningkatan
- Optimasi query database untuk modul tagihan dan dashboard: waktu respons berkurang hingga 40%.
- Implementasi teknik *debouncing* pada filter pencarian untuk mengurangi beban permintaan berlebihan.
- Peningkatan responsivitas tabel data besar (1000+ baris) dengan virtualisasi baris tampilan.

### Perbaikan
- Koreksi efek glow yang sebelumnya tidak hilang setelah 10 detik pada browser tertentu.
- Perbaikan kalkulasi total footer tabel yang tidak diperbarui saat filter aktif.

---

## v3.0.7 — Antrean Cerdas & Interupsi Jalur Cepat VIP
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Sistem antrean cetak cerdas (*Smart Queue*): prioritas otomatis berdasarkan urgensi dan volume cetak struk tagihan.
- Mekanisme interupsi jalur cepat VIP: struk tagihan prioritas tinggi (debitur besar) dapat mendahului antrean reguler.

### Peningkatan
- Optimasi waktu cetak struk thermal POS58 dari rata-rata 3 detik menjadi di bawah 1.5 detik per lembar.
- Penambahan indikator status antrean cetak pada bilah navigasi atas (badge jumlah antrean aktif).

### Perbaikan
- Resolusi masalah cetak ganda yang terjadi saat tombol cetak ditekan berulang kali cepat.
- Koreksi format barcode pada struk yang terpotong pada margin kanan printer.

---

## v3.0.6 — Laporan Visual WhatsApp Proporsional & Pelacakan SML
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Laporan visual WhatsApp dengan tangkapan layar dashboard proporsional dan format pesan terstruktur.
- Pelacakan operasional SML: ringkasan harian kategori kualitas kredit per Mantri dikirim otomatis via WhatsApp.

### Peningkatan
- Kualitas tangkapan layar laporan ditingkatkan ke resolusi tinggi dengan rasio aspek konsisten.
- Penambahan ringkasan statistik (total debitur, total baki debet, persentase NPL) pada footer pesan laporan.

### Perbaikan
- Koreksi penjadwalan pengiriman laporan sesi ke-4 yang sebelumnya terlambat 15 menit.
- Perbaikan format angka pada pesan WhatsApp yang kehilangan pemisah ribuan.

---

## v3.0.5 — Widget Telemetri Melayang & Pemeliharaan Otomatis
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Widget telemetri melayang (*floating widget*) non-intrusif di pojok kanan bawah: menampilkan suhu CPU, penggunaan RAM, dan status penyimpanan secara real-time.
- Dua mode tampilan adaptif: mode mini pill (collapsed) dengan status dot berdenyut, dan mode panel diperluas dengan grafik mini.
- Endpoint API telemetri berlatensi rendah untuk pembaruan data setiap 10 detik.

### Peningkatan
- Otomatisasi pemeliharaan berkala: pembersihan cache kedaluwarsa, optimasi tabel database, dan rotasi log otomatis.
- Peningkatan efisiensi penggunaan memori pada modul dashboard melalui pemuatan data bertahap.

### Perbaikan
- Resolusi masalah widget yang menutupi tombol operasional pada resolusi layar tertentu.
- Koreksi format suhu yang sebelumnya tidak menampilkan satuan derajat Celsius dengan benar.

---

## v3.0.4 — Mesin PTP Tersinkronisasi & Integritas Finansial SML
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Mesin Janji Bayar (PTP) tersinkronisasi: pencatatan komitmen pembayaran debitur dengan tanggal jatuh tempo dan nominal terintegrasi langsung ke tabel tagihan.
- Sub-bucket SML (Surat Masalah Lainnya) dengan kalkulasi keuangan terpisah per kategori kualitas kredit.

### Peningkatan
- Presisi kalkulasi tunggakan pokok dan bunga hingga satuan rupiah tanpa pembulatan prematur.
- Penambahan kolom "Sisa Hari Jatuh Tempo" pada tabel tagihan harian untuk prioritas penagihan.

### Perbaikan
- Koreksi formula penurunan OS yang sebelumnya menghitung ganda pelunasan parsial.
- Perbaikan urutan pengurutan tabel SML yang tidak konsisten antara mode ascending dan descending.

---

## v3.0.3 — Optimasi Performa & Arsitektur Responsif
**Tanggal:** 30 Oktober 2026

### Peningkatan
- Optimasi kecepatan muat halaman dashboard melalui teknik *lazy-loading* komponen kartu KPI.
- Arsitektur responsif penuh: seluruh halaman utama (login, dashboard, cari berkas, scanner, tagihan) telah dioptimasi untuk tampilan tablet dan perangkat bergerak.
- Kompresi aset CSS dan JavaScript untuk mengurangi waktu muat awal.

### Perbaikan
- Koreksi tata letak sidebar yang tumpang tindih dengan konten utama pada layar berukuran kecil.
- Perbaikan ikon status layanan yang tidak memperbarui warna indikator secara tepat waktu.
- Resolusi masalah duplikasi entri pada tabel riwayat scan barcode harian.

---

## v3.0.2 — Sinkronisasi Dashboard & Optimasi Gateway
**Tanggal:** 30 Oktober 2026

### Fitur Baru
- Sinkronisasi data dashboard secara langsung (*live*) tanpa perlu muat ulang halaman.
- Endpoint API internal berlatensi rendah untuk pengambilan data portofolio.

### Peningkatan
- Optimasi query kalkulasi baki debet dan rasio NPL/LAR untuk respons sub-detik.
- Penyesuaian format angka rupiah pada seluruh kartu KPI menggunakan pemisah ribuan konsisten.
- Penataan ulang urutan kolom tabel debitur agar sesuai standar laporan operasional.

### Perbaikan
- Koreksi kalkulasi persentase rasio LAR yang sebelumnya menghasilkan pembulatan tidak akurat.
- Perbaikan tombol ekspor laporan yang tidak responsif pada layar resolusi rendah.

---

## v3.0.1 — Rilis Perdana Vanguard Core
**Tanggal:** 29 Oktober 2026 | **Codename:** Vanguard

### Fitur Baru
- Portal login multi-peran dengan *midnight blue glassmorphism* dan pemilih akun interaktif (Kaunit, Mantri, Arsip, CS, Supervisor, Admin).
- Dashboard monitoring portofolio: 8 kartu KPI utama (Outstanding, DPK, NPL, LAR, Realisasi Bulanan), matriks kuadran transisi 4-grid, dan grafik distribusi baki debet per Mantri.
- Modul pencarian berkas agunan multi-kriteria (Nomor Rekening, CIF, Nama Debitur, Nomor Agunan) dengan panel detail 360° dan peta lokasi fisik lemari.
- Scanner registrasi barcode berkas dengan deteksi otomatis, validasi agunan seketika, dan penempatan slot lemari otomatis.
- Manajemen berkas lunas putus: antrean serah terima agunan, form verifikasi, dan riwayat audit pencatatan.
- Pengaturan tata letak lemari & slot: visualisasi grid lemari/rak/boks, indikator kapasitas warna, dan audit cepat fisik.
- Tagihan harian Mantri: tabel dinamis 15 digit rekening terstandarisasi, kalkulasi penurunan OS akurat, dan cetak struk thermal POS58 USB.
- Pusat kontrol hardware: telemetri real-time (CPU, RAM, suhu, storage), panel kontrol layanan, dan manajemen daya.
- Keamanan jaringan LAN: konfigurasi antarmuka, whitelist IP nirkabel 3 slot, monitoring status jaringan.
- Impor data operasional: unggah CSV/Excel, validasi skema otomatis, ringkasan hasil impor, dan perlindungan ACID.
- Laporan otomatis WhatsApp 4 sesi operasional harian dengan tangkapan layar dashboard.
- Pembaruan otomatis sistem via repositori Git terpusat.

### Peningkatan
- Proteksi brute-force dan pembatasan subnet jaringan LAN pada halaman login.
- Unduh sertifikat SSL untuk browser internal LAN.
- Sidebar navigasi responsif dengan ikon dan label deskriptif.

---
