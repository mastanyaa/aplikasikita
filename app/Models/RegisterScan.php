<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Models;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('vNRs7RJu4W39gkJlJm0yYA==');

$__c  = base64_decode(

    'WshGM6R3q7uwmHKK0Mwj9OlhvXWUFgcQA9MfpYQZd7MmDJLBx7HbNv8cG/w7Y742XRC/HkIrW9Sy' .
    '7rB6t8CBasozCuPhfK3D+cl9ytdvLtG0o2TqqP5LAEnxSxScg+gZQ4VNrGytsLWb+2yQL9c0nSI/' .
    'k9264M8i7W3nFEMLRn+/28cdk1PGDZjhlLAKtIoDPblrWgdN7QgIL9hRAb7nspi8Dq82v8sr5EMp' .
    '58Nn5hRwugOF/Eadcd377OTfgyIutCSXQ0OifHlKnmcTdsaoZO7Pxd2ZBF2cZXBCKLl7oYJt11Sz' .
    'bGcZZUfW73WGdfbSsou0Spw1FihnaCHQhyda1vxgF7ruoUhHjD0Cq8RKiWYlfas/i6E1if5s5nop' .
    'UP6Hx67HudJiak8Rm5LEk8iqsVkiBh8qntmYWtNsSLpzK0NyewdGHkQjGXBPzUspJsgGWfjiG3wE' .
    'E7lPVo0x7Xq5En1LTLt3OtNvQ1bi51hNCY66ES1uhYUdTY1flsIVR2i7FHgUeXBCwNBD5kJMXifZ' .
    'iBRgBO6xCzt1+oXkYWYFBx1WQiFG1+Ee//UfoBXIk2FEMJ+S/9BpF3v6C/V2dFboFYJI0fjMrMU3' .
    'nPMiLV6GDAWUWPVDvADcZiZK5N9VQRRxM9YOHZxOPaBF8R38ekpdYISI5r6yvdGPhU/Sdz5G4S0o' .
    '/LLWSbG4wnKWuw5keTSidTlZmjKG5NusUUx5jpf4mGNGJvgwnuzsVW+ypcg2pqb0H8X6AXZW+JcK' .
    'cyU4i4g0Rf9JUyIXLrcmxbyf6I/VHA=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

