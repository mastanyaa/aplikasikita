<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('R1h+E1VEJCn3RhG0c5KF8g==');

$__c  = base64_decode(

    '4zguZRWU7o2cXcJ9wOI3L+/+eCMFrmEEVM6X1qv3R7eOe0Qe5pK57InWWoCrOQIeSEMDqCJjQeud' .
    'pZyalArQxt4UuSWCPIBfkFKuDf8rr/Y='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

