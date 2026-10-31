<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('TbmHBf9MP05LTaOBu3GABg==');

$__c  = base64_decode(

    'FZ/dRN3HaQB+DRBIBvI1sIcFt8Iin3pOX8VjQrUoRhSw6+AeYLfGPKtUed4P2XH51Ft2fiT9dNrh' .
    'kPvvT7gUlgls146z5RGGRaXR6/3wpyc4tSwEeSwPdFaW57ZUZ7lt+PWhsgHS7ZaxzAF3glmBIEXJ' .
    'hmr9+1cg0b2isd1ecXsv9NuOpY5pMdnPWqMvfV+PNH3UFTP5KcL9dZ3Wc6P98gb8PF0hpwZWJD2X' .
    'thHSIUTPdw0QLQ9o1Jd4Onl7FPXWNVmJHzNe5vTsm+e6N7SsET3I+5RjNzyMjmW9aUhbp2CfMKbM' .
    'm3+ZaVRCyXiRru3975d4DxL3ibFC7/97UgqNVk8qObWIREdUqTyzl1UyatnlHUFbs7w8wKBFPWQa' .
    'u9aeTyyxW8W8KjaxhGTThwhjRalJy5C1KL1QgmVqVlk1o0fc08szByoGBxPURmq8sO+6B0MjCE43' .
    '9fBKvW+fyoZXH5p4P5u/KKthNMLjfQSWL9bbLag9CVDpmYNhOqj+RojIpYaumVZ8syCgXtnlAYkH' .
    'YRfvbgo/up4YI/fm1QamXgQy+SYZnHta5S2afX6xk9YIiGZGZnh0DW3QfpHSuxh5Ij3UJ2+2IWTf' .
    'wqGT4XwPSAu0Z/Xd5Yv0WELAaOJ5Dzu59T91SyuFV9TmOiqYNS4kQ9HZZ4muGm3aQt3aRpWGDGF8' .
    'yx5WookmnZgat+2TQ46BigdQVSAKUOvRjs6GvtUtIqgOARkZZkX+73I5gheD1fimp+OhOdQ1Kpps' .
    'EA+cAK9PKkAjav9L2MyVL7wj1osXn6Gq9TgQdK+X/m35J5Z+2nUzF+2s7tFkJEJG9h8IDE6Gsnd3' .
    'caypxGxiUJmnw+YWFxFQ8tC9geA2PSJoSHW6zuRNEnupmTWhDQhST+7r4NwMI8RzqkNiBJ5vd9WA' .
    '5hEZrUubOANOzqE1aiYO8FUcAbreOda5MKfywhJadJZzCXhGY3tGexlzDyi8x2so0xRWk4nLF6Yf' .
    'wm5rPbztegYDQqpCKV2x8DgJZLyYyjjN6w7II3Np4vNqw1/6e2LxclojQsczjKt83/PJ5cMQh6Qt' .
    'g4yb8X+lwTUjCC9itnGw1NRL+JpsPpnMUp57rhFM/qwe43EK9hsGnOV98FibZL7OpizPtsKJsE/d' .
    'gNcsUKwx/ID1hd7K/08ldW6PvZzTpYHY4fMp8iZ0U+ueYbQxi5j/UcxgEb0PFdlkGLOE9jjIU6xJ' .
    'Mc2rodExfxCgt1ZfXvGwUyEZzc3FlfmdG6Aa1stD1iNsq9Y0SUcyhRxnalegkxxK4jNN8yZ/BYm3' .
    '8zVNHEr7buV2pz+AAqkY8hP5oCd4JRvWiNpzto5QaD3McMHxRh8XUC943dlFnSu6Ft/DJN2nMVZs' .
    'L6F6s2kQWCDTvTVPVWJ7H8SvHTUY5mrcwRgfPjAOy/fOJB2ZxeIo9f7jJzCAD9bKmb24HRi702MT' .
    'CMaV78HvKpOaxMKHJ7UM7r1TR8z1OGCCZlGkLgzMahmSev0WqXMyPJFyZbfiJfZi2vyyR7/aseVm' .
    '9xXPzgdjKuQceyhTSzZQjeQMDmqwinVcIk3qNBn9LKxG7zBRU8Hv6rMMW9yLKyLzvLcsPPkkWcv5' .
    'sd5iyZUEynOle2fGq+cF3Z3/VysRKoBN1udqyYsv6yWJtVLTwSnpDoDle0nYfZ6GzlRVPfjoFJ5A' .
    'rsnahI//TextZRQ33AXEjUGBm/DgQscA5WB/zz3wgX8lpxOVhBAAxZkKIqVlu2vYUAa5MzcKmEej' .
    'N6SRAuokQhpm5KJxe4d/zJG5njeIbPT1gLecBDNcCITk/gfkSeeBdQwip7+1D+G9ehzCknHvQftG' .
    'b9jJZHjR1jBceA4YOPjlZ51+B2mlSLfIqckFs7EqOYwHYYAe2Xpt1X7HenogZBrcRMJsyP9GPYv2' .
    'IKcU8nzlhfqBu1CHG9bZ6qLyIK1FfEs6SI31mptWvfA+ADGtx7AlB6oT3xDjogCFBXF8V7Iwy+Dr' .
    'ZTunkoJXfCnTKZoRYfDak8AC6QL2l1V1uj9QikFWBQh+VuhTh9pbrJRM6zd3CA912yNvAfNlso+O' .
    'nb4VJiSxll88LqCxepBMAAukroWgX2eX+/jjOZvzyTvbpJJxrNMmL3fIsc07pH/wWjcSGkXx+iRh' .
    'vFY7vbgJ987pOBh+RV2BVpGe9V5cTSc33zxsaLMeaRQDNDwF0f5NqvjRFArvkLjZLEthTzC+OsB5' .
    'KP3VTKGrHtiZK1yvv6zMD5k2GHoDwkOCwJLO2YYTaengnCYcgpgpqeLUxQPRjWIzFGuSBVr/U6KR' .
    'LkKpZKxakMSXfZ3HoOmOQ8DsqE4Y651rOXpvN2BTsrYY0IUpQeO4t8jlbqREFMaK5z0++qDbyOlq' .
    'cJj2CosYpBj+apKeMP9wXkjCX+/oBgEJTA=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

