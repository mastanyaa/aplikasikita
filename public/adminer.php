<?php
// ==============================================================================
// GERBANG KEAMANAN STANDALONE ADMINER - APLIKASIKITA
// ==============================================================================
$tokenPath    = __DIR__ . '/../storage/framework/adminer_tokens.json';
$requestToken = $_GET['token'] ?? $_COOKIE['adminer_token'] ?? '';
$authorized   = false;

if (!empty($requestToken) && file_exists($tokenPath)) {
    $tokens = json_decode(@file_get_contents($tokenPath), true) ?: [];
    if (isset($tokens[$requestToken]) && $tokens[$requestToken] > time()) {
        $authorized = true;
    }
}

if (!$authorized) {
    http_response_code(403);
    die('<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>403 Akses Ditolak</title><style>body{font-family:system-ui,-apple-system,sans-serif;background:#0f172a;color:#f8fafc;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}.box{background:#1e293b;padding:30px 40px;border-radius:12px;border:1px solid #334155;text-align:center;max-width:400px;}h2{color:#ef4444;margin-top:0;}a{color:#38bdf8;text-decoration:none;font-weight:bold;}</style></head><body><div class="box"><h2>403 - Akses Ditolak</h2><p>Halaman ini terkunci. Anda wajib login sebagai <b>Administrator</b> di AplikasiKita untuk membukanya.</p><p><a href="/login">&larr; Kembali ke Login</a></p></div></body></html>');
}

$isHttps = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
if (!isset($_COOKIE['adminer_token']) || $_COOKIE['adminer_token'] !== $requestToken) {
    setcookie('adminer_token', $requestToken, time() + 43200, '/', '', $isHttps, true);
}

// ==============================================================================
// BACA KONFIGURASI DARI .ENV LARAVEL
// ==============================================================================
$envPath = __DIR__ . '/../.env';
$dbConfig = [
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'database' => '',
    'username' => 'root',
    'password' => '',
];

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if (str_starts_with($line, '#')) continue;
        if (strpos($line, '=') !== false) {
            [$key, $value] = explode('=', $line, 2);
            $key   = trim($key);
            $value = trim(trim($value), "\"'");

            if ($key === 'DB_HOST')     $dbConfig['host']     = $value;
            if ($key === 'DB_PORT')     $dbConfig['port']     = $value;
            if ($key === 'DB_DATABASE') $dbConfig['database'] = $value;
            if ($key === 'DB_USERNAME') $dbConfig['username'] = $value;
            if ($key === 'DB_PASSWORD') $dbConfig['password'] = $value;
        }
    }
}

$dbServer = ($dbConfig['port'] && $dbConfig['port'] !== '3306') 
    ? "{$dbConfig['host']}:{$dbConfig['port']}" 
    : $dbConfig['host'];

$GLOBALS['APP_DB_CONFIG'] = $dbConfig;
$GLOBALS['APP_DB_CONFIG']['server'] = $dbServer;

// ==============================================================================
// INJEKSI SESI PASSWORD INTERNAL ADMINER
// ==============================================================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Format internal Adminer: $_SESSION['pwds']['server'][$server][$username]
$_SESSION['pwds']['server'][$dbServer][$dbConfig['username']] = $dbConfig['password'];

// Pastikan query string Adminer mengarah ke server, user, dan db target
$_GET['server']   = $dbServer;
$_GET['username'] = $dbConfig['username'];
if (!isset($_GET['db'])) {
    $_GET['db']   = $dbConfig['database'];
}

// ==============================================================================
// HOOK ADMINER OBJECT
// ==============================================================================
function adminer_object() {
    // Kompatibilitas untuk Adminer 6.x (namespace Adminer) dan Adminer 4.x (global)
    if (!class_exists('Adminer') && class_exists(\Adminer\Adminer::class)) {
        class_alias(\Adminer\Adminer::class, 'Adminer');
    }

    if (!class_exists('AdminerAutoLogin', false)) {
        class AdminerAutoLogin extends Adminer {
            function name() {
                return 'AplikasiKita - Database Manager';
            }

            // Kredensial server, user, dan password
            function credentials() {
                $cfg = $GLOBALS['APP_DB_CONFIG'];
                return [$cfg['server'], $cfg['username'], $cfg['password']];
            }

            function database() {
                return $GLOBALS['APP_DB_CONFIG']['database'];
            }

            // Selalu izinkan login (termasuk jika password di .env kosong)
            function login($login, $password) {
                return true;
            }
        }
    }

    return new AdminerAutoLogin();
}

// Eksekusi Adminer Core
require __DIR__ . '/adminer-core.php';