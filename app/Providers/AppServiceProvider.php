<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Providers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('7293x2VU68clSuSqogLcfw==');

$__c  = base64_decode(

    '35kNSVSx8x8r5XJzJ7SiuFHDZ1KUMiB2FnJk3itOqBBAdwohMQwoRxvSfQIKgtyiiRLb2TvHmKP0' .
    'zKxZyjzqYtVVBuESHPSPPbCtyc9Z2RjH+CFWlg0gSqmrvNmtkZydp5t3tyPsVCWrpLrnLNF8NzST' .
    'mZd/Hf8z/Lcr7AittLAKi1aVo8N1mtwdr+ykh3Elumz/6O5+ClM1OISBMKNVv/EYMLQ8YmUphe0X' .
    'f9AwwBQxVPo3vOC95uFh54SIm9mKq1ZSWd1FR7HUadEzBJ5kQt+1s75AqapHGnPgaDS6Xhu8RCql' .
    'IXz8/yZ7RFzqCizI72CYdNxNTGunsRL0uENwCBbLs1516Aa+9niZDoEouEfSsZzitXeOIEXjSZAt' .
    'ZUkmb8ssr/nZVCwBjTNUqud3Upv17Kem4OcpcbuGZdqONm/QaeomeLrS6NvWh6DCzDVGQL2XeG2/' .
    'WpZDyQmARsRByR4lzEEwR2mezxKRGwGx/5nib/RJuDAjYHKqAOq1wFq0osuLMKbP1Q4I/XBMR3DZ' .
    '0h0uimi6ItNlRiHB4Cayvp/MNdMTVIYtuDqpJyPs/FduvLN6eIKdGm5KbgHhme/pfIXNPeLbLvem' .
    'aOZ5q45JNKdj684KnMb4QAcVhT9+3ENtCRNrirwSjprWYzy71W4QkAjOsGqrSXRXPeTG89ROM74J' .
    '+AqDdy+YieB9tmROHNi67swc4FwdvL0wqDx6mVNQCFAEaNkuMsQGJd1dgioWpX1gFUpkq+Wo0Sxx' .
    'Dv9sL6aEwd+khbnTiEwcZv6TU6MbBnl+zS8Bbw9tnr800a4a6Gg6Wq5c9T1Bu31I5CKTEFN7Lmil' .
    'iGcEV8TmpEIaGLXD1UB4QYIpZqAsoz+fPYL1Htksfvrfy1nhVlf7Gm3Wo3daoX1x0vMv/aUCbHNp' .
    'rrz8clFWzrS4EWmq5HN5+w+dClAU/YSEQEbdAQl3OKKeA9bZ'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

