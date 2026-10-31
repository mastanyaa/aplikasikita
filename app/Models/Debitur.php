<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Models;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('WAY0OkyA/coU+um9oK8Lag==');

$__c  = base64_decode(

    'Vs4UgaB8pwQjEtfgDjSDZX/26A2NiN6JLUnUoZPXD1CXAtj8h3UXDZp+Dmhvnly0whQ7DKeKzKFs' .
    'gIM2pihUi47WhregZJlu0SRFXuOMgd3Yfw8DeX5JPl2hDgvGyMXjqy4VS5i6AJ146ECsCWlSTRXL' .
    'X9h5B+qkOhrtA4GZXkzSJoJAyytHG2C733YgdPEM28cfG5+5NZmBOcLeIK134SybAMb1fi5ctmtk' .
    'jCHInQOUAfyNLc4vqkDXlhHGq1/jZvygzXklVplFCj/K2Xwdu5nyPSKY6Yr9HlR+W2Qg9s6NbPX+' .
    'QItkTnZkIqF11+63uH65tB+8Z3zCo2601epbhsKdck84DGuYXgWQ5dVPENE+mPxy4ZCrht+59Gxs' .
    'PQO8fsmASpq0owhTnqoJGweD/aHoTJd+Wo7EUdLY0FQQ/eGt/vypFICQiNHEAUJwHtphpJOMGOxz' .
    'WgQfgzCpvqXY4SfLTdZL5nznlE3MtDUh+oFeOi+HgIyY/N0qCMR0EOSkRkolLLzltD1IyKrBiwxw' .
    'ZcxwejZKbW5JBbqMCk3jd5u6KMLOXktSGsK+gMtnPqtM9lxu7Gim/4h/ssOasD8OF8bCBX176OW5' .
    '659HRoNblxcgT2WtBxoViexnfE+062IjqA44ImpwNskCbdWs8BWFwxBWqq9AxkW6uW4GE3jPlJOL' .
    'WIf3a0n73J4N/MPstThTAnI/fwISda+blGsYQrNNGVVs9OXxEk+S+YD2jq1K32ndlulzhccnhiHA' .
    'w6S4niDGJt4XaMdaIL7YdQ1lY7n7JGfA6UlXdbVnXNqZY8jSfwOCqJmRF85MqgwUDdDZRkx5++z+' .
    'EreESkNOb4x1lpVvHRpXCCeplDOZVpIOYGX+o3L0ku3aSIBa5E7/GZjZd3S31+q3v5ONY1xHM0sY' .
    '6uwFOagPDLSPE5Rr9CCeYntbAd3PsaX9UP+bR43itJud5fZudlVBeitIlY7nhWpPpZO1vk96D/5/' .
    'Fu+ZYijIrrwbsnLC6X/mmkt+G6LqxjitvJFat/66/OFMdyWDgbPJ4nD4EQfjOL2v9qoXKGLHJvoY' .
    'FFVSpfmcc4ep/z0hYpmmLLn8hg0NVraqC4C9dofI7rSA/tDsmOCAaXqz6a/+5J0IifJG6fdyXsD6' .
    'UMo61ZJBzvvxlLqx2aXxkR9JJESIJTW8w3MklL9kXChBZstaFVaRbAW00kAScS9Rq2JJ7nsAFLFM'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

