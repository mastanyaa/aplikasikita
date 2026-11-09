<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Qiakgl/KGFgzzaPpDSYkLg==');

$c=base64_decode(

'E6yftrNwRj5Vl7Kg5LIm36yeBTfDzxANgjh9ZPwoy2oVVMcTUOT/HrYSs00xMluoZ2IvJ4TDT8Ac' .
'2nBrGjL8gNrFZd+f1jtK2TLr1hCQWejS0cBVcM4YNKn5CJE6+NtsudoF5nE/P0EqQJ75nu36gISH' .
'pqYXIqtKepVeh7kELa2e98SpaUoyQs8vAsWEUguLCz4W32Q93Z8OUdRPdwjbCKaV/cAjfaWi1TXB' .
'rC7RBLJjAqXgplKwGmjloZ83WHSg6rNwQ0+/qqeJ2fcuFc9ORONUtV/dwWyzz85Y0Axf0FMeYkI3' .
'2GXZcS1nqt7EzPxCD0Cune0Zl0OhbOpoLGTqO0OfUbfTiH7j8Xuvh5W7BekkpDVrpubHNG70fVwo' .
'fPQU1Q8Hu0tNPG4ogIwvjI85hM2jH7TTAIQ2C+dR52GdODSUHxlsiEXnWFzHS+NGQlQuM8RE6huj' .
'BGzAQWfszABQ15SW2fH6I0AB43+gFBBWST7WLjsE2Ey8q40hWT6uOw0ALv54CIYLObw6JmzPdwht' .
'mwAFpuApJShGe6/qqRFeFxBmUvB/DvCxIuBrfnT8C18MZm92jkmSqNkdHQOgMawMQXx5v0tJj8WE' .
'oSgeMzyrwqRn9vW/BvBbg9RYHcTNO5y+4Npvb60F2ZJnoJJBTF42jw2W5V0Ec3zxMQsiDnnmWp11' .
'eDuHYcLj33b0la9+NF9Ylgh1Hvd7l5ukgOjKi1BYaPhxvevk1iOhldh2L327mavxTLSfpxWh2syk' .
'bj7hbcOSxpYheiOQYGayMDRvvr0Y6Rt91Z7KiCVDpoLtfjZRNdI48QPfBw5Vv4Ia9ZZ8SJF8chc9' .
'uxBJug+5zNLXr7KfiU2t3bWyxPRW0RQORD/AMx0vpmOJWZezq91BSFQwRN9YJpVvVKdXYzkbq3Fi' .
'H6yvfICgo7LPo3UWVyaQmZIzL4pO5BVUw0Cs2cbBQOtWsN9yD6vnj23U6L5FGFDEC3xzfaxmgP74' .
'qNQARAqhOlt2JY8UKW4jolKOCVkKtMYxHPNJCtw6uXcZEgvaah06lK1o9v+gD/pgv4HppLtBrpDt' .
'hYqWgzP58TXwTB4FZleNAnlSvAaGVGJRZaZWO7iljSPONallvHp3s1ZUfXdnWVdEk9f2OfnoXc/U' .
'/PxT8izwZ92xRH6svTIqWnbo52BMeC0Gbq7/XZWxT2d3df+GreoG+5sfowb520lb9dSUnYBb0zh5' .
'/w01eoAzCPaWOJnadgOTM+e8qyBOHBqzU+ONkxQ50Opi7PKhVP+C01A/PKQFXftR2B4TS9pmgHtD' .
'pbkB9o5ZaNTdlCizgtPdtsF1DOsRBsIa++NOYVaAMxU1At4IgxftpVIAmEx8NgAujGLmTeYaoUnJ' .
'WWfooM6z6BFVA2kIwK92lLP96Yogy7sljfuYEh0meTbqZs0MWjLuqmF4bhSGx7A13ZWClx0vooOs' .
'STqFmZq4I6svAYjK9NfXR8C5/Gyg9j0kUJNqj0laRRmkM7n8luxtBlnSDbbMI2KQaO+9jjVkpVN4' .
'pQ2zVZxqgX8rOxHnNjhii/oRoPKkFwjFF7ihhz0NzuaOk/0q0A+eh6c6MUS6VX2XqqVg4MXULaVf' .
'c4SWKyK3wgdHnjDKxr/gJJn8Dt6OHjmZMLKNT9lFD0x9oRg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

