<?php







return [



    /*



    |--------------------------------------------------------------------------



    | Versi Aplikasi APLIKASIKITA



    |--------------------------------------------------------------------------



    | Format Semantic Versioning: MAJOR.MINOR.PATCH



    | Format Tag Rilis: AplikasiKita-v{MAJOR}.{MINOR}.{PATCH}



    */



    'version'      => env('APP_VERSION', '3.2.5'),



    'codename'     => 'Vanguard',



    'build'        => env('APP_BUILD', '20261104'),



    'release_date' => '2026-11-04',



    'min_php'      => '8.2.0',



    'default_uker' => env('APP_UKER', 'UNIT KERJA'),







    /*



    |--------------------------------------------------------------------------



    | Catatan Rilis & Riwayat Pembaruan (Changelog)



    |--------------------------------------------------------------------------



    */



    'changelog' => [
        '3.2.5' => [
            'date'     => '2026-11-04',
            'title'    => 'Implementasi Modul Riwayat Tutup Kas LW321 Lengkap dengan Visualisasi Kurva Tren & Eliminasi IP Telemetri',
            'changes'  => [
                'Modul Mandiri Riwayat Tutup Kas (/riwayat): Menyimpan dan menyajikan data resmi hasil olahan dashboard pasca-penutupan kas harian (EOD H-1) dengan arsitektur terpisah dari import data.',
                'Visualisasi Kurva & Laporan Lengkap: Menghadirkan 3 grafik interaktif Chart.js offline (Kurva Tren Baki Debet, Kurva Dual-Axis Kualitas Kredit NPL & DPK, dan Diagram Batang Net Delta Pertumbuhan Harian) serta modal drilldown rincian per Mantri.',
                'Penyelarasan Tanggal Posisi LW321 di Header Dashboard: Mengoreksi tampilan label posisi tanggal berkas LW321 menjadi tanggal resmi penutupan kas kemarin (03/11/2026) secara presisi tanpa mengubah nilai periode operasional harian.',
                'Eliminasi IP Server pada Telemetri: Menghapus pencantuman alamat IP lokal server pada modal telemetri demi privasi dan keamanan infrastruktur.',
            ],
        ],
        '3.2.4' => [
            'date'     => '2026-11-04',
            'title'    => 'Integrasi Telemetri Hardware Mini PC di Header Dashboard dan Eliminasi Total Fitur Audit Ticker',
            'changes'  => [
                'Telemetri Header Mini PC: Menampilkan metrik kesehatan server lokal (Suhu SOC CPU, Beban Load, RAM Bebas, dan Status Online) di header navbar khusus halaman Dashboard secara realtime.',
                'Eliminasi Total Fitur Audit: Menghapus modul ticker dan service audit portofolio dari seluruh sistem agar bilah navigasi bersih dan terfokus.',
            ],
        ],

        '3.2.3' => [

            'date'     => '2026-11-04',

            'title'    => 'Pengkhususan Pencarian Dokumen Fisik Agunan dan Sanitasi Menyeluruh Informasi Publik',

            'changes'  => [

                'Pengkhususan Pencarian Dokumen Agunan (/cariberkas/cari-agunan): Menata pencarian dokumen fisik agunan secara eksklusif hanya pada Nomor Agunan (SHM, BPKB, AJB, dll.), Nama Pemilik Dokumen Agunan (Atas Nama), Luas Tanah, dan Nomor Polisi kendaraan. Modul ini tidak lagi mencari berdasarkan nama debitur maupun nomor rekening dari tabel utama.',

                'Sanitasi Penuh Seluruh Catatan Rilis & GitHub: Seluruh dokumen rilis publik, changelog, dan metadata disanitasi secara ketat dari pencantuman nama nasabah, nomor rekening spesifik, maupun data sensitif operasional perbankan.',

                'Optimalisasi Ambang Batas Pencarian Dokumen Agunan: Mendukung pencarian nomor dokumen fisik agunan mulai dari minimal 3 karakter (angka maupun teks) dengan akurasi substring instan tanpa toleransi typo liar.',

            ],

        ],

        '3.2.2' => [

            'date'     => '2026-11-04',

            'title'    => 'Peningkatan Presisi Pencarian Nama & Rekening Multi-Token Tanpa Hasil Tidak Relevan',

            'changes'  => [

                'Pencarian Nama Presisi Multi-Token AND: Mengeliminasi hasil pencarian tidak relevan dari toleransi typo liar. Nama debitur dan nama pemilik dokumen agunan kini wajib memuat frase kata atau seluruh token kata yang dicari.',

                'Prioritas Frase Eksak: Mengurutkan hasil pencarian nama yang memuat frase eksak di urutan teratas secara otomatis sehingga petugas tidak perlu lagi memeriksa satu per satu.',

                'Dukungan Substring Rekening Minimal 5 Digit & Teks Minimal 3 Huruf: Menjamin seluruh input pencarian rekening dapat mendeteksi potongan nomor rekening minimal 5 angka dan input teks minimal 3 huruf secara konsisten.',

            ],

        ],

        '3.1.12' => [

            'date'     => '2026-11-03',

            'title'    => 'Standardisasi Penentuan Status Pelunasan Debitur Berbasis Verifikasi CIF Murni pada Data Harian (Real Kembali vs Lunas Putus)',

            'changes'  => [

                'Verifikasi CIF Murni (Zero False Real Kembali): Mengeliminasi pencocokan nama debitur pada pengecekan status pelunasan pinjaman selesai/maju dan beralih penuh ke verifikasi CIF Customer secara presisi.',

                'Akurasi Status Lunas Putus & Real Kembali: Debitur pelunasan hanya berstatus REAL KEMBALI jika nomor CIF-nya terdaftar kembali memiliki pinjaman aktif di data nominatif harian, jika tidak maka berstatus LUNAS PUTUS.',

                'Sinkronisasi KPI Modal & Ekspor Excel: Menyelaraskan kartu KPI modal debitur dan pengelompokan ekspor Excel agar konsisten dengan status pelunasan CIF murni.',

            ],

        ],

        '3.1.11' => [

            'date'     => '2026-11-03',

            'title'    => 'Eliminasi Duplikasi Chip Filter Pola Angsuran (Bulanan/Musiman) dan Proteksi Deduplikasi Filter Modal Debitur',

            'changes'  => [

                'Pembersihan Chip Ganda: Menghilangkan redundansi penambahan chip filter Bulanan dan Musiman pada kategori monitoring modal debitur.',

                'Proteksi Deduplikasi Unik: Menerapkan mekanisme deduplikasi berbasis Set key pada renderQuickFilterChips untuk menjamin tidak ada chip ganda yang muncul.',

            ],

        ],

        '3.1.10' => [

            'date'     => '2026-11-03',

            'title'    => 'Perbaikan Interaktivitas Matriks Pergeseran Kolektibilitas, Isolasi Kunci Cache Sel, dan Kalkulasi Ulang Otomatis KPI Modal terhadap Filter',

            'changes'  => [

                'Isolasi Kunci Cache Modal Antar-Sel: Mengeliminasi tumpang-tindih kunci cache global pada pemanggilan modal dengan parameter khusus sehingga setiap sel matriks pergeseran kolek memuat data yang presisi dan tidak terkunci pada sel pertama.',

                'Interaktivitas Menyeluruh Tabel Pergeseran: Menjadikan kolom baseline dan baris total pergeseran kolek dapat diklik langsung untuk menampilkan rincian debitur terkait.',

                'Kalkulasi Ulang KPI Otomatis terhadap Filter (Dynamic KPI): Menghitung ulang seluruh kartu KPI modal secara real-time saat pengguna mengetik pencarian atau memilih chip filter cepat.',

                'Dekode Entitas Karakter Kategori: Memastikan kategori bersimbol seperti > 270 hari terurai sempurna tanpa terhalang entitas HTML.',

            ],

        ],

        '3.1.9' => [

            'date'     => '2026-11-03',

            'title'    => 'Penambahan Tab Proyeksi Run-Off & PTP Esok Hari (H+1) pada Modal Debitur, Filter Multi-Kategori & Sinkronisasi Ekspor Excel',

            'changes'  => [

                'Tab Switcher Proyeksi Esok Hari (H+1): Menyediakan tab navigasi khusus pada Modal Rincian Debitur untuk beralih antara Data Berjalan Harian (H-0) dan Proyeksi Esok Hari (H+1) pada kategori Run-Off dan PTP.',

                'Proyeksi Run-Off H+1 Otomatis: Menyaring dan menampilkan daftar debitur yang memasuki jadwal Next Payment Date (NPD) pada esok hari (T+1) secara komprehensif lengkap dengan target pokok angsuran.',

                'Monitoring Proaktif Tagihan PTP Esok Hari: Menampilkan pipeline jadwal penagihan debitur esok hari guna mitigasi dini sebelum debitur jatuh tempo atau bergeser ke DPD 1 / SML.',

                'KPI Deck & Filter Cepat Adaptif: Mengadaptasi kartu KPI (Target Debitur, Total Sisa OS, Target Pokok, Komposisi Bulanan/Musiman) dan filter cepat (Bulanan, Musiman, Sudah Bayar, Belum Bayar) secara dinamis sesuai cakupan waktu yang dipilih.',

                'Sinkronisasi Ekspor Excel Terfilter Waktu: Menyertakan parameter cakupan waktu (scope=tomorrow) dan penamaan berkas otomatis (_ESOK_HARI) pada fitur ekspor Excel.',

            ],

        ],



        '3.1.8' => [



            'date'     => '2026-11-03',



            'title'    => 'Implementasi Penuh Standar Cadangan Risiko Kredit PSAK 71 / IFRS 9 (Three-Stage Expected Credit Loss Model & SICR)',



            'changes'  => [



                'Implementasi Standar PSAK 71 / IFRS 9: Mengadopsi Three-Stage Impairment Model (Stage 1: 12-Month ECL, Stage 2: Lifetime ECL / SICR, Stage 3: Lifetime ECL / Default PD 100%) untuk perhitungan cadangan penurunan nilai portofolio kredit.',



                'Kriteria Significant Increase in Credit Risk (SICR): Mengklasifikasikan debitur DPD 31-90 hari (Bucket 3 & 4 / SML 2-3) serta debitur DPD <= 30 hari dengan status restrukturisasi ke dalam Stage 2 Lifetime ECL.',



                'Koreksi Fundamental Formula CKPN: Mengeliminasi penggunaan rasio migrasi roll-rate usang dan menerapkan tarif pencadangan loss rate standar PSAK 71 (KL 50%, D 75%, M 100%).',



                'Unifikasi Engine Kalkulasi Psak71CkpnService: Menyatukan seluruh kalkulasi beban dan tarif CKPN di seluruh sistem (modal drilldown pemburukan, NPDD, jatuh tempo, matriks, reguler, dan modal profil debitur) melalui satu layanan terpusat.',



                'Pembaruan Panel Pengaturan Master Dashboard: Memperbarui 8 parameter loss rate standar PSAK 71 pada database dan formulir modal pengaturan dashboard.',



                'Penyempurnaan Visualisasi Profil Debitur: Menampilkan badge status staging, model impairment (12-Month vs Lifetime ECL), persentase tarif aktif, dan rincian tunggakan pokok/bunga pada kartu profil debitur.',



            ],



        ],



        '3.1.7' => [



            'date'     => '2026-11-03',



            'title'    => 'Penataan Responsif Multi-Screen Baseline-Realtime-Delta, Pewarnaan Header Kategori, Restorasi Kuadran & Run-Off, dan Eliminasi Garis Col-Gap',



            'changes'  => [



                'Penataan Proporsional Responsif Multi-Screen (1366px s/d 1920px): Menerapkan sistem colgroup persentase serempak pada tabel Baseline, Realtime, dan Delta sehingga teks Nama Mantri, nominal OS, dan lencana Kuadran tidak terpotong serta seluruh garis vertikal kolom sejajar presisi 100%.',



                'Pewarnaan Kategori Header Tabel (Lancar s/d Musiman): Menerapkan skema warna kategori pastel (Lancar, SML 1-3, KL, D, Macet, Total, SML, NPL, Bulanan, Musiman) pada header tabel monitoring kredit untuk meningkatkan keterbacaan data.',



                'Restorasi Kolom Kuadran & Run-Off: Mengembalikan badge Kuadran (Extreme Low, Low, Mid, High) dengan palet warna asli dan memulihkan kalkulasi data Run-Off pada mutasi Delta.',



                'Eliminasi Garis Mengganggu Col-Gap: Menghilangkan border pada seluruh sel pemisah (col-gap) antara Total, SML, dan indikator lainnya sehingga celah tabel bersih dan seamless.',



                'Perbaikan Interaktivitas Modal Detail & Profil Debitur: Memperbaiki interpolasi Blade onclick pada kolom Potensi Real & Recovery sehingga seluruh modal dapat dibuka dan menampilkan data secara normal tanpa error.',



                'Harmonisasi Kontras Teks PTP & Seleksi Baris: Memastikan teks nominal OS pada seleksi baris aktif tetap terbaca dengan kontras putih bersih saat disorot.',



            ],



        ],



        '3.1.6' => [



            'date'     => '2026-11-03',



            'title'    => 'Pembersihan Berkas Duplikat, Audit Dead Code, Dokumentasi Komprehensif & Penguatan Enkripsi Rilis',



            'changes'  => [



                'Pembersihan Berkas Duplikat & Dead Code: Mengaudit dan mengeliminasi berkas duplikat tampilan view, berkas backup sementara (.bak, .tmp), serta dependensi usang pada controller dan middleware.',



                'Dokumentasi Komprehensif Kode Sumber: Melengkapi docblock dan penjelasan fungsi teknis serta alur operasional pada seluruh controller dan registri rute master project_aplikasikita.',



                'Penguatan Enkripsi & Penyamaran Distribusi: Memastikan seluruh kode rilis di GitHub dan armada Mini PC terenkripsi AES-256 tanpa komentar, tanpa kebocoran logika, dan tersamar penuh.',



                'Proteksi Perangkat Keras Flashdisk: Menerapkan verifikasi deteksi fisik flashdisk master kerja sebelum eksekusi pipeline enkripsi dan deployment.',



            ],



        ],



        '3.1.5' => [



            'date'     => '2026-10-31',



            'title'    => 'Input Target & Posisi Riil Recovery DH, Presisi Modal Nett Disbursement & Keamanan Rilis',



            'changes'  => [



                'Input Target RKA & Posisi Riil Recovery DH: Menambahkan form input Target RKA Recovery DH dan Posisi Riil Recovery DH pada Modal Pengaturan Master Data Dashboard yang tersinkronisasi otomatis dengan basis data.',



                'Presisi Kolom Modal Nett Disbursement: Menyelaraskan struktur kolom tabel, colspan header, serta perhitungan akumulasi Sisa OS Lama dan Nett OS pada baris subtotal dan grand total.',



                'Format Durasi Jatuh Tempo Ekspor Excel: Menstandarkan label status jatuh tempo pada ekspor laporan Excel menjadi format ringkas hari (Sisa X Hr / Lewat X Hr).',



                'Pencegahan Data Hilang Run-Off Pelunasan: Menjamin debitur yang melakukan pelunasan lunas dan tutup rekening tetap tercatat pada rekapitulasi mutasi harian pengelola.',



            ],



        ],



        '3.1.4' => [



            'date'     => '2026-10-30',



            'title'    => 'Standarisasi Ukuran Modal 95%, Harmoni Warna, Pembatas Mantri Tegas & Pergeseran Kolek Kol 1-5',



            'changes'  => [



                'Standarisasi Seluruh Modal Dashboard 95%: Seluruh modal pada halaman Dashboard kini menggunakan ukuran presisi 95vw x 95vh tanpa pemotongan teks pada nama debitur maupun kolom rincian.',



                'Harmoni Warna & Eliminasi Konflik CSS: Memperbaiki aturan CSS tabel modal yang sebelumnya menimpa warna teks dan latar belakang baris Header Mantri, Subtotal Mantri, Grand Total Unit, serta indikator angka.',



                'Pembatas Antar Mantri Berkontras Tinggi: Menambahkan banner grup Mantri beraksen biru gelap dengan garis tepi tegas dan baris Subtotal Mantri berbatas tebal agar pemisahan antar pengelola terlihat jelas.',



                'Informasi Pergeseran Kolek Awal ➔ Kolek Sekarang: Seluruh modal Kol 1, 2, 3, 4, 5, NPL, dan Portofolio kini menampilkan kolom Kolek Awal, Kolek Sekarang, dan lencana Pergeseran Kolek (Memburuk, Membaik, Tetap, Lunas, Realisasi Baru) beserta chip filter cepat.',



                'Penyederhanaan Tabel Tanpa Simbol Nama & Tanpa Kolom Aksi: Menghapus kotak inisial simbol nama serta kolom tombol Aksi karena seluruh baris debitur dapat langsung diklik untuk membuka Profil Lengkap.',



            ],



        ],



        '3.1.3' => [



            'date'     => '2026-10-30',



            'title'    => 'Optimasi Antrean Sinkronisasi Otomatis & Penyempurnaan Tampilan Modal Eksekutif',



            'changes'  => [



                'Perbaikan Prioritas Antrean Sinkronisasi: Memastikan akun dengan status gagal otomatis dijadwalkan ulang secara adil tanpa memblokir antrean akun aktif lainnya.',



                'Validasi Transaksi Database: Menjamin penulisan data hasil sinkronisasi dan pembaruan profil berjalan secara utuh dan konsisten.',



            ],



        ],



        '3.1.2' => [



            'date'     => '2026-10-30',



            'title'    => 'Peningkatan Kecepatan Render Tabel Modal & Penyegaran Antarmuka Profil Debitur',



            'changes'  => [



                'Render Tabel Instan: Mengoptimalkan pembuatan baris HTML dan pengelompokan subtotal pengelola pada modal rincian debitur.',



                'Penyegaran Visual Modal Profil: Memperjelas indikator progres baki debet, kartu informasi pinjaman, dan status fisik dokumen jaminan.',



            ],



        ],



        '3.1.1' => [



            'date'     => '2026-10-30',



            'title'    => 'Arsitektur 9 Modal Khusus Debitur, Cache Client 0ms & Desain Eksekutif Profil Lengkap',



            'changes'  => [



                'Arsitektur 9 Modal Terdedikasi: Memecah modal universal menjadi 9 konfigurasi modal mandiri dengan kartu KPI, chip filter cepat, dan kolom data yang disesuaikan presisi peruntukannya tanpa anomali.',



                'Akselerasi Buka Modal 0ms: Memperkenalkan Memory Cache Client-Side (Map) berlatensi ultra-rendah sehingga modal rincian debitur terbuka seketika tanpa loading lama saat navigasi dashboard.',



                'Desain Eksekutif Profil Lengkap Debitur: Memperbarui tampilan modal profil dengan header inisial avatar, lencana status Kol & Restruk, 4 kartu ringkasan keuangan dengan progress bar pelunasan baki debet, status fisik berkas lemari penyimpanan, dan tabel agunan terdaftar yang bersih.',



                'Pre-render Instan Modal Profil: Profil debitur langsung dirender seketika dalam 0ms menggunakan data memori aktif, diikuti sinkronisasi pasif di latar belakang untuk posisi fisik berkas dan daftar agunan.',



                'Optimasi Backend & Kueri Terkelompok: Mengoptimalkan pemetaan tipe pinjaman dengan caching memori dan batching kueri alamat debitur untuk performa maksimal pada server Mini PC.',



            ],



        ],



        '3.1.0' => [



            'date'     => '2026-10-30',



            'title'    => 'Harmonisasi Presisi Penurunan OS SML dan Penyelarasan Universal PTP',



            'changes'  => [



                'Pemisahan Murni Penurunan OS: Pembayaran sebagian (debitur transisi SML 3➔2 dan SML 2➔1) tidak lagi dimasukkan ke dalam kolom Penurunan OS maupun Total Netto, melainkan ditotalkan secara terpisah pada kolom masing-masing dan baris footer tabel.',



                'Penurunan OS Khusus Lunas Terbayar: Kolom Penurunan OS dan metrik capaian harian portofolio murni hanya menghitung debitur yang lunas terbayar penuh (SML 1➔LANCAR).',



                'Harmonisasi Nilai Kolom PTP Dashboard: Menghilangkan penambahan pembayaran sebagian pada kolom PTP Dashboard sehingga nilai PTP Unit dan masing-masing Mantri selaras presisi dengan rekapitulasi mutasi SML.',



                'Sinkronisasi Kartu KPI Modal Rincian PTP: Modal rincian PTP kini menyajikan kartu metrik Pergerakan OS Netto, Penurunan OS Lunas, Kenaikan OS Hari Ini, Total Debitur PTP, Sisa Baki Debet, dan Total Setoran Kas secara transparan.',



            ],



        ],



        '3.0.9' => [



            'date'     => '2026-10-30',



            'title'    => 'PHP 8.4 Dedicated Engine, MariaDB Low-Latency Caching, and Complete Sanitization',



            'changes'  => [



                'Dedikasi Tunggal PHP 8.4: Menghentikan dan membersihkan seluruh sisa instalasi duplikat PHP 8.3 FPM dari sistem untuk membebaskan alokasi RAM dan proses.',



                'Multi-Layer Query Caching: Caching data posisi awal pagi, ringkasan baseline bulanan, dan daftar pengelola portofolio untuk mengeliminasi query redundant pada MariaDB.',



                'Throttled Realtime Aggregates: Proteksi eksekusi kalkulasi agregat realtime dan relaksasi cooldown auto-refresh antarmuka menjadi 8 detik agar CPU tetap stabil.',



                'Sanitasi Total Repositori Publik: Memastikan nol penyebutan identitas atau istilah internal pada seluruh rilis dan dokumentasi publik.',



            ],



        ],



        '3.0.8' => [



            'date'     => '2026-10-30',



            'title'    => 'Server CPU & MariaDB Optimization & 10s In-Place Cell Glow',



            'changes'  => [



                'Eliminasi Hard Reload Loop: Menghapus window.location.reload global dari app.blade.php sehingga dashboard kembali memperbarui angka langsung di tempat (in-place) dengan efek glowing 10 detik.',



                'Akselerasi RAM Check-Version (< 0.1ms): Endpoint /dashboard/check-version kini 100% membaca Cache RAM tanpa membebani query MariaDB.',



                'Throttled MariaDB Signature Fallback: Pengecekan tabel data_lw321harian dibatasi maksimal 1x per 60 detik dengan query ringan hemat CPU.',



                'Audit Live Query Caching (15s): Mencegah query ganda saat multi-user membuka aplikasi secara bersamaan.',



                'Smart Polling Interval & Background Tab Detection: Interval polling disesuaikan ke 5 detik dan otomatis pause saat tab browser tidak aktif (document.hidden).',



            ],



        ],



        '3.0.7' => [



            'date'     => '2026-10-30',



            'title'    => 'Smart Agent Service Queue & Instant Priority Fast-Track',



            'changes'  => [



                'Instant Priority Fast-Track: Rekening prioritas VIP langsung menyela antrean dan diproses detik berikutnya setelah rekening berjalan selesai.',



                'Perbaikan status VIP antrean: Rekening prioritas tidak lagi salah terbaca "Selesai" jika belum diproses.',



                'Alamat Only Wajib: Murni diambil dari tabel debiturs (status AKTIF dan DH non-lunas) sebanyak 2 rekening di setiap batch antrean.',



                'Jam Kritis Closing (15:00 - 17:00 WIB): Urutan antrean cerdas mendahulukan VIP -> NPD Hari Ini -> SML 1, 2, 3 -> NPL.',



            ],



        ],



        '3.0.6' => [



            'date'     => '2026-10-30',



            'title'    => 'Visual WhatsApp Report & Operational SML Tracking',



            'changes'  => [



                'Optimasi visual laporan WhatsApp: Dashboard presisi 1.080px & Modal Mantri proporsional 1.280px.',



                'Mode pengiriman foto murni resolusi tinggi langsung di chat WhatsApp.',



                'Mempertahankan logika operasional SML dan Kenaikan Hari Ini untuk debitur jatuh tempo hari ini.',



                'Eliminasi tumpang tindih header tabel dan teks kartu target pada tangkapan layar.',



            ],



        ],



        '3.0.5' => [



            'date'     => '2026-10-30',



            'title'    => 'AplikasiKita-v3.0.5 — Hardware Telemetry Floating Engine, MariaDB Maintenance Automation & System Optimization',



            'features' => [



                'Implementasi Floating Telemetry Widget hardware Mini PC (Suhu CPU SOC, RAM, Storage Disk, Load Average, Uptime).',



                'Otomatisasi pemeliharaan berkala database MariaDB 10.11 (OPTIMIZE TABLE) dan pembersihan log/cache usang via Artisan command.',



                'Endpoint API live telemetri terproteksi (/api/telemetry-live) dengan auto-polling berlatensi rendah untuk Admin & Kaunit.',



                'Optimasi penggunaan memori dan stabilitas runtime background service tanpa menambah beban perangkat Mini PC.',



                'Pembersihan menyeluruh repositori publik dan standarisasi rilis produksi.',



            ],



        ],



        '3.0.4' => [



            'date'     => '2026-10-30',



            'title'    => 'AplikasiKita-v3.0.4 — Synchronized PTP Engine & SML Sub-Bucket Financial Integrity',



            'features' => [



                'Penyelarasan presisi mutlak 100% pada kolom PTP Dashboard (DEB & OS) dengan tabel Tagihan Harian.',



                'Penanganan rekening pelunasan penuh hari ini (- LUNAS) pada kalkulasi Point to Point dashboard dan modal rincian.',



                'Inklusi komprehensif seluruh pengelola portofolio pada rekapitulasi mutasi penagihan unit.',



                'Penyempurnaan kalkulasi penurunan baki debet sub-bucket SML (SML 3➔2, SML 2➔1, dan SML 1➔LANCAR).',



                'Modernisasi kode backend PHP 8.3 & sanitasi arsitektur sistem Mini PC.',



            ],



        ],



        '3.0.3' => [



            'date'     => '2026-10-30',



            'title'    => 'AplikasiKita-v3.0.3 — Performance Optimization & Responsive Architecture',



            'features' => [



                'Optimasi performa headless browser snapshotting ultra-ringan tanpa membebani memori CPU dan RAM Mini PC.',



                'Integrasi modern CSS Container Queries pada antarmuka dashboard dengan preservasi 100% desain asli.',



                'Akselerasi kueri agregasi portofolio via composite database indexing.',



                'Publikasi catatan rilis resmi terstruktur pada repositori GitHub.',



            ],



        ],



        '3.0.2' => [



            'date'     => '2026-10-30',



            'title'    => 'AplikasiKita-v3.0.2 — Live Dashboard Auto-Sync & Realtime Gateway Optimization',



            'features' => [



                'Sinkronisasi instan portofolio dashboard langsung saat impor LW321 selesai diproses.',



                'Penyegaran otomatis pasif pada layar dashboard browser tanpa perlu reload manual F5.',



                'Peningkatan keandalan snapshot Chromium WhatsApp Gateway dengan verifikasi tanggal data.',



                'Sanitasi dokumentasi publik dari rincian modul rahasia.',



            ],



        ],



        '3.0.1' => [



            'date'     => '2026-10-29',



            'title'    => 'AplikasiKita-v3.0.1 — Initial Stable Release (Vanguard Core)',



            'features' => [



                'Inisialisasi rilis stabil platform AplikasiKita (Versi 3.0.1) dengan arsitektur modular modern dan keamanan tingkat tinggi.',



                'Perlindungan penuh logika bisnis backend pada perangkat Mini PC.',



                'Portal Kontrol Server dan Keamanan Jaringan (/pengaturan/server) dengan manajemen IP LAN (.197), Wi-Fi (.200), dan 3 IP Whitelist Nirkabel.',



                'Optimalisasi arsitektur backend dan pembagian modul operasional terpadu.',



                'Penyelarasan tata letak antarmuka responsif: Dashboard monitoring kuadran portofolio, tagihan harian akurat, pencatatan lunas murni penurunan OS, pencarian arsip, dan scanner registrasi barcode.',



                'Mekanisme Over-The-Air Git Auto-Update untuk pembaruan armada Mini PC secara otomatis.',



                'Sanitasi total identitas: Bebas dari identitas bank tertentu, bebas dari identitas internal, bebas dari nama personal pengembang, dan penyebutan hardware server terstandarisasi sebagai Mini PC.',



            ],



        ],



    ],



];



