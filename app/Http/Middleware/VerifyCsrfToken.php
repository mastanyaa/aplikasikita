<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Middleware;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('QbVJEWGtWjwt4ryYmxHnyg==');

$__c  = base64_decode(

    '8O8vQvLh8U96ULDI/+Z5xSm81++eI+bjtd8my0kSeK04HAIf0ZFU1P8E1ZsOCz6v2uGev1a8caMw' .
    'Ekd7SIgFPp2+6C7HzBHcIlhv4bfJbJBP6iAoDTHz+h7ZkUCuJI0bOptJMmauFMn4nR3GZ/mUwMUc' .
    'Yk3LKjzl+fV1Gxn3AvQhHKQ9frSs4Jrpzk56PAsyf7oAy+/Sc2ZQPSxHmzdoyJXgBizG8jADg9ty' .
    'BMVHbTYtSKZyYLImTSjpZL+PJJZibowrETIO4Pgqlgx4FRhS9Q7s10KMOsvf3Gwe3kg/SXpKyrM3' .
    '8iEIuxQ9xTsvCq8aN3gwTqYsk3G9kdXLNR82ZRuUfzhviEZ3t4M0mJin3EEPKwJiucJwIdcGHl7n' .
    'DrBjJx1wDRLS/mb1ieQZXeQf3y8smP+1Fu1HUKXdYwBNkpkmeiokDz2o3hVAfJE6NNgnywm9ExKw' .
    'mSPX3/N4CAtrUg=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

