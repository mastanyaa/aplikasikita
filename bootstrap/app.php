<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use App\Http\Middleware\SecurityAccessMiddleware;
use App\Http\Middleware\VerifyAgentKey;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // 1. Daftarkan alias untuk VerifyAgentKey agar bisa dipanggil di rute
        $middleware->alias([
            'verify.agent' => VerifyAgentKey::class,
        ]);

        // 2. Pengecualian token CSRF untuk endpoint agent dan logout (mencegah error 419 saat session timeout)
        $middleware->validateCsrfTokens(except: [
            'api/agent/*',
            'logout',
        ]);

        // 3. Pasang filter keamanan akses jaringan setelah inisialisasi sesi web
        $middleware->web(append: [
            SecurityAccessMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
