<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

echo "=== TEST DOKUMEN LUNAS PUTUS ROLE PERMISSIONS ===" . PHP_EOL;

$ctrl = app()->make(App\Http\Controllers\Brimen\DokumenLunasPutusController::class);

foreach (['cs', 'sol', 'brimen', 'administrator', 'kaunit'] as $role) {
    $user = new App\Models\User();
    $user->role = $role;
    $user->name = 'User ' . strtoupper($role);
    $user->is_admin = in_array($role, ['administrator', 'kaunit']) ? 1 : 0;
    auth()->setUser($user);

    $req = Illuminate\Http\Request::create('/dokumen/lunas-putus', 'GET');
    try {
        $res = $ctrl->index($req);
        echo "Role [{$role}]: ACCESS GRANTED (View: " . $res->name() . ")" . PHP_EOL;
    } catch (\Exception $e) {
        echo "Role [{$role}]: ACCESS BLOCKED ({$e->getMessage()})" . PHP_EOL;
    }
}

echo PHP_EOL . "=== TEST SIDEBAR MODULES FOR ADMINISTRATOR ===" . PHP_EOL;
$adminUser = new App\Models\User();
$adminUser->role = 'administrator';
$adminUser->name = 'Super Admin';
$adminUser->is_admin = 1;
auth()->setUser($adminUser);

$sidebarHtml = view('sistem.layouts.sidebar')->render();

$modules = [
    'Modul Monitoring' => str_contains($sidebarHtml, 'Modul Monitoring'),
    'Dashboard Portfolio' => str_contains($sidebarHtml, 'Dashboard Portfolio'),
    'Penagihan Harian' => str_contains($sidebarHtml, 'Penagihan Harian'),
    'Realisasi dan Pelunasan' => str_contains($sidebarHtml, 'Realisasi dan Pelunasan'),
    'Import File CSV/Excel' => str_contains($sidebarHtml, 'Import File CSV/Excel'),
    'Pemeriksa Tabel Database' => str_contains($sidebarHtml, 'Pemeriksa Tabel Database'),
    'Portal Brimen' => str_contains($sidebarHtml, 'Portal Brimen'),
    'Cari Berkas Pinjaman' => str_contains($sidebarHtml, 'Cari Berkas Pinjaman'),
    'Cari Dokumen Agunan' => str_contains($sidebarHtml, 'Cari Dokumen Agunan'),
    'Berkas Dipinjam' => str_contains($sidebarHtml, 'Berkas Dipinjam'),
    'Persetujuan Berkas' => str_contains($sidebarHtml, 'Persetujuan Berkas'),
    'Scan Berkas Realisasi' => str_contains($sidebarHtml, 'Scan Berkas Realisasi'),
    'Audit & Lemari Berkas' => str_contains($sidebarHtml, 'Audit & Lemari Berkas'),
    'Dokumen Lunas Putus' => str_contains($sidebarHtml, 'Dokumen Lunas Putus'),
    'Pengaturan Rak & Lemari' => str_contains($sidebarHtml, 'Pengaturan Rak & Lemari'),
    'Sistem & Server' => str_contains($sidebarHtml, 'Sistem & Server'),
    'Kontrol Server & Jaringan' => str_contains($sidebarHtml, 'Kontrol Server & Jaringan'),
    'Keamanan & Izin Modul' => str_contains($sidebarHtml, 'Keamanan & Izin Modul'),
    'Database Manager (Adminer)' => str_contains($sidebarHtml, 'Database Manager (Adminer)'),
];

foreach ($modules as $name => $present) {
    echo "  -> {$name}: " . ($present ? "OK (TERSEDIA)" : "GAGAL (TIDAK ADA)") . PHP_EOL;
}

echo PHP_EOL . "=== TEST SIDEBAR FOR CS / SOL ===" . PHP_EOL;
$csUser = new App\Models\User();
$csUser->role = 'cs';
$csUser->name = 'Customer Service User';
$csUser->is_admin = 0;
auth()->setUser($csUser);
$csSidebar = view('sistem.layouts.sidebar')->render();
echo "  -> CS Dokumen Lunas Putus in Sidebar: " . (str_contains($csSidebar, 'Dokumen Lunas Putus') ? "OK (TERSEDIA)" : "GAGAL") . PHP_EOL;
echo "  -> CS Realisasi & Pelunasan in Sidebar: " . (str_contains($csSidebar, 'Realisasi dan Pelunasan') ? "OK (TERSEDIA)" : "GAGAL") . PHP_EOL;

