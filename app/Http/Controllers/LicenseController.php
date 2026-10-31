<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('Xlew+cVhGdHu4jHPwvV3HQ==');

$__c  = base64_decode(

    'KO2jwMMDLukGL7E2MQTRWBQV0G1SnUfWvxfnUzbFRFDA5l6ZRs8DcH8UNqmeovpmCtmybfEHYe3c' .
    'S+40czpLO1I62tL3wKGkqBTVFy7vIxPyEmN4oclR31KCnshG/fPmec6v8v7s3jlseCSd/YkM4MC1' .
    'EeJu4+LNNxpc9eBuYI9ASGNukO6FS5FBZFEbmXKgFGBbkb1YvRT//AALQ6KB0vBjQYjs+xztZUxu' .
    'L/ffkg6vdT9KZj1yjHhdsVkRliso5fPSZBypFTXVACmF/f7HR2AO980VdyRcVeuqLikVqx+szZkB' .
    '27TSGoheUZxKT8vsfdCh6tzF3aS9QpD2eTU4mmb3J5e877CiUq9QoxkahX2RSdz+PFO/7UyE9q29' .
    '468JT7m7LdE9ixMvkjGyA3ijNfmsVj9dYxN43qX//Opsa0jimUlu7FTHN8+uy0KnH6AEQgcmhTJD' .
    't7JAnVBD+CtVOlzTbIlsGJqjWwz/mrTRInW0gh9/ceFzksDi2CFvjwIErqmraDLsriUITcKb/oBt' .
    'nvJWoHFGVRjDbglxrvSVh75gG59r+MtMLJaJRHrGkdGdSy2Ic4HVctEROncIAJrf2s0IaF6yRJWw' .
    'uOWtBwytqqlXG4KBHXwYyfnreaaEgcx89dxYfpVlLmOmmd9ggwe8CEPWI1J1LIvBOfSXaMrX/2zV' .
    'Uwsmph4FnrQI0NuUu8QtZkyXPptMygYQOG1YlXV6en3glYe15vFpz62FKonWrwzL1k8istkoIfNG' .
    'Ri4VyL5VGxpLvHclU5zc2C6oFBcvt1AiquU2oyrNpauiM7XuUV6SIciAmTJQEUwfk96YcLtYLIwF' .
    'nfoGLNG/Xwb41x5SCcbJX31bxuiMp+tphnM/YCJ9OA6apwDbAf906MxAYCnev1/DFL/nNPG4zvDq' .
    '0Q2LUVf+Z3cYGnp1vcNph8NCSmeIDEc6cqKu571dDva1unFuAUtLXuPlGOjIJP1nW0R72PLInqSr' .
    'gbQiKIw5ClwT3DuxsS9XSaeVY7uoEJOTuLhR9IogUsZfFpiIbdKMZ17l8zn2OtjEoHL7kfHL24+x' .
    'Fwe2hx2zh7UjnLw/SRTJejgeDSZu+ygjONYrrEV+0/Lcw521Atdd2R2kqnz3XpgzNR41ua0QKIx/' .
    'MjpA15WxI6hikvRxHdp9oUeNv2AWg57ic6WzD6hba6Bj8u/4M4J8FcYEyXitESAOwRhAIMNrjsZt' .
    'RmksF9i/6P1l8qm/bHjap+tCkBV0zZAEhO1919dE/y+MFHZywLgsB0EYiug8GCl2JKwMcRlSCBvn' .
    'TL/haBtvgP/2DMzKGpoMxtJtHzeD2mxfVHjgIdGYc7E/Hpo+y3Nuqu2SZRqRbjzQ8sSQelPPt2/a' .
    'uTHY2eWVhCYYkrvRiLn1LDP5NOjjCumpwLhO+AKQmHHg/29JG6DLDTvZTknDt2P3cDgmF/9ew39K' .
    'uLNMlL1co2+SgHZvPafiOcZWCr73Oxf99mQUm1k8DJazFPdNF/PYI1qQO/KkAKeAY8FLEYbHzvuh' .
    '5eVcuooqCArNE5P3r64+RQ8FY8ZJo2M4aAflG9PvYpeT+iaBC9FJmmZKY0ewiETD5hLJgtxXFrPH' .
    '9syE4acnK581vUy138EiMbp99K/AZ9xRYw7AfOsGBXjaMCdqSIeQLoCAUQ2dBQvOvEux+LS+MnvZ' .
    'L8qkp+B4VxVxKGqox6CZEsK75kcti7Vmgi0='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

