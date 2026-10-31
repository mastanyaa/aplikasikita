<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Models;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('Jr4GKqimcXpjwYjHgBPAkQ==');

$__c  = base64_decode(

    'mRUXs1+7ITF/GIM2tOntx2hk0cW9/B5IPUyzdurk6/kh87kbHe6DKcqy0W/3h2xPnIhVRphMZSO/' .
    '+OJw9O5oSY9YOYfRX9tSk6xvvsaK+gQdSkZnzvvxaqD8E/GvCjPZSQlNtrF4jWz6HxwOyeM+PxWH' .
    'VGzNU4iMcrklRLLLiCbT5o5SbkF0sbDO5SNb0yq/i0p461R/tPS1EKEf+E0AlwmXA2Yvtt+sCnjG' .
    'eUMIyYFCcWb21mtaEv6CA38d9EZeOpdQUHc/l+EVt/c/YrUiRYIBS6ZpeOQUFpvckiJYWBOO1pEs' .
    '9kd90Q4zr9qxgoQTsck6APH707waXKDj9nPnJd8WQ62Os9KvLrMMQpsM1LVxevKiCer8DS015qOd' .
    'OYnr0TD2LGnXHst843iE4/ma6cC0HLC2hYZ79DzW2fsuH0Zh2QHChHxGA8VOc//+VApb83RbU/8u' .
    '9OONLlQEP8Zw/eaXICQz7DWlPZe6BPRtcTeCJtW/hamy863TcB9JuzN2xtOHh9sWe5GjtvL3GPTr' .
    '9H7me4Nn/muCz8ORH1afx+RpTkylisfD/+pTjb96MVLH4Sqyl9fL2B1i5lG6aXvd6DZO+kH0+k40' .
    'yuvx3RajS9m4lDMMJcjdavtIeZU3zWFREcAtjnEkcphIzuym0TAj22K/hjde8+Jm1RV+aQx9SN7C' .
    'm6KCNlma7HhfZ9J+tnVdboFSEalcgYK2VA5AevV6OmLHOqgVv+O+DyLl6N4uirHNmUAt9hhqhI4s' .
    'lp5t8OD2rDiZkgGEuadShUfnIYT02DwWNoWCNfubYj9CQg0F29nvkxFEUc24pwfYTK4AD5cbhGyp' .
    'UOeLUtSElFd/DSzlqxHwm1v0m2M7QspBE0WBkOzqbUXoyYceoW8g1UZIY4SdvqKK3SU8EMZKTCdt' .
    'guM31w=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

