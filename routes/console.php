<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */

$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('YG43YBIy10tPGYoQg7PP3A==');

$__c  = base64_decode(

    'nPprWHciHE+I9x3jNpyhxYFdjMMH2wPoyg1REDJqXzS7yPTKlhSkma6ecEsFcEunLgSmmvwiS8f5' .
    'oUvc4ZKtzsjNSCtXqMvLnhpyfEDDDOX6KIxzy5GTwr1hp8rqMXtMpgCHliw040VyE4gOM+3Rw5d0' .
    'YGTDpUN+eHcsD5I+kaHCgYcteOCpMtbgOr5940Le4E+pcS9x/MUYnLq0iCCDMDuW3CygzBklQC0l' .
    'GMRH+1T4YeG1HEqp1EG4yJwoAhen3gTI6OEGFFWH6yRHbktYdXDn4u6JwX93g1NLzmCBmbUnG1Ue' .
    'D8l50FpfOlMlxFof59r8X9ZgYnkZITu2v+EyU1iLC1Iu49LhHeoRBAzV43EgByDW8pIq0dwm0oDj' .
    'b7klPKBHKpo2Q9PuEGyr2AYwFEkxWuVcMmUHrPzW5QhY/VwIuiFzxX+osmM//gJreVEUNoEv2FPa' .
    'IzHhVQjEp/GvEr649ljRPaNGzAU92MYaa5kospTvKWNt190hlUkOMX3o3r3x+urlkwn+Wd4C7xpi' .
    'x2W8RGy93Ce/9scVH4hKYKM='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

