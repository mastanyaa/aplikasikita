<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6gBJ6hXhjhCpoaBAa5gkdw==');

$c=base64_decode(

'JxHN7sBal4uG/lg2AuSQNgwNRhkP53/hrZpSyWR6ckNd7qpinDBT2oMEXgV5XFEy0d5LFmT8sSf/' .
'g3fyMvYf5R8W9Et5HsKmlGjlyBZQTpfNv2ORvh1AQ/6T3sv41vBfZeqQa6xmDGDkGYVOb7POxsNZ' .
'oJ4XjxZ2qsUO4xEn8vU/lHCnxiFB++WYqVDh2FO8bDdNtVc9Y8MfqwXdQmt/L2V1FxWfydLdBCwI' .
'2M9ZQ362YLq8YOH/56SWlKl+NqI5wN+pAKDA8k4C8ykXjEUwPss4eZj/Y6KYnpCCSo7ksas33ETB' .
'VSkpCUClnE9lMStIKRhkM+Nh99bNssk8+OrL6GW4Tj5koZFuPu99iXLRVXQjFb5CAb5LJCDhX5J9' .
'oPO6sUEgwlRp6SXiJAPyCfiPyz+5Qi/SMD2do3+GZ70/iTZ/8UAB43LC3R1Ah1Hw63iyTVgtAs63' .
'wmQHCOnbBqlrup50W8gJEOEoKDoc5saJSUYrO6OsghiKY1gkYTML6dSDyJybEj/dEUjqe/b4kGm0' .
'yQDMctR1Q81F63yre2F3KJk+jV5PAv90YICzrFnpRWcBUEsY5ZJl+2GoP94/u7jHOa5daZiw/KZW' .
'U3lGudf29HaA3vGsv50HgT3wu8QYn7OxRtZ/eNcx8kU5Xvy+K407Eet132mV/PVFPHoTZE7ojd+c' .
'P7D7+tgRh5d9S6i5p2QkEP0XyHPQb5D7Ku3o8t7RkA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

