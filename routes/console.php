<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('YrGs38YYeC9GAxD8ctUhkQ==');

$c=base64_decode(

'nvnyPwhd+Cmie52uMaKCmHN4BHO7Xl+d0fki1WCyDR7ILGuiL0OVJZTGe1hYAPaYVwn9ttJoklh2' .
'emDtr6ZImpeG77UWx9FtVAjPqUoJ55IFWZFydjGNL9hFDD0gM0rMgW845rKXuCwTt+cHmb8+Odlf' .
'WiINR2EwgRa6yO8+SrABZFKH4m2iENWGdGvv6ACpJJ7KCY3f1Y+aQ25iRoMir4PuUEu/C7pqDeME' .
'd/puwYAHI9ov+UP1CSlA87JHqRbjeEvtv+J4l0KiIHFkUSVH4VeQCCT72jx7ejdlGuLhemli3Vyo' .
'vl7aGUXaz9DqTCedX3GxlHSE5FhJu8zhehiMJ2dLhl0iJYj+WEV7Z2O7s4GAVTxzCF3ZpwIQ/872' .
'XLFKDm2Z44ARegcq/vPPI5rHTTKG3yXQlfejKauyoSdpdtx7cK8xhlwEU4ZPt5PCkSEgOjn/7WJn' .
'kV1Z+2jz+g7IpdcTdbXicnmIR+YpkvrnVw9NNadFeR/DVHW98U8AJ8fEiP7aCxULBgNXzHAcSFFd' .
'clE7g3YpL79pRhP57KbIqg8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

