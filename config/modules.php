<?php

return [
    /*
    |--------------------------------------------------------------------------
    | KATALOG MODUL & MENU RESMI APLIKASIKITA
    |--------------------------------------------------------------------------
    | Berkas ini adalah registri tunggal seluruh fitur dan menu sistem.
    | Digunakan oleh middleware hak akses lisensi, navigasi sidebar, dan
    | halaman manajemen lisensi (/pengaturan/lisensi).
    |
    | PANDUAN PENAMBAHAN MENU BARU:
    | Cukup tambahkan elemen array baru pada modul yang sesuai:
    | - Masuk ke 'monitoring' jika fitur terkait kredit, baki debet, atau tagihan.
    | - Masuk ke 'brimen' jika fitur terkait berkas fisik, lemari, agunan, atau scan.
    | - Masuk ke 'sistem' jika fitur terkait kontrol hardware, lisensi, atau pengguna.
    */

    'modules' => [
        'monitoring' => [
            'code'             => 'MONITORING',
            'name'             => 'Modul Monitoring Kredit & Portofolio',
            'badge'            => 'Kredit Mikro',
            'icon'             => '📊',
            'color'            => '#3b82f6',
            'required_license' => 'MONITORING',
            'description'      => 'Tata kelola portofolio debitur, pemantauan baki debet harian, kontrol tagihan, dan mitigasi kualitas kredit.',
            'features'         => [
                [
                    'key'         => 'dashboard',
                    'name'        => 'Dashboard Portofolio',
                    'route'       => 'dashboard',
                    'path'        => '/dashboard',
                    'icon'        => '📊',
                    'description' => 'Matriks kuadran transisi kredit, tabel baseline, realtime, delta pergerakan, dan drilldown modal.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'developer']
                ],
                [
                    'key'         => 'tagihan',
                    'name'        => 'Monitoring Tagihan Harian',
                    'route'       => 'tagihan.index',
                    'path'        => '/tagihan',
                    'icon'        => '📋',
                    'description' => 'Daftar tagihan debitur harian mantri, kalkulasi penurunan OS, dan cetak struk kasir thermal POS58 USB.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'developer']
                ],
                [
                    'key'         => 'realisasi',
                    'name'        => 'Realisasi & Pelunasan',
                    'route'       => 'realisasi.index',
                    'path'        => '/realisasi',
                    'icon'        => '⚡',
                    'description' => 'Pencatatan dan laporan harian realisasi baru, suplesi, dan pelunasan rekening pinjaman.',
                    'roles'       => ['administrator', 'kaunit', 'cs', 'sol', 'developer']
                ],
                [
                    'key'         => 'riwayat_pembayaran',
                    'name'        => 'Riwayat Pembayaran',
                    'route'       => 'monitoring.riwayat-pembayaran',
                    'path'        => '/monitoring/riwayat-pembayaran',
                    'icon'        => '⏱️',
                    'description' => 'Log riwayat angsuran dan pelunasan debitur berdasarkan rekaman transaksi harian.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'developer']
                ],
                [
                    'key'         => 'jatuh_tempo',
                    'name'        => 'Daftar Jatuh Tempo',
                    'route'       => 'monitoring.jatuh-tempo',
                    'path'        => '/monitoring/jatuh-tempo',
                    'icon'        => '📅',
                    'description' => 'Monitoring rekening debitur yang mendekati dan melewati batas tanggal jatuh tempo.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'developer']
                ],
                [
                    'key'         => 'tungsim',
                    'name'        => 'Tunggakan Simpanan',
                    'route'       => 'monitoring.tungsim',
                    'path'        => '/monitoring/tungsim',
                    'icon'        => '💰',
                    'description' => 'Pemantauan saldo dan kewajiban tunggakan rekening simpanan nasabah binaan.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'sol', 'developer']
                ],
                [
                    'key'         => 'posisi_os',
                    'name'        => 'Posisi Sisa Baki Debet',
                    'route'       => 'monitoring.posisi-os',
                    'path'        => '/monitoring/posisi-os',
                    'icon'        => '📈',
                    'description' => 'Analisis komprehensif posisi sisa saldo pinjaman kredit aktif per mantri.',
                    'roles'       => ['administrator', 'kaunit', 'sol', 'developer']
                ],
                [
                    'key'         => 'mutasi_tabungan',
                    'name'        => 'Mutasi Tabungan',
                    'route'       => 'monitoring.mutasi-tabungan',
                    'path'        => '/monitoring/mutasi-tabungan',
                    'icon'        => '💳',
                    'description' => 'Pencatatan dan pelacakan mutasi debet/kredit tabungan debitur.',
                    'roles'       => ['administrator', 'kaunit', 'sol', 'developer']
                ],
                [
                    'key'         => 'neraca',
                    'name'        => 'Neraca Kas / GI-405',
                    'route'       => 'monitoring.neraca',
                    'path'        => '/monitoring/neraca',
                    'icon'        => '📑',
                    'description' => 'Rekapitulasi neraca harian, aktiva pasiva, dan likuiditas kas operasional.',
                    'roles'       => ['administrator', 'kaunit', 'sol', 'developer']
                ],
                [
                    'key'         => 'advance_payment',
                    'name'        => 'Advance Payment (LW370)',
                    'route'       => 'monitoring.advance-payment',
                    'path'        => '/monitoring/advance-payment',
                    'icon'        => '⏱️',
                    'description' => 'Pemantauan pembayaran angsuran di muka debitur sebelum jatuh tempo resmi.',
                    'roles'       => ['administrator', 'kaunit', 'sol', 'developer']
                ],
                [
                    'key'         => 'import_data',
                    'name'        => 'Import Nominatif Harian',
                    'route'       => 'import-data',
                    'path'        => '/import',
                    'icon'        => '📂',
                    'description' => 'Fasilitas integrasi file CSV/Excel nominatif (LW321, DI-319, LW325PH) ke dalam basis data.',
                    'roles'       => ['administrator', 'kaunit', 'developer']
                ],
            ]
        ],

        'brimen' => [
            'code'             => 'BRIMEN',
            'name'             => 'Modul Tata Arsip Digital (Brimen)',
            'badge'            => 'Arsip & Jaminan',
            'icon'             => '🗄️',
            'color'            => '#10b981',
            'required_license' => 'BRIMEN',
            'description'      => 'Digitalisasi berkas jaminan, pemetaan lemari fisik, barcode scanner, otorisasi peminjaman, dan penyerahan lunas putus.',
            'features'         => [
                [
                    'key'         => 'cariberkas',
                    'name'        => 'Cari Berkas & Agunan',
                    'route'       => 'cariberkas.index',
                    'path'        => '/cariberkas',
                    'icon'        => '🔍',
                    'description' => 'Pencarian arsip fisik, inspektur berkas 360°, otorisasi ambil berkas, dan cetak tanda terima.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'cs', 'sol', 'developer']
                ],
                [
                    'key'         => 'scanner',
                    'name'        => 'Scan Berkas Realisasi',
                    'route'       => 'scanner.index',
                    'path'        => '/scanner',
                    'icon'        => '🖨️',
                    'description' => 'Digitalisasi lembar fisik jaminan, deteksi rekening 15-digit, registrasi lemari, dan cetak label thermal.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'developer']
                ],
                [
                    'key'         => 'dokumen_lunas',
                    'name'        => 'Dokumen Lunas Putus',
                    'route'       => 'dokumen.lunas-putus',
                    'path'        => '/dokumen/lunas-putus',
                    'icon'        => '📜',
                    'description' => 'Tata kelola pengembalian dokumen jaminan kredit yang telah lunas penuh ke nasabah.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'cs', 'sol', 'developer']
                ],
                [
                    'key'         => 'persetujuan_berkas',
                    'name'        => 'Persetujuan Pinjam Berkas',
                    'route'       => 'persetujuan.berkas.index',
                    'path'        => '/persetujuan-berkas',
                    'icon'        => '✅',
                    'description' => 'Verifikasi dan otorisasi permohonan peminjaman dokumen fisik jaminan dari lemari.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'developer']
                ],
                [
                    'key'         => 'berkas_dipinjam',
                    'name'        => 'Monitoring Berkas Keluar',
                    'route'       => 'berkasdipinjam.index',
                    'path'        => '/berkas-dipinjam',
                    'icon'        => '📑',
                    'description' => 'Pemantauan berkas jaminan yang sedang berada di luar lemari beserta counter durasi SLA.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'cs', 'sol', 'developer']
                ],
                [
                    'key'         => 'cari_agunan',
                    'name'        => 'Pencarian Agunan Spesifik',
                    'route'       => 'cari.agunan.index',
                    'path'        => '/cari-agunan',
                    'icon'        => '🏷️',
                    'description' => 'Pencarian khusus jenis agunan (SHM, SHGB, BPKB, AJB) berdasarkan nomor jaminan atau nama pemilik.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'cs', 'sol', 'developer']
                ],
                [
                    'key'         => 'monitoring_lemari',
                    'name'        => 'Audit & Denah Lemari',
                    'route'       => 'monitoring.lemari.index',
                    'path'        => '/monitoring-lemari',
                    'icon'        => '🗄️',
                    'description' => 'Representasi visual denah lemari, rak, dan tingkat keterisian fisik boks ruang arsip.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'developer']
                ],
                [
                    'key'         => 'pengaturan_lemari',
                    'name'        => 'Pengaturan Rak & Lemari',
                    'route'       => 'pengaturan.lemari.index',
                    'path'        => '/pengaturan/lemari',
                    'icon'        => '⚙️',
                    'description' => 'Konfigurasi spasial ruang arsip: penambahan lemari, penataan nomor rak, dan kapasitas boks.',
                    'roles'       => ['administrator', 'kaunit', 'brimen', 'developer']
                ],
                [
                    'key'         => 'permintaan_berkas',
                    'name'        => 'Permintaan Berkas',
                    'route'       => 'permintaanberkas.index',
                    'path'        => '/permintaanberkas',
                    'icon'        => '📥',
                    'description' => 'Formulir pengajuan peminjaman berkas fisik oleh mantri atau petugas operasional.',
                    'roles'       => ['administrator', 'kaunit', 'mantri', 'cs', 'sol', 'developer']
                ],
            ]
        ],

        'sistem' => [
            'code'             => 'CORE',
            'name'             => 'Modul Sistem & Manajemen Server',
            'badge'            => 'Infrastruktur',
            'icon'             => '⚙️',
            'color'            => '#6366f1',
            'required_license' => 'CORE',
            'description'      => 'Pusat kontrol perangkat keras Mini PC, keamanan jaringan LAN, manajemen hak akses pengguna, dan validasi lisensi.',
            'features'         => [
                [
                    'key'         => 'manajemen_lisensi',
                    'name'        => 'Manajemen Lisensi & Modul',
                    'route'       => 'pengaturan.lisensi',
                    'path'        => '/pengaturan/lisensi',
                    'icon'        => '🛡️',
                    'description' => 'Status lisensi hardware Mini PC, aktivasi token HMAC-SHA256, dan audit status katalog modul.',
                    'roles'       => ['administrator', 'kaunit', 'developer']
                ],
                [
                    'key'         => 'kontrol_server',
                    'name'        => 'Kontrol Hardware Mini PC',
                    'route'       => 'admin.server.index',
                    'path'        => '/pengaturan/server?tab=server',
                    'icon'        => '🖥️',
                    'description' => 'Telemetri suhu CPU, RAM, disk, restart layanan sistem, pencadangan Rclone cloud, dan auto-update Git.',
                    'roles'       => ['administrator', 'kaunit', 'developer']
                ],
                [
                    'key'         => 'keamanan_jaringan',
                    'name'        => 'Keamanan Jaringan & IP',
                    'route'       => 'security.index',
                    'path'        => '/pengaturan/server?tab=security',
                    'icon'        => '🔒',
                    'description' => 'Firewall LAN, pengaturan IP Ethernet .197 dan Wi-Fi .200, whitelist nirkabel, dan terminasi sesi pengguna.',
                    'roles'       => ['administrator', 'kaunit', 'developer']
                ],
                [
                    'key'         => 'kelola_pengguna',
                    'name'        => 'Kelola Pengguna Sistem',
                    'route'       => 'users.index',
                    'path'        => '/pengaturan/pengguna',
                    'icon'        => '👥',
                    'description' => 'Manajemen multi-peran pengguna, aktivasi akun, sinkronisasi mantri otomatis, dan reset kata sandi.',
                    'roles'       => ['administrator', 'kaunit', 'developer']
                ],
                [
                    'key'         => 'ganti_password',
                    'name'        => 'Ganti Password Mandiri',
                    'route'       => 'user.password.index',
                    'path'        => '/pengaturan/ganti-password',
                    'icon'        => '🔑',
                    'description' => 'Fasilitas mandiri pembaruan kata sandi bagi pengguna terotentikasi dengan enkripsi hash Bcrypt.',
                    'roles'       => ['*']
                ],
            ]
        ]
    ]
];
