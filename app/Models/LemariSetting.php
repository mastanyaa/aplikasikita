<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Models;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('QKB+wcL8VRtDtFayr3ztXQ==');

$__c  = base64_decode(

    'T3r0vfX64RFHdw3CrxUTAdd+YBzRTvBiERX08hZhmuSiGRMnfc9PgKeIFRA1SCOgDVunhW7ptZMA' .
    'EwBasuI7H3r39JMdLd6/8YN++dvp72MTuwPSRr8vF/vvKZ+NJPljyzoswejt4MGqy7ywChI6pWZh' .
    'd7fLXMSSdQD3G968XSmFz8a5M7jsfuCjYz1phTTNp5I6pfkQheCyqXSY1aLTn7s61IIhZiCO7FGQ' .
    '2Lp55K/trFWiQA/2rLjePhJi28D8NivI4nK0FvomUxWdexJZ68afZNJ0HQpe2zS5ROKpBDiqOIx5' .
    'w004juseLWy/Qg3ow61CkQuE6+co1NQHsl2SaIyyAQDv9CNntumyal+T5YSVFXnsDlb7IYtrlyGt' .
    'W2yH3DFcoGkmD35C7gqYcxpvzxKwdTG7ophACYJmvEl2At0FbifzGT+fEmgsG9H4LpB10CMNNCA9' .
    '8lPfqnEzYlDtyQEYAWodOfpYt+3xgJ+PJsPX1hgaEecmUvAmaKW7oHHa2M2+6fFX4mDPrISxxo1a' .
    '2hy2wkPS/ybCVXhEv9/YVA52B1gH4velJqQTg9FBUOV+b4DPjgkPS21wiP7C8pSdIHfXF5A1E8Kc' .
    'XaVFGK9mku2q1Cn7e/9wNkzJzHI8N/bQAk6vIqfJ7lNVt9GwhPY6hJRn9urVAzIgtDUc0y9/y7Rx' .
    'qaXE1UROo4ZsvIPxMhJm6shya6sz4lNKK8+W6Yq+hrlQ6PPB8M/rZSMGLyW3v05bh9+k7JO6BZ48' .
    'OGOA1Oq1aV2/llfA0XFJ8yrxz3Wf2Fl1w+AEJ5Nnc3msS/r3icO8p89ZIOO1BtNNoQOq/KH02l27' .
    'gHwl2Y/WUfYbNqg2+M/M8N1EZPqJTMX0mEtz0x6W2ihhBAuqA9xveAwytZDPEuL6LAAJnkxqIE7c' .
    '1tUwg9BTC/SI+UUdzoFfK5qgSIWpDKCkeTWu4C8jpad3AjE9kE8/1G92zBa9ZWY+fxzYQQ=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

