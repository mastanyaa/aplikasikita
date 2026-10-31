<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Middleware;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('DUY8bJTcr2gZGcM7kmCRCA==');

$__c  = base64_decode(

    'lONtxgsgNyABeO9rHQ/qMiXm/kS04iwqShzIa6JK+id7axHqW+K5/RIeAXAbv210J4KoLKKiTiax' .
    'rppy7me4pZ4sJ2EdkRtd7jOQHvfmKvO0LkJDDdFL6nf+/BCf5De5Hx9EHVC+xwwVBPNAuKWADZtG' .
    'zHEpK1/MwFqTCjlhZ+EAv+aGfZhYnrK0+UQEGArbZTq/J2uiA7SbKmAxlM5C0ZQnBJ9AOuWMdSa1' .
    'y2ZVsmgTACiFQ4+PKW/fDp7NYuTEiNJddvf/Pd0JhJkbdgjWMZIw2LZN68cIvQjQ3ewEc7x5rKUj' .
    'mHZSJMwRLrW7d/RL75iQiLXcEc7FO9dfzlEirjLJmKREWUn2NjNf/elVPH2OEPuTF49dTdkYKg5p' .
    'W6a/GAhOqFOkOcASzuZg3MluVi4ShB9WbG0LJOnI1HhqAYL/c6iKrZC/ZLQF8Ja1QcnnqAcnmcnx' .
    'ZORp/vSbRLwaEQL1ciz/6oXUbP8jwB00MluBjMpSolg0NU1PqE7EITBdQdHpYVlAI4cWY8p9puLN' .
    '7LPGSofs4aIEwktVptA/mPiCueZqttos1CnoI5pGVeXN89Acn6gtOhx4qDkCUx1ztFKz+j8va7XB' .
    'hLoEoIJylNpPdZ7i+l2VvdxhxPnpbpAFztqPGX8HMoqVe8lfzlv/79J97dL7XD2doll++y7kyj9q' .
    '+Cx/zdZokpXNV865ILMEUKWhePiXQvg35Ner/jWE3aw5j3uu3TNiqfRWVgNgBWuhDTnsuHaF73au' .
    'pTYMQAbrLzIYGaa9GxHmApejbxLERdozY1eB1JTddVThpj1MaDIiLsczyGi0qFdX/euVycMay7R/' .
    'LBv4eofzO/9CecAiygfqJsEeC+kg3IiwKMVRuXcL51txWPn4NhpShTWCggh7lEEcElSmNvp1zG+f' .
    'ZT/BVlXgqVgG2R/EHuzyKe9XqPdR4nS3nAgL3tGyrMQC39uL0732TyIRmXKEKYUDbh5BHBQJo6uy' .
    'jV2LtDXz8liGMArqEvppdDfPJ0KusCaqqvtE43zUbP1R1NYtFl3hGLscDRqpBO+RPDvGA/TE/vKJ' .
    '/8Ntz3gw9W/PwkQMoiSnt4VgFtReCDZFP/p4A53/nt71UgI2/opuo8Wd3yCbnjXRQmiomAW/GKve' .
    '/OjOuH6Y9nVNpNW3uv7jNUUZi8rzEz1qnmkAMJss3ORN3u6C6/vKnnXcst1D1NZZQcfPESVrcF6m' .
    'FpGuo+ySeDCYAiUtpK81YcLDzBNFh09ri30MeW7hahnCHfGH341vwmAczQ1D/yA0bHMOcAYpxQ6L' .
    'neG/Q4kzfuC/keaOwAzKUQWAZubNXBZ7xqeJEKBarrgShWcNkWZeTL/JnwqH1590RhhqayI82REy' .
    'dz0vue/wfxQxLRtRZbpf43oaaAl/RL+/ILsAdiAj1J57kgIasO6Dex3xkEuk7hI1CvWpYZLgSCto' .
    'qs7SmF2a6PLg6FtIb2ZGi/qK5jcaz1NBiL3vlYVuGtKTldzX9TquQa+wVtJNFOJ6U1QHQ8vEYGw2' .
    'eHJi7jDiyrM1vZ+k7b9fQsq0IY4Mf+FVqabQrQ=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

