<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Helpers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('Uw23XKUnDVeHZTHVR6wuWA==');

$__c  = base64_decode(

    'ZQ/OX/qSYkP5mzm+vUNSp0sLh0xgvHhV6tjMk4iNt7G+ptOVWUQjFmji7DEel9UiNjw/qI5Da8x7' .
    'dwQbA6/6n30FZMZnqb2lpdNc9F4nPgItrCXy2lsaW8sHoTdR/uqaV8E18zscPagvqVuaLTTGBHX7' .
    'fSkAr49WMm0s0AV9BeiFvR6MxQu25i/zNa+/jnyJJ0pXDu0GIK0a6IFinKYpG4sGd+/Ajq5GIPE2' .
    '3J0TT/DZ5nM5nr//HYShxGgp4vZXt+8wZMu0QR660Lc2Dhq70nzql8b2dBdeJQXcZbrfKZX82+am' .
    'cQI2WVV9Q+KacbNsCCJM9QfaANZ5E/QrDmwEhTDJs0IzVrv25EqXl/fuuOH8IR8orB7d21t4JeGL' .
    'mcbTcvsC/fPv5s9XRBq20PGuyAGgqg43ZH/RNylathLf8VHS5ke+Sk709org8zFem7Mgs7KqGGUs' .
    'hMzBISHhrLpiMrUixQGTT5cE7ZIWlGWncydW3fCjSsmK5met/oB2CytzJX3+W2u2cGtP8FB4Pl4Q' .
    '2pRKfv9mnPE9EHY3rH5qhIyTyDJvK8bSBTe5h6UZ8ANAbgAPMV3lTpqElnizSnfaeuxhXejryWlc' .
    '7dSVr8SMmcK7fxGzeyxiHYVct3RqCHLE+8myui8A0TELvyA03q7cZ9fQ1L6KCmwK0XjXjj2m9UJF' .
    'KPzCuUS8qYmH6kfA1KLClNkZ83/QaPHONWhfrTuUP7cS6UsK7gFXrC7knUYV0JnKTjqVBQ/RXw9p' .
    '+ESKt+pE2mIcbDiTMFKIXkIv+8Om99QD8INWKRRJ+MOMs7TWOHQnCsOVtmF+eytYbOaC7VrDFQ2i' .
    'yPMCER1nzIjv5tKe3AMLrYfMSGDr69qEjN5G6kfV2FNxIH5gZPzqPYY+eMqwEFJllt7lTHNWapg3' .
    'Qe445ZXSmrrBoiPITW58hvNl4CE1Frx5WvfLI8tDTSSwhVYZzS2md6ktJ5yfH6R9wh9YYvYgVjqQ' .
    'RNEN08JGa05ftYtovBqOt1CbZQMbKZ/mUY9n0x7JVZy3ff4nVdvy9YkPfWoRteWfJ0qNxqkvRmea' .
    'Pwo8eV8EO+ak1X3gtEJb2oyLQIHe9UZhDy0Ax47mpgqXczUqahDVhgQtr35YgLQW9Ba6KvMa3kdi' .
    '47mEAwAd2oZ937OuyRmCZ4kIRWOHxhREthpoVMT3jbS86W3SgIiuVfXROi15M6jMEEedvXXHdaIz' .
    '+edgGaGOwm7LuD5fBombjj61ombnuEU+wk0iC4yiV3R5J0M8+A1fjYKjGNyGsdBj8UFmC1OZkE5N' .
    'soJuOcpt2tpvhMF68XYzORu9uZssebpOwPE8ydAcGU0/vIo0j63FqtBDa2/W4/wVvb55HcA7bb38' .
    'bx06U0DRmpGggr6gG+ZjIFTfRj7b0rCOepPXJB2KFh1dGQb9u2hLgk7nLbKZv35r7INFC1Qkj6iR' .
    'l6yrU7Qd/Wlu3IJ9WkzxmxUdyht4RIL5tNjIMWUD9HCZoZAMhQUsUWdsaw0+tRxKAllp+VHB6IG4' .
    '95QyQ0aGNiO8ts53piIE9WT3fEHDdA8GDb8HFdM2i1M2/XEg7KQ07/8xn9okwApnB+SjnzicFwI8' .
    'QssT1v2fpFNCSoxutCgH9SaRqYX15O2xIX87YNYOeSlbLzrjgmvKZRTsQ+BdjWE7qvzHtRJFHAPf' .
    '+DB1AMWsNn2dJZRpkUXZoZbmyJepU4MSdD/TZfLdH7Rj0CAz47D84219x0+KNVkBsTwUjzQ9HiN2' .
    '7j4CmHouZvo/zUuSP9MgvGLdKVALZcG6pWDSB/0hS+tF3MxTRyhpqa+m8r5EOoHH2PfHxSJ++/2P' .
    'lQuvRJZIaFRHhSu6i8jIqfKi+zREe36EBhAnVGhMn216RBOOMYl4CaKptxxUgmCeZjgtPUU/lErT' .
    'GtnXAjvK1zvy/GSooPoL4oSC1W9H9QYCeEWQmgNcJBZ5nlusZntcDtmhZU+yAidQn76WUW6Mc6ea' .
    'PzEvXweLcGk0JCho55whnBHx7/YgB91VO1UoOgVgKMixhWFbRWgPeOyi0tuS6WjQN85qrNgaW06S' .
    '39k4ArNE+mvsZS+sPE8IIB/6ZJov0ZkD8GQ4nsuIVK5uKfEkdoIR9fBQ7u6urUxd8N7fBLkw1kiw' .
    'BQUstqqhkN+jim594qnspW71DHehFsfPbM9wme3UBTWgj22D'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

