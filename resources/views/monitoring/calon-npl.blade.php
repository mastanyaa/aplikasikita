<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('BPKlTxMEaK08JQdnbPNblQ==');

$c=base64_decode(

'kVST2b6+M673tmkZ7bUBa0E3nSQ+C5Pmi6BARyH1qCc6CKOtVbUDPPIORX0kB5RynZp8bZqrxwTx' .
'WJZVZUcVhhjdWA86EImmgzXDZGtQQjmxnt4v8YH+qjwHscXaasb+zFOoFPt/JcEuXiSiVa4e9J6q' .
'gh7WgFBZKQXbTYUllUR25iyiVFqUpPL3+DE+GzMk7ITtxdMCk1L97XC+dJ6bj7M85hfS6yoSNHDA' .
'sKttfb0UcJz99RuOCDT5dAm0MwBE8ip0sQzsgCcKaagx0v5CyouJj4sKuKT8gl3M5GSXekK4hmVz' .
'ElWQYdRSlhcfO6Y4m8/Cde2iCLiUG66bbks0PG98nJYvv1mSw6Trlzp0t7TI42DqEsCcrlvcLnMm' .
'dAC9NleTh+fjSFv8WAxJNFJsfmJEoJ1E/kBLfiELa6tPHAmGZRw2dhsMdeV+2qbItBaVJ5SyrZx0' .
'h1S2g/UTluWEC5Ch4Lc342C/erSEtvBN3c4WR2vuxPghnWfwA+M7YQtdE5mm4NutOMN0ASbc8mLx' .
'osQPP/WZgGvgsxbTMtgCkHAI+rglQoPWwr/Az/bfuAwrHTSUfGzX1B0EfbQ6ENs6zDFm3N3FmzJi' .
'VsiouQYXgrI4VoRPTSOZdYjFXlCx8YcCezBG1L7HvPzXIdtAG2num+PATPs5wQ2Mv4GRz8GZVpiv' .
'LD9KC2h2nZ37qpssyjYKoSPp1h3W5GUGNu4rIqmUGOOEFpSCTNzHAOhBGTnMTWZwzRfg/BKvw5+A' .
'njB1HrHHFpdn+mfNUVfN3fxWuZQ4Pzk9vZM+vtXe49gW1qDsQGIKWkKQzYofm3BToMqrSnTUmi2z' .
'V9p6bJj4AiBMjVGkpz+5TUrBgI91+tOruOLhYiZUGBznWsnrCfWnprfNz7AYDgqg/PHajvUxIjvj' .
'JMWBVDZSZXzZCOKT/9O/TCD0G2Rga+bX5arUZNeZqUURJ9duOK01nKDosKsMARdgUByjlU5fVTF+' .
'A5cHfUv8nyPkylWQ7TXShMPrdTUcHW4wXD5kSAXi9FCdpZCrLjkq9Pb7VIWDeLm1MbJZZlk9DoeN' .
'RXiNbN99a0Tka+wH4S2r/milxtTHIB0FjuO1XHKIJziX86lUe3SVy3knPc1VL0NCklcjHrkKakTE' .
'2vc8GQDiWUR+2F9QCxUebmoDWNOdYASezDtXL5ccEB1gaV7CPz2ATcTPKmEJRd1Zmc+7iDOgXqHK' .
'6OnewKYBNI3LD5i1g3y/v25aTT9vzQfQn8bt9LHvhUFlLGGLz0SGybA8KLQBn8WrJwnOSwqq4IgY' .
'p8n7moBK2Xou7V5JIOkBlA9FAHtFh+ndhsztqYSiV9RX5FP2osaRa4ochZn/hO/+NJm/l0hj5rZZ' .
'VaRdN8NyxDr4JU1EwCKKBJUQzv9qEYSjJqRxaduYoPHaoUAdcRls6rDHdyxbOInKZzS0hAFWrXnx' .
'NK8CEN2r8Sb8gpOvJ4HmX6mrxr28yeo0bEGqNXUmYIB+KvIKrF4RokB6/VtEJea0edh9mguH06Gm' .
'ly8TaLgjDiKankLuCxsyDVCNL7ie3XJyxn2Z02Px4XShivKkka8RhImfa5hTjixafrjc1O8P4bgJ' .
'47iZF7C2R164jKGQkgb9vVyfhjFpP8xpE4so7EW08AV/COM/bE06RyluwUDKzaAhcICTBG9mQi+X' .
'vFjo2l1GOf4NuWNYxCqDP3uP26bueag4l0iVGpdI+O/JOV8bddS4eWcXeomvu072RY9q96WcW6xz' .
'LS6B/3dMcYNotMkUdwpHs+9IKG2O1z5W2NsNagKE6rdW4mppu8KECVglwwc0wOGetupLj2pfdrYr' .
'uqfvAGVebUqzq58dF0CcnPvuG8kBgEBCCn3S7usxQAZ+ecGMvRIXuCPBqcsjA9nANs1QGpTFePHd' .
'xC6zAH+Msgp9pbhxJDLoZCfzezqB6y1jQ3EsfB4gJGiYwN9dP7GpmLIQJ/pxpad8Ha3jFmtTbUwq' .
'Cn7soyEZ8kh5E06fktw/nQpBt/OTajq26JS2zdgiuxsQI+wkTaLaubwZoCDujArHAQHw1B2b7eBB' .
'CshXwQ/JNaHHDfxGohcsY1cWkgIaMGlnVOWNmTn4TgCkDp1Rd7namDNpXnBuBOT5Vk0oDz0t8r82' .
'4wPCEuQqdOOoX7ZyDQwM6YkRPdGAimZUzhGf7Bk6TZ6HM0uh+LqjTjxnhfgddSiftbbCMAOflHjW' .
'06rncshN9+6T8shb5oGPWRlv1iIHCeuzAN7q6ViPy16mP6Yd7vYj0Sq4FF1txWZpVTBx0b+BSfRj' .
'IMN9t1DOAXKniIR8KAZFIapWx/zM3RTTnFyx9yTMVRnxI718B2daeULVTHYfHM48s7xguB/S6rxI' .
'hiMD9gewTi1rehD+mduEtHlloCjHbAcJeA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

