<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */

$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('bdjm3ceUuJpMAVIU8IQGNA==');

$__c  = base64_decode(

    'C1gQwIftKtIC7WpyDYveo2EpMu865SjgK/+pdF5gUXe6Yq6lrzZy7OXjCS8cRWkkKEG4BaZ/YlPt' .
    'J5sPoEudvs8LcV/YY+a7v0t7by1JXdcA0esWaeZ9ITk3XI5Ay4hQouqrvEwnv8WimHHUw7wXqTTi' .
    'Jpcm4VCwxvOiJojlA0Ur4g6HNOWnSP7tsa43Z+R+OjkWQjgAzPM1MWLCoqKNXlDNhtGb9rbTMgUe' .
    't7Dd+as3NPVaTlV+qYFQkqLRIa4e9F2pYvwsSHCxISD5UT1NN30ysDWeYz+GtUt+PDe4FDIdj0BC' .
    'Wbxz/s57LDWMZv6VQ2ohDpKqotD+eNMnZ+aGVpk1mqnLSm3RhctNfu9+X54FFU/vakIeRPka7Wxw' .
    '51NTLLfiyI6V9x1I8lYYafYdWmv2SmWJYbJjhbQpnIqpXxcqvTDHSqU/2xJzwXXNY9MT'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

