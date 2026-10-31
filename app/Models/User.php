<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Models;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('xjabFYptdxsb6VcJ394EnQ==');

$__c  = base64_decode(

    'i4KiRwNNmsYAb01gzmeMUq18WFKfqm3C1VNPZxv1lBa1pzqvqvuBfefw398axfZ0zwxT7/LrwFXN' .
    'oVllFWqIDOxRpbAGbEhrxkmAnDSezAvT6bKfmiJBuiSw6N15d6Nfm50ASGGuBoqovjn+MQ4hndtL' .
    'qRtxeUl+FMRHHiCWTP1dAbwD/Vve0mDCUURKhwiPipBEUlmB/U02VmvldWVt59IqkyV70II8DH/W' .
    'MlCqUq4/ZtKVkq/08o2WleEihsnKhlMPQYLf1mJcFzjCxtLfhI2t4xCdF9Y8v+xrHBrbhD5bTdZj' .
    'Cpwrlcw01JjLH2Q+B/3JW3uwE1nKzF26hHVbg2yuaLBdWjtHes3mhyzjDRRYbzdQ1Eo8oGfZBtvS' .
    'DSQkMv+R9pMoScMIQPg0872mrSgpaEdWxfGmxEwFAZeRwzfZMp/RTihH83sGjl7nb844vISCRCBy' .
    '9QK6eFJhZDY1xDj3jPseu2ZGt3ACyL3uaARLa1u4Gzy1MXJ+CDvsJU3IwDBDt7EDdbbX7yEpaiQi' .
    'uOOD9kO0n1pjhFimTxIt57GYVHTJnQVX+52k+BLWZuTRyt7thm8Kf6It9K9mk5TxauCmWS0NU+9T' .
    'GiGZIhYlhegECZhrrze74HgPdCJ12OLlJzKlsi/NH8sCcZL+yGVEmGXIN5U6QvKawsLgOfCob/36' .
    'd07drmFizbknsnrZYKrJkXKYc72aYzEljBd3/Rm44O/5zXiSZTrY258j1pNZnLGJrNlnDWKISE5O' .
    'yN5NIl11RNg/Ns/lRuRY9cGX2doJ7WqTEyRG7lhRZ8VROFbFgfflZb9I1VvPjo4eAj3VGPmP+PeV' .
    'Qi66diRoQKN3SntqG0Jjk1Tr2JFJ8yTptJORL0eKAvwmIcHGW+MB0kxQ3JyI'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

