<?php

require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Login as admin
$user = App\Models\User::where('role', 'admin')->first() ?: App\Models\User::first();
if ($user) {
    auth()->login($user);
}

// 1. Test Dashboard Route via HTTP Kernel
$req = Illuminate\Http\Request::create('/dashboard', 'GET');
$res = $kernel->handle($req);
echo "DASHBOARD_HTTP_STATUS: " . $res->getStatusCode() . "\n";

if ($res->getStatusCode() !== 200) {
    echo "DASHBOARD_BODY_SAMPLE: " . substr(strip_tags($res->getContent()), 0, 300) . "\n";
} else {
    // Check if SML 1, SML 2, SML 3 are present in rendered HTML
    $html = $res->getContent();
    $hasSml1 = str_contains($html, 'SML 1');
    $hasSml2 = str_contains($html, 'SML 2');
    $hasSml3 = str_contains($html, 'SML 3');
    $hasPotensiRange = str_contains($html, 'POTENSI REAL &amp; RECOVERY') || str_contains($html, 'POTENSI REAL & RECOVERY');
    echo "RENDER_CHECK: SML1={$hasSml1}, SML2={$hasSml2}, SML3={$hasSml3}, POTENSI_HDR={$hasPotensiRange}\n";
}

// 2. Test Pengaturan Server Route
$reqSrv = Illuminate\Http\Request::create('/pengaturan/server', 'GET');
$resSrv = $kernel->handle($reqSrv);
echo "PENGATURAN_SERVER_HTTP_STATUS: " . $resSrv->getStatusCode() . "\n";
