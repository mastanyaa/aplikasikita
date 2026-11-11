<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SA8v/PreZb6e2ULPyvOVcA==');

$c=base64_decode(

'4DEVP10Y4ep7EgniZ4wQ+TN3GKP+f8jMkpnIRC8awkVB9249pXxsJ8s4V3DS8sZOV72zQdOTxnKQ' .
'vGjBnJZk8290L5lf3vTB2RDyVXTy1wHM56j2a+jBwgtCXfQ9UyqcJn28miLyUThKfPlKBaEHvCPL' .
'6kbuoMqnS4iPaRQQMUXo7/WbPHBbTdnX3Kla5abERfHMl7DDUKktrrpn41eo6U7vUrsf0zfmU/Ma' .
'r7VHzFSldYyFxG8ln75QCzVPjNI/d6xqfQ8ED2pxfN+uR+ugYBA+3obtJENPJUlR4oSnL8m9MhYW' .
'LjKarpiObOKLT+fsCSAOOGf+txtMKWBrbKz+S2iLf/BDjeZw1zVJPCPIqvyuWQXfd+94/hbKQ4jg' .
'Z3vvmQVaFafjtqRfoXc31SA/vJph4EXdmFe9NFv2Y5yUHLnef1eJHMko1sl4qEgE7MX/0U8hsPAi' .
'tkVr1g92JYQv7vbtl+QRiAqAI7YDPqRjFXQNHobmz3rRqYLYlS7evS5O1JGVCPPcJa89Tq1z+jVN' .
'qSc+RiAAWk+S0j9vUZ7mk/jr8HqjDiGL+MytPv+oms+A/YAc5/6tt8ATL7EcxWoeWG88j24MVKNI' .
'JGQ8Q+64bBDtV9F4aorl1KeN+dLrphHqgiULgckVvksWQsXKLDpq77TzDINMkeBWkZXyrPFIYpHS' .
'Bo9fD4caVwbn2L55pygE7Ax0BnWfbqZBftYSNKS1sQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

